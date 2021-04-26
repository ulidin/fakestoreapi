<?php

class App
{


    public static $endpoint = 'https://fakestoreapi.com/products';


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


    /*****
     * En klassmetod som renderar data
     */
    public static function renderData($array)
    {
        $table = "<table class='table'>
        <tr>
            <th>store category</th>
        </tr>";
        foreach ($array as $store) {
            if ($store['category'] == "men's clothing") {

                $table .= "<tr>
                <td> $store[image] </td>
                </tr>";
            }
        }
        $table .= '</table>';
        echo $table;
    }

    //---------------

    public static function getDataImages($url)
    {
        $json = @file_get_contents($url);
        if (!$json) {
            throw new Exception('Could not access ' . $url);
        }
        $imgArray = json_decode($json, true);
        self::renderImages($imgArray);
    }

    public static function renderImages($array)
    {

        $cards = "";
        foreach ($array as $image) {
            $cards .= "
            <div class='card m-1' style='width: 18rem' style='height: 6rem'>
                <div class='card-body'>
                <h6>$image[title]</h6>
                    <img src='$image[image]' class='card-img-top img-fluid img-thumbnail'>
                    <p class='card-text mt-2'>$image[description]</p>
                    </div>
                    <p class='card-text  ml-5 mb-2 justify-center'>
                    <small class='text-muted'>$image[price] kronor</small>
                    </p>
            </div>
            ";
        }
        echo $cards;
    }
}
