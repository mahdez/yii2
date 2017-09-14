<?php
$this->title = 'Create Lecturer';
// $this->params['breadcrumbs'][] = ['lable'=>'เพิ่มอาจารย์','url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;
$baseUrl=\Yii::getAlias('@web');

?>

<form action="<?=$baseUrl."/lecturer/save"?>" method="get">

	ชื่อ<input type="text" name="name">
	คำอธิบาย<input type="text" name="dob">
	เพศ<input type="text" name="gender">
	คำนำหน้า<input type="text" name="degree">
	อีเมล์<input type="text" name="email">
	โทรศัพท์<input type="text" name="phone_number">
	<input type="submit" value="บันทึก">
	
	
	
	
</form>