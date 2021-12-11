<?php

namespace Hz\QrInvoice\Tags;

use Hz\QrInvoice\Tag;

class InvoiceDate extends Tag
{
    public function __construct($value)
    {
        parent::__construct(3, $value);
    }
}
