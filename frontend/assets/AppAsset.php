<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;
        


/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets\css\docs.css',
        'style.css',
        'assets\js\google-code-prettify\prettify.css',
        'assets\css\bootstrap-responsive.css',
        'assets\css\bootstrap.css',
         'assets\css\bootstrap.min.css',
        
        
        ];
    public $js = [
        'assets/js/jquery.js',
        'assets/js/application.js',
        'assets/js/bootstrap-transition.js',
        'assets/js/bootstrap-modal.js',
        'assets/js/bootstrap-scrollspy.js',
        'assets/js/bootstrap-alert.js',
        'assets/js/bootstrap-dropdown.js',
        'assets/js/bootstrap-tab.js',
        'assets/js/bootstrap-tooltip.js',
        'assets/js/bootstrap-popover.js',
        'assets/js/bootstrap-button.js',
        'assets/js/bootstrap-collapse.js', 
        'assets/js/bootstrap-carousel.js', 
        'assets/js/bootstrap-typeahead.js', 
        'assets/js/bootstrap-affix.js', 
        'assets/js/jquery.lightbox-0.5.js', 
        'assets/js/bootsshoptgl.js', 
        'http://platform.twitter.com/widgets.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset', // yii.js, jquery.js
        //'yii\bootstrap\BootstrapAsset', // bootstrap.css
        //'yii\bootstrap\BootstrapPluginAsset' // bootstrap.js
          
    ];
     public $jsOptions = [
      'position' =>  View::POS_HEAD,
    ];
    
}
