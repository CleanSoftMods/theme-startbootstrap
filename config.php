<?php

return array(
    'name' => 'default',
    'inherit' => null, //default

    'events' => array(

        'before' => function ($theme) {
            // You can remove this line anytime.
            $theme->setTitle(config('cms.core.app.site-name'));

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
            $theme->asset()->add('css', 'themes/default/css/app.css');
            $theme->asset()->container('footer')->add('js', 'themes/default/js/all.js');
        }
    )
);
