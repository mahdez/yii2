<?php
$this->title = 'Create Lecturer';
// $this->params['breadcrumbs'][] = ['lable'=>'การจัดกาาร','url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;
$baseUrl=\Yii::getAlias('@web');

?>

<form action="<?=$baseUrl."/lecturer/save"?>" method="get">

  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text"  name="name"class="form-control">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">DOB</label>
    <input type="text" name="dob" class="form-control">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Gender</label>
    <input type="text" name="gender" class="form-control">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Degree</label>
    <input type="text" name="degree" class="form-control">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Address</label>
    <input type="text" name="address" class="form-control">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="text" name="email" class="form-control" >
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Phone Number</label>
    <input type="text" name="phone_number" class="form-control" >
  </div> 

<button type="submit" class="btn btn-primary">Create</button>
	
</form>