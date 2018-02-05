<?php

namespace coinmonkey\interfaces;

use coinmonkey\interfaces\AmountInterface;
use coinmonkey\interfaces\CoinInterface;

interface ExchangerInterface
{
    public function getId() : string;

    public function exchange(AmountInterface $amount, CoinInterface $coin2);

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

    public function checkDeposit(AmountInterface $amount, int $time);

    public function checkWithdraw(AmountInterface $amount, $address, int $time);

    public function checkWithdrawById($id, $coin = null);

    public function getMinConfirmations(CoinInterface $coin) : ?int;

    public function getWithdrawalFee(CoinInterface $coin) : ?float;
}
