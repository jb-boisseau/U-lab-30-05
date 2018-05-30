<?php

use humhub\widgets\FooterMenu;
use yii\helpers\Html;
use yii\helpers\Url;

$this->pageTitle = Yii::t('base', 'Error');
?>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= Yii::t('base', 'Oooops...'); ?> <?= Yii::t('base', "C'est pas par ici..."); ?>
        </div>
        <div class="panel-body">

            <div class="error">
                <h2><?= Html::encode($message); ?></h2>
            </div>

            <hr>
            <a href="<?= Url::home() ?>" class="btn btn-primary"><?= Yii::t('base', "Revenir au fil d'actualité"); ?></a>
        </div>
    </div>

    <?= FooterMenu::widget(); ?>
</div>
