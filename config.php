<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Listen on event set up theme.
        'onSetTheme' => function($theme)
        {

        },

        // Listen on event set up layout.
        'onSetLayout' => function($theme)
        {

        },

        // Listen on event before render theme.
        'beforeRenderTheme' => function($theme)
        {
            // You may use this event to set up your assets.
        },

        // Listen on event before render layout.
        'beforeRenderLayout' => function($theme)
        {

        },

        // Listen on event before render theme and layout
        'beforeRenderThemeWithLayout' => function($theme)
        {

        }

    ),
    'num_display' => array(
        'home_product'=>8,
        'main_product'=>12,
        'related_product'=>4,
        'latest_product'=>5,
        'bestseller'=>5,
        'featured'=>3,
        'blog'=>3,
        'testimonial'=>5,    
    ),
    'banner' => true,
    'themesColor' => array(
        'type'=> 'false',
        'warnaDef'=>'main-color: #29c246;background-header1: #2a9bdc; background-header2: #e83c3c;background-footer: #f6f6f6;text-footer: #393939',
        'color'=>false
    ),
    'layout' => array(
        'index1'=>'Layout dengan sidebar'
    ),

);