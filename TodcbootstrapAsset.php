<?php
/**
 * User: windsdeng@gmail.com
 * Date: 2016/6/6
 * Time: 14:20
 */

namespace wdteam\todcbootstrap;


use yii\web\AssetBundle;

class TodcbootstrapAsset extends AssetBundle
{
    public $sourcePath = '@vendor/todc/todc-bootstrap/dist';

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];

    public $css = [
        'css/todc-bootstrap.min.css'
    ];

}