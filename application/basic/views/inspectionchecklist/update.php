<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inspectionchecklist */

$this->title = 'Update Inspectionchecklist: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Inspectionchecklists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inspectionchecklist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
