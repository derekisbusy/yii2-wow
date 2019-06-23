<?php
namespace derekisbusy\wow;

use yii\web\AssetBundle;
use yii\web\View;

class WowAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/yii2-wow';
    
    public $js = [
        YII_ENV_DEV ? 'js/wow.js' : 'js/wow.min.js'
    ];
    
    public static function register($view)
    {
        parent::register($view);
        
        $view->registerJs(
            "new WOW().init();",
            View::POS_READY,
            'init-wow'
        );
    }
}