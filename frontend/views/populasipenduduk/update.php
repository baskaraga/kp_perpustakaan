<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\JumlahPenduduk */

$this->title = 'Update Jumlah Penduduk: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jumlah Penduduk', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jumlah-penduduk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
