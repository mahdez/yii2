<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\trainee */

$this->title = 'Create Trainee';
$this->params['breadcrumbs'][] = ['label' => 'Trainees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
