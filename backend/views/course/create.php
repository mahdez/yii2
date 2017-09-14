<?php
$this->title = 'Create Coures';
// $this->params['breadcrumbs'][] = ['lable'=>'การจัดกาาร','url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;
$baseUrl=\Yii::getAlias('@web');

?>

<form action="<?=$baseUrl."/course/save"?>" method="get">

	รหัสรายวิชา<input type="text" name="course_id">
	ชื่อรายวิชาา<input type="text" name="course_name">
	คำอธิบาย<input type="text" name="description">
	<input type="submit" value="บันทึก">
</form>