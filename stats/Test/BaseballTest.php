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
    /**
     * @dataProvider providerCalcArgs
     * @covers Baseball::calc_avg
     *
     *
     *
     */
    public function testCalcAvgEquals($atbats, $hits)
    {
        /*if(!is_numeric($atbats)) {
            $avg = "not a number";
            return $avg;
            exit();
        }*/
        $atbats = 389;
        $hits = 129;
        $baseball = new Baseball();
        $result = $baseball->calc_avg($atbats, $hits);
        //$expectedresult = $hits/$atbats;
        //comment out this for demo
        //$this->assertEquals($expectedresult, $result);
        $formatexpectedresult = number_format($hits/$atbats, 3);
        $this->assertEquals($formatexpectedresult, $result);
    }

    public function providerCalcArgs()
    {
        return [
            ['389', '129'],
            ['string', '129'],
            ['389', 'another string']
        ];
    }

    /*public function testCalcHitsAreStrings()
    {
        $atbats = 398;
        $hits = 'wfets';
        $baseball = new Baseball();
        $result = $baseball->calc_avg($atbats, $hits);
        var_dump($result);
        $formatExpectedResult = 0.000;
        $this->assertEquals($formatExpectedResult, $result);
    }*/
}
