<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/13
 * Time: 17:43
 */
return [
    'category/<action:[\w\-]+>' => 'category/default/<action>',
    'category/<controller:[\w\-]+>/<action:[\w\-]+>' => 'category/<controller>/<action>',

    'product/<action:[\w\-]+>' => 'product/<action>',
    'product/<controller:[\w\-]+>/<action:[\w\-]+>' => 'product/<controller>/<action>',

    'news/<action:[\w\-]+>' => 'news/<action>',
    'news/<controller:[\w\-]+>/<action:[\w\-]+>' => 'news/<controller>/<action>',

//    'statistics/<action:[\w\-]+>' => 'statistics/<action>',
//    'statistics/<controller:[\w\-]+>/<action:[\w\-]+>' => 'statistics/<controller>/<action>',
];