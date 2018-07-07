<?php
/**
 * Created by PhpStorm.
 * User: MIT
 * Date: 28-Jun-18
 * Time: 1:31 PM
 */

use yii\helpers\Html;
?>

<p>You have entered the following information: </p>
<ul>
    <li><label>Name</label>: <?= Html::encode($model->name)?></li>
    <li><label>Email</label>: <?= Html::encode($model->email)?></li>
</ul>
