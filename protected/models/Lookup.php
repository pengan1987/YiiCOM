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

}
