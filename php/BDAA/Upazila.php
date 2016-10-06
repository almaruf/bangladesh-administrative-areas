<?php
namespace BDAA;

include_once('Base.php');

use \BDAA\Base as Base;

/**
 * This class represents a Upazila - the third child on the whole administrative system
 * 
 * @author Md Abdullah Al Maruf <maruf.sylhet@gmail.com>
 * @version 2.0 
 * @todo Upazilas consists of Unions, plan is to include all the unions as part of Upazila's in future
 */
 
class Upazila extends Base {
    
    /**
    * The name of the Upazila in English
    */
    public $name;
    
    /**
    * The name of the Upazila in Bangla
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
     * Get the name of the Upazila in English
     *
     * @return  string
     */
    public function getName() {
        return $this->name;
    }
    
    /**
     * Get the name of the Upazila in Bangla
     *
     * @return  string
     */
    public function getNameBn() {
        return $this->name_bn;
    }
}
