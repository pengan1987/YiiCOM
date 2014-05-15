<?php

class Lookup {

    public static function phoneAvaliablity() {
        return array(
            'WestEndStore' => 'West End Store',
            'DowntownStore' => 'Downtown Store',
            'Sold' => 'Sold',
            'Ebay' => 'Ebay / West End Store',
        );
    }

    public static function phoneType() {
        return array(
            'Phone' => 'Phone',
            'pad' => 'Tablet',
            'accesory' => 'Accessories',
        );
    }

    public static function usbType() {
        return array(
            'USB2.0' => 'USB2.0',
            'USB3.0' => 'USB3.0',
        );
    }

    public static function hdType() {
        return array(
            'HDD' => 'HDD',
            'SSD' => 'SSD',
        );
    }

    public static function vgaBrand() {
        return array(
            'Intel' => 'Intel',
            'Nvidia' => 'Nvidia',
            'AMD' => 'AMD',
            'ATI' => 'ATI',
        );
    }

    public static function computerType() {
        return array(
            'Laptop' => 'Laptop',
            'Desktop' => 'Desktop',
            'AllInOne' => 'All In One',
        );
    }

    public static function usbNumber() {
        return array(
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
        );
    }

    public static function computerAvaliablity() {
        return array(
            'WestEndStore' => 'West End Store',
            'DowntownStore' => 'Downtown Store',
            'Sold' => 'Sold',
            'Damaged' => 'Damaged',
        );
    }

    public static function computerEbayAvaliablity() {
        return array(
            'NotOnEbay' => 'Not On eBay',
            'OnEbay' => 'On eBay',
        );
    }

    public static function computerOSBrand() {
        return array(
            'Windows' => 'Windows',
            'OS X' => 'Mac OS X',
        );
    }

    public static function computerCPUBrand() {
        return array(
            'Intel' => 'Intel',
            'AMD' => 'AMD',
        );
    }

    public static function computerOnSale() {
        return array(
            'yes' => 'Yes',
            'no' => 'No',
            '' => 'Not Set',
        );
    }

    public static function computerBrand() {
        return array(
            'Asus' => 'Asus',
            'Acer' => 'Acer',
            'Lenovo' => 'Lenovo',
            'Toshiba' => 'Toshiba',
            'Dell' => 'Dell',
            'HP' => 'HP',
            'Apple' => 'Apple',
            'Sony' => 'Sony',
            'MSI' => 'MSI',
            'Gateway' => 'Gateway',
            'Thinkpad' => 'Thinkpad',
            'LG' => 'LG',
            'Fujitsu' => 'Fujitsu',
            'Samsung' => 'Samsung',
            
        );
    }

    public static function computerOSVersion() {
        return array(
            'XP Pro' => 'XP Pro',
            'Vista Business' => 'Vista Business',
            'Vista Home Premium' => 'Vista Home Premium',
            '7 Home Premium' => '7 Home Premium',
            '7 Pro' => '7 Pro',
            '7 Starter' => '7 Starter',
            '8' => '8',
            '8 Pro' => '8 Pro',
            '8.1' => '8.1',
            '8.1 Pro' => '8.1 Pro',
            '10.7.5' => '10.7.5',
            '10.9.2' => '10.9.2',
        );
    }

}
