<?php

namespace coinmonkey\interfaces;

interface OperationInterface
{
    //@todo getters and setters
    public function getExchanger() : ExchangerInterface;

    public function getMarket() : string;

    public function getSum() : float;

    public function getRate() : float;

    public function getDeal() : string;
}