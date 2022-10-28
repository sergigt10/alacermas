<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => false, // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => "Alacer Mas es un centro de distribución de productos de acero inoxidable, aluminio y suministros industriales.", // set false to total remove
            'separator'    => ', ',
            'keywords'     => ['Alacer Mas', 'Centro de distribución acero inoxidable', 'Aluminio', 'Suministros industriales', 'Acero Inoxidable', 'Plásticos técnicos', 'Metales no férricos', 'Normalizados inoxidable'],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Alacer Mas, Acero Inoxidable, Aluminio, Suministros industriales', // set false to total remove
            'description' => "Alacer Mas es un centro de distribución de productos de acero inoxidable, aluminio y suministros industriales.", // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => 'Alacer Mas',
            'locale'      => 'es_ES',
            'images'      => ['https://www.alacermas.com/frontend/assets/images/centre.jpg'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'title'       => 'Alacer Mas, Acero Inoxidable, Aluminio, Suministros industriales',
            'site'        => '@alacermas',
            'creator'     => '@alacermas',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Alacer Mas, Acero Inoxidable, Aluminio, Suministros industriales', // set false to total remove
            'description' => 'Alacer Mas es un centro de distribución de productos de acero inoxidable, aluminio y suministros industriales.', // set false to total remove
            'url'         => 'https://www.alacermas.com/', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => ['https://www.alacermas.com/frontend/assets/images/centre.jpg'],
        ],
    ],
];
