<?php
namespace kilyakus\widget\selectize\assets;

use yii\web\AssetBundle;

class SelectizeAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/dist';
    }

    public $css = [
        'css/selectize.bootstrap3.css',
    ];
    public $js = [
        'js/standalone/selectize.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
}
