<?php
namespace BDAA;

include_once('Base.php');

use \BDAA\Base as Base;

/**
 * This class represents a Thana - the third child on the whole administrative system
 * 
 * @author Md Abdullah Al Maruf <maruf.sylhet@gmail.com>
 * @version 2.0 
 * @todo Thanas for all the districts
 */
 
class Thana extends Base {
    
    /**
    * The name of the Thana in English
    */
    public $name;
    
    /**
    * The name of the Thana in Bangla
    */
    public $name_bn;
    
    /**
    * The setup process of the object
    *
    * @see      Base.php
    * @param    array  $options     The object properties 
    */
    public function __construct($options = null) {
        parent::__construct($options);
    }
   
    /**
     * Get the name of the Thana in English
     *
     * @return  string
     */
    public function getName() {
        return $this->name;
    }
    
    /**
     * Get the name of the Thana in Bangla
     *
     * @return  string
     */
    public function getNameBn() {
        return $this->name_bn;
    }
}
