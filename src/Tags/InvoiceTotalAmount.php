<?php

namespace Hz\QrInvoice\Tags;

use Hz\QrInvoice\Tag;

class InvoiceTotalAmount extends Tag
{
    public function __construct($value)
    {
        parent::__construct(4, $value);
    }
}
