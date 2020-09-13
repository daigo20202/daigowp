<?php
namespace DaigoWP;

use Jenssegers\Blade\Blade;

class ViewHelper
{
    public static function render_blade(string $template_name)
    {
        $blade = new Blade(APP_DIR . '/views', APP_DIR . '/cache');

        return $blade->make($template_name);
    }
}
