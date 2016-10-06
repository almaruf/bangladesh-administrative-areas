<?php 
namespace BDAA;

include_once('Base.php');
include_once('Thana.php');
include_once('Upazila.php');

use BDAA\Base as Base;
use BDAA\Thana as Thana;
use BDAA\Upazila as Upazila;
/**
 * This class represents a District - the second child on the whole administrative system
 * 
 * @author Md Abdullah Al Maruf <maruf.sylhet@gmail.com>
 * @version 2.4
 
 * @see Base.php
 * @see Upazila.php
 * @see Thana.php
 */

class District extends Base {
    
    public $iso_3166_2;
    public $name;
    public $name_bn;
    public $lat;
    public $lon;
    public $website;
    public $city_corporation_thanas = array();
    public $thanas = array();
    public $upazilas = array();
    
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
    * Get the ISO 3166_2 code as an identifier for this District
    *
    * @return   string
    */
    public function getId() {
        return $this->getIso31662();
    }
        
    /**
    * Get the \BDAA\Feed of Upazila objects for this District
    *
    * @see      Upazila.php
    * @return   \BDAA\Feed   The Feed of \BDAA\Upazila objects
    */
    public function getUpazilas() {
        if (is_array($this->upazilas) && !$this->upazilas instanceof Feed) {
            $feed = new Feed();
            $feed->setTotal(count($this->upazilas))
                ->setRows(count($this->upazilas))
                ->setType('\BDAA\Upazila');
        
            foreach($this->upazilas as $k => $v) {
                $v['name'] = $k;
                $x = new Upazila($v);
                $feed->addItem($x);
            }
            $this->upazilas = $feed;
        }
        
        return $this->upazilas;
    }
      
        
    /**
    * Get the \BDAA\Feed of thana objects for this District. 
    * All the city corporation thanas are returned 
    * in addition to all the Upazilas mapped to thanas.
    * 
    * @see      Thana.php
    * @return   \BDAA\Feed   The array of \BDAA\Thana objects
    */
    public function getThanas() {
        if (is_array($this->thanas) && !$this->thanas instanceof Feed) {
            $feed = new Feed();
            $feed->setTotal(count($this->thanas))
                ->setRows(count($this->thanas))
                ->setType('\BDAA\Thana');
        
            foreach($this->thanas as $k => $v) {
                $v['name'] = $k;
                $x = new Thana($v);
                $feed->addItem($x);
            }
            $this->thanas = $feed;
        }
        
        return $this->thanas;
    }
      
        
    /**
    * Get the \BDAA\Feed of Thana objects for the city corporation
    * 
    * @see      Thana.php
    * @return   \BDAA\Feed   The Feed of \BDAA\Thana objects
    */
    public function getCityCorporationThanas() {
        if (is_array($this->city_corporation_thanas) && !$this->city_corporation_thanas instanceof Feed) {
            $feed = new Feed();
            $feed->setTotal(count($this->city_corporation_thanas))
                ->setRows(count($this->city_corporation_thanas))
                ->setType('\BDAA\Thana');
        
            foreach($this->city_corporation_thanas as $k => $v) {
                $v['name'] = $k;
                $x = new Thana($v);
                $feed->addItem($x);
            }
            $this->city_corporation_thanas = $feed;
        }
        
        return $this->city_corporation_thanas;
    }
        
    /**
    * Get the ISO 3166_2 code for this District
    *
    * @return   string 
    */
    public function getIso31662() {
        return $this->iso_3166_2;
    }
        
    /**
    * Get the name for this District in English
    *
    * @return   string
    */
    public function getName() {
        return $this->name;
    }    
    
    /**
    * Get the name for this District in Bangla
    *
    * @return   string
    */
    public function getNameBn() {
        return $this->name_bn;
    }
        
    /**
    * Get the administrative website for this District
    *
    * @return   string
    */
    public function getWebsite() {
        return $this->website;
    }
    
    /**
    * Get the approximate latitude of the district centre 
    *
    * @return   string 
    */
    public function getLat() {
        return $this->lat;
    }
    /**
    * Alias for getLat()
    *
    * @return   string 
    */
    public function getLatitude() {
        return $this->getLat();
    } 

    /**
    * Get the approximate longitude of the district centre 
    *
    * @return   string 
    */
    public function getLon() {
        return $this->lon;
    }
    /**
    * Alias for getLon()
    *
    * @return   string 
    */
    public function getLongitude() {
        return $this->getLon();
    }    
}
