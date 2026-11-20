<?php
require('./Property.php');

use Pbo\Marketplace\Produk;

// Objek
$produk = new Produk();
$produk ->setKode('P001')
        ->setNama('Laptop')
        ->setHarga(10000000)
        ->setStok(5);

// Output
echo "Produk : " . $produk->getNama();
echo "</br>";

echo "Harga : " . $produk->getHarga();
echo "</br>";

echo "Stok : " . $produk->getStok();
echo "</br>";

echo "Pajak : " . $produk->pajak() . "%";
echo "</br>";

echo "Harga setelah Pajak : " . $produk->total();
echo "</br>";