<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EmployeeHasWorkschedule */

$this->title = 'Create Employee Has Workschedule';
$this->params['breadcrumbs'][] = ['label' => 'Employee Has Workschedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-has-workschedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
