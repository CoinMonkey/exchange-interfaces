<?php

namespace coinmonkey\interfaces;

interface CoinInterface
{
    public function getCode() : string;

    public function getName() : string;
}
