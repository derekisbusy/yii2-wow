<?php
namespace derekisbusy\wow;

use yii\web\AssetBundle;

class WowAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/wow';
    
    public $js = [
        YII_ENV_DEV ? 'js/wow.js' : 'js/wow.min.js'
    ];
    
    public function register($view)
    {
        parent::register($view);
        
        $view->registerJs(
            "new WOW().init();",
            View::POS_READY,
            'init-wow'
        );
    }
}