<?php
declare(strict_types=1);

class Calculator
{
    /**
     * 割り算を行う
     *
     * @param int|float $a
     * @param int|float $b
     * @return float
     * @throws InvalidArgumentException
     */
    public function divide(int|float $a, int|float $b): float
    {
        if ($b === 0) {
            throw new InvalidArgumentException('0 で割ることはできません');
        }

        return $a / $b;
    }
}