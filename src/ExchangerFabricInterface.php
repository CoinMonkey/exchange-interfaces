<?php

namespace coinmonkey\interfaces;

interface ExchangerFabricInterface
{
    public function build($exchangerName, $cache = true) : InstantExchangerInterface;

    public function buildInstant($exchangerName, $cache = true) : InstantExchangerInterface;
}
