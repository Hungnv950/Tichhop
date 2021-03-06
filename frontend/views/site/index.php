<?php

/* @var $this yii\web\View */

$this->title = 'Trang chủ';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Chào mừng tới hệ thống quản lí!</h1>

        <p class="lead">Chọn dịch vụ bạn muốn sử dụng</p>
    </div>

    <div class="body-content">

        <div class="row" style="text-align: center">
            <div class="col-lg-4">
                <h2>Better Doctor</h2>

                <p class="well">Hệ thống cung cấp cho người bệnh dữ liệu chính xác về bác sĩ và trung tâm dịch vụ y tế (giải pháp áp dụng tại Mỹ)</p>

                <p><a class="btn btn-primary" href="<?= Yii::$app->getUrlManager()->baseUrl?>/doctor/index">Sử dụng</a></p>
            </div>
            <div class="col-lg-4">
                <h2>OrthanC</h2>

                <p class="well">Truy cập và xem nội dung của các tập tin DICOM (hình ảnh ý tế), hỗ trợ chuẩn đoán và phân tích kết quả.</p>

                <p><a class="btn btn-success" href="<?= Yii::$app->getUrlManager()->baseUrl?>/orthanc/index">Sử dụng</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Open MRS</h2>

                <p class="well"><br>Hệ thống hồ sơ ý tế điện tử <br><br></p>

                <p><a class="btn btn-danger" href="<?= Yii::$app->getUrlManager()->baseUrl?>/openmrs/index">Sử dụng</a></p>
            </div>
        </div>

    </div>
</div>
