<?php
namespace BDAA;

include_once('Exception.php');

use BDAA\Exception as Exception;
/**
 * Abstract class to be extended by other classes which takes care of the basic functions of a class
 * 
 * @author Md Abdullah Al Maruf <maruf.sylhet@gmail.com>
 * @version 2.4
 */

 abstract class Base {

    /**
    * Setup process of the child object
    *
    * @param    array  $options     The object properties 
    */
    public function __construct(array $options = null){
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }
    
    public function getFunctionNameFromFieldName($name){
        $parts = explode( '_' , $name );        
        @$newParts = array_map('ucfirst',$parts);        
        return implode($newParts);
    }
    
    public function __set($name, $value){
        $this->$name = $value;
    }
 
    public function __get($name){
        $method = 'get' . $this->getFunctionNameFromFieldName($name);
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid note property');
        }
        return $this->$method();
    }
 
    public function setOptions(array $options){
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }
}
