<?php

namespace coinmonkey\interfaces;

use coinmonkey\entities\Currency;
use coinmonkey\entities\Order;
use coinmonkey\entities\Sum;
use coinmonkey\entities\Status;
use coinmonkey\entities\Order as OrderExchange;

interface InstantExchangerInterface
{
    public function getEstimateAmount(Sum $sum, Currency $currency2) : Order;

    public function getId() : string;

    public function makeDepositAddress(string $clientAddress, Sum $sum, Currency $currency2) : array;

    public function getStatus(OrderExchange $order) : Status;
}
