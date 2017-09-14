<?php 

$this->registerCssFile ( "@web/plugin/jquery-jvectormap-1.2.2.css" );

$this->registerJsFile('@web/plugin/jquery-jvectormap-1.2.2.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/plugin/jquery-jvectormap-world-mill-en.js',['depends' => [\yii\web\JqueryAsset::className()]]);

use yii\web\View;
$str = <<<EOT

$("#test").click(function(){
alert("test");
})

EOT;

$this->registerJs($str, View::POS_LOAD, 'form-js');

?>
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
		<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
				<div class="inner">
				<h3>150</h3>
				<li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
        </li>
				<p>New Orders</p>
				</div>
				<div class="icon">
				<i class="ion ion-bag"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
				 
        </div>
      
