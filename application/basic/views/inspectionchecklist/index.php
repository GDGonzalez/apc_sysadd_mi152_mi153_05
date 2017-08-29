<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InspectionchecklistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inspectionchecklists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inspectionchecklist-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Inspectionchecklist', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'checklist_description',
            'checklist_comments',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
