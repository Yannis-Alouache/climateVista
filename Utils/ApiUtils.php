<?php

class ApiUtils {
    const API_URL = "https://api.openweathermap.org/";

    public static function validate($httpStatus) {
        if ($httpStatus == 401)
            throw new Exception("Mauvaise clé d'api");
        else if ($httpStatus == 429) 
            throw new Exception("Trop de requête par minute");
    }

    public static function fetch($curl, $query) {
        $url = self::API_URL . $query;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

        $tmpRes = curl_exec($curl);
        $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        
        self::validate($http_status);

        return json_decode($tmpRes, true);

    }
}