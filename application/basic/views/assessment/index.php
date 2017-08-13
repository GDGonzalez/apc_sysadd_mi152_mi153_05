<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AssessmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Assessments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assessment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Assessment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date_assessment_start',
            'date_assessment_end',
            'assessment_summary',
            'assessment_recommendation',
            // 'housekeepingsupervisor',
            // 'housekeeping_staff',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
