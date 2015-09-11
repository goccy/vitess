// Copyright 2012, Google Inc. All rights reserved.
// Use of this source code is governed by a BSD-style
// license that can be found in the LICENSE file.

package topo

import (
	"bytes"

	"github.com/youtube/vitess/go/bson"
	"github.com/youtube/vitess/go/bytes2"
)

// DO NOT EDIT.
// FILE GENERATED BY BSONGEN.

// MarshalBson bson-encodes ShardReference.
func (shardReference *ShardReference) MarshalBson(buf *bytes2.ChunkedWriter, key string) {
	bson.EncodeOptionalPrefix(buf, bson.Object, key)
	lenWriter := bson.NewLenWriter(buf)

	bson.EncodeString(buf, "Name", shardReference.Name)
	shardReference.KeyRange.MarshalBson(buf, "KeyRange")

	lenWriter.Close()
}

// UnmarshalBson bson-decodes into ShardReference.
func (shardReference *ShardReference) UnmarshalBson(buf *bytes.Buffer, kind byte) {
	switch kind {
	case bson.EOO, bson.Object:
		// valid
	case bson.Null:
		return
	default:
		panic(bson.NewBsonError("unexpected kind %v for ShardReference", kind))
	}
	bson.Next(buf, 4)

	for kind := bson.NextByte(buf); kind != bson.EOO; kind = bson.NextByte(buf) {
		switch bson.ReadCString(buf) {
		case "Name":
			shardReference.Name = bson.DecodeString(buf, kind)
		case "KeyRange":
			shardReference.KeyRange.UnmarshalBson(buf, kind)
		default:
			bson.Skip(buf, kind)
		}
	}
}
