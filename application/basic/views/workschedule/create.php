<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Workschedule */

$this->title = 'Create Workschedule';
$this->params['breadcrumbs'][] = ['label' => 'Workschedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workschedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
