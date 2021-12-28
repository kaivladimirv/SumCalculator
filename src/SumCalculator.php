<?php

declare(strict_types=1);

namespace OtusPackages;

class SumCalculator
{
    public function calc(int $number1, int $number2): int
    {
        return $number1 + $number2;
    }
}