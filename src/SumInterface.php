<?php

namespace coinmonkey\interfaces;

interface AmountInterface
{
    public function getCoin() : \coinmonkey\entities\Coin;

    public function getGivenAmount();
}
