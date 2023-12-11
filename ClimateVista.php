<?php
include_once("./Enum/MapLayer.php");
include_once("./Entity/Weather.php");
include_once("./Utils/WeatherReportsCollection.php");
include_once("./Utils/ApiUtils.php");

class ClimateVista {
    private string $apiKey;
    public $curl;

    public function __construct(string $apiKey) {
        $this->setApiKey($apiKey);
        $this->curl = curl_init();
    }

    public function setApiKey(string $apiKey) : void {
        $this->apiKey = $apiKey;
    }

    public function getLocationCoordinateByCity(string $city, string $limit = "1") {
        $query = "geo/1.0/direct?q=" . $city . "&limit=" . $limit . "&appid=" . $this->apiKey;
        $tmpRes = ApiUtils::fetch($this->curl, $query);
        
        $result = array();
        $result["lat"] = $tmpRes[0]["lat"];
        $result["lon"] = $tmpRes[0]["lon"];
        
        return $result;
    }

    public function getLocationCoordinateByZipCode(string $zipCode, string $countryCode) {
        $query = "geo/1.0/zip?zip=" . $zipCode . "," . $countryCode . "&appid=" . $this->apiKey;
        $tmpRes = ApiUtils::fetch($this->curl, $query);

        $result = array();
        $result["lat"] = $tmpRes["lat"];
        $result["lon"] = $tmpRes["lon"];
        
        return $result;
    }

    public function getWeather(string $lat, string $lon) : Weather {
        $query = "data/2.5/weather?lat=" . $lat . "&lon=" . $lon . "&lang=fr&units=metric&appid=" . $this->apiKey;
        $tmpRes = ApiUtils::fetch($this->curl, $query);
        $result = new Weather($tmpRes);
        
        return $result;
    }

    public function getWeatherByCity(string $city) : Weather {
        $coord = $this->getLocationCoordinateByCity($city);
        return $this->getWeather($coord["lat"], $coord["lon"]);
    }

    public function getWeatherByZipCode(string $zipCode, string $countryCode) : Weather {
        $coord = $this->getLocationCoordinateByZipCode($zipCode, $countryCode);
        return $this->getWeather($coord["lat"], $coord["lon"]);
    }

    public function getWeatherReport(string $lat, string $lon) : WeatherReportsCollection {
        $query = "data/2.5/forecast?lat=" . $lat . "&lon=" . $lon . "&units=metric&lang=fr&appid=" . $this->apiKey;
        $tmpRes = ApiUtils::fetch($this->curl, $query);
        $result = new WeatherReportsCollection($tmpRes);

        return $result;
    }

    public function getWeatherReportByCity(string $city) : WeatherReportsCollection {
        $coord = $this->getLocationCoordinateByCity($city);
        return $this->getWeatherReport($coord["lat"], $coord["lon"]);
    }

    public function getWeatherReportByZipCode(string $zipCode, string $countryCode) : WeatherReportsCollection {
        $coord = $this->getLocationCoordinateByZipCode($zipCode, $countryCode);
        return $this->getWeatherReport($coord["lat"], $coord["lon"]);
    }

    public function getWeatherMap(MapLayer $layer, string $zoomZ, string $zoomX, string $zoomY) : string {
        $url = "https://tile.openweathermap.org/map/" . $layer->value . "/" . $zoomZ . "/" . $zoomX . "/" . $zoomY . ".png?&appid=" . $this->apiKey;
        return $url;
    }
}
