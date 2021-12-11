<?php

namespace Hz\QrInvoice\Tags;

use Hz\QrInvoice\Tag;

class TaxNumber extends Tag
{
    public function __construct($value)
    {
        parent::__construct(2, $value);
    }
}
