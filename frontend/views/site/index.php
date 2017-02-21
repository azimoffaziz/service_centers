<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Компьютерная техника</h2>

                <p> <?php
                    foreach ($model as $models){
                        $centers_count = 0;
                        $category = explode(",", $models->category_id);

                        for ($i=0; $i< count($category); $i++){
                            if($category[$i] == 1){
                                foreach ($centers as $center){
                                    $service_id = explode(",", $center->service_id);
                                    foreach ($service_id as $services_id){
                                        if($services_id == $models->id){
                                            $centers_count = $centers_count+1;
                                        }
                                    }
                                }
                            echo $models->service_name." (".$centers_count." сервис-центра)</br>";}
                        }
                    }; ?>
                    </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Крупная бытовая техника</h2>

                <p> <?php
                    foreach ($model as $models){
                        $centers_count = 0;
                        $category = explode(",", $models->category_id);

                        for ($i=0; $i< count($category); $i++){
                            if($category[$i] == 2){
                                foreach ($centers as $center){
                                    $service_id = explode(",", $center->service_id);
                                    foreach ($service_id as $services_id){
                                        if($services_id == $models->id){
                                            $centers_count = $centers_count+1;
                                        }
                                    }
                                }
                                echo $models->service_name." (".$centers_count." сервис-центра)</br>";}
                        }
                    }; ?>
                </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Мелкая бытовая техника</h2>

                <p> <?php
                    foreach ($model as $models){
                        $centers_count = 0;
                        $category = explode(",", $models->category_id);

                        for ($i=0; $i< count($category); $i++){
                            if($category[$i] == 3){
                                foreach ($centers as $center){
                                    $service_id = explode(",", $center->service_id);
                                    foreach ($service_id as $services_id){
                                        if($services_id == $models->id){
                                            $centers_count = $centers_count+1;
                                        }
                                    }
                                }
                                echo $models->service_name." (".$centers_count." сервис-центра)</br>";}
                        }
                    }; ?>
                </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
