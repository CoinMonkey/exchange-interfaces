<?php

namespace coinmonkey\interfaces;

interface CurrencyInterface
{
    public function makeAddress() : array;

    public function checkPayment($transactionId) : bool;

    public function getTransactions(string $address) : array;
}
