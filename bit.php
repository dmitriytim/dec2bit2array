<?php
class obj  {
    private $container = array();

    public function __construct() {
       $this->container=str_split(decbin(254), 1);
    }

    public function offsetSet($offset, $value) {
    if($offset>31 || $offset<0){
    return null;
    }
                $this->container[$offset] = (bool)$value;   
    }

    public function offsetGet($offset) {
    
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}

$obj = new obj;
print_r($obj);
echo '<br>';
echo $obj->offsetGet(7);
$obj->offsetSet(7,1);
echo '<br>';
print_r($obj);
