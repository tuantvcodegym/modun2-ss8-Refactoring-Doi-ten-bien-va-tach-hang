<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 25/10/2018
 * Time: 00:02
 */

class Calculator
{
    const ADDITION = '+';
    const SUBTRACTION = '-';
    const MULTIPLICATION = '*';
    const DIVISION = '/';
    public function calculate($firstOpenrand, $secondOpenran, $operator) {
        switch ($operator) {
            case self::ADDITION:
                return $firstOpenrand + $secondOpenran;
            case self::SUBTRACTION:
                return $firstOpenrand - $secondOpenran;
            case self::MULTIPLICATION:
                return $firstOpenrand * $secondOpenran;
            case self::DIVISION:
                if ($secondOpenran != 0) {
                    return $firstOpenrand / $secondOpenran;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo ("Unsupported operation");
        }
    }
}