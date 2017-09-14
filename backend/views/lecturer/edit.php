<?php
$this->title = 'Lecturer edit';
// $this->params['breadcrumbs'][] = ['lable'=>'การจัดกาาร','url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;
$baseUrl=\Yii::getAlias('@web');

?>

<form action="<?=$baseUrl."/lecturer/save"?>" method="get">
	<input type="hidden" name="id" value="<?=$model['_id']?>">
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" name="name" value="<?=$model['name']?>" class="form-control">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">DOB</label>
    <input type="text" name="dob" value="<?=$model['dob']?>" class="form-control">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Gender</label>
    <input type="text" name="gender" value="<?=$model['gender']?>" class="form-control">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Degree</label>
    <input type="text" name="degree" value="<?=$model['degree']?>" class="form-control">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Address</label>
    <input type="text" name="address" value="<?=$model['address']?>" class="form-control">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="text" name="email" value="<?=$model['email']?>" class="form-control" >
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Phone Number</label>
    <input type="text" name="phone_number" value="<?=$model['phone_number']?>" class="form-control" >
  </div> 

	<button type="submit" class="btn btn-primary">Save</button>
	
</form>	