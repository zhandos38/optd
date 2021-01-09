<?php

use Da\QrCode\Contracts\ErrorCorrectionLevelInterface;
use Da\QrCode\QrCode;

$qrCode = (new QrCode(\yii\helpers\Url::to(['/employee/view', 'id' => $model->id], true)))
    ->setSize(250)
    ->setMargin(5)
    ->setErrorCorrectionLevel(ErrorCorrectionLevelInterface::HIGH);
?>
<div style="width: 100%; text-align: center">
    <img src="<?= $qrCode->writeDataUri() ?>">
</div>
<a class="btn btn-info" href="<?= $qrCode->writeDataUri() ?>" style="width: 100%" download="qrcode-<?= $model->full_name ?>.png"><i class="fa fa-download"></i> Скачать</a>
