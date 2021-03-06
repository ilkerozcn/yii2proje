<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\ilkerozcn\yii2proje\src\models\Sinif */

$this->title = 'Update Sinif: ' . $model->Deneme_sinif_id;
$this->params['breadcrumbs'][] = ['label' => 'Sinifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Deneme_sinif_id, 'url' => ['view', 'Deneme_sinif_id' => $model->Deneme_sinif_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sinif-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
