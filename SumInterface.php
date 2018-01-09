<?php

namespace coinmonkey\interfaces;

interface SumInterface
{
    public function getCurrency() : \coinmonkey\entities\Currency;

    public function getSum();
}
