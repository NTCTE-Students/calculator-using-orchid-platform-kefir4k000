<?php
namespace App\Services;

class Calculator
{
    public function add($a, $b) { return $a + $b; }
    public function subtract($a, $b) { return $a - $b; }
    public function multiply($a, $b) { return $a * $b; }
    public function divide($a, $b) { return $b != 0 ? $a / $b : 'Ошибка деления на ноль'; }
    public function modulus($a, $b) { return $a % $b; }
    public function intdiv($a, $b) { return intdiv($a, $b); }
    public function power($a, $b) { return pow($a, $b); }
    public function sqrt($a) { return sqrt($a); }
    public function log($a, $base = M_E) { return log($a, $base); }
    public function sin($a) { return sin($a); }
    public function cos($a) { return cos($a); }
    public function tan($a) { return tan($a); }
}
