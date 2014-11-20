<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 18/11/2014
 * Time: 11:57
 */

namespace Web1\StringGenerator;

class PasswordGenerator
{
    const PASSWORD_EASY =0;
    const PASSWORD_MEDIUM =1;
    const PASSWORD_HARD =2;

    /**
     * @var int
     */
    private static $passwordDefaultLenght = 10;
    /**
     * @var string
     */
    private static $passwordCharEasy = 'azertyuiopqsdfghjklmwxcvbn';
    /**
     * @var string
     */
    private static $passwordCharMedium = 'AZERTYUIOPQSDFGHJKLMWXCVBN0123456789';
    /**
     * @var string
     */
    private static $passwordCharHard = '#!$€£+ù=@ç|éè';

    /**
     * @param null $number
     * @param $strength
     *
     * @return string
     *
     * @throws \Exception
     */



    public static function charact($number = null , $strength )
    {
        $char = '';
        if(!in_array($strength, [
            self::PASSWORD_EASY,
            self::PASSWORD_MEDIUM,
            self::PASSWORD_HARD,
        ])){
            throw new \Exception('Bad strength');
        }

        switch($strength) {
            case self::PASSWORD_EASY:
                $char = self::$passwordCharEasy;
                break;
            case self::PASSWORD_MEDIUM;
                $char = self::$passwordCharEasy.self::$passwordCharMedium;
                break;
            case self::PASSWORD_HARD;
                $char = self::$passwordCharEasy.self::$passwordCharMedium.self::$passwordCharHard;
                break;
        }

        //if/else qui permet de ne définir qu'une fois $lenght
        //opérateur ternaire
        $lenght=(is_null($number))
            ? self::$passwordDefaultLenght
            : (0 === (int)$number)
                ? self::$passwordDefaultLenght
                : (int)$number;

       // $letter = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        //$char = 'azertyuiopqsdfghjklmwxcvbn';
        $password='';
        
        for ($i=0; $i<$lenght ; $i++) {
            $password .=substr($char, mt_rand(0, (strlen($char)-1)),1);
          //  $nomberHazard = rand(0, 25);
            //echo $letter[$nomberHazard];
        }
        
    return $password;



    }

}

