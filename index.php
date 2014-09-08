<?php
// buatan kita
namespace Gue;
class URLShortener {
    public function __construct() {
        echo "Membuat shortener...\n";
    }
}

// dari Bitly
namespace Bitly;
class URLShortener {
    public function __construct() {
        echo "Membuat shortener dengan API Bitly...\n";
    }
}

$shortener = new \Gue\URLShortener();
$bitly = new \Bitly\URLShortener();
