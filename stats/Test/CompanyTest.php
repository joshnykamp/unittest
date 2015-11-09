<?php
/**
 * Created by PhpStorm.
 * User: joshnykamp
 * Date: 11/4/15
 * Time: 8:47 AM
 */

namespace stats\Test;
use stats\Company;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
    public function testGetEmployee() {
        $company = new Company();
        $company->setFirstName('Josh');
        $company->setLastName('Nykamp');
        $employeeName = $company->getEmployeeName();
        //var_dump($employeeName);
        //assert equals needs two values to compare (expected, actual).
        $this->assertEquals('Josh Nykamp', $employeeName);
    }

    public function testGetCompanyAddress() {
        //test the response of fake api
        $company = new Company();
        $company->setCompanyName('Test Company');
        $company->setAddress('1200 Fillmore St');
        $company->setCity('Denver');
        $company->setState('CO');
        $company->setZip('80026');

        $address = $company->getJSONAddress();
        $address = json_decode($address, true);
        $statusCode = $address['status_code'];
        $this->assertEquals(200, $statusCode);
        $this->assertArrayHasKey('data', $address);
    }
}
