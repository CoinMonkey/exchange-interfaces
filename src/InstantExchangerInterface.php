<?php

namespace coinmonkey\interfaces;

use coinmonkey\entities\Coin;
use coinmonkey\entities\Order;
use coinmonkey\entities\Amount;
use coinmonkey\entities\Status;
use coinmonkey\entities\Order as OrderExchange;

interface InstantExchangerInterface
{
    public function getEstimateAmount(Amount $amount, Coin $coin2) : Order;

    public function getId() : string;

    public function makeDepositAddress(string $clientAddress, Amount $amount, Coin $coin2) : array;

    public function getExchangeStatus(OrderExchange $order) : ?integer;
}
