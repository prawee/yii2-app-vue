<?php
/**
 * @link http://www.konkeanweb.com
 * 10/06/2020 5:36 PM
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <prawee.wongsa@allianz.com>
 * @license BSD-3-Clause
 */

use yii\helpers\Html;
use app\assets\VueAssets;

VueAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?= $this->render('_nav'); ?>
    <div class="container">
        <?= $content; ?>
    </div>
</div>
<?= $this->render('_footer'); ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
