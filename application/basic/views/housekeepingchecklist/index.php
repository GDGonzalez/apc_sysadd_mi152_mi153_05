<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HousekeepingchecklistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Housekeepingchecklists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="housekeepingchecklist-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Housekeepingchecklist', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'checklist_description',
            'checklist_result',
            'checklist_comments',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
