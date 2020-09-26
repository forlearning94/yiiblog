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
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/public/assets/css/font-awesome.min.css',
        '/public/assets/css/bootstrap.min.css',
        '/public/assets/css/animate.min.css',
        '/public/assets/css/owl.carousel.css',
        '/public/assets/css/owl.theme.css',
        '/public/assets/css/owl.transitions.css',
        '/public/assets/style.css',
        '/public/assets/css/responsive.css'
    ];
    public $js = [
        '/public/assets/js/jquery-1.11.3.min.js',
        '/public/assets/js/bootstrap.min.js',
        '/public/assets/js/owl.carousel.min.js',
        '/public/assets/js/jquery.stickit.min.js',
        '/public/assets/js/menu.js',
        '/public/assets/js/scripts.js',
    ];
    public $depends = [
        
    ];
}
