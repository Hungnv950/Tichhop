<?php
/**
 * Created by PhpStorm.
 * User: haiye_000
 * Date: 12-Nov-16
 * Time: 8:55 PM
 */

namespace frontend\controllers;


class CurlBD
{
    public function get($url) {
        // Get cURL resource

        //  Initiate curl
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);
        curl_close($ch);
        return $result;
    }

}