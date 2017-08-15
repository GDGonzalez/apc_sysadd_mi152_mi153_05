<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Housekeepingchecklist */

$this->title = 'Update Housekeepingchecklist: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Housekeepingchecklists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="housekeepingchecklist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
