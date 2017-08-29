<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Inspectionchecklist */

$this->title = 'Create Inspectionchecklist';
$this->params['breadcrumbs'][] = ['label' => 'Inspectionchecklists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inspectionchecklist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
