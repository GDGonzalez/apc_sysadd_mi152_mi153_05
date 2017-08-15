<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeeHasWorkscheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employee Has Workschedules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-has-workschedule-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employee Has Workschedule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'EMPLOYEE_id',
            'WORKSCHEDULE_id',
            'time_in',
            'time_out',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
