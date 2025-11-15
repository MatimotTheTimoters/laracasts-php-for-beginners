<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

// Navbar partial
$selected = "bg-gray-900 text-white";
$unselected = "text-gray-300 hover:bg-white/5 hover:text-white";

function isCurrentPage($url) {
    return $_SERVER["REQUEST_URI"] === $url;
}