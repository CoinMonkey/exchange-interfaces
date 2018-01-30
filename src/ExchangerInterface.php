<?php

namespace coinmonkey\interfaces;

use coinmonkey\entities\Amount;
use coinmonkey\entities\Coin;

interface ExchangerInterface
{
    public function getId() : string;

    public function exchange(Amount $amount, Coin $coin2);

    public function buy(string $market, $amount, $rate);

    public function sell(string $market, $amount, $rate);

    public function getOrderBook(string $market);

    public function getMarkets() : array;

    public function getBalances() : array;

    public function getOrder(string $id, $market = '') : ?array;

    public function getBestMake(string $market, $rate, string $direction);

    public function isMakeBest(string $market, $rate, string $direction) : bool;

    public function isMakeBroken($orderId, $amount, $market = '') : bool;

    public function cancelOrder($orderId, $market = '') : bool;

    public function activeOrderExists($orderId, string $market) : bool;

    public function getMyActiveOrders(string $market) : array;

    public function getOrders(string $market) : array;

    public function getRates(string $market) : array;

    public function getFees() : array;

    public function checkDeposit(Amount $amount, int $time);

    public function checkWithdraw(Amount $amount, $address, int $time);

    public function checkWithdrawById($id, $coin = null);

    public function getMinConfirmations(Coin $coin) : integer;
}
