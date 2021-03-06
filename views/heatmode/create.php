<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HeatMode */

$this->title = 'Створити новий';
$this->params['breadcrumbs'][] = ['label' => Yii::t('user', 'Кабінет користувача'), 'url' => ['/room']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('user', 'Оператор'), 'url' => ['/room/operator/index']];
$this->params['breadcrumbs'][] = ['label' => 'Режими терморегуляції', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="heat-mode-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
