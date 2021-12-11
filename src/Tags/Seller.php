<?php

namespace Hz\QrInvoice\Tags;

use Hz\QrInvoice\Tag;

class Seller extends Tag
{
    public function __construct($value)
    {
        parent::__construct(1, $value);
    }
}
