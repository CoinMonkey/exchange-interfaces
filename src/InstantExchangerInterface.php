<?php

namespace coinmonkey\interfaces;

use coinmonkey\interfaces\CoinInterface;
use coinmonkey\interfaces\OrderInterface;
use coinmonkey\interfaces\AmountInterface;
use coinmonkey\interfaces\OrderInterface as OrderExchange;

interface InstantExchangerInterface
{
    public function getEstimateAmount(AmountInterface $amount, CoinInterface $coin2) : AmountInterface;

    public function getId() : string;

    public function makeDepositAddress(string $clientAddress, AmountInterface $amount, CoinInterface $coin2) : array;

    public function getExchangeStatus($id) : ?int;

    public function getMinAmount(CoinInterface $coin, CoinInterface $coin2) : ?int;

    public function getMaxAmount(CoinInterface $coin, CoinInterface $coin2) : ?int;
}
