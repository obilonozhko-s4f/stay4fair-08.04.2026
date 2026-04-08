<?php
add_action('init', function () {
    if (!is_admin()) {
        error_log('--- IP DEBUG ---');
        error_log('REMOTE_ADDR: ' . ($_SERVER['REMOTE_ADDR'] ?? 'none'));
        error_log('CF_CONNECTING_IP: ' . ($_SERVER['HTTP_CF_CONNECTING_IP'] ?? 'none'));
        error_log('X_FORWARDED_FOR: ' . ($_SERVER['HTTP_X_FORWARDED_FOR'] ?? 'none'));
    }
});