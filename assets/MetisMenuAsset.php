<?php
namespace app\assets;

use yii\web\AssetBundle;

class MetisMenuAsset extends AssetBundle
{
    public $sourcePath = '@bower/metismenu';
    public $css = [
        'dist/metisMenu.min.css',
    ];
    public $js = [
        'dist/metisMenu.min.js',
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