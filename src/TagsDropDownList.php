<?php
namespace kilyakus\widget\selectize;

use yii\helpers\Html;

class TagsDropDownList extends InputWidget
{
    public $items = [];

    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options);
        } else {
            echo Html::dropDownList($this->name, $this->value, $this->items, $this->options);
        }

        parent::run();
    }
}
