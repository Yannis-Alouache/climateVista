<?php 

include_once("./Entity/WeatherReport.php");

class WeatherReportsCollection {
    private array $weatherReports; // type WeatherReport

    public function __construct(array $weathersArray) {
        $this->weatherReports = array();

        foreach ($weathersArray["list"] as $weatherData) {
            array_push($this->weatherReports, new WeatherReport($weatherData));
        }
    }

    /**
     * Get the value of weatherReports
     *
     * @return array
     */
    public function getWeatherReports(): array {
        return $this->weatherReports;
    }

    /**
     * Set the value of weatherReports
     *
     * @param array $weatherReports
     *
     * @return self
     */
    public function setWeatherReports(array $weatherReports): self {
        $this->weatherReports = $weatherReports;
        return $this;
    }
}