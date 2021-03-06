<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: workflow.proto

namespace Vitess\Proto\Workflow {

  class Workflow extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $uuid = null;
    
    /**  @var string */
    public $factory_name = null;
    
    /**  @var string */
    public $name = null;
    
    /**  @var int - \Vitess\Proto\Workflow\WorkflowState */
    public $state = null;
    
    /**  @var string */
    public $data = null;
    
    /**  @var string */
    public $error = null;
    
    /**  @var int */
    public $start_time = null;
    
    /**  @var int */
    public $end_time = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'workflow.Workflow');

      // OPTIONAL STRING uuid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "uuid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING factory_name = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "factory_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING name = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM state = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "state";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Workflow\WorkflowState';
      $descriptor->addField($f);

      // OPTIONAL BYTES data = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "data";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING error = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "error";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 start_time = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "start_time";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 end_time = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "end_time";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <uuid> has a value
     *
     * @return boolean
     */
    public function hasUuid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <uuid> value
     *
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function clearUuid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <uuid> value
     *
     * @return string
     */
    public function getUuid(){
      return $this->_get(1);
    }
    
    /**
     * Set <uuid> value
     *
     * @param string $value
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function setUuid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <factory_name> has a value
     *
     * @return boolean
     */
    public function hasFactoryName(){
      return $this->_has(2);
    }
    
    /**
     * Clear <factory_name> value
     *
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function clearFactoryName(){
      return $this->_clear(2);
    }
    
    /**
     * Get <factory_name> value
     *
     * @return string
     */
    public function getFactoryName(){
      return $this->_get(2);
    }
    
    /**
     * Set <factory_name> value
     *
     * @param string $value
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function setFactoryName( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(3);
    }
    
    /**
     * Clear <name> value
     *
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function clearName(){
      return $this->_clear(3);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(3);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function setName( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <state> has a value
     *
     * @return boolean
     */
    public function hasState(){
      return $this->_has(4);
    }
    
    /**
     * Clear <state> value
     *
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function clearState(){
      return $this->_clear(4);
    }
    
    /**
     * Get <state> value
     *
     * @return int - \Vitess\Proto\Workflow\WorkflowState
     */
    public function getState(){
      return $this->_get(4);
    }
    
    /**
     * Set <state> value
     *
     * @param int - \Vitess\Proto\Workflow\WorkflowState $value
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function setState( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <data> has a value
     *
     * @return boolean
     */
    public function hasData(){
      return $this->_has(5);
    }
    
    /**
     * Clear <data> value
     *
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function clearData(){
      return $this->_clear(5);
    }
    
    /**
     * Get <data> value
     *
     * @return string
     */
    public function getData(){
      return $this->_get(5);
    }
    
    /**
     * Set <data> value
     *
     * @param string $value
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function setData( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <error> has a value
     *
     * @return boolean
     */
    public function hasError(){
      return $this->_has(6);
    }
    
    /**
     * Clear <error> value
     *
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function clearError(){
      return $this->_clear(6);
    }
    
    /**
     * Get <error> value
     *
     * @return string
     */
    public function getError(){
      return $this->_get(6);
    }
    
    /**
     * Set <error> value
     *
     * @param string $value
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function setError( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <start_time> has a value
     *
     * @return boolean
     */
    public function hasStartTime(){
      return $this->_has(7);
    }
    
    /**
     * Clear <start_time> value
     *
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function clearStartTime(){
      return $this->_clear(7);
    }
    
    /**
     * Get <start_time> value
     *
     * @return int
     */
    public function getStartTime(){
      return $this->_get(7);
    }
    
    /**
     * Set <start_time> value
     *
     * @param int $value
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function setStartTime( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <end_time> has a value
     *
     * @return boolean
     */
    public function hasEndTime(){
      return $this->_has(8);
    }
    
    /**
     * Clear <end_time> value
     *
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function clearEndTime(){
      return $this->_clear(8);
    }
    
    /**
     * Get <end_time> value
     *
     * @return int
     */
    public function getEndTime(){
      return $this->_get(8);
    }
    
    /**
     * Set <end_time> value
     *
     * @param int $value
     * @return \Vitess\Proto\Workflow\Workflow
     */
    public function setEndTime( $value){
      return $this->_set(8, $value);
    }
  }
}

