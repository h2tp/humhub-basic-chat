<?php
namespace humhub\modules\humhubchat;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $css = [
        'chat.css'
    ];

    public $js = [
        'script.js'
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }
}
