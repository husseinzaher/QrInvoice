
## Requirements

* PHP >= 7.2
* An mbstring extension

## Installation

You can install the package via composer:

```bash
$ composer require hz/qr-invoice
```
<p align="right">(<a href="#top">back to top</a>)</p>

## Usage

### Generate Base64

```php
use Hz\QrInvoice\GenerateQrCode;
use Hz\QrInvoice\Tags\InvoiceDate;
use Hz\QrInvoice\Tags\InvoiceTaxAmount;
use Hz\QrInvoice\Tags\InvoiceTotalAmount;
use Hz\QrInvoice\Tags\Seller;
use Hz\QrInvoice\Tags\TaxNumber;

$generatedString = GenerateQrCode::fromArray([
    new Seller('Husseinzaher'), // seller name        
    new TaxNumber('1234567891'), // seller tax number
    new InvoiceDate('2021-07-12T14:25:09Z'), // invoice date as Zulu ISO8601 @see https://en.wikipedia.org/wiki/ISO_8601
    new InvoiceTotalAmount('100.00'), // invoice total amount
    new InvoiceTaxAmount('15.00') // invoice tax amount
    // TODO :: Support others tags
])->toBase64();

// > Output
// AQVTYWxsYQIKMTIzNDU2Nzg5MQMUMjAyMS0wNy0xMlQxNDoyNTowOVoEBjEwMC4wMAUFMTUuMDA=
```

### Generate Plain

```php
use Hz\QrInvoice\GenerateQrCode;
use Hz\QrInvoice\Tags\InvoiceDate;
use Hz\QrInvoice\Tags\InvoiceTaxAmount;
use Hz\QrInvoice\Tags\InvoiceTotalAmount;
use Hz\QrInvoice\Tags\Seller;
use Hz\QrInvoice\Tags\TaxNumber;

$generatedString = GenerateQrCode::fromArray([
    new Seller('Husseinzaher'), // seller name        
    new TaxNumber('1234567891'), // seller tax number
    new InvoiceDate('2021-12-12T14:25:09Z'), // invoice date as Zulu ISO8601 @see https://en.wikipedia.org/wiki/ISO_8601
    new InvoiceTotalAmount('100.00'), // invoice total amount
    new InvoiceTaxAmount('15.00') // invoice tax amount
    // TODO :: Support others tags
])->toTLV();
```
<p align="right">(<a href="#top">back to top</a>)</p>

### Render A QR Code Image

You can render the tags as QR code image easily


```php
use Hz\QrInvoice\GenerateQrCode;
use Hz\QrInvoice\Tags\InvoiceDate;
use Hz\QrInvoice\Tags\InvoiceTaxAmount;
use Hz\QrInvoice\Tags\InvoiceTotalAmount;
use Hz\QrInvoice\Tags\Seller;
use Hz\QrInvoice\Tags\TaxNumber;

// data:image/png;base64, .........
$displayQRCodeAsBase64 = GenerateQrCode::fromArray([
    new Seller('Husseinzaher'), // seller name        
    new TaxNumber('1234567891'), // seller tax number
    new InvoiceDate('2021-07-12T14:25:09Z'), // invoice date as Zulu ISO8601 @see https://en.wikipedia.org/wiki/ISO_8601
    new InvoiceTotalAmount('100.00'), // invoice total amount
    new InvoiceTaxAmount('15.00') // invoice tax amount
    // TODO :: Support others tags
])->render();

// now you can inject the output to src of html img tag :)
// <img src="$displayQRCodeAsBase64" alt="QR Code" />
```
<p align="right">(<a href="#top">back to top</a>)</p>
