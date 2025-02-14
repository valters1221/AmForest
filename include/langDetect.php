<?php
session_start();

// Set default language to LV if not set
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'lv';
}

// Change language if requested in URL
if (isset($_GET['lang']) && ($_GET['lang'] == 'lv' || $_GET['lang'] == 'en')) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Include language file
include "lang/" . $_SESSION['lang'] . ".php";

// Function to get translation
function __($key) {
    global $lang;
    $parts = explode('.', $key);
    
    if (count($parts) == 2) {
        return isset($lang[$parts[0]][$parts[1]]) ? $lang[$parts[0]][$parts[1]] : $key;
    }
    
    return isset($lang[$key]) ? $lang[$key] : $key;
}