# Kalkulator
Contoh menggunakan composer, PSR4 dan unit test dengan PHP

Ini adalah contoh sederhana bagaimana membuat sebuah package menggukan PHP Composer, PSR4 dan Unit test.

Untuk menggunakan package ini anda memerlukan

* [Git](https://git-scm.com/downloads)
* [Composer](https://getcomposer.org/download/)
* PHP minimal versi 5.4

Untuk mempelajari package ini, silahkan clone dengan cara:

```sh
git clone git@github.com:komputronika/kalkulator.git
```

atau dengan cara download.


## Cara menggunakan package

### Membuat composer.json

Buatlah sebuah folder misalnya `demo_kalkulator`, kemudian buatlah sebuah file dengan nama `composer.json` dengan isi seperti ini:

```json
{
    "require": {
        "komputronika/kalkulator": "1.1.0"
    }
}
``` 

### Membuat file index.php

Masih dalam folder yang sama, buatlah sebuah file baru dengan nama `index.php` dengan isi sebagai berikut:

```php
<?php

require_once __DIR__ .'/vendor/autoload.php';

use Komputronika\Kalkulator\Kalkulator;

$o = new Kalkulator;

echo "<html><body style='margin:30px;font-family:sans-serif;font-size:1.25rem'>";

echo "<h3>Demo Kalkulator dengan Composer</h3>";
echo "<pre>";
echo "100 + 5 = ". $o->tambah(100,5)."<br/>";
echo "100 - 5 = ". $o->kurang(100,5)."<br/>";
echo "100 * 5 = ". $o->kali(100,5)."<br/>";
echo "100 / 5 = ". $o->bagi(100,5);
echo "</pre>";
echo "</body></html>";
```

## Jalankan composer

Masih dalam folder yang sama, jalankan composer dengan perintah:
```sh
composer install
```
Anda harus terhubung dengan internet untuk menjalankan perintah ini.

Composer akan otomatis mendownload package-package yang dibutuhkan ke dalam folder `vendor',  sesuai dengan yang dituliskan pada file `composer.json'.

## Test di browser

Buka browser anda pada alamat `http://localhost/demo_calculator'




