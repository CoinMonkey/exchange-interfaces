<?php

namespace coinmonkey\interfaces;

interface CoinInterface
{
    public function makeAddress() : array;

    public function checkPayment($transactionId) : bool;

    public function getTransactions(string $address) : array;
}
