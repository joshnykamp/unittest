<?php
/**
 * Created by PhpStorm.
 * User: joshnykamp
 * Date: 11/4/15
 * Time: 8:42 AM
 */

namespace stats;


class Company
{
    private $firstName;
    private $lastName;
    private $companyName;
    private $address;
    private $city;
    private $state;
    private $zip;

    public function __construct()
    {

    }

    public function getJSONAddress()
    {
        $data = [
                    'companyName' => $this->getCompanyName(),
                    'address' => $this->getAddress(),
                    'city' => $this->getCity(),
                    'state' => $this->getState(),
                    'zip' => $this->getZip()
        ];
        return json_encode(['status_code' => '200', 'success' => 'true', 'data' => $data]);
    }

    public function getEmployeeName()
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param mixed $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

}