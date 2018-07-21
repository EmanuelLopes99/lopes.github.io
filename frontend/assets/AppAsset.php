<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
       'css/arena-assets.min.css',
       'css/style.css',
       'bootstrap/css/bootstrap-theme.css',
       'bootstrap/css/bootstrap-theme.min.css',
       'bootstrap/css/bootstrap.css',
       'bootstrap/css/bootstrap.min.css',
       'bootstrap/css/prettyPhoto.css',
    ];
    public $js = [
        'js/arena-plugins.min.js',
        'js/jquery.countTo.js',
        'js/popper.js',
        'js/bootstrap.min.js',
        'js/gmap3.min.js',
        'js/script.js',
        'js/extensions/revolution.extension.slideanims.min.js',
        'js/extensions/revolution.extension.layeranimation.min.js',
        'js/extensions/revolution.extension.navigation.min.js',
        'js/extensions/revolution.extension.parallax.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
