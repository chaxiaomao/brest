<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/13
 * Time: 17:56
 */
return [
    'contact/<action:[\w\-]+>' => 'contact/default/<action>',
    'contact/<controller:[\w\-]+>/<action:[\w\-]+>' => 'contact/<controller>/<action>',

    'about/<action:[\w\-]+>' => 'contact/default/<action>',
    'about/<controller:[\w\-]+>/<action:[\w\-]+>' => 'about/<controller>/<action>',

    'search/<action:[\w\-]+>/id/<id:.*>' => 'search/default/<action>',
    'search/<action:[\w\-]+>' => 'search/default/<action>',

    'product/<action:[\w\-]+>' => 'product/default/<action>',
    'product/<action:[\w\-]+>/id/<id:.*>' => 'product/default/<action>',

    'requirement/<action:[\w\-]+>' => 'requirement/default/<action>',
    'requirement/<controller:[\w\-]+>/<action:[\w\-]+>' => 'requirement/<controller>/<action>',

    'news/<action:[\w\-]+>' => 'news/default/<action>',
    'news/<action:[\w\-]+>/id/<id:.*>' => 'news/default/<action>',
];