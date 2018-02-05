<?php

namespace coinmonkey\interfaces;

interface OrderInterface
{
        public function getCoin(): Coin;

        public function getAddress() : AddressInterface;

        public function getAmount() : AmountInterface;

        public function getStatus();

        public function setStatus($status);

        public function setAmount($amount);

        public function setCoin(CoinInterface $coin);

        public function setAddress(AddressInterface $address);
}
