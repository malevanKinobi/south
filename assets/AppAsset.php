<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css',
        'css/fontawesome-all.min.css',
        'css/uncover.css',
        'css/style.css',
        '//fonts.googleapis.com/css?family=Arimo:400,400i,700,700i',
    ];
    public $js = [
//        'js/jquery-2.2.3.min.js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
//        'js/imagesloaded.pkgd.min.js',
        'js/anime.min.js',
        'js/uncover.js',
        'js/demo1.js',
        'js/move-top.js',
        'js/easing.js',
        'js/main.js',
        'js/jquery.waypoints.min.js',
        'js/jquery.countup.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
