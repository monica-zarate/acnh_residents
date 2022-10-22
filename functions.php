<?php 

// Return a path to a asset or url
// Adds a leading '/' if one has not been provided.
function get_url($path = "") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return WWW_ROOT . $path;
}

function get_project_path($path = "") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return PROJECT_ROOT . $path;
}

// Return special characters as HTML entities
function h($str) {
    return htmlspecialchars($str);
}

// Returns a URL safe string
function u($string) {
    return urlencode($string);
}

// Checks if a value is blank 
function is_blank($var) {
    if(!isset($var) || "" === trim($var, " ") ) {
        return true;
    } 
    return false;
}

function wrap_pre($data) {
    return '<pre>' . print_r($data,true) . '</pre>';
}

// My custom functions are: 
// Converts the first character of each word in a string to an uppercase.

function ucw($data) {
    return ucwords($data);
}
