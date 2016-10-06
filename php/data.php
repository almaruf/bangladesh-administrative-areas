<?php 
/*
*   Returns an associative array of administrative divisions which has the following structure
*   
*
*       "Division Name" => array(
*            "iso_3166_2" // ie "BD-A", internationality recognised iso_3166_2 code for the division
*            "name_bn" // division name in Bangla (UTF-8)
*            "area" // in squire kilo meters
*            "population_density" 
*            "sex_ratio" // female to male ratio
*            "population_1991" // population according to census 1991 
*            "population_2001" // population according to census 2001 
*            "population_2011" // population according to census 2011 
*            "districts" => array(
*                "District Name" => array(
*                    "iso_3166_2" // ie. "BD-34", internationality recognised iso_3166_2 code for the district
*                    "name_bn" => "ময়মনসিং", // district name in Bangla (UTF-8)
*                    "lat" => "24.7571096", // approximate latitude for the district center
*                    "lon" => "90.4019898", // approximate longitude for the district center
*                    "website" => "www.mymensingh.gov.bd",  // official website address
*                    "upazilas" => array(
*                        "Amtali" => array(
*                            "name_bn" => "আমতলী", // thana name in Bangla (UTF-8)
*                        ),
*                    ),
*                ),
*            ),
*        )
*   
*
*/
return array(
  "Dhaka" => array(
    "iso_3166_2" => "BD-C", 
    "name_bn" => "ঢাকা", 
    "area" => "31,177.74", 
    "population_density" => "1,502", 
    "sex_ratio" => "103.90", 
    "population_1991" => "32,665,975", 
    "population_2001" => "39,044,716", 
    "population_2011" => "47,424,418", 
    "districts" => array(
        "Mymensingh" => array(
            "iso_3166_2" => "BD-34", 
            "name_bn" => "ময়মনসিং",
            "lat" => "24.7571096",
            "lon" => "90.4019898",
            "website" => "www.mymensingh.gov.bd",
            "upazilas" => array(
                "Bhaluka" => array(
                    "name_bn" => "ভালুকা",
                ),
                "Trishal" => array(
                    "name_bn" => "ত্রিশাল",
                ),
                "Haluaghat" => array(
                    "name_bn" => "হালুয়াঘাট",
                ),
                "Muktagachha" => array(
                    "name_bn" => "মুক্তাগাছা",
                ),
                "Dhobaura" => array(
                    "name_bn" => "ধবারুয়া",
                ),
                "Fulbaria" => array(
                    "name_bn" => "ফুলবাড়িয়া",
                ),
                "Gaffargaon" => array(
                    "name_bn" => "গফরগাঁও",
                ),
                "Gauripur" => array(
                    "name_bn" => "গৌরিপুর",
                ),
                "Ishwarganj" => array(
                    "name_bn" => "ঈশ্বরগঞ্জ",
                ),
                "Mymensingh Sadar" => array(
                    "name_bn" => "ময়মনসিং সদর",
                ),
                "Nandail" => array(
                    "name_bn" => "নন্দাইল",
                ),
                "Phulpur" => array(
                    "name_bn" => "ফুলপুর",
                ),
            ),
        ),
        "Munshiganj" => array(
            "iso_3166_2" => "BD-35", 
            "name_bn" => "মুন্সিগঞ্জ",
            "lat" => "23.5458107",
            "lon" => "90.5291462",
            "website" => "www.munshiganj.gov.bd",
            "upazilas" => array(
                "Lohajang" => array(
                    "name_bn" => "লোহাজং",
                ),
                "Sreenagar" => array(
                    "name_bn" => "শ্রীনগর",
                ),
                "Munshiganj Sadar" => array(
                    "name_bn" => "মুন্সিগঞ্জ সদর",
                ),
                "Sirajdikhan" => array(
                    "name_bn" => "সিরাজদিখান",
                ),
                "Tongibari" => array(
                    "name_bn" => "টঙ্গিবাড়ি",
                ),
                "Gazaria" => array(
                    "name_bn" => "গজারিয়া",
                ),
            ),
        ),
        "Madaripur" => array(
            "iso_3166_2" => "BD-36", 
            "name_bn" => "মাদারীপুর",
            "lat" => "23.164102",
            "lon" => "90.1896805",
            "website" => "www.madaripur.gov.bd",
            "upazilas" => array(
                "Madaripur Sadar" => array(
                    "name_bn" => "মাদারীপুর সদর",
                ),
                "Kalkini" => array(
                    "name_bn" => "কালকিনি",
                ),
                "Rajoir" => array(
                    "name_bn" => "রাজইর",
                ),
                "Shibchar" => array(
                    "name_bn" => "শিবচর",
                ),
            ),
        ),
        "Narayanganj" => array(
            "iso_3166_2" => "BD-40", 
            "name_bn" => "নারায়াণগঞ্জ",
            "lat" => "23.63366",
            "lon" => "90.496482",
            "website" => "www.narayanganj.gov.bd",
            "upazilas" => array(
                "Araihazar" => array(
                    "name_bn" => "আড়াইহাজার",
                ),
                "Sonargaon" => array(
                    "name_bn" => "সোনারগাঁও",
                ),
                "Bandar" => array(
                    "name_bn" => "বান্দার",
                ),
                "Narayanganj Sadar" => array(
                    "name_bn" => "নারায়ানগঞ্জ সদর",
                ),
                "Rupganj" => array(
                    "name_bn" => "রূপগঞ্জ",
                ),
                "Siddirgonj" => array(
                    "name_bn" => "সিদ্ধিরগঞ্জ",
                ),
            ),
        ),
        "Narsingdi" => array(
            "iso_3166_2" => "BD-42", 
            "name_bn" => "নরসিংদী",
            "lat" => "23.932233",
            "lon" => "90.71541",
            "website" => "www.narsingdi.gov.bd",
            "upazilas" => array(
                "Belabo" => array(
                    "name_bn" => "বেলাবো",
                ),
                "Monohardi" => array(
                    "name_bn" => "মনোহরদি",
                ),
                "Narsingdi Sadar" => array(
                    "name_bn" => "নরসিংদী সদর",
                ),
                "Palash" => array(
                    "name_bn" => "পলাশ",
                ),
                "Raipura" => array(
                    "name_bn" => "রায়পুর",
                ),
                "Shibpur" => array(
                    "name_bn" => "শিবপুর",
                ),
            ),
        ),
        "Dhaka" => array(
            "iso_3166_2" => "BD-13", 
            "name_bn" => "ঢাকা",
            "lat" => "23.7115253",
            "lon" => "90.4111451",
            "website" => "www.dhaka.gov.bd",
            "city_corporation_thanas" => array(
                "Adabor" => array(
                    "name_bn" => "আদাবর" ,
                ),
                "Ashulia" => array(
                    "name_bn" => "আশুলিয়া",
                ),
                "Badda" => array(
                    "name_bn" => "বাড্ডা",
                ),
                "Biman Bandar" => array(
                    "name_bn" => "বিমান বন্দর",
                ),
                "Cantonment" => array(
                    "name_bn" => "ক্যান্টনমেন্ট",
                ),
                "Dhanmondi" => array(
                    "name_bn" => "ধানমন্ডি",
                ),
                "Demra" => array(
                    "name_bn" => "ডেমরা",
                ),
                "Kotwali" => array(
                    "name_bn" => "কোতওয়ালি",
                ),
                "Gulshan" => array(
                    "name_bn" => "গুল্‌শান",
                ),
                "Hazaribagh" => array(
                    "name_bn" => "হাজারীবাগ",
                ),
                "Kafrul" => array(
                    "name_bn" => "কাফরুল",
                ),
                "Kolabagan" => array(
                    "name_bn" => "কলাবাগান",
                ),
                "Kamringir Char" => array(
                    "name_bn" => "কামরাঙ্গীর চর",
                ),
                "Khilgaon" => array(
                    "name_bn" => "খিলগাঁও",
                ),
                "Lalbagh" => array(
                    "name_bn" => "লালবাগ",
                ),
                "Mugda" => array(
                    "name_bn" => "মুগদা",
                ),
                "Mirpur" => array(
                    "name_bn" => "মিরপুর",
                ),
                "Mohammadpur" => array(
                    "name_bn" => "মোহাম্মদপুর",
                ),
                "Motijheel" => array(
                    "name_bn" => "মতিঝিল",
                ),
                "Pallabi" => array(
                    "name_bn" => "পল্লবী",
                ),
                "Paltan" => array(
                    "name_bn" => "পল্টন",
                ),
                "Ramna" => array(
                    "name_bn" => "রমনা",
                ),
                "Rampura" => array(
                    "name_bn" => "রামপুরা",
                ),
                "Sabujbagh" => array(
                    "name_bn" => "সবুজবাগ",
                ),
                "Shyampur" => array(
                    "name_bn" => "শ্যামপুর",
                ),
                "Sutrapur" => array(
                    "name_bn" => "সুত্রাপুর",
                ),
                "Tejgaon" => array(
                    "name_bn" => "তেজগাঁও",
                ),
                "UttarKhan" => array(
                    "name_bn" => "উত্তরখান",
                ),
                "Uttara" => array(
                    "name_bn" => "উত্তরা",
                ),
            ),
            "upazilas" => array(
                "Dhamrai" => array(
                    "name_bn" => "ধামরাই",
                ),
                "Dohar" => array(
                    "name_bn" => "দোহার",
                ),
                "Keraniganj" => array(
                    "name_bn" => "কেরানীগঞ্জ",
                ),
                "Nawabganj" => array(
                    "name_bn" => "নবাবগঞ্জ",
                ),
                "Savar" => array(
                    "name_bn" => "সাভার",
                ),
            ),
        ),
        "Netrokona" => array(
            "iso_3166_2" => "BD-13", 
            "name_bn" => "নেত্রকোনা",
            "lat" => "24.870955",
            "lon" => "90.727887",
            "website" => "www.netrokona.gov.bd",
            "upazilas" => array(
                "Kendua" => array(
                    "name_bn" => "কেন্দুয়া",
                ),
                "Atpara" => array(
                    "name_bn" => "আটপাড়া",
                ),
                "Barhatta" => array(
                    "name_bn" => "বরহাট্টা",
                ),
                "Durgapur" => array(
                    "name_bn" => "দুর্গাপুর",
                ),
                "Kalmakanda" => array(
                    "name_bn" => "কলমাকান্দা",
                ),
                "Madan" => array(
                    "name_bn" => "মদন",
                ),
                "Mohanganj" => array(
                    "name_bn" => "মোহনগঞ্জ",
                ),
                "Netrakona Sadar" => array(
                    "name_bn" => "নেত্রকোনা সদর",
                ),
                "Purbadhala" => array(
                    "name_bn" => "পূর্বধলা",
                ),
                "Khaliajuri" => array(
                    "name_bn" => "খালিয়াজুরি",
                ),
            ),
        ),
        "Faridpur" => array(
            "iso_3166_2" => "BD-15", 
            "name_bn" => "ফরিদপুর",
            "lat" => "23.6070822",
            "lon" => "89.8429406",
            "website" => "www.faridpur.gov.bd",
            "upazilas" => array(
                "Faridpur Sadar" => array(
                    "name_bn" => "ফরিদপুর সদর",
                ),
                "Boalmari" => array(
                    "name_bn" => "বোয়ালমারী",
                ),
                "Alfadanga" => array(
                    "name_bn" => "আলফাডাঙ্গা",
                ),
                "Madhukhali" => array(
                    "name_bn" => "মধুখালি",
                ),
                "Bhanga" => array(
                    "name_bn" => "ভাঙ্গা",
                ),
                "Nagarkanda" => array(
                    "name_bn" => "নগরকান্ড",
                ),
                "Charbhadrasan" => array(
                    "name_bn" => "চরভদ্রাসন",
                ),
                "Sadarpur" => array(
                    "name_bn" => "সদরপুর",
                ),
                "Shaltha" => array(
                    "name_bn" => "শালথা",
                ),
            ),
        ),
        "Gopalganj" => array(
            "iso_3166_2" => "BD-17", 
            "name_bn" => "গোপালগঞ্জ",
            "lat" => "23.0050857",
            "lon" => "89.8266059",
            "website" => "www.gopalganj.gov.bd",
            "upazilas" => array(
                "Gopalganj Sadar" => array(
                    "name_bn" => "গোপালগঞ্জ সদর",
                ),
                "Kashiani" => array(
                    "name_bn" => "কাশিয়ানি",
                ),
                "Kotalipara" => array(
                    "name_bn" => "কোটালিপাড়া",
                ),
                "Muksudpur" => array(
                    "name_bn" => "মুকসুদপুর",
                ),
                "Tungipara" => array(
                    "name_bn" => "টুঙ্গিপাড়া",
                ),
            ),
        ),
        "Sherpur" => array(
            "iso_3166_2" => "BD-57", 
            "name_bn" => "শেরপুর",
            "lat" => "25.0204933",
            "lon" => "90.0152966",
            "website" => "www.sherpur.gov.bd",
            "upazilas" => array(
                "Jhenaigati" => array(
                    "name_bn" => "ঝিনাইগাতি",
                ),
                "Nakla" => array(
                    "name_bn" => "নাকলা",
                ),
                "Nalitabari" => array(
                    "name_bn" => "নালিতাবাড়ি",
                ),
                "Sherpur Sadar" => array(
                    "name_bn" => "শেরপুর সদর",
                ),
                "Sreebardi" => array(
                    "name_bn" => "শ্রীবরদি",
                ),
            ),
        ),
        "Shariatpur" => array(
            "iso_3166_2" => "BD-62", 
            "name_bn" => "শরীয়তপুর",
            "lat" => "23.2142627",
            "lon" => "90.3491217",
            "website" => "www.shariatpur.gov.bd",
            "upazilas" => array(
                "Shariatpur Sadar" => array(
                    "name_bn" => "শরীয়তপুর সদর ",
                ),
                "Damudya" => array(
                    "name_bn" => "দামুদিয়া",
                ),
                "Naria" => array(
                    "name_bn" => "নড়িয়া",
                ),
                "Jajira" => array(
                    "name_bn" => "জাজিরা",
                ),
                "Bhedarganj" => array(
                    "name_bn" => "ভেদারগঞ্জ",
                ),
                "Gosairhat" => array(
                    "name_bn" => "গোসাইর হাট ",
                ),
            ),
        ),
        "Tangail" => array(
            "iso_3166_2" => "BD-63", 
            "name_bn" => "টাঙ্গাইল",
            "lat" => "24.2498802",
            "lon" => "89.9145752",
            "website" => "www.tangail.gov.bd",
            "upazilas" => array(
                "Tangail Sadar" => array(
                    "name_bn" => "টাঙ্গাইল সদর",
                ),
                "Sakhipur" => array(
                    "name_bn" => "সখিপুর",
                ),
                "Basail" => array(
                    "name_bn" => "বসাইল",
                ),
                "Madhupur" => array(
                    "name_bn" => "মধুপুর",
                ),
                "Ghatail" => array(
                    "name_bn" => "ঘাটাইল",
                ),
                "Kalihati" => array(
                    "name_bn" => "কালিহাতি",
                ),
                "Nagarpur" => array(
                    "name_bn" => "নগরপুর",
                ),
                "Mirzapur" => array(
                    "name_bn" => "মির্জাপুর",
                ),
                "Gopalpur" => array(
                    "name_bn" => "গোপালপুর",
                ),
                "Delduar" => array(
                    "name_bn" => "দেলদুয়ার",
                ),
                "Bhuapur" => array(
                    "name_bn" => "ভুয়াপুর",
                ),
                "Dhanbari" => array(
                    "name_bn" => "ধানবাড়ি",
                ),
            ),
        ),
        "Gazipur" => array(
            "iso_3166_2" => "BD-18", 
            "name_bn" => "গাজীপুর",
            "lat" => "24.0022858",
            "lon" => "90.4264283",
            "website" => "www.gazipur.gov.bd",
            "upazilas" => array(
                "Gazipur Sadar" => array(
                    "name_bn" => "গাজীপুর সদর",
                ),
                "Joydebpur" => array(
                    "name_bn" => "গাজীপুর সদর",
                ),
                "Kaliakior" => array(
                    "name_bn" => "কালিয়াকৈর",
                ),
                "Kapasia" => array(
                    "name_bn" => "কাপাসিয়া",
                ),
                "Sripur" => array(
                    "name_bn" => "শ্রীপুর",
                ),
                "Kaliganj" => array(
                    "name_bn" => "কালীগঞ্জ",
                ),
                "Tongi" => array(
                    "name_bn" => "টঙ্গি",
                ),
            ),
            ),
        ),
        "Jamalpur" => array(
            "iso_3166_2" => "BD-21", 
            "name_bn" => "জামালপুর",
            "lat" => "24.937533",
            "lon" => "89.937775",
            "website" => "www.jamalpur.gov.bd",
            "upazilas" => array(
                "Dewanganj" => array(
                    "name_bn" => "দেওয়ানগঞ্জ",
                ),
                "Baksiganj" => array(
                    "name_bn" => "বকসিগঞ্জ",
                ),
                "Islampur" => array(
                    "name_bn" => "ইসলামপুর",
                ),
                "Jamalpur Sadar" => array(
                    "name_bn" => "জামালপুর সদর",
                ),
                "Madarganj" => array(
                    "name_bn" => "মাদারগঞ্জ",
                ),
                "Melandaha" => array(
                    "name_bn" => "মেলানদাহা",
                ),
                "Sarishabari" => array(
                    "name_bn" => "সরিষাবাড়ি ",
                ),
                "Narundi Police I.C" => array(
                    "name_bn" => "নারুন্দি",
                ),
            ),
        ),
        "Kishoreganj" => array(
            "iso_3166_2" => "BD-26", 
            "name_bn" => "কিশোরগঞ্জ",
            "lat" => "24.444937",
            "lon" => "90.776575",
            "website" => "www.kishoreganj.gov.bd",
            "upazilas" => array(
                "Astagram" => array(
                    "name_bn" => "অষ্টগ্রাম",
                ),
                "Bajitpur" => array(
                    "name_bn" => "বাজিতপুর",
                ),
                "Bhairab" => array(
                    "name_bn" => "ভৈরব",
                ),
                "Hossainpur" => array(
                    "name_bn" => "হোসেনপুর ",
                ),
                "Itna" => array(
                    "name_bn" => "ইটনা",
                ),
                "Karimganj" => array(
                    "name_bn" => "করিমগঞ্জ",
                ),
                "Katiadi" => array(
                    "name_bn" => "কতিয়াদি",
                ),
                "Kishoreganj Sadar" => array(
                    "name_bn" => "কিশোরগঞ্জ সদর",
                ),
                "Kuliarchar" => array(
                    "name_bn" => "কুলিয়ারচর",
                ),
                "Mithamain" => array(
                    "name_bn" => "মিঠামাইন",
                ),
                "Nikli" => array(
                    "name_bn" => "নিকলি",
                ),
                "Pakundia" => array(
                    "name_bn" => "পাকুন্ডা",
                ),
                "Tarail" => array(
                    "name_bn" => "তাড়াইল",
                ),
            ),
        ),
        "Manikganj" => array(
            "iso_3166_2" => "BD-33", 
            "name_bn" => "মানিকগঞ্জ",
            "lat" => "23.8595961",
            "lon" => "90.0042339",
            "website" => "www.manikganj.gov.bd",
            "upazilas" => array(
                "Manikganj Sadar" => array(
                    "name_bn" => "মানিকগঞ্জ সদর",
                ),
                "Singair" => array(
                    "name_bn" => "সিঙ্গাইর",
                ),
                "Shibalaya" => array(
                    "name_bn" => "শিবালয়",
                ),
                "Saturia" => array(
                    "name_bn" => "সাঠুরিয়া",
                ),
                "Harirampur" => array(
                    "name_bn" => "হরিরামপুর",
                ),
                "Ghior" => array(
                    "name_bn" => "ঘিওর",
                ),
                "Daulatpur" => array(
                    "name_bn" => "দৌলতপুর",
                ),
            ),
        ),
        "Rajbari" => array(
            "iso_3166_2" => "BD-53", 
            "name_bn" => "রাজবাড়ি",
            "lat" => "23.7574305",
            "lon" => "89.6444665",
            "website" => "www.rajbari.gov.bd",
            "upazilas" => array(
                "Baliakandi" => array(
                    "name_bn" => "বালিয়াকান্দি",
                ),
                "Goalandaghat" => array(
                    "name_bn" => "গোয়ালন্দ ঘাট",
                ),
                "Pangsha" => array(
                    "name_bn" => "পাংশা",
                ),
                "Kalukhali" => array(
                    "name_bn" => "কালুখালি",
                ),
                "Rajbari Sadar" => array(
                    "name_bn" => "রাজবাড়ি সদর",
                ),
            ),
        ),
    ),

  "Barisal" => array(
    "iso_3166_2" => "BD-A", 
    "name_bn" => "বরিশাল", 
    "area" => "13,225.20", 
    "population_density" => "613", 
    "sex_ratio" => "96.80", 
    "population_1991" => "7,462,643", 
    "population_2001" => "8,173,718", 
    "population_2011" => "8,325,666", 
    "districts" => array(
        "Jhalokati" => array(
            "iso_3166_2" => "BD-37", 
            "name_bn" => "ঝালকাঠি",
            "lat" => "22.636564",
            "lon" => "90.1932811",
            "website" => "www.jhalakathi.gov.bd",
            "upazilas" => array(
                "Jhalokati Sadar" => array(
                    "name_bn" => "ঝালকাঠি সদর",
                ),
                "Kathalia" => array(
                    "name_bn" => "কাঁঠালিয়া",
                ),
                "Nalchity" => array(
                    "name_bn" => "নালচিতি",
                ),
                "Rajapur" => array(
                    "name_bn" => "রাজাপুর",
                ),
            ),
        ),
        "Pirojpur" => array(
            "iso_3166_2" => "BD-50", 
            "name_bn" => "পিরোজপুর",
            "lat" => "22.5785923",
            "lon" => "89.9694924",
            "website" => "www.pirojpur.gov.bd",
            "upazilas" => array(
                "Bhandaria" => array(
                    "name_bn" => "ভ্যান্ডারিয়া",
                ),
                "Kaukhali" => array(
                    "name_bn" => "কাউখালি",
                ),
                "Mathbaria" => array(
                    "name_bn" => "মাঠবাড়িয়া",
                ),
                "Nazirpur" => array(
                    "name_bn" => "নাজিরপুর",
                ),
                "Nesarabad" => array(
                    "name_bn" => "নেসারাবাদ",
                ),
                "Pirojpur Sadar" => array(
                    "name_bn" => "পিরোজপুর সদর",
                ),
                "Zianagar" => array(
                    "name_bn" => "জিয়ানগর",
                ),
            ),
        ),
        "Barguna" => array(
            "iso_3166_2" => "BD-2", 
            "name_bn" => "বরগুনা",
            "lat" => "22.1569652",
            "lon" => "90.119602",
            "website" => "www.barguna.gov.bd",
            "upazilas" => array(
                "Amtali" => array(
                    "name_bn" => "আমতলী",
                ),
                "Bamna" => array(
                    "name_bn" => "বামনা",
                ),
                "Barguna Sadar" => array(
                    "name_bn" => "বরগুনা সদর",
                ),
                "Betagi" => array(
                    "name_bn" => "বেতাগি",
                ),
                "Patharghata" => array(
                    "name_bn" => "পাথরঘাটা",
                ),
                "Taltali" => array(
                    "name_bn" => "তালতলী",
                ),
            ),
        ),
        "Barisal" => array(
            "iso_3166_2" => "BD-6", 
            "name_bn" => "বরিশাল",
            "lat" => "22.6968431",
            "lon" => "90.366003",
            "website" => "www.barisal.gov.bd",
            "upazilas" => array(
                "Muladi" => array(
                    "name_bn" => "মুলাদি",
                ),
                "Babuganj" => array(
                    "name_bn" => "বাবুগঞ্জ",
                ),
                "Agailjhara" => array(
                    "name_bn" => "আগাইলঝরা",
                ),
                "Barisal Sadar" => array(
                    "name_bn" => "বরিশাল সদর",
                ),
                "Bakerganj" => array(
                    "name_bn" => "বাকেরগঞ্জ",
                ),
                "Banaripara" => array(
                    "name_bn" => "বানাড়িপারা",
                ),
                "Gaurnadi" => array(
                    "name_bn" => "গৌরনদী",
                ),
                "Hizla" => array(
                    "name_bn" => "হিজলা",
                ),
                "Mehendiganj" => array(
                    "name_bn" => "মেহেদিগঞ্জ ",
                ),
                "Wazirpur" => array(
                    "name_bn" => "ওয়াজিরপুর",
                ),
            ),
        ),
        "Bhola" => array(
            "iso_3166_2" => "BD-7", 
            "name_bn" => "ভোলা",
            "lat" => "22.685923",
            "lon" => "90.648179",
            "website" => "www.bhola.gov.bd",
            "upazilas" => array(
                "Bhola Sadar" => array(
                    "name_bn" => "ভোলা সদর",
                ),
                "Burhanuddin" => array(
                    "name_bn" => "বুরহানউদ্দিন",
                ),
                "Char Fasson" => array(
                    "name_bn" => "চর ফ্যাশন",
                ),
                "Daulatkhan" => array(
                    "name_bn" => "দৌলতখান",
                ),
                "Lalmohan" => array(
                    "name_bn" => "লালমোহন",
                ),
                "Manpura" => array(
                    "name_bn" => "মনপুরা",
                ),
                "Tazumuddin" => array(
                    "name_bn" => "তাজুমুদ্দিন",
                ),
            ),
        ),
        "Patuakhali" => array(
            "iso_3166_2" => "BD-51", 
            "name_bn" => "পটুয়াখালী",
            "lat" => "22.3596316",
            "lon" => "90.3298712",
            "website" => "www.patuakhali.gov.bd",
            "upazilas" => array(
                "Bauphal" => array(
                    "name_bn" => "বাউফল",
                ),
                "Dashmina" => array(
                    "name_bn" => "দশমিনা" ,
                ),
                "Galachipa" => array(
                    "name_bn" => "গলাচিপা",
                ),
                "Kalapara" => array(
                    "name_bn" => "কালাপারা",
                ),
                "Mirzaganj" => array(
                    "name_bn" => "মির্জাগঞ্জ",
                ),
                "Patuakhali Sadar" => array(
                    "name_bn" => "পটুয়াখালী সদর",
                ),
                "Dumki" => array(
                    "name_bn" => "ডুমকি",
                ),
                "Rangabali" => array(
                    "name_bn" => "রাঙ্গাবালি",
                ),
            ),
        ),
        ),
    ),

  "Khulna" => array(
    "iso_3166_2" => "BD-D", 
    "name_bn" => "খুলনা", 
    "area" => "22,284.22", 
    "population_density" => "699", 
    "sex_ratio" => "100.00", 
    "population_1991" => "12,688,383", 
    "population_2001" => "14,705,223", 
    "population_2011" => "15,687,759", 
    "districts" => array(
        "Magura" => array(
            "iso_3166_2" => "BD-37", 
            "name_bn" => "মাগুরা",
            "lat" => "23.487337",
            "lon" => "89.419956",
            "website" => "www.magura.gov.bd",
            "upazilas" => array(
                "Magura Sadar" => array(
                    "name_bn" => "মাগুরা সদর",
                ),
                "Mohammadpur" => array(
                    "name_bn" => "মোহাম্মাদপুর",
                ),
                "Shalikha" => array(
                    "name_bn" => "শালিখা",
                ),
                "Sreepur" => array(
                    "name_bn" => "শ্রীপুর",
                ),
            ),
        ),
        "Meherpur" => array(
            "iso_3166_2" => "BD-39", 
            "name_bn" => "মেহেরপুর",
            "lat" => "23.762213",
            "lon" => "88.631821",
            "website" => "www.meherpur.gov.bd",
            "upazilas" => array(
                "angni" => array(
                    "name_bn" => "আংনি",
                ),
                "Mujib Nagar" => array(
                    "name_bn" => "মুজিব নগর",
                ),
                "Meherpur Sadar" => array(
                    "name_bn" => "মেহেরপুর সদর",
                ),
            ),
        ),
        "Narail" => array(
            "iso_3166_2" => "BD-43", 
            "name_bn" => "নড়াইল",
            "lat" => "23.172534",
            "lon" => "89.512672",
            "website" => "www.narail.gov.bd",
            "upazilas" => array(
                "Narail Sadar" => array(
                    "name_bn" => "নড়াইল সদর",
                ),
                "Lohagara" => array(
                    "name_bn" => "লোহাগাড়া",
                ),
                "Kalia" => array(
                    "name_bn" => "কালিয়া",
                ),
            ),
        ),
        "Bagerhat" => array(
            "iso_3166_2" => "BD-5", 
            "name_bn" => "বাগেরহাট",
            "lat" => "22.651568",
            "lon" => "89.785938",
            "website" => "www.bagerhat.gov.bd",
            "upazilas" => array(
                "Bagerhat Sadar" => array(
                    "name_bn" => "বাগেরহাট সদর",
                ),
                "Chitalmari" => array(
                    "name_bn" => "চিতলমাড়ি",
                ),
                "Fakirhat" => array(
                    "name_bn" => "ফকিরহাট",
                ),
                "Kachua" => array(
                    "name_bn" => "কচুয়া",
                ),
                "Mollahat" => array(
                    "name_bn" => "মোল্লাহাট ",
                ),
                "Mongla" => array(
                    "name_bn" => "মংলা",
                ),
                "Morrelganj" => array(
                    "name_bn" => "মরেলগঞ্জ",
                ),
                "Rampal" => array(
                    "name_bn" => "রামপাল",
                ),
                "Sarankhola" => array(
                    "name_bn" => "স্মরণখোলা",
                ),
            ),
        ),
        "Chuadanga" => array(
            "iso_3166_2" => "BD-12", 
            "name_bn" => "চুয়াডাঙ্গা",
            "lat" => "23.6401961",
            "lon" => "88.841841",
            "website" => "www.chuadanga.gov.bd",
            "upazilas" => array(
                "Damurhuda" => array(
                    "name_bn" => "দামুরহুদা",
                ),
                "Chuadanga Sadar" => array(
                    "name_bn" => "চুয়াডাঙ্গা সদর",
                ),
                "Jibannagar" => array(
                    "name_bn" => "জীবন নগর ",
                ),
                "Alamdanga" => array(
                    "name_bn" => "আলমডাঙ্গা",
                ),
            ),
        ),
        "Satkhira" => array(
            "iso_3166_2" => "BD-58", 
            "name_bn" => "সাতক্ষীরা",
            "lat" => "22.7175609",
            "lon" => "89.0724062",
            "website" => "www.satkhira.gov.bd",
            "upazilas" => array(
                "Satkhira Sadar" => array(
                    "name_bn" => "সাতক্ষীরা সদর",
                ),
                "Assasuni" => array(
                    "name_bn" => "আসসাশুনি ",
                ),
                "Debhata" => array(
                    "name_bn" => "দেভাটা",
                ),
                "Tala" => array(
                    "name_bn" => "তালা",
                ),
                "Kalaroa" => array(
                    "name_bn" => "কলরোয়া",
                ),
                "Kaliganj" => array(
                    "name_bn" => "কালীগঞ্জ",
                ),
                "Shyamnagar" => array(
                    "name_bn" => "শ্যামনগর",
                ),
            ),
        ),
        "Jessore" => array(
            "iso_3166_2" => "BD-22", 
            "name_bn" => "যশোর",
            "lat" => "23.16643",
            "lon" => "89.2081126",
            "website" => "www.jessore.gov.bd",
            "upazilas" => array(
                "Abhaynagar" => array(
                    "name_bn" => "অভয়নগর",
                ),
                "Keshabpur" => array(
                    "name_bn" => "কেশবপুর",
                ),
                "Bagherpara" => array(
                    "name_bn" => "বাঘের পাড়া ",
                ),
                "Jessore Sadar" => array(
                    "name_bn" => "যশোর সদর",
                ),
                "Chaugachha" => array(
                    "name_bn" => "চৌগাছা",
                ),
                "Manirampur" => array(
                    "name_bn" => "মনিরামপুর ",
                ),
                "Jhikargachha" => array(
                    "name_bn" => "ঝিকরগাছা",
                ),
                "Sharsha" => array(
                    "name_bn" => "সারশা",
                ),
            ),
        ),
        "Jhenaidah" => array(
            "iso_3166_2" => "BD-23", 
            "name_bn" => "ঝিনাইদহ",
            "lat" => "23.5448176",
            "lon" => "89.1539213",
            "website" => "www.jhenaidah.gov.bd",
            "upazilas" => array(
                "Jhenaidah Sadar" => array(
                    "name_bn" => "ঝিনাইদহ সদর",
                ),
                "Maheshpur" => array(
                    "name_bn" => "মহেশপুর",
                ),
                "Kaliganj" => array(
                    "name_bn" => "কালীগঞ্জ",
                ),
                "Kotchandpur" => array(
                    "name_bn" => "কোট চাঁদপুর ",
                ),
                "Shailkupa" => array(
                    "name_bn" => "শৈলকুপা",
                ),
                "Harinakunda" => array(
                    "name_bn" => "হাড়িনাকুন্দা",
                ),
            ),
        ),
        "Khulna" => array(
            "iso_3166_2" => "BD-27", 
            "name_bn" => "খুলনা",
            "lat" => "22.815774",
            "lon" => "89.568679",
            "website" => "www.khulna.gov.bd",
            "city_corporation_thanas" => array(
                "Khan Jahan Ali" => array(
                    "name_bn" => "খান জাহান আলী",
                ),
                "Daulatpur" => array(
                    "name_bn" => "দৌলতপুর",
                ),
                "Sonadanga" => array(
                    "name_bn" => "সোনাডাঙ্গা",
                ),
                "Khalishpur" => array(
                    "name_bn" => "খালিশপুর",
                ),
            ),
            "upazilas" => array(
                "Terokhada" => array(
                    "name_bn" => "তেরোখাদা",
                ),
                "Batiaghata" => array(
                    "name_bn" => "বাটিয়াঘাটা" , 
                ),
                "Dacope" => array(
                    "name_bn" => "ডাকপে",
                ),
                "Dumuria" => array(
                    "name_bn" => "ডুমুরিয়া",
                ),
                "Dighalia" => array(
                    "name_bn" => "দিঘলিয়া",
                ),
                "Koyra" => array(
                    "name_bn" => "কয়ড়া",
                ),
                "Paikgachha" => array(
                    "name_bn" => "পাইকগাছা",
                ),
                "Phultala" => array(
                    "name_bn" => "ফুলতলা",
                ),
                "Rupsa" => array(
                    "name_bn" => "রূপসা",
                ),
            ),
        ),
        "Kushtia" => array(
            "iso_3166_2" => "BD-30", 
            "name_bn" => "কুষ্টিয়া",
            "lat" => "23.901258",
            "lon" => "89.120482",
            "website" => "www.kushtia.gov.bd",
            "upazilas" => array(
                "Kushtia Sadar" => array(
                    "name_bn" => "কুষ্টিয়া সদর",
                ),
                "Kumarkhali" => array(
                    "name_bn" => "কুমারখালি",
                ),
                "Daulatpur" => array(
                    "name_bn" => "দৌলতপুর",
                ),
                "Mirpur" => array(
                    "name_bn" => "মিরপুর",
                ),
                "Bheramara" => array(
                    "name_bn" => "ভেরামারা",
                ),
                "Khoksa" => array(
                    "name_bn" => "খোকসা",
                ),
            ),
        ),
        ),
    ),

  "Rajshahi" => array(
    "iso_3166_2" => "BD-E", 
    "name_bn" => "রাজশাহী", 
    "area" => "18,153.08", 
    "population_density" => "1,007", 
    "sex_ratio" => "100.40", 
    "population_1991" => "14,212,065", 
    "population_2001" => "16,354,723", 
    "population_2011" => "18,484,858", 
    "districts" => array(
        "Natore" => array(
            "iso_3166_2" => "BD-44", 
            "name_bn" => "নাটোর",
            "lat" => "24.420556",
            "lon" => "89.000282",
            "website" => "www.natore.gov.bd",
            "upazilas" => array(
                "Natore Sadar" => array(
                    "name_bn" => "নাটোর সদর",
                ),
                "Baraigram" => array(
                    "name_bn" => "বড়াই গ্রাম",
                ),
                "Bagatipara" => array(
                    "name_bn" => "বাগাতিপাড়া",
                ),
                "Lalpur" => array(
                    "name_bn" => "লালপুর",
                ),
            ),
        ),
        "Nawabganj" => array(
            "iso_3166_2" => "BD-45", 
            "name_bn" => "নবাবগঞ্জ",
            "lat" => "24.5965034",
            "lon" => "88.2775122",
            "website" => "www.chapainawabganj.gov.bd",
            "upazilas" => array(
                "Bholahat" => array(
                    "name_bn" => "ভোলাহাট",
                ),
                "Gomastapur" => array(
                    "name_bn" => "গোমস্তাপুর",
                ),
                "Nachole" => array(
                    "name_bn" => "নাচোল",
                ),
                "Nawabganj Sadar" => array(
                    "name_bn" => "নবাবগঞ্জ সদর",
                ),
                "Shibganj" => array(
                    "name_bn" => "শিবগঞ্জ",
                ),
            ),
        ),
        "Naogaon" => array(
            "iso_3166_2" => "BD-48", 
            "name_bn" => "নওগাঁ",
            "lat" => "24.80999",
            "lon" => "88.9426646",
            "website" => "www.naogaon.gov.bd",
            "upazilas" => array(
                "Naogaon Sadar" => array(
                    "name_bn" => "নওগাঁ সদর",
                ),
                "Mohadevpur" => array(
                    "name_bn" => "মহাদেবপুর",
                ),
                "Manda" => array(
                    "name_bn" => "মান্দা",
                ),
                "Niamatpur" => array(
                    "name_bn" => "নিয়ামতপুর",
                ),
                "Atrai" => array(
                    "name_bn" => "আত্রাই",
                ),
                "Raninagar" => array(
                    "name_bn" => "রাণীনগর",
                ),
                "Patnitala" => array(
                    "name_bn" => "পেত্নিতলা",
                ),
                "Dhamoirhat" => array(
                    "name_bn" => "ধামইরহাট ",
                ),
                "Sapahar" => array(
                    "name_bn" => "সাপাহার",
                ),
                "Porsha" => array(
                    "name_bn" => "পরশা",
                ),
                "Badalgachhi" => array(
                    "name_bn" => "বাদলগাছি",
                ),
            ),
        ),
        "Pabna" => array(
            "iso_3166_2" => "BD-49", 
            "name_bn" => "পাবনা",
            "lat" => "23.998524",
            "lon" => "89.233645",
            "website" => "www.pabna.gov.bd",
            "upazilas" => array(
                "Atgharia" => array(
                    "name_bn" => "আটঘরিয়া",
                ),
                "Bera" => array(
                    "name_bn" => "বেড়া",
                ),
                "Bhangura" => array(
                    "name_bn" => "ভাঙ্গুরা",
                ),
                "Chatmohar" => array(
                    "name_bn" => "চাটমোহর",
                ),
                "Faridpur" => array(
                    "name_bn" => "ফরিদপুর",
                ),
                "Ishwardi" => array(
                    "name_bn" => "ঈশ্বরদী",
                ),
                "Pabna Sadar" => array(
                    "name_bn" => "পাবনা সদর",
                ),
                "Santhia" => array(
                    "name_bn" => "সাথিয়া",
                ),
                "Sujanagar" => array(
                    "name_bn" => "সুজানগর",
                ),
            ),
        ),
        "Bogra" => array(
            "iso_3166_2" => "BD-3", 
            "name_bn" => "বগুড়া",
            "lat" => "24.8465228",
            "lon" => "89.377755",
            "website" => "www.bogra.gov.bd",
            "upazilas" => array(
                "Adamdighi" => array(
                    "name_bn" => "আদমদিঘী",
                ),
                "Bogra Sadar" => array(
                    "name_bn" => "বগুড়া সদর",
                ),
                "Sherpur" => array(
                    "name_bn" => "শেরপুর",
                ),
                "Dhunat" => array(
                    "name_bn" => "ধুনট",
                ),
                "Dhupchanchia" => array(
                    "name_bn" => "দুপচাচিয়া",
                ),
                "Gabtali" => array(
                    "name_bn" => "গাবতলি",
                ),
                "Kahaloo" => array(
                    "name_bn" => "কাহালু",
                ),
                "Nandigram" => array(
                    "name_bn" => "নন্দিগ্রাম",
                ),
                "Sahajanpur" => array(
                    "name_bn" => "শাহজাহানপুর",
                ),
                "Sariakandi" => array(
                    "name_bn" => "সারিয়াকান্দি",
                ),
                "Shibganj" => array(
                    "name_bn" => "শিবগঞ্জ",
                ),
                "Sonatala" => array(
                    "name_bn" => "সোনাতলা",
                ),
            ),
        ),
        "Joypurhat" => array(
            "iso_3166_2" => "BD-24", 
            "name_bn" => "জয়পুরহাট",
            "lat" => "25.1013336",
            "lon" => "89.0285576",
            "website" => "www.joypurhat.gov.bd",
            "upazilas" => array(
                "Joypurhat Sadar" => array(
                    "name_bn" => "জয়পুরহাট সদর",
                ),
                "Akkelpur" => array(
                    "name_bn" => "আক্কেলপুর",
                ),
                "Kalai" => array(
                    "name_bn" => "কালাই",
                ),
                "Khetlal" => array(
                    "name_bn" => "খেতলাল",
                ),
                "Panchbibi" => array(
                    "name_bn" => "পাঁচবিবি",
                ),
            ),
        ),
        "Sirajganj" => array(
            "iso_3166_2" => "BD-25", 
            "name_bn" => "সিরাজগঞ্জ",
            "lat" => "24.4533978",
            "lon" => "89.7006815",
            "website" => "www.sirajganj.gov.bd",
            "upazilas" => array(
                "Sirajganj Sadar" => array(
                    "name_bn" => "সিরাজগঞ্জ সদর",
                ),
                "Belkuchi" => array(
                    "name_bn" => "বেলকুচি",
                ),
                "Chauhali" => array(
                    "name_bn" => "চৌহালি",
                ),
                "Kamarkhanda" => array(
                    "name_bn" => "কামারখান্দা",
                ),
                "Kazipur" => array(
                    "name_bn" => "কাজীপুর",
                ),
                "Raiganj" => array(
                    "name_bn" => "রায়গঞ্জ",
                ),
                "Shahjadpur" => array(
                    "name_bn" => "শাহজাদপুর",
                ),
                "Tarash" => array(
                    "name_bn" => "তারাশ",
                ),
                "Ullahpara" => array(
                    "name_bn" => "উল্লাপাড়া",
                ),
            ),
        ),
        "Rajshahi" => array(
            "iso_3166_2" => "BD-54", 
            "name_bn" => "রাজশাহী",
            "lat" => "24.3670887",
            "lon" => "88.6016357",
            "website" => "www.rajshahi.gov.bd",
            "city_corporation_thanas" => array(
                "Rajpara" => array(
                    "name_bn" => "রাজপাড়া",
                ),
                "Boalia" => array(
                    "name_bn" => "বোয়ালিয়া",
                ),
                "Shah Mokhdum" => array(
                    "name_bn" => "শাহ মখদুম",
                ),
                "Motihar" => array(
                    "name_bn" => "মতিহার",
                ),
            ),
            "upazilas" => array(
                "Bagha" => array(
                    "name_bn" => "বাঘা",
                ),
                "Bagmara" => array(
                    "name_bn" => "বাগমারা",
                ),
                "Charghat" => array(
                    "name_bn" => "চারঘাট",
                ),
                "Durgapur" => array(
                    "name_bn" => "দুর্গাপুর",
                ),
                "Godagari" => array(
                    "name_bn" => "গোদাগারি",
                ),
                "Mohanpur" => array(
                    "name_bn" => "মোহনপুর",
                ),
                "Paba" => array(
                    "name_bn" => "পবা",
                ),
                "Puthia" => array(
                    "name_bn" => "পুঠিয়া",
                ),
                "Tanore" => array(
                    "name_bn" => "তানোর",
                ),
            ),
        ),
        ),
    ),

  "Rangpur" => array(
    "iso_3166_2" => "BD-F", 
    "name_bn" => "রংপুর", 
    "area" => "16,184.99", 
    "population_density" => "960", 
    "sex_ratio" => "99.80", 
    "population_1991" => "11,997,979", 
    "population_2001" => "13,847,150", 
    "population_2011" => "15,787,758", 
    "districts" => array(
        "Nilphamari" => array(
            "iso_3166_2" => "BD-46", 
            "name_bn" => "নীলফামারী",
            "lat" => "25.931794",
            "lon" => "88.856006",
            "website" => "www.nilphamari.gov.bd",
            "upazilas" => array(
                "Nilphamari Sadar" => array(
                    "name_bn" => "নীলফামারী সদর",
                ),
                "Saidpur" => array(
                    "name_bn" => "সৈয়দপুর",
                ),
                "Jaldhaka" => array(
                    "name_bn" => "জলঢাকা",
                ),
                "Kishoreganj" => array(
                    "name_bn" => "কিশোরগঞ্জ",
                ),
                "Domar" => array(
                    "name_bn" => "ডোমার",
                ),
                "Dimla" => array(
                    "name_bn" => "ডিমলা",
                ),
            ),
        ),
        "Dinajpur" => array(
            "iso_3166_2" => "BD-14", 
            "name_bn" => "দিনাজপুর",
            "lat" => "25.6217061",
            "lon" => "88.6354504",
            "website" => "www.dinajpur.gov.bd",
            "upazilas" => array(
                "Birampur" => array(
                    "name_bn" => "বিরামপুর",
                ),
                "Birganj" => array(
                    "name_bn" => "বীরগঞ্জ",
                ),
                "Biral" => array(
                    "name_bn" => "বিড়াল",
                ),
                "Bochaganj" => array(
                    "name_bn" => "বোচাগঞ্জ",
                ),
                "Chirirbandar" => array(
                    "name_bn" => "চিরিরবন্দর",
                ),
                "Phulbari" => array(
                    "name_bn" => "ফুলবাড়ি",
                ),
                "Ghoraghat" => array(
                    "name_bn" => "ঘোড়াঘাট",
                ),
                "Hakimpur" => array(
                    "name_bn" => "হাকিমপুর",
                ),
                "Kaharole" => array(
                    "name_bn" => "কাহারোল",
                ),
                "Khansama" => array(
                    "name_bn" => "খানসামা",
                ),
                "Dinajpur Sadar" => array(
                    "name_bn" => "দিনাজপুর সদর",
                ),
                "Nawabganj" => array(
                    "name_bn" => "নবাবগঞ্জ",
                ),
                "Parbatipur" => array(
                    "name_bn" => "পার্বতীপুর",
                ),
            ),
        ),
        "Rangpur" => array(
            "iso_3166_2" => "BD-55", 
            "name_bn" => "রংপুর",
            "lat" => "25.7558096",
            "lon" => "89.244462",
            "website" => "www.rangpur.gov.bd",
            "upazilas" => array(
                "Badarganj" => array(
                    "name_bn" => "বদরগঞ্জ",
                ),
                "Mithapukur" => array(
                    "name_bn" => "মিঠাপুকুর",
                ),
                "Gangachara" => array(
                    "name_bn" => "গঙ্গাচরা",
                ),
                "Kaunia" => array(
                    "name_bn" => "কাউনিয়া",
                ),
                "Rangpur Sadar" => array(
                    "name_bn" => "রংপুর সদর",
                ),
                "Pirgachha" => array(
                    "name_bn" => "পীরগাছা",
                ),
                "Pirganj" => array(
                    "name_bn" => "পীরগঞ্জ",
                ),
                "Taraganj" => array(
                    "name_bn" => "তারাগঞ্জ",
                ),
            ),
        ),
        "Thakurgaon" => array(
            "iso_3166_2" => "BD-64", 
            "name_bn" => "ঠাকুরগাঁও",
            "lat" => "26.0336945",
            "lon" => "88.4616834",
            "website" => "www.thakurgaon.gov.bd",
            "upazilas" => array(
                "Thakurgaon Sadar" => array(
                    "name_bn" => "ঠাকুরগাঁও সদর",
                ),
                "Pirganj" => array(
                    "name_bn" => "পীরগঞ্জ",
                ),
                "Baliadangi" => array(
                    "name_bn" => "বালিয়াডাঙ্গি",
                ),
                "Haripur" => array(
                    "name_bn" => "হরিপুর",
                ),
                "Ranisankail" => array(
                    "name_bn" => "রাণীসংকইল",
                ),
            ),
        ),
        "Gaibandha" => array(
            "iso_3166_2" => "BD-19", 
            "name_bn" => "গাইবান্ধা",
            "lat" => "25.328751",
            "lon" => "89.528088",
            "website" => "www.gaibandha.gov.bd",
            "upazilas" => array(
                "Fulchhari" => array(
                    "name_bn" => "ফুলছড়ি",
                ),
                "Gaibandha Sadar" => array(
                    "name_bn" => "গাইবান্ধা সদর",
                ),
                "Gobindaganj" => array(
                    "name_bn" => "গোবিন্দগঞ্জ",
                ),
                "Palashbari" => array(
                    "name_bn" => "পলাশবাড়ী",
                ),
                "Sadullapur" => array(
                    "name_bn" => "সাদুল্যাপুর",
                ),
                "Saghata" => array(
                    "name_bn" => "সাঘাটা",
                ),
                "Sundarganj" => array(
                    "name_bn" => "সুন্দরগঞ্জ",
                ),
            ),
        ),
        "Kurigram" => array(
            "iso_3166_2" => "BD-28", 
            "name_bn" => "কুড়িগ্রাম",
            "lat" => "25.805445",
            "lon" => "89.636174",
            "website" => "www.kurigram.gov.bd",
            "upazilas" => array(
                "Kurigram Sadar" => array(
                    "name_bn" => "কুড়িগ্রাম সদর",
                ),
                "Nageshwari" => array(
                    "name_bn" => "নাগেশ্বরী",
                ),
                "Bhurungamari" => array(
                    "name_bn" => "ভুরুঙ্গামারি",
                ),
                "Phulbari" => array(
                    "name_bn" => "ফুলবাড়ি",
                ),
                "Rajarhat" => array(
                    "name_bn" => "রাজারহাট",
                ),
                "Ulipur" => array(
                    "name_bn" => "উলিপুর",
                ),
                "Chilmari" => array(
                    "name_bn" => "চিলমারি",
                ),
                "Rowmari" => array(
                    "name_bn" => "রউমারি",
                ),
                "Char Rajibpur" => array(
                    "name_bn" => "চর রাজিবপুর",
                ),
            ),
        ),
        "Lalmonirhat" => array(
            "iso_3166_2" => "BD-32", 
            "name_bn" => "লালমনিরহাট",
            "lat" => "26.1266376",
            "lon" => "89.2370511",
            "website" => "www.lalmonirhat.gov.bd",
            "upazilas" => array(
                "Lalmonirhat Sadar" => array(
                    "name_bn" => "লালমনিরহাট সদর",
                ),
                "Aditmari" => array(
                    "name_bn" => "আদিতমারি",
                ),
                "Kaliganj" => array(
                    "name_bn" => "কালীগঞ্জ",
                ),
                "Hatibandha" => array(
                    "name_bn" => "হাতিবান্ধা",
                ),
                "Patgram" => array(
                    "name_bn" => "পাটগ্রাম",
                ),
            ),
        ),
        "Panchagarh" => array(
            "iso_3166_2" => "BD-52", 
            "name_bn" => "পঞ্চগড়",
            "lat" => "26.3411",
            "lon" => "88.5541606",
            "website" => "www.panchagarh.gov.bd",
            "upazilas" => array(
                "Panchagarh Sadar" => array(
                    "name_bn" => "পঞ্চগড় সদর",
                ),
                "Debiganj" => array(
                    "name_bn" => "দেবীগঞ্জ",
                ),
                "Boda" => array(
                    "name_bn" => "বোদা",
                ),
                "Atwari" => array(
                    "name_bn" => "আটোয়ারি",
                ),
                "Tetulia" => array(
                    "name_bn" => "তেতুলিয়া",
                ),
            ),
        ),
        ),
    ),

  "Chittagong" => array(
    "iso_3166_2" => "BD-B", 
    "name_bn" => "চট্টগ্রাম", 
    "area" => "33,908.55", 
    "population_density" => "831", 
    "sex_ratio" => "96.10", 
    "population_1991" => "20,522,908", 
    "population_2001" => "24,290,384", 
    "population_2011" => "28,423,019", 
    "districts" => array(
        "Noakhali" => array(
            "iso_3166_2" => "BD-47", 
            "name_bn" => "নোয়াখালী",
            "lat" => "22.869563",
            "lon" => "91.099398",
            "website" => "www.noakhali.gov.bd",
            "upazilas" => array(
                "Noakhali Sadar" => array(
                    "name_bn" => "নোয়াখালী সদর",
                ),
                "Begumganj" => array(
                    "name_bn" => "বেগমগঞ্জ",
                ),
                "Chatkhil" => array(
                    "name_bn" => "চাটখিল",
                ),
                "Companyganj" => array(
                    "name_bn" => "কোম্পানীগঞ্জ",
                ),
                "Shenbag" => array(
                    "name_bn" => "শেনবাগ",
                ),
                "Hatia" => array(
                    "name_bn" => "হাতিয়া",
                ),
                "Kobirhat" => array(
                    "name_bn" => "কবিরহাট ",
                ),
                "Sonaimuri" => array(
                    "name_bn" => "সোনাইমুরি",
                ),
                "Suborno Char" => array(
                    "name_bn" => "সুবর্ণ চর ",
                ),
            ),
        ),
        "Bandarban" => array(
            "iso_3166_2" => "BD-1", 
            "name_bn" => "বান্দরবান",
            "lat" => "22.1953275",
            "lon" => "92.2183773",
            "website" => "www.bandarban.gov.bd",
            "upazilas" => array(
                "Bandarban Sadar" => array(
                    "name_bn" => "বান্দরবন সদর",
                ),
                "Thanchi" => array(
                    "name_bn" => "থানচি",
                ),
                "Lama" => array(
                    "name_bn" => "লামা",
                ),
                "Naikhongchhari" => array(
                    "name_bn" => "নাইখংছড়ি ",
                ),
                "Ali kadam" => array(
                    "name_bn" => "আলী কদম",
                ),
                "Rowangchhari" => array(
                    "name_bn" => "রউয়াংছড়ি ",
                ),
                "Ruma" => array(
                    "name_bn" => "রুমা",
                ),
            ),
        ),
        "Brahmanbaria" => array(
            "iso_3166_2" => "BD-4", 
            "name_bn" => "ব্রাহ্মণবাড়িয়া",
            "lat" => "23.9570904",
            "lon" => "91.1119286",
            "website" => "www.brahmanbaria.gov.bd",
            "upazilas" => array(
                "Brahmanbaria Sadar" => array(
                    "name_bn" => "রাহ্মণবাড়িয়া সদর" ,
                ),
                "Ashuganj" => array(
                    "name_bn" => "আশুগঞ্জ",
                ),
                "Nasirnagar" => array(
                    "name_bn" => "নাসির নগর",
                ),
                "Nabinagar" => array(
                    "name_bn" => "নবীনগর",
                ),
                "Sarail" => array(
                    "name_bn" => "সরাইল",
                ),
                "Shahbazpur" => array(
                    "name_bn" => "শাহবাজপুর টাউন",
                ),
                "Kasba" => array(
                    "name_bn" => "কসবা",
                ),
                "Akhaura" => array(
                    "name_bn" => "আখাউরা",
                ),
                "Bancharampur" => array(
                    "name_bn" => "বাঞ্ছারামপুর",
                ),
                "Bijoynagar" => array(
                    "name_bn" => "বিজয় নগর",
                ),
            ),

        ),
        "Comilla" => array(
            "iso_3166_2" => "BD-8", 
            "name_bn" => "কুমিল্লা",
            "lat" => "23.4682747",
            "lon" => "91.1788135",
            "website" => "www.comilla.gov.bd",
            "upazilas" => array(
                "Barura" => array(
                    "name_bn" => "বড়ুরা",
                ),
                "Brahmanpara" => array(
                    "name_bn" => "ব্রাহ্মণপাড়া",
                ),
                "Burichong" => array(
                    "name_bn" => "বুড়িচং",
                ),
                "Chandina" => array(
                    "name_bn" => "চান্দিনা",
                ),
                "Chauddagram" => array(
                    "name_bn" => "চৌদ্দগ্রাম",
                ),
                "Daudkandi" => array(
                    "name_bn" => "দাউদকান্দি",
                ),
                "Debidwar" => array(
                    "name_bn" => "দেবীদ্বার",
                ),
                "Homna" => array(
                    "name_bn" => "হোমনা",
                ),
                "Comilla Sadar" => array(
                    "name_bn" => "কুমিল্লা সদর",
                ),
                "Laksam" => array(
                    "name_bn" => "লাকসাম",
                ),
                "Monohorgonj" => array(
                    "name_bn" => "মনোহরগঞ্জ",
                ),
                "Meghna" => array(
                    "name_bn" => "মেঘনা",
                ),
                "Muradnagar" => array(
                    "name_bn" => "মুরাদনগর",
                ),
                "Nangalkot" => array(
                    "name_bn" => "নাঙ্গালকোট",
                ),
                "Comilla Sadar South" => array(
                    "name_bn" => "কুমিল্লা সদর দক্ষিণ",
                ),
                "Titas" => array(
                    "name_bn" => "তিতাস",
                ),
            ),
        ),
        "Chandpur" => array(
            "iso_3166_2" => "BD-9", 
            "name_bn" => "চাঁদপুর",
            "lat" => "23.2332585",
            "lon" => "90.6712912",
            "website" => "www.chandpur.gov.bd",
            "upazilas" => array(
                "Chandpur Sadar" => array(
                    "name_bn" => "চাঁদপুর সদর",
                ),
                "Faridganj" => array(
                    "name_bn" => "ফরিদগঞ্জ",
                ),
                "Haimchar" => array(
                    "name_bn" => "হাইমচর",
                ),
                "Haziganj" => array(
                    "name_bn" => "হাজীগঞ্জ",
                ),
                "Kachua" => array(
                    "name_bn" => "কচুয়া",
                ),
                "Matlab Uttar" => array(
                    "name_bn" => "মতলব উত্তর",
                ),
                "Matlab Dakkhin" => array(
                    "name_bn" => "মতলব দক্ষিণ",
                ),
                "Shahrasti" => array(
                    "name_bn" => "শাহরাস্তি",
                ),
            ),
        ),
        "Chittagong" => array(
            "iso_3166_2" => "BD-10", 
            "name_bn" => "চট্টগ্রাম",
            "lat" => "22.335109",
            "lon" => "91.834073",
            "website" => "www.chittagong.gov.bd",            
            "city_corporation_thanas" => array(
                "Pahartali" => array(
                    "name_bn" => "পাহাড়তলি",
                ),
                "Panchlaish" => array(
                    "name_bn" => "পাচলাইশ",
                ),
                "Kotwali" => array(
                    "name_bn" => "কোতওয়ালি",
                ),
                "Chandgaon" => array(
                    "name_bn" => "চাঁদগাঁও",
                ),
                "Bandar" => array(
                    "name_bn" => "বন্দর",
                ),
                "Double Mooring" => array(
                    "name_bn" => "ডাবলমুরিং",
                ),
                "Halishohor" => array(
                    "name_bn" => "হালিশহর",
                ),
                "Karnafuly" => array(
                    "name_bn" => "কর্ণফুলি",
                ),
                "Bakoliya" => array(
                    "name_bn" => "বাকলিয়া",
                ),
                "Baizid" => array(
                    "name_bn" => "বাইজিদ",
                ),
                "Patenga" => array(
                    "name_bn" => "পতেঙ্গা",
                ),
                "Khulshi" => array(
                    "name_bn" => "খুলশি",
                ),
                "Bondor" => array(
                    "name_bn" => "বন্দর",
                ),
                "Akbor Sha" => array(
                    "name_bn" => "আকবর শাহ",
                ),
                "EPZ" => array(
                    "name_bn" => "ইপিজেড",
                ),
                "Chaowkbazar" => array(
                    "name_bn" => "চকবাজার",
                ),
                "Zorargonj" => array(
                    "name_bn" => "জরারগঞ্জ",
                ),
            ),
            "upazilas" => array(
                "Anwara" => array(
                    "name_bn" => "আনোয়ারা",
                ),
                "Banshkhali" => array(
                    "name_bn" => "বাশখালি",
                ),
                "Boalkhali" => array(
                    "name_bn" => "বোয়ালখালি",
                ),
                "Chandanaish" => array(
                    "name_bn" => "চন্দনাইশ",
                ),
                "Fatikchhari" => array(
                    "name_bn" => "ফটিকছড়ি",
                ),
                "Hathazari" => array(
                    "name_bn" => "হাঠহাজারী",
                ),
                "Lohagara" => array(
                    "name_bn" => "লোহাগারা",
                ),
                "Mirsharai" => array(
                    "name_bn" => "মিরসরাই",
                ),
                "Patiya" => array(
                    "name_bn" => "পটিয়া",
                ),
                "Rangunia" => array(
                    "name_bn" => "রাঙ্গুনিয়া",
                ),
                "Raozan" => array(
                    "name_bn" => "রাউজান",
                ),
                "Sandwip" => array(
                    "name_bn" => "সন্দ্বীপ",
                ),
                "Satkania" => array(
                    "name_bn" => "সাতকানিয়া",
                ),
                "Sitakunda" => array(
                    "name_bn" => "সীতাকুণ্ড",
                ),
            ),
        ),
        "Cox\"s Bazar" => array(
            "iso_3166_2" => "BD-11", 
            "name_bn" => "কক্স বাজার",
            "lat" => "21.4433259",
            "lon" => "91.9744289",
            "website" => "www.coxsbazar.gov.bd",
            "upazilas" => array(
                "Chakaria" => array(
                    "name_bn" => "চকরিয়া",
                ),
                "Cox\"s Bazar Sadar" => array(
                    "name_bn" => "কক্স বাজার সদর",
                ),
                "Kutubdia" => array(
                    "name_bn" => "কুতুবদিয়া",
                ),
                "Maheshkhali" => array(
                    "name_bn" => "মহেশখালী",
                ),
                "Ramu" => array(
                    "name_bn" => "রামু",
                ),
                "Teknaf" => array(
                    "name_bn" => "টেকনাফ",
                ),
                "Ukhia" => array(
                    "name_bn" => "উখিয়া",
                ),
                "Pekua" => array(
                    "name_bn" => "পেকুয়া",
                ),
            ),
        ),
        "Feni" => array(
            "iso_3166_2" => "BD-16", 
            "name_bn" => "ফেনী",
            "lat" => "23.023231",
            "lon" => "91.3840844",
            "website" => "www.feni.gov.bd",
            "upazilas" => array(
                "Feni Sadar" => array(
                    "name_bn" => "ফেনী সদর",
                ),
                "Chagalnaiya" => array(
                    "name_bn" => "ছাগল নাইয়া",
                ),
                "Daganbhyan" => array(
                    "name_bn" => "দাগানভিয়া",
                ),
                "Parshuram" => array(
                    "name_bn" => "পরশুরাম",
                ),
                "Fhulgazi" => array(
                    "name_bn" => "ফুলগাজি",
                ),
                "Sonagazi" => array(
                    "name_bn" => "সোনাগাজি",
                ),
            ),
        ),
        "Rangamati" => array(
            "iso_3166_2" => "BD-56", 
            "name_bn" => "রাঙ্গামাটি",
            "lat" => "22.6604548",
            "lon" => "92.1679008",
            "website" => "www.rangamati.gov.bd",
            "upazilas" => array(
                "Rangamati Sadar" => array(
                    "name_bn" => "রাঙ্গামাটি সদর",
                ),
                "Belaichhari" => array(
                    "name_bn" => "বেলাইছড়ি",
                ),
                "Bagaichhari" => array(
                    "name_bn" => "বাঘাইছড়ি",
                ),
                "Barkal" => array(
                    "name_bn" => "বরকল",
                ),
                "Juraichhari" => array(
                    "name_bn" => "জুরাইছড়ি",
                ),
                "Rajasthali" => array(
                    "name_bn" => "রাজাস্থলি",
                ),
                "Kaptai" => array(
                    "name_bn" => "কাপ্তাই",
                ),
                "Langadu" => array(
                    "name_bn" => "লাঙ্গাডু",
                ),
                "Nannerchar" => array(
                    "name_bn" => "নান্নেরচর ",
                ),
                "Kaukhali" => array(
                    "name_bn" => "কাউখালি",
                ),
            ),
        ),
        "khagrachhari" => array(
            "iso_3166_2" => "BD-29", 
            "name_bn" => "খাগড়াছড়ি",
            "lat" => "23.119285",
            "lon" => "91.984663",
            "website" => "www.khagrachhari.gov.bd",
            "upazilas" => array(
                "Dighinala" => array(
                    "name_bn" => "দিঘিনালা ",
                ),
                "khagrachhari Sadar" => array(
                    "name_bn" => "খাগড়াছড়ি",
                ),
                "Lakshmichhari" => array(
                    "name_bn" => "লক্ষ্মীছড়ি",
                ),
                "Mahalchhari" => array(
                    "name_bn" => "মহলছড়ি",
                ),
                "Manikchhari" => array(
                    "name_bn" => "মানিকছড়ি",
                ),
                "Matiranga" => array(
                    "name_bn" => "মাটিরাঙ্গা",
                ),
                "Panchhari" => array(
                    "name_bn" => "পানছড়ি",
                ),
                "Ramgarh" => array(
                    "name_bn" => "রামগড়",
                ),
            ),
        ),
        "Lakshmipur" => array(
            "iso_3166_2" => "BD-31", 
            "name_bn" => "লক্ষ্মীপুর",
            "lat" => "22.942477",
            "lon" => "90.841184",
            "website" => "www.lakshmipur.gov.bd",
            "upazilas" => array(                
                "Lakshmipur Sadar" => array(
                    "name_bn" => "লক্ষ্মীপুর সদর",
                ),
                "Raipur" => array(
                    "name_bn" => "রায়পুর",
                ),
                "Ramganj" => array(
                    "name_bn" => "রামগঞ্জ",
                ),
                "Ramgati" => array(
                    "name_bn" => "রামগতি",
                ),
                "Komol Nagar" => array(
                    "name_bn" => "কমল নগর",
                ),
            ),
        ),
        ),
    ),

  "Sylhet" => array(
    "iso_3166_2" => "BD-G", 
    "name_bn" => "সিলেট", 
    "area" => "12,635.22", 
    "population_density" => "779", 
    "sex_ratio" => "99.10", 
    "population_1991" => "6,765,039", 
    "population_2001" => "7,939,343", 
    "population_2011" => "9,910,219", 
    "districts" => array(
        "Sylhet" => array(
            "iso_3166_2" => "BD-60", 
            "name_bn" => "সিলেট",
            "lat" => "24.8915586",
            "lon" => "91.8708646",
            "website" => "www.sylhet.gov.bd",
            "city_corporation_thanas" => array(
                "Kotwali" => array(
                    "name_bn" => "কোতওয়ালি",
                ),
                "Bimanbondar" => array(
                    "name_bn" => "বিমানবন্দর",
                ),
                "Osmani Nagar" => array(
                    "name_bn" => "ওসমানী নগর",
                ),
                "Jalalabad" => array(
                    "name_bn" => "জালালাবাদ",
                ),
                "Maglabazar" => array(
                    "name_bn" => "মগলাবাজার",
                ),
                "South Surma" => array(
                    "name_bn" => "দক্ষিণ সুরমা",
                ),
                "Shahporan" => array(
                    "name_bn" => "শাহপরান",
                ),
            ),
            "upazilas" => array(
                "Sylhet Sadar" => array(
                    "name_bn" => "সিলেট সদর",
                ),
                "Beanibazar" => array(
                    "name_bn" => "বিয়ানিবাজার",
                ),
                "Bishwanath" => array(
                    "name_bn" => "বিশ্বনাথ",
                ),
                "Dakshin Surma" => array(
                    "name_bn" => "দক্ষিণ সুরমা",
                ),
                "Balaganj" => array(
                    "name_bn" => "বালাগঞ্জ",
                ),
                "Companiganj" => array(
                    "name_bn" => "কোম্পানিগঞ্জ",
                ),
                "Fenchuganj" => array(
                    "name_bn" => "ফেঞ্চুগঞ্জ",
                ),
                "Golapganj" => array(
                    "name_bn" => "গোলাপগঞ্জ",
                ),
                "Gowainghat" => array(
                    "name_bn" => "গোয়াইনঘাট",
                ),
                "Jaintiapur" => array(
                    "name_bn" => "জৈন্তাপুর",
                ),
                "Kanaighat" => array(
                    "name_bn" => "কানাইঘাট",
                ),
                "Zakiganj" => array(
                    "name_bn" => "জকিগঞ্জ",
                ),
                "Nobigonj" => array(
                    "name_bn" => "নবীগঞ্জ",
                ),
            ),
        ),
        "Sunamganj" => array(
            "iso_3166_2" => "BD-61", 
            "name_bn" => "সুনামগঞ্জ",
            "lat" => "25.0658042",
            "lon" => "91.3950115",
            "website" => "www.sunamganj.gov.bd",
            "upazilas" => array(
                "Bishwamvarpur" => array(
                    "name_bn" => "বিসশম্ভরপুর",
                ),
                "Chhatak" => array(
                    "name_bn" => "ছাতক",
                ),
                "Derai" => array(
                    "name_bn" => "দিরাই",
                ),
                "Dharampasha" => array(
                    "name_bn" => "ধর্মপাশা",
                ),
                "Dowarabazar" => array(
                    "name_bn" => "দোয়ারাবাজার",
                ),
                "Jagannathpur" => array(
                    "name_bn" => "জগন্নাথপুর",
                ),
                "Jamalganj" => array(
                    "name_bn" => "জামালগঞ্জ",
                ),
                "Sulla" => array(
                    "name_bn" => "শাল্লা",
                ),
                "Sunamganj Sadar" => array(
                    "name_bn" => "সুনামগঞ্জ সদর",
                ),
                "Shanthiganj" => array(
                    "name_bn" => "শান্তিগঞ্জ",
                ),
                "Tahirpur" => array(
                    "name_bn" => "তাহিরপুর",
                ),
            ),
        ),
        "Habiganj" => array(
            "iso_3166_2" => "BD-20", 
            "name_bn" => "হবিগঞ্জ",
            "lat" => "24.374945",
            "lon" => "91.41553",
            "website" => "www.habiganj.gov.bd",
            "upazilas" => array(
                "Ajmiriganj" => array(
                    "name_bn" => "আজমিরিগঞ্জ",
                ),
                "Baniachang" => array(
                    "name_bn" => "বানিয়াচং",
                ),
                "Bahubal" => array(
                    "name_bn" => "বাহুবল",
                ),
                "Chunarughat" => array(
                    "name_bn" => "চুনারুঘাট",
                ),
                "Habiganj Sadar" => array(
                    "name_bn" => "হবিগঞ্জ সদর",
                ),
                "Lakhai" => array(
                    "name_bn" => "লাখাই",
                ),
                "Madhabpur" => array(
                    "name_bn" => "মাধবপুর",
                ),
                "Nabiganj" => array(
                    "name_bn" => "নবীগঞ্জ",
                ),
                "Shaistagonj" => array(
                    "name_bn" => "শায়েস্তাগঞ্জ",
                ),
            ),
        ),
        "Moulvibazar" => array(
            "iso_3166_2" => "BD-52", 
            "name_bn" => "মৌলভীবাজার",
            "lat" => "24.482934",
            "lon" => "91.777417",
            "website" => "www.moulvibazar.gov.bd",
            "upazilas" => array(
                "Moulvibazar Sadar" => array(
                    "name_bn" => "মৌলভীবাজার",
                ),
                "Barlekha" => array(
                    "name_bn" => "বড়লেখা",
                ),
                "Juri" => array(
                    "name_bn" => "জুড়ি",
                ),
                "Kamalganj" => array(
                    "name_bn" => "কমলগঞ্জ",
                ),
                "Kulaura" => array(
                    "name_bn" => "কুলাউরা",
                ),
                "Rajnagar" => array(
                    "name_bn" => "রাজনগর",
                ),
                "Sreemangal" => array(
                    "name_bn" => "শ্রীমঙ্গল",
                ),
            ),
        ),
        ),
    ),

);
