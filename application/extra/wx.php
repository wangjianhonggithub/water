<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/22
 * Time: 10:11
 */
return [
    //微信小程序相关的配置
    //  +---------------------------------
    //  微信相关配置
    //  +---------------------------------

    // // 小程序app_id
    // 'app_id' => 'wxf97181f9b44ddcb8',
    // // 小程序app_secret
    // 'app_secret' => '42cc1177732561a42d5648844b18258f',

    // 小程序app_id
    'app_id' => 'wx2d6759826abf0001',
    // 小程序app_secret
    'app_secret' => '8cda4029baaf7f1009d46b65cfa3e21f',
    // 微信使用code换取用户openid及session_key的url地址
    'login_url' => "https://api.weixin.qq.com/sns/jscode2session?" .
        "appid=%s&secret=%s&js_code=%s&grant_type=authorization_code",

    // 微信获取access_token的url地址
    'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?" .
        "grant_type=client_credential&appid=%s&secret=%s",

    'imagePath'=>'https://smallapp.actmi.net',
];