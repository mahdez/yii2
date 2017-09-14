<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\trainee */

$this->title = 'Update Trainee: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Trainees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trainee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
