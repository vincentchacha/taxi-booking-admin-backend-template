<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Look & feel customizations
    |--------------------------------------------------------------------------
    |
    | Make it yours.
    |
    */

    // Project name. Shown in the breadcrumbs and a few other places.
    'project_name' => 'i-Taxi',

    // Menu logos
    'logo_lg'   => '<i>i</i>Taxi',
    'logo_mini' => '<b>I</b>t',

    // Developer or company name. Shown in footer.
    'developer_name' => 'Vincent Chacha',

    // Developer website. Link in footer.
    'developer_link' => '#',

    // Show powered by Laravel Backpack in the footer?
    'show_powered_by' => false,

    // The AdminLTE skin. Affects menu color and primary/secondary colors used throughout the application.
    'skin' => 'skin-green',
    // Options: skin-black, skin-blue, skin-purple, skin-red, skin-yellow, skin-green, skin-blue-light, skin-black-light, skin-purple-light, skin-green-light, skin-red-light, skin-yellow-light

    /*
    |--------------------------------------------------------------------------
    | Registration Open
    |--------------------------------------------------------------------------
    |
    | Choose wether new users are allowed to register.
    | This will show up the Register button in the menu and allow access to the
    | Register functions in AuthController.
    |
    */

    'registration_open' => true,

    /*
    |--------------------------------------------------------------------------
    | Routing
    |--------------------------------------------------------------------------
    */

    // The prefix used in all base routes (the 'admin' in admin/dashboard)
    'route_prefix' => 'admin',

    // Set this to false if you would like to use your own AuthController and PasswordController
    // (you then need to setup your auth routes manually in your routes.php file)
    'setup_auth_routes' => true,

    // Set this to false if you would like to skip adding the dashboard routes
    // (you then need to overwrite the login route on your AuthController)
    'setup_dashboard_routes' => true,

    /*
    |--------------------------------------------------------------------------
    | User Model
    |--------------------------------------------------------------------------
    */

    // Fully qualified namespace of the User model
    'user_model_fqn' => '\App\User',
];
