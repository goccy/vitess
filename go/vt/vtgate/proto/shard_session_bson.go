// Copyright 2012, Google Inc. All rights reserved.
// Use of this source code is governed by a BSD-style
// license that can be found in the LICENSE file.

package proto

import (
	"bytes"

	"github.com/youtube/vitess/go/bson"
	"github.com/youtube/vitess/go/bytes2"
)

// DO NOT EDIT.
// FILE GENERATED BY BSONGEN.

// MarshalBson bson-encodes ShardSession.
func (shardSession *ShardSession) MarshalBson(buf *bytes2.ChunkedWriter, key string) {
	bson.EncodeOptionalPrefix(buf, bson.Object, key)
	lenWriter := bson.NewLenWriter(buf)

	bson.EncodeString(buf, "Keyspace", shardSession.Keyspace)
	bson.EncodeString(buf, "Shard", shardSession.Shard)
	shardSession.TabletType.MarshalBson(buf, "TabletType")
	bson.EncodeInt64(buf, "TransactionId", shardSession.TransactionId)

	lenWriter.Close()
}

// UnmarshalBson bson-decodes into ShardSession.
func (shardSession *ShardSession) UnmarshalBson(buf *bytes.Buffer, kind byte) {
	switch kind {
	case bson.EOO, bson.Object:
		// valid
	case bson.Null:
		return
	default:
		panic(bson.NewBsonError("unexpected kind %v for ShardSession", kind))
	}
	bson.Next(buf, 4)

	for kind := bson.NextByte(buf); kind != bson.EOO; kind = bson.NextByte(buf) {
		switch bson.ReadCString(buf) {
		case "Keyspace":
			shardSession.Keyspace = bson.DecodeString(buf, kind)
		case "Shard":
			shardSession.Shard = bson.DecodeString(buf, kind)
		case "TabletType":
			shardSession.TabletType.UnmarshalBson(buf, kind)
		case "TransactionId":
			shardSession.TransactionId = bson.DecodeInt64(buf, kind)
		default:
			bson.Skip(buf, kind)
		}
	}
}
