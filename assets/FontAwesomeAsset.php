<?php
namespace app\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/fontawesome';
    public $css = [
        'css/font-awesome.min.css',
    ];
    /*public function init()
    {
        $this->registerJs();
        parent::init();
    }
    protected function registerJs()
    {
        $js = <<<JS
        $('#side-menu').metisMenu();
JS;
        \Yii::$app->view->registerJs($js);
        return $this;
    }*/
}