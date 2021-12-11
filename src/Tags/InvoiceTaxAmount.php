<?php

namespace Hz\QrInvoice\Tags;

use Hz\QrInvoice\Tag;

class InvoiceTaxAmount extends Tag
{
    public function __construct($value)
    {
        parent::__construct(5, $value);
    }
}
