<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 19/11/2014
 * Time: 17:49
 */

namespace tests\Web1\StringGenerator;

use Web1\StringGenerator\PasswordGenerator;

/**
 * Class PasswordGeneratorTest
 * @package tests\Web1\StringGenerator
 */
class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @throws \Exception
     */
    public function testGetRandomStringLengthEasy()
    {
        $length = mt_rand(1,10000);
        $password = PasswordGenerator::charact($length, PasswordGenerator::PASSWORD_EASY);

        //assertion pour faire un test
        $this->assertEquals($length,mb_strlen($password));

    }

    /**
     * @throws \Exception
     */
    public function testGetRandomStringLengthMedium()
    {
        $length = mt_rand(1,10000);
        $password = PasswordGenerator::charact($length, PasswordGenerator::PASSWORD_MEDIUM);

        //assertion pour faire un test
        $this->assertEquals($length,mb_strlen($password));
    }

    /**
     * @throws \Exception
     */
    public function testGetRandomStringLengthHard()
    {
        $length = mt_rand(1,10000);
        $password = PasswordGenerator::charact($length, PasswordGenerator::PASSWORD_HARD);

        //assertion pour faire un test
        $this->assertEquals($length,mb_strlen($password));
    }

    /**
     *
     */
    public function testGetRandomStringNotEmpty()
    {
        $password = PasswordGenerator::charact(0);
        $this->assertEmpty($password);

    }
}



