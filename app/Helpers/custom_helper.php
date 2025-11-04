<?php
if (!function_exists('starts_with')) {
    function starts_with(string $haystack, string $needle): bool {
        return strpos($haystack, $needle) === 0;
    }
}