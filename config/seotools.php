<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Калькулятор пищевой ценности", // set false to total remove
            'description'  => 'Гликемический индекс продуктов, пищевая и энергетическая ценность (белки, жиры, углеводы, ккал), ' .
                'фильтр по всем имеющимся параметрам, калькулятор для расчета пищевых показателей продуктов в зависимости от веса.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ["гликемический индекс", "белки", "жиры", "углеводы", "ккал", "калории", "продукты",
                "пищевая ценность", "энегетическая ценность", "питание", "тренировка", "список продуктов", "фильтр"],
            'canonical'    => "http://nutrition.me.pn", // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => "mtBk5xnQvP58JwiCoruMonX25FiY6ATtnPHJnCTq6o0",
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => "7a59b151bb49b683",
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'        => "Калькулятор пищевой ценности", // set false to total remove
            'description'  => 'Гликемический индекс продуктов, пищевая и энергетическая ценность (белки, жиры, углеводы, ккал), ' .
                'фильтр по всем имеющимся параметрам, калькулятор для расчета пищевых показателей продуктов в зависимости от веса.', // set false to total remove
            'url'         => "http://nutrition.me.pn",
            'type'        => "website",
            'site_name'   => false,
            'images'      => ['https://pixabay.com/static/uploads/photo/2015/03/28/10/21/diet-695723_640.jpg'],
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
