<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    	'assets/plugin/bootstrap/css/bootstrap.min.css',
    	'assets/plugin/bootstrap/css/bootstrap-theme.css',
    	'assets/plugin/bootstrap/css/dashboard.css',
    ];
    public $js = [
    	'assets/plugin/jquery.js',
    	'assets/plugin/bootstrap/js/bootstrap.min.js.',
    	'assets/plugin/holder.js',
    	'assets/plugin/ckeditor/ckeditor.js',
    ];
    public $depends = [
    ];
}
