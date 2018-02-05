<?php

namespace coinmonkey\interfaces;

interface AmountInterface
{
    public function getCoin() : \coinmonkey\interfaces\CoinInterface;

    public function getAmount();
}
