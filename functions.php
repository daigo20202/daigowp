<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/src/settings/Customizer.php');
require_once(__DIR__ . '/src/helper/ViewHelper.php');

define('APP_DIR', __DIR__);

/**
 * 設定画面定義
 */
\DaigoWP\Customizer::register('./custom.yml');
