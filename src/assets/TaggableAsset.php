<?php
namespace kilyakus\widget\selectize;

use yii\web\AssetBundle;

class TaggableAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
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
