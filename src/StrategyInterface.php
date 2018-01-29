<?php

namespace coinmonkey\interfaces;


interface StrategyInterface
{
    public function __construct(array $exchangers);

    public function makeOrders(CurrencyInterface $currency1, CurrencyInterface $currency2, CurrencyInterface $currency3, $baseSum = 1) : float;

    public function run();
}