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
        //needs to be namespaced class name
        $this->assertInstanceOf('stats\Company', $company);
        $this->assertEquals('Josh Nykamp', $employeeName);
    }

    /**
     * @test
     */
    public function get_json_company_address() {
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
        //this has to be a bool, "true" will fail  unless $this->assertTrue($address['success'] === 'true'); but then assertEquals should be used
        $this->assertTrue($address['success']);
        $this->assertEquals(200, $statusCode);
        $this->assertArrayHasKey('data', $address);
    }
}
