<?php

return [
    'name' => 'default',
    'inherit' => null, //default

    'events' => [

        'before' => function ($theme) {
            // You can remove this line anytime.
            $theme->setTitle(config('cms.core.app.site-name'));

            // Breadcrumb template.
            $theme->breadcrumb()->setTemplate(
                '<ol class="breadcrumb">
                @foreach ($crumbs as $i => $crumb)
                    @if ($i != (count($crumbs) - 1))
                    <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a></li>
                    @else
                    <li class="active">{{ $crumb["label"] }}</li>
                    @endif
                @endforeach
                </ol>'
            );
        },

        'asset' => function ($theme) {
            $themeName = config('cms.core.app.themes.frontend');
            $theme->add('css', 'themes/'.$themeName.'/css/app.css');
            $theme->add('js', 'themes/'.$themeName.'/js/all.js');
        },

        'beforeRenderTheme' => function ($theme) {

            Menu::handler('frontend_user_controlpanel')
                ->addClass('list-group no-style')
                ->getItemsByContentType('Menu\Items\Contents\Link')
                ->map(function ($item) {

                    $class = 'list-group-item';
                    if ($item->isActive()) {
                        $class .= ' active';
                    }

                    $item
                        ->setElement(null)
                        ->getContent()
                        ->addClass($class);
                });
        }
    ]
];
