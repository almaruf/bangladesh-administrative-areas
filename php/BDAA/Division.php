<?php 
namespace BDAA;

include_once('Base.php');
include_once('District.php');
include_once('Feed.php');

use BDAA\Base as Base;
use BDAA\Feed as Feed;
use BDAA\District as District;
/**
 * This class represents a Division - the first child on the whole administrative system
 * 
 * @author Md Abdullah Al Maruf <maruf.sylhet@gmail.com>
 * @version 2.4
 
 * @see Abstract.php
 * @see District.php
 */

class Division extends Base {
    
    public $iso_3166_2;
    public $name_bn;
    public $name;
    public $area;
    public $population_density;
    public $sex_ratio;
    public $population_1991;
    public $population_2001;
    public $population_2011;
    public $districts;
    
    public $district_names;

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
    * Get the \BDAA\Feed of District objects for this Division
    *
    * @return   \BDAA\Feed   The Feed of \BDAA\District objects
    */
    public function getDistricts() {
        if (is_array($this->districts) && !$this->districts instanceof Feed) {
            $feed = new Feed();
            $feed->setTotal(count($this->districts))
                ->setRows(count($this->districts))
                ->setType('\BDAA\District');
        
            foreach($this->districts as $disrictName => $districtDetails) {
                $districtDetails['name'] = $disrictName;
                $x = new District($districtDetails);                
                $x->getThanas();
                $feed->addItem($x);
            }
            $this->districts = $feed;
        }
        
        return $this->districts;
    }
    
    public function getDistrictNames() {
        foreach($this->getDistricts()->getItems() as $district) {
            $this->district_names[ $district->getName() ] = $district->getNameBn();
        }
    }
    
    /**
    * Get the ISO 3166_2 code for this Division
    *
    * @return   string 
    */
    public function getIso31662() {
        return $this->iso_3166_2;
    }
    
    /**
    * Alias for getIso31662()
    *
    * @return   string 
    */
    public function getId() {
        return $this->getIso31662();
    }    
    
    /**
    * Get the Division name in English
    *
    * @return   string 
    */
    public function getName() {
        return $this->name;
    }
        
    /**
    * Get the Division name in Bangla
    *
    * @return   string 
    */
    public function getNameBn() {
        return $this->name_bn;
    }
    
    /**
    * Get the total area of the Division in squire kilometre
    *
    * @return   string 
    */
    public function getArea() {
        return $this->area;
    }
    
    /**
    * Get the Division population density per squire kilometre
    *
    * @return   string
    */
    public function getPopulationDensity() {
        return $this->population_density;
    }
    
    /**
    * Get the percentage of male/female 
    *
    * @return   string 
    */
    public function getSexRatio() {
        return $this->sex_ratio;
    }
    
    /**
    * Get the population in 1991
    *
    * @return   string 
    */
    public function getPopulation1991() {
        return $this->population_1991;
    }
    
    /**
    * Get the population in 2001
    *
    * @return   string 
    */
    public function getPopulation2001() {
        return $this->population_2001;
    }
        
    /**
    * Get the population in 2011
    *
    * @return   string 
    */
    public function getPopulation2011() {
        return $this->population_2011;
    }    
}
