<?php
require('./Property.php');

use Pbo\Marketplace\Produk;

// Objek
$produk = new Produk('P0001', 'Laptop', 10000000, 5);

// Output
echo "Produk : " . $produk->nama;
echo "</br>";

echo "Kode : " . $produk->kode;
echo "</br>";

echo "Harga : Rp." . $produk->harga;
echo "</br>";

echo "Stok : " . $produk->stok;
echo "</br>";

echo "Pajak : " . $produk->pajak() . "%";
echo "</br>";

echo "Harga setelah Pajak : Rp. " . $produk->total();
echo "</br>";