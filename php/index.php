<?php 
use \BDAA;
echo "<html><head><meta charset='UTF-8'></head>";

existance_check();
$areas = new \BDAA\Areas();
$divisions = $areas->getAllDivisions();

$html = "<ol> --------- Divisions --------- ";
    foreach($divisions->getItems() as $division) {
        $html .= "<li>";
        $html .= br("{$division->getName()}/{$division->getNameBn()} ({$division->getIso31662()})");
        $html .= "Total Area  - " . $division->getArea();
        $html .= co("Population Density  - " . $division->getPopulationDensity());
        $html .= co("Sex Ratio  - " . $division->getSexRatio() . "/100");
        $html .= co("Population (1991)  - " . $division->getPopulation1991());
        $html .= co("Population (2001)  - " . $division->getPopulation2001());
        $html .= co("Population (2011)  - " . $division->getPopulation2011());
        
        $districts = $areas->getDistricts($division->getName());

        $html .= "<ol> -------- Districts (" . $division->getDistricts()->getTotal() . ") -------- ";
        foreach($districts->getItems() as $district) {
            $html .= "<li>";            
            $html .= br("{$district->getName()}/{$district->getNameBn()}");
 
            $website = "<a href='{$district->getWebsite()}'>{$district->getWebsite()}</a>";           
            $googleMapUrl  = "<a target='_blank' href='http://maps.google.com/maps";
            $googleMapUrl .= "?z=12&t=m&q=loc:{$district->getLatitude()}+{$district->getLongitude()}'>Location on map</a>";

            $html .= br("{$district->getIso31662()} $website &nbsp;&nbsp; $googleMapUrl");

            $upazilaNames = null;
            $i = 1;
                foreach($district->getUpazilas()->getItems() as $upazila){
                    $upazilaNames .= "$i. {$upazila->getNameBn()} &nbsp;&nbsp;&nbsp; ";
                    $i++;
                }
            $html .= br("Upazilas (" . $district->getUpazilas()->getTotal() . ") - " . $upazilaNames);
            
            if ($district->getThanas()->getItems()) {
                $thanaNames = null;
                $i = 1;
                foreach($district->getThanas() as $thana){
                    $thanaNames .= "$i. {$thana->getNameBn()} &nbsp;&nbsp;&nbsp; ";
                    $i++;
                }
                $html .= br("Thanas (" . $district->getThanas()->getTotal() . ", a combination of upazila thanas and city corporation thanas if any) - " . $thanaNames);
            }
            
            if ($district->getCityCorporationThanas()) {
                $thanaNames = null;
                $i = 1;
                foreach($district->getCityCorporationThanas()->getItems() as $thana){
                    $thanaNames .= "$i. {$thana->getNameBn()} &nbsp;&nbsp;&nbsp; ";
                    $i++;
                }
                $html .= br("City Corporation Thanas (" . $district->getCityCorporationThanas()->getTotal() . ") - " . $thanaNames);
            }
            $html .= "</li>";
        }
        $html .= "</ol>";
        $html .= "</li>";
        $html .= "<br/> ----------------------- ";
    }
$html .= "</ol>";

echo $html;
echo "</html>";

function br($value){
    return "$value<br/>";
}

function co($value){
    return ", $value";
}

function existance_check() {
    if (!file_exists('data.php')) {
        echo "Data file 'data.php' not found <br/>";  
    }

    if (!file_exists('./BDAA/Base.php')) {
        echo "./BDAA/Base.php not found <br/>";
    }

    if (!file_exists('./BDAA/Division.php')) {
        echo "./BDAA/Division.php not found <br/>";
    }

    if (!file_exists('./BDAA/District.php')) {
        echo "./BDAA/District.php not found <br/>";
    }

    if (!file_exists('./BDAA/Areas.php')) {
        echo "./BDAA/Areas.php not found <br/>";
    }

    if (!file_exists('./BDAA/Thana.php')) {
        echo "./BDAA/Thana.php not found <br/>";
    }

    include_once('./BDAA/Areas.php');
}
