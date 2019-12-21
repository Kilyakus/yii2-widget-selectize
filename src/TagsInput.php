<?php
namespace kilyakus\widget\selectize;

use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\JsExpression;
use kilyakus\widget\taggable\assets\TaggableAsset;

class TagsInput extends \yii\widgets\InputWidget
{
    public $loadUrl;
    
    public $queryParam = 'query'; 

    public $clientOptions;

    public function run()
    {
        $this->registerClientScript();
    }

    public function registerClientScript()
    {
        $id = $this->options['id'];

        if ($this->loadUrl !== null) {
            $url = Url::to($this->loadUrl);
            $this->clientOptions['load'] = new JsExpression("function (query, callback) { if (!query.length) return callback(); $.getJSON('$url', { {$this->queryParam}: query }, function (data) { callback(data); }).fail(function () { callback(); }); }");
        }

        $options = Json::encode($this->clientOptions);
        $view = $this->getView();
        TaggableAsset::register($view);
        $view->registerJs("jQuery('#$id').selectize($options);");
    }
}
