<?php
$this->title = 'Course Manage';
$this->params['breadcrumbs'][] = $this->title;
$baseUrl=\Yii::getAlias('@web');
?>
<form action="" method="get">
	<div class="row">
		<div class="col-sm-10">
			<input name="search" class="form-control" type="text" value="<?=$input?>">
		</div>
		<div class="col-sm-2">
			<button type="submit" class="form-control btn btn-primary btn-sm">search</button>
		</div>
	</div>
</form>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
<div> <br> </div>
<table border="1">
  <tr>
    <th>#id</th>
    <th>courseID</th>
    <th>CourseName</th>
    <th>Description</th>
    <th>LectureID</th>
    <th></th>
    <th></th>
    
  </tr>
  

  <?php foreach ($result as $var){?>
  	<tr>
  	
  		<td width="100px"><?=$var['_id']?></td>
  		<td><?=$var['course_id']?></td>
  		<td><?=$var['name']?></td>
  		<td><?=$var['description']?></td>
  		<td><?=$var['lecturer_id']?></td>
  		<td><a href="<?= $baseUrl."/course/edit?id=".$var['_id']?>">แก้ไข</a></td>
  		<td><a href="<?= $baseUrl."/course/delete?id=".$var['_id']?>">ลบ</a></td>
  	<tr>
  	
  	<?php }?>

</table>

<div> <br> </div>
<div align="right">
<a href="<?=$baseUrl."/course/create" ?>">
<button type="button" class="btn btn-success"> + สร้าง</button></a>
</div>
