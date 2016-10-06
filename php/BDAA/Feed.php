<?php 
namespace BDAA;

include_once('Base.php');
include_once('District.php');

use BDAA\Base as Base;

class Feed extends Base {
    public $type;
    public $start = 0;
    public $rows = 20;
    public $total;
    public $items = array();
    
    public function __construct($options = null){
        parent::__construct($options);
    }
            
    public function hasPrevious(){
        if( ($this->start >= $this->rows) ){
            return true;
        }
    }   
    
    public function hasNext(){
        if( !is_null($this->total) && ($this->start + $this->rows) < $this->total ){
            return true;
        }
    }
    
    public function addItem( $item ){
        $this->items[] = $item;
    }
        
    public function setItems($items = null){
        if(null !== $items){
            $this->items = $items;
        }
        return $this;
    }
    
    public function getItems(){
        return $this->items;
    }
    
    
    public function setType($value){  
        $this->type = $value;
        return $this;
    }
    public function getType(){    
        return $this->type;
    }
    
    
    public function setStart($value){  
        $this->start = $value;
        return $this;
    }
    public function getStart(){    
        return $this->start;
    }
    
    
    public function setTotal($value){  
        $this->total = $value;
        return $this;
    }
    public function getTotal(){    
        return $this->total;
    }
    
    
    public function setRows($value){  
        $this->rows = $value;
        return $this;
    }
    public function getRows(){    
        return $this->rows;
    }    
}
