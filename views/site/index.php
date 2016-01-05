<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::$app->params['siteName'];

?>



<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="<?= Yii::$app->homeUrl; ?>public/careers.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1></h1>


        </div>
      </div>
    </div>
    <div class="item">
      <img class="second-slide" src="<?= Yii::$app->homeUrl; ?>public/careers2.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1></h1>


        </div>
      </div>
    </div>
    <div class="item">
      <img class="third-slide" src="<?= Yii::$app->homeUrl; ?>public/careers3.jpg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <h1></h1>


        </div>
      </div>
    </div>
  </div>


</div><!-- /.carousel -->


<div class="container">
<div class="panel panel-info">
<div class="panel-heading">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#JobFunction" aria-controls="JobFunction" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-briefcase"></span> Job Function</a></li>
    <li role="presentation"><a href="#Location" aria-controls="Location" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-map-marker"></span> Location</a></li>

  </ul>

</div>

<div class="panel-body">

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="JobFunction">

      <?php
      //list Job Function in Index
       $JobFunction = app\models\JobFunction::find()->orderBy('id_job_function')->all();
       foreach($JobFunction as $row) {
           echo "<div class='col-lg-3 style:height:0px;'>"
           .Html::a($row->function,['career/index','CareerSearch[function]'=>$row->function]).
           " (0)</div>";
       }

    ?>

  </div>


    <div role="tabpanel" class="tab-pane" id="Location">

      <?php
      //list Location in Index
       $Location = app\models\Location::find()->orderBy('id_location')->all();
       foreach($Location as $row) {
           echo "<div class='col-lg-3 style:height:0px;'><h3>"
           .Html::a($row->location,['career/index','CareerSearch[location]'=>$row->location]).
           " (0)</h3></div>";
       }

    ?>

    </div>



  </div>

</div>
</div>
</div>
