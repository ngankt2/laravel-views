<?php

namespace LaravelViews\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string component($view, $data)
 * @method static string attributes($data)
 * @method static string editable($model, $field)
 * @method static string badge($title, $type = 'default')
 * @method static string avatar($src)
 * @method static string link($title, $to)
 * @method static string icon($icon, $type = 'default', $class = "")
 * @method static string text_ellipsis($string,$max_width=100)

 *
 * @see \LaravelViews\UI\UI
 */
class UI extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ui';
    }
}
