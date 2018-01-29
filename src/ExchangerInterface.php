<?php

namespace coinmonkey\interfaces;

use coinmonkey\entities\Sum;
use coinmonkey\entities\Currency;

interface ExchangerInterface
{
    public function getOrderBook(string $market);

    public function getMarkets() : array;

    public function getBalances() : array;

    public function exchange(Sum $sum, Currency $currency2);

    public function getOrder(string $id, $market = '') : ?array;

    public function buy(string $market, $sum, $rate);

    public function sell(string $market, $sum, $rate);

    public function getId() : string;

    public function getBestMake(string $market, $rate, string $direction);

    public function isMakeBest(string $market, $rate, string $direction) : bool;

    public function isMakeBroken($orderId, $sum, $market = '') : bool;

    public function cancelOrder($orderId, $market = '') : bool;

    public function activeOrderExists($orderId, string $market) : bool;

    public function getMyActiveOrders(string $market) : array;

    public function getOrders(string $market) : array;

    public function getRates(string $market) : array;

    public function getFees() : array;
    
    public function checkDeposit(Sum $sum, int $time);
    
    public function checkWithdraw(Sum $sum, $address, int $time);
    
    public function checkWithdrawById($id, $currency = null);
    
    public function getMinConfirmations(Currency $currency);
}
