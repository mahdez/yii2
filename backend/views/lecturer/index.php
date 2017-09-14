<?php
$this->title = 'Lecturer Manage';
$this->params['breadcrumbs'][] = $this->title;
$baseUrl=\Yii::getAlias('@web');
?>
<br>
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
    background-color: #4CAF50 !important;
    color: white;
}
</style>
<table border="1" >
    <tr>
    <th class="bg-primary">#id</th>
    <th class="bg-primary">name</th>
    <th class="bg-primary">dob</th>
    <th class="bg-primary">gender</th>
    <th class="bg-primary">degree</th>
    <th class="bg-primary">address</th>
    <th class="bg-primary">email</th>
    <th class="bg-primary">phone_number</th>
    <th class="bg-primary">Edit</th>
    <th class="bg-primary">Delete</th>
    </tr>
  
  <?php foreach ($result as $var){?>
  	<tr>
  		<td><?=$var['_id']?></td>
  		<td  width="200px"><?=$var['name']?></td>
  		<td  width="100px"><?=$var['dob']?></td>
  		<td><?=$var['gender']?></td>
  		<td width="150px"><?=$var['degree']?></td>
  		<td width="150px"><?=$var['address']?></td>
  		<td><?=$var['email']?></td>
  		<td><?=$var['phone_number']?></td>
  		<td><a href="<?= $baseUrl."/lecturer/edit?id=".$var['_id']?>">Edit</a></td>
  		<td><a href="<?= $baseUrl."/lecturer/delete?id=".$var['_id']?>">Delete</a></td>
  	<tr>
  	
  	<?php }?>
</table>

<div> <br> </div>
<div align="right"> 
<a href="<?=$baseUrl."/lecturer/create" ?>">
<button type="button" class="btn btn-success"> + CREATE</button></a>
</div>

