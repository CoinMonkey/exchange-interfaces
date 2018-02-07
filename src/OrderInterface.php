<?php

namespace coinmonkey\interfaces;

use coinmonkey\interfaces\CoinInterface;

interface OrderInterface
{
        public function getCoin(): CoinInterface;

        public function getAddress() : AddressInterface;

        public function getAmount() : AmountInterface;

        public function getStatus();

        public function setStatus($status);

        public function setAmount($amount);

        public function setCoin(CoinInterface $coin);

        public function setAddress(AddressInterface $address);
}
