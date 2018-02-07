<?php

namespace coinmonkey\interfaces;

interface StatusInterface
{
    public function getStatus() : int;

    public function getTxs() : array;
}
