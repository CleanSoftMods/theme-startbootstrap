<?php

return array(
    // theme info
    'name'    => 'default',
    'author'  => 'Dan Aldridge',
    'site'    => 'http://cysha.co.uk',
    'type'    => 'frontend',
    'version' => '1.0',

    // theme options
    'inherit' => null, //default

    'events' => array(

        'before' => function ($theme) {
            // You can remove this line anytime.
            $theme->setTitle('Default Theme');

            // Breadcrumb template.
            $theme->breadcrumb()->setTemplate('
                <ol class="breadcrumb">
                @foreach ($crumbs as $i => $crumb)
                    @if ($i != (count($crumbs) - 1))
                    <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a></li>
                    @else
                    <li class="active">{{ $crumb["label"] }}</li>
                    @endif
                @endforeach
                </ol>
            ');
        },
        'beforeRenderTheme' => function ($theme) {
            $theme->asset()->add('css', 'css/app.css');
            $theme->asset()->container('footer')->add('js', 'js/all.js');
        }
    )
);
