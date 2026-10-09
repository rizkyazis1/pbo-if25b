<?php

class Produk {
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;
}

// Input ke Property
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

// Hitung pajak
$pajak = Produk::PAJAK * 100;
$jumlahPajak = $produk->harga * Produk::PAJAK;

// Total Harga
$total = $produk->harga + $jumlahPajak;

// Output
echo "Produk : " . $produk->nama;
echo "</br>";

echo "Harga : Rp." . $produk->harga;
echo "</br>";

echo "Stok : " . $produk->stok;
echo "</br>";

echo "Pajak : " . $pajak . "%";
echo "</br>";

echo "Harga setelah Pajak : Rp. " . $total;
echo "</br>";
?>