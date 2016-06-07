Yii2 asset for bower todc-bootstrap
===================================
Yii2 asset for bower todc-bootstrap

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist wdteam/yii2-asset-todc-bootstrap "*"
```

or add

```
"wdteam/yii2-asset-todc-bootstrap": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'wdteam\todcbootstrap\TodcbootstrapAsset',
    ];
}```
