Yii2 Wow
==============
Wow assets for Yii2 projects

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer require --prefer-dist derekisbusy/yii2-wow:dev-master
```

or add

```
"derekisbusy/yii2-wow": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it by adding it to your view  :

```php
use \derekisbusy\wow\WowAsset;

WowAsset::register($this);
```

or by adding it to another assets dependencies list :

```php
  public $depends = [
    'derekisbusy\wow\WowAsset'
  ];
```

Then use wow in your view :

```html
<div class="wow bounceInUp">
Content to Reveal Here
</div>
```

Documentation
-------------

 * [Wow docs](https://www.delac.io/wow/docs)
 * [Yii2 assets](https://www.yiiframework.com/doc/guide/2.0/en/structure-assets)
