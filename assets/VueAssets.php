<?php
/**
 * @link http://www.konkeanweb.com
 * 10/06/2020 5:32 PM
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <prawee.wongsa@allianz.com>
 * @license BSD-3-Clause
 */

namespace app\assets;

use yii\web\AssetBundle;

class VueAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/site.css'
    ];

    public function init()
    {
        parent::init();
        $this->js[] = YII_ENV == 'dev' ? 'js/app.js' : 'js/app.min.js';
    }

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    ];
}