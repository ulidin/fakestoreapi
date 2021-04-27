<?php

class App
{


    public static $endpoint = 'https://fakestoreapi.com/products';
    // public static $endpoint = 'http://webacademy.se/fakestore/';


    /*****
     * The Main Method
     */
    public static function main()
    {
        try {
            $array = self::getData();
            self::renderData($array);
        } catch (Exception $error) {
            echo $error->getMessage();
        }
    }

    /*****
     * En klassmetod som hämtar data
     */
    public static function getData()
    {
        $json = @file_get_contents(self::$endpoint);
        if (!$json) {
            throw new Exception('Could not access ' . self::$endpoint);
        }
        return json_decode($json, true);
    }


    public static function getDataImages($url)
    {
        $json = @file_get_contents($url);
        if (!$json) {
            throw new Exception('Could not access ' . $url);
        }
        $imgArray = json_decode($json, true);
        self::renderData($imgArray);
    }

    /*****
     * En klassmetod som renderar data
     */
    public static function renderData($array)
    {
        $getCategory = strtolower(isset($_GET['category'])) ? $_GET['category'] : null;
        iconv(mb_detect_encoding($getCategory, mb_detect_order(), true), "UTF-8", $getCategory);

        $cards = "";
        foreach ($array as $arrayKey) {
            if ($getCategory == $arrayKey['category']) {
                $cards .= "
                <div class='card m-2' style='width: 36rem' style='height: 6rem'>
                <div class='card-body'>
                <h6 class='card-text price-view ml-5 mb-2 p-3 mb-2 bg-secondary text-white'>$arrayKey[title]</h6>
                <img src='$arrayKey[image]' class='card-img-top img-fluid img-thumbnail'>
                <p class='card-text mt-2'>$arrayKey[description]</p>
                </div>
                <p class='card-text price-view ml-5 mb-2 p-3 mb-2 bg-secondary text-white text-center'>
                $ $arrayKey[price]
                </p>
                </div>
                ";
            }
        }
        echo "<h1 class='text-center mb-4'>" . ucfirst($getCategory) . "</h1>" . $cards;
    }
}
