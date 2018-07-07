<?php
/**
 * Created by PhpStorm.
 * User: MIT
 * Date: 28-Jun-18
 * Time: 1:55 PM
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
?>

   <!-- <ul>
        <?php /*foreach ($countries as $country): */?>
            <li>
                <?/*= Html::encode("{$country->countryCode} ({$country->countryName})") */?>:
                <?/*= $country->population */?>
            </li>
        <?php /*endforeach; */?>
    </ul>-->
<?= LinkPager::widget(['pagination' => $pagination]) ?>
    <table class="table table-striped table-bordered table-hover table-responsive" id="example" >
        <thead>
        <tr>
            <?php
                foreach($column_name as $data):
                    echo  "<th>" .$data['COLUMN_NAME'] . "</th>";
                endforeach;
            ?>
        </tr>
        </thead>
        <tbody>
            <?php
                $count = 0;
                foreach ($countries as $country):
                    $count++;
                ?>
                    <tr>
                        <td><?php echo $country['id'] ?></td>
                        <td><?php echo $country['countryCode'] ?></td>
                        <td><?php echo $country['countryName'] ?></td>
                        <td><?php echo $country['currencyCode'] ?></td>
                        <td><?php echo $country['population'] ?></td>
                        <td><?php echo $country['fipsCode'] ?></td>
                        <td><?php echo $country['isoNumeric'] ?></td>
                        <td><?php echo $country['capital'] ?></td>
                        <td><?php echo $country['continentName'] ?></td>
                        <td><?php echo $country['continent'] ?></td>
                        <td><?php echo $country['areaInSqKm'] ?></td>
                        <td><?php echo $country['created_time'] ?></td>
                        <td><?php echo $country['updated_time'] ?></td>
                    </tr>
                <?php
                endforeach;

            ?>
        </tbody>
        <tfoot>
            <tr>
                <?php
                    foreach($column_name as $data):
                        echo  "<th>" .$data['COLUMN_NAME'] . "</th>";
                    endforeach;
                ?>
            </tr>
        <tr>
            <td colspan="11"><?= LinkPager::widget(['pagination' => $pagination]) ?></td>
        </tr>
        </tfoot>
    </table>

<?php
$dataProvider = new ActiveDataProvider([
    'query' => \app\models\Countries::find(),
    'pagination' => [
        'pageSize' => 20,
    ],
]);
echo GridView::widget([
    'dataProvider' => $dataProvider,
]);
?>