<?php
namespace BDAA;

include_once('Division.php');
include_once('Feed.php');

use BDAA\Division as Division;
use BDAA\Feed as Feed;
/**
 * A class for handling the administrative areas information for Bangladesh.
 * This includes the Divisions, Districts, Upazilas and in some cases Thanas
 * 
 * 
 * @see Division.php
 * @author Md Abdullah Al Maruf <maruf.sylhet@gmail.com>
 * @version 2.4
 *
 * @todo add unions of every Upazilas in next increment
 * @todo add Thanas for every District in future
 */

 
class Areas {
    public $data;
    
    /**
    *  Preparing the \BDAA\Feed of division objects
    */
    public function __construct() {
        $areas = include( realpath( dirname(__FILE__) ) . '/../data.php');
        
        if (is_array($areas) && !$this->data instanceof Feed) {
            $feed = new Feed();
            $feed->setTotal(count($areas))
                ->setRows(count($areas))
                ->setType('\BDAA\Division');
        
            foreach($areas as $divName => $divDetails) {
                $divDetails['name'] = $divName;
                $x = new Division($divDetails);                
                $x->getDistricts();
                $feed->addItem($x);
            }
            $this->data = $feed;
        }
        
        return $this->data;
    }
    

    /**
    *  Get the District objects for the provided Division
    *  
    *  @param   String  $divisionName   The name of the administrative division
    *  @return  \BDAA\Feed   A Feed of \BDAA\District objects
    */   
    public function getDistricts($divisionName = null) {
        $tmp = array();
        foreach($this->data->getItems() as $division) {
            if (null === $divisionName || ($divisionName && !strcasecmp($division->getName(), $divisionName))) { 
                $tmp = array_merge($tmp, $division->getDistricts()->getItems());
            }
        }
        $feed = new Feed();
        return $feed->setTotal(count($tmp))
            ->setRows(count($tmp))
            ->setItems($tmp);
    }

    
    public function getDistrict($name) {
        foreach($this->getDistricts()->getItems() as $district){
            if (! strcasecmp($district->getName(), $name)) return $district;
        }
    }

    /**
    *  Get the division object 
    *  
    *  @param   String  $divisionName   The name of the administrative division
    *  @return  \BDAA\Division
    */
    public function getDivision($divisionName) {
        foreach($this->data->getItems() as $division) {
            if (! strcasecmp($division->getName(), $divisionName)) return $division;
        }
    }
    
    
    /**
    * Get all division objects in an \BDAA\Feed
    *  
    * @return  \BDAA\Feed    A Feed of \BDAA\Division objects
    */
    public function getAllDivisions() {
        return $this->data;
    }
    
    
    /**
    * Get all division names only
    *  
    * @return   Array   An array of Division names only
    */    
    public function getDivisionNames() {        
        $divNames = array();
        foreach($this->data->getItems() as $division) {
            $divNames[] = $division->getName();
        }
        
        return $divNames;
    }
    
    
    /**
    * Get all Division names either for all the Divisions or a specific Division
    *
    * @param    string  $division   specify Division name
    * @return   Array   An array of District names for the provided Division name
    */    
    public function getDistrictNames($divisionName) {
        if (null === $divisionName) {
            throw new InvalidArgumentException("You need to provide the division name as argument.");                
        }
               
        $districtNames = array();           
        if (null !== $divisionName) {
            foreach ($this->data->getItems() as $division) {
                if ($divisionName == $division->getName()) {
                    foreach($division->getDistricts()->getItems() as $district) {
                        $districtNames[] = $district->getName();
                    }
                }

                return $districtNames;
            }            
        }
        
        foreach($this->data->getItems() as $division) {
            foreach($division->getDistricts()->getItems() as $district) {
                $districtNames[] = $district->getName();
            }
        }
        
        return $districtNames;
    }
}
