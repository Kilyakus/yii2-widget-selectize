<?php
namespace kilyakus\widget\selectize;

use yii\helpers\Html;

class SelectizeTextInput extends InputWidget
{
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }

        parent::run();
    }
}
