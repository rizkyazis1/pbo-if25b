<?php

namespace Pbo\Marketplace;

require_once('./Property.php');

use Pbo\Marketplace\Produk;

class Jasa {

    use Produk;

    public function payment($tipe) {
        return match($tipe) {
            "virtual" => 'Virtual Account',
            "qris" => 'QRIS',
            default => 'Hanya bisa pembayaran VA dan QRIS'
        };
    }
    
}
?>