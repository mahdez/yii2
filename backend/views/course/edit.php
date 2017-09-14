<?php
$this->title = 'Create Coures';
// $this->params['breadcrumbs'][] = ['lable'=>'การจัดกาาร','url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;
$baseUrl=\Yii::getAlias('@web');

?>

<form action="<?=$baseUrl."/course/save"?>" method="get">
	<input type="hidden" name="id" value="<?=$model['_id']?>">
	รหัสรายวิชา<input type="text" name="course_id" value="<?=$model['course_id']?>">
	ชื่อรายวิชาา<input type="text" name="course_name" value="<?=$model['name']?>">
	คำอธิบาย<input type="text" name="description" value="<?=$model['description']?>">
	<input type="submit" value="บันทึก">
</form>