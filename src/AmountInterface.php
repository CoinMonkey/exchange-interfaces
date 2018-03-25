<?php

namespace coinmonkey\interfaces;

interface AmountInterface
{
    public function getCoin() : \coinmonkey\interfaces\CoinInterface;

    public function getAmount();
    
    public function getUncertainty();
    
    public function setCoin(CoinInterface $coin);

    public function setAmount($amount);
    
    public function setUncertainty($uncertainty);
}
