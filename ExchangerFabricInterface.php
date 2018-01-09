<?php

namespace coinmonkey\interfaces;

interface ExchangerFabricInterface
{
    public function build($exchangerName) : ExchangerInterface;
}