<?php

class WeatherReport {
    private string $temp;
    private string $tempMin;
    private string $tempMax;
    private string $pressure;
    private string $humidity;
    private string $weatherName;
    private string $windSpeed;

    public function __construct(array $weatherReportData) {
        $this->temp = $weatherReportData["main"]["temp"];
        $this->tempMin = $weatherReportData["main"]["temp_min"];
        $this->tempMax = $weatherReportData["main"]["temp_max"];
        $this->pressure = $weatherReportData["main"]["pressure"];
        $this->humidity = $weatherReportData["main"]["humidity"];
        $this->weatherName = $weatherReportData["weather"][0]["description"];
        $this->windSpeed = $weatherReportData["wind"]["speed"];
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
}