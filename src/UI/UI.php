<?php

namespace LaravelViews\UI;

use Illuminate\Support\Facades\View;

class UI
{
    static private $singleInstance;

    public static function &getInstance()
    {
        if(!self::$singleInstance){
            self::$singleInstance = new self();
        }
        return self::$singleInstance;
    }

    public function editable($model, $field)
    {
        return $this->component('laravel-views::components.editable', [
            'model' => $model,
            'field' => $field
        ]);
    }

    public function badge($title, $type = 'default')
    {
        return $this->component('laravel-views::components.badge', [
            'title' => $title,
            'type' => $type
        ]);
    }

    public function avatar($src)
    {
        return $this->component('laravel-views::components.img', [
            'src' => $src,
            'variant' => 'avatar'
        ]);
    }

    public function link($title, $to)
    {
        return $this->component('laravel-views::components.link', compact(
            'to',
            'title'
        ));
    }

    public function icon($icon, $type = 'default', $class = "")
    {
        return $this->component('laravel-views::components.icon', compact(
            'icon',
            'type',
            'class'
        ));
    }

    public function attributes($attributes, $options = [])
    {
        return $this->component('laravel-views::components.attributes-list', array_merge(
            ['data' => $attributes],
            $options
        ));
    }

    public function text_ellipsis($string,$max_width=100,$class='')
    {
        return $this->component('laravel-views::components.text_ellipsis', compact(
            'string',
            'max_width',
            'class',
        ));
    }

    public function component($view, $data = [])
    {
        return View::make('laravel-views::core.dynamic-component')
            ->with([
                'view' => $view,
                'data' => $data,
            ])
            ->render();
    }
}
