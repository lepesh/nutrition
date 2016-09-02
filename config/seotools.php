<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Список продуктов", // set false to total remove
            'description'  => 'Сайт содержит информацию о продуктах, включающую в себя гликемический индекс продукта, '.
                'пищевую и энергетическую ценность (белки, жиры, углеводы, ккал), а так же удобный фильтр по всем имеющимся параметрам.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ["гликемический индекс", "белки", "жиры", "углеводы", "ккал", "калории", "продукты",
                "пищевая ценность", "энегетическая ценность", "питание", "тренировка", "список продуктов", "фильтр"],
            'canonical'    => "http://nutrition.me.pn", // Set null for using Url::current(), set false to total remove
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
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'        => "Список продуктов", // set false to total remove
            'description'  => 'Сайт содержит информацию о продуктах, включающую в себя гликемический индекс продукта, '.
                'пищевую и энергетическую ценность (белки, жиры, углеводы, ккал), а так же удобный фильтр по всем имеющимся параметрам.', // set false to total remove
            'url'         => "http://nutrition.me.pn",
            'type'        => "website",
            'site_name'   => false,
            'images'      => ['http://nutrition.me.pn/img/hot-dog-152-69763.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'site'        => '@nutrition.me.pn',
        ],
    ],
];