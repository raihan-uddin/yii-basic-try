<?php
/**
 * Created by PhpStorm.
 * User: MIT
 * Date: 25-Jun-18
 * Time: 12:33 PM
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

//if (Yii::$app->session->hasFlash('success')){
//    echo Yii::$app->session->getFlash('success');
//}
$form = ActiveForm::begin([
    'id' =>'user-form',
//    'options' => ['class' => 'form-horizontal'],
]); ?>
<?= $form->field($model, 'name'); ?>
<?= $form->field($model, 'email'); ?>

<!--<div class="form-group">-->
<!--    <div class="col-lg-offset-1 col-lg-11">-->
        <?= Html::submitButton('Submit', ['class' =>'btn btn-success']);?>
<!--    </div>
</div>-->

<?php ActiveForm::end() ?>