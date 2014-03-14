﻿<?php

return array(
    'baseUri' => '/',
    'dbAdapter' => array(
        'master' => array(
            'driver' => 'Pdo_Mysql',
            'host' => '192.168.1.228',
            'database' => 'eva',
            'username' => 'root',
            'password' => '',
        ),
        'slave' => array(
            'slave1' => array(
                'driver' => 'Pdo_Mysql',
                'host' => '192.168.1.233',
                'database' => 'eva',
                'username' => 'root',
                'password' => '',
            ),
        )
    ),



    'oauth' => array(
        'request_url_path' => '/oauth/',
        'access_url_path' => '/oauth/access/',
        'login_url_path' => '/',
        'oauth1' => array(
            'twitter' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'douban' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'weibo' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => '',
            ),
            'flickr' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'dropbox' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'linkedin' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'yahoo' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'sohu' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'tianya' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
        ),
        'oauth2' => array(
            'facebook' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'weibo' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'baidu' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'douban' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'qihoo' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'taobao' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'tencent' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'qzone' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'renren' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'tqq' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'kaixin' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'pengyou' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'qplus' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'msn' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'google' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'github' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'foursquare' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'disqus' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'netease' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
        )
    ),
);