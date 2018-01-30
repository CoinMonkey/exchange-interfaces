<?php

namespace coinmonkey\interfaces;

interface OrderInterface
{
        public function getCoin(): Coin;

        public function getAddress() : AddressInterface;

        public function getStatus() : AmountInterface;

        public function getGivenAmount() : AmountInterface;

        public function getStatus();

        public function setStatus($status);

        public function setAmount($amount);

        public function setCoin(Coin $coin);

        public function setAddress(AddressInterface $address);
}
