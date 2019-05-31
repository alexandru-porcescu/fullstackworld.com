<?php

return [

    /*
     * Bulma column size classes
     * https://bulma.io/documentation/columns/sizes
     * is-full is-full-mobile is-full-tablet, or other bulma classes
     */

    'notification_container' => 'column is-one-quarter is-full-touch is-one-quarter-widescreen',

    /*
     * Cookie related classes
     */
    'cookie' => [

        //Enable/Disable cookie box on the application
        'enabled' => true,

        // In case of translations just add translatable string
        'body' => 'Sometimes We\'re using cookies on this website. Would you like to share some?',

        // In case of translations just add translatable string
        'button' => 'YES, I\'m fine!',

        // Options[is-success, is-warning, is-danger, is-primary, is-dark, is-white, ..]
        'background-class' => 'is-light',

        // Options[is-success, is-warning, is-danger, is-primary, is-dark, is-white, ..]
        'button-class' => 'is-primary',
    ],
];
