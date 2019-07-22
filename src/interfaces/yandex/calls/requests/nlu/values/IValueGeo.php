<?php
namespace extas\interfaces\yandex\calls\requests\nlu\values;

use extas\interfaces\yandex\calls\requests\nlu\INLUValue;

/**
 * Interface IValueGeo
 *
 * @package extas\interfaces\yandex\calls\requests\nlu\values
 * @author jeyroik@gmail.com
 */
interface IValueGeo extends INLUValue
{
    const SUBJECT = 'alice.call.request.nlu.value.geo';

    const FIELD__COUNTRY = 'country';
    const FIELD__CITY = 'city';
    const FIELD__HOUSE_NUMBER = 'house_number';
    const FIELD__STREET = 'street';
    const FIELD__FLAT = 'flat';
    const FIELD__LONGITUDE = 'lng';
    const FIELD__LATITUDE = 'lat';
    const FIELD__AIRPORT = 'airport';

    /**
     * @return string
     */
    public function getAirport(): string;

    /**
     * @return string
     */
    public function getCountry(): string;

    /**
     * @return string
     */
    public function getCity(): string;

    /**
     * @return string
     */
    public function getStreet(): string;

    /**
     * @return string
     */
    public function getHouseNumber(): string;

    /**
     * @return string
     */
    public function getFlat(): string;

    /**
     * @return string
     */
    public function getLongitude(): string;

    /**
     * @return string
     */
    public function getLatitude(): string;

    /**
     * @param string $airport
     *
     * @return $this
     */
    public function setAirport(string $airport);

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry(string $country);

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity(string $city);

    /**
     * @param string $street
     *
     * @return $this
     */
    public function setStreet(string $street);

    /**
     * @param string $houseNumber
     *
     * @return $this
     */
    public function setHouseNumber(string $houseNumber);

    /**
     * @param string $flat
     *
     * @return $this
     */
    public function setFlat(string $flat);

    /**
     * @param string $longitude
     *
     * @return $this
     */
    public function setLongitude(string $longitude);

    /**
     * @param string $latitude
     *
     * @return $this
     */
    public function setLatitude(string $latitude);
}
