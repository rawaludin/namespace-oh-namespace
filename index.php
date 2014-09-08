<?php
// buatan kita
class URLShortener {
    public function __construct() {
        echo "Membuat shortener...";
    }
}

// dari Bitly
class URLShortener {
    public function __construct() {
        echo "Membuat shortener dengan API Bitly...";
    }
}

$shortener = new URLShortener();
