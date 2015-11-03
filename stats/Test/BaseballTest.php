<?php
/**
 * Created by PhpStorm.
 * User: joshnykamp
 * Date: 11/3/15
 * Time: 3:27 PM
 */
namespace stats\Test;
use stats\Baseball;

class BaseballTest extends \PHPUnit_Framework_TestCase
{
    public function testCalcAvgEquals()
    {
        $atbats = 389;
        $hits = 129;
        $baseball = new Baseball();
        $result = $baseball->calc_avg($atbats, $hits);
        $expectedresult = $hits/$atbats;
        //comment out this for demo
        //$this->assertEquals($expectedresult, $result);
        $formatexpectedresult = number_format($hits/$atbats, 3);
        $this->assertEquals($formatexpectedresult, $result);
    }
}
