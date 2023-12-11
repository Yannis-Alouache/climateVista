<?php

class Weather {
    private array $coord;
    private string $weatherName;
    private string $temp;
    private string $tempMin;
    private string $tempMax;
    private string $pressure;
    private string $humidity;
    private string $seaLevel;
    private string $windSpeed;
    private string $countryCode;
    private string $cityName;

    public function __construct($weatherArray) {
        $this->setCoord($weatherArray["coord"]);
        $this->setWeatherName($weatherArray["weather"][0]["description"]);
        $this->setTemp($weatherArray["main"]["temp"]);
        $this->setTempMin($weatherArray["main"]["temp_min"]);
        $this->setTempMax($weatherArray["main"]["temp_max"]);
        $this->setPressure($weatherArray["main"]["pressure"]);
        $this->setHumidity($weatherArray["main"]["humidity"]);
        if (isset($weatherArray["main"]["sea_level"])) $this->setSeaLevel($weatherArray["main"]["sea_level"]);
        else $this->setSeaLevel("");
        $this->setWindSpeed($weatherArray["wind"]["speed"]);
        $this->setCountryCode($weatherArray["sys"]["country"]);
        $this->setCityName($weatherArray["name"]);
    }

    /**
     * Get the value of coord
     *
     * @return array
     */
    public function getCoord(): array {
        return $this->coord;
    }

    /**
     * Set the value of coord
     *
     * @param array $coord
     *
     * @return self
     */
    public function setCoord(array $coord): self {
        $this->coord = $coord;
        return $this;
    }

    /**
     * Get the value of weatherName
     *
     * @return string
     */
    public function getWeatherName(): string {
        return $this->weatherName;
    }

    /**
     * Set the value of weatherName
     *
     * @param string $weatherName
     *
     * @return self
     */
    public function setWeatherName(string $weatherName): self {
        $this->weatherName = $weatherName;
        return $this;
    }

    /**
     * Get the value of temp
     *
     * @return string
     */
    public function getTemp(): string {
        return $this->temp;
    }

    /**
     * Set the value of temp
     *
     * @param string $temp
     *
     * @return self
     */
    public function setTemp(string $temp): self {
        $this->temp = $temp;
        return $this;
    }

    /**
     * Get the value of tempMin
     *
     * @return string
     */
    public function getTempMin(): string {
        return $this->tempMin;
    }

    /**
     * Set the value of tempMin
     *
     * @param string $tempMin
     *
     * @return self
     */
    public function setTempMin(string $tempMin): self {
        $this->tempMin = $tempMin;
        return $this;
    }

    /**
     * Get the value of tempMax
     *
     * @return string
     */
    public function getTempMax(): string {
        return $this->tempMax;
    }

    /**
     * Set the value of tempMax
     *
     * @param string $tempMax
     *
     * @return self
     */
    public function setTempMax(string $tempMax): self {
        $this->tempMax = $tempMax;
        return $this;
    }

    /**
     * Get the value of pressure
     *
     * @return string
     */
    public function getPressure(): string {
        return $this->pressure;
    }

    /**
     * Set the value of pressure
     *
     * @param string $pressure
     *
     * @return self
     */
    public function setPressure(string $pressure): self {
        $this->pressure = $pressure;
        return $this;
    }

    /**
     * Get the value of humidity
     *
     * @return string
     */
    public function getHumidity(): string {
        return $this->humidity;
    }

    /**
     * Set the value of humidity
     *
     * @param string $humidity
     *
     * @return self
     */
    public function setHumidity(string $humidity): self {
        $this->humidity = $humidity;
        return $this;
    }

    /**
     * Get the value of seaLevel
     *
     * @return string
     */
    public function getSeaLevel(): string {
        return $this->seaLevel;
    }

    /**
     * Set the value of seaLevel
     *
     * @param string $seaLevel
     *
     * @return self
     */
    public function setSeaLevel(string $seaLevel): self {
        $this->seaLevel = $seaLevel;
        return $this;
    }

    /**
     * Get the value of windSpeed
     *
     * @return string
     */
    public function getWindSpeed(): string {
        return $this->windSpeed;
    }

    /**
     * Set the value of windSpeed
     *
     * @param string $windSpeed
     *
     * @return self
     */
    public function setWindSpeed(string $windSpeed): self {
        $this->windSpeed = $windSpeed;
        return $this;
    }

    /**
     * Get the value of countryCode
     *
     * @return string
     */
    public function getCountryCode(): string {
        return $this->countryCode;
    }

    /**
     * Set the value of countryCode
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Get the value of cityName
     *
     * @return string
     */
    public function getCityName(): string {
        return $this->cityName;
    }

    /**
     * Set the value of cityName
     *
     * @param string $cityName
     *
     * @return self
     */
    public function setCityName(string $cityName): self {
        $this->cityName = $cityName;
        return $this;
    }
}