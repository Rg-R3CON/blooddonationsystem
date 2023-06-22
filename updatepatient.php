<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>    
<?php include 'conn.php'; ?>

<div class="main container">
<div class="wrapper">
<h1>UPDATE ADMIN</h1>
<br><br>
<?php 
    $id = $_GET['id'];

    $sqls = "select * from patient where id='$id'";
    $ress = mysqli_query($conn, $sqls);
                if(isset($_POST['submit']))
                {
                
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$gender = $_POST['gender'];
		$bgroup = $_POST['bgroup'];
		$address = $_POST['address'];
                     $sql = "update  patient set id='$id',name='$name',email='$email',mobile='$mobile',gender='$gender',bgroup='$bgroup',address='$address' where id='$id'";
                            $res = mysqli_query($conn, $sql);
                    if($res){
                             header('location:display.php');
}
}
?>




<style>

.box {
    width:800px;
    background: #ff7676;
    padding:25px;
    margin-left:50px;
}


</style>


<div class="box text-white">
 <form action="" method="post">
        <div class="row">
     <label for="name" class="col-md-3">Name</label>
<input type="text" name="name" placeholder="name" class="input-box col-md-9" require>
  </div>
<div class="row">
<label for="mobile" class="col-md-3">Mobile Number</label>
<input type="phone" name="mobile" placeholder="mobile-number" class="input-box col-md-9" require>
</div>
<div class="row">
<label for="email" class="col-md-3">Email</label>
<input type="email" name="email" placeholder="email" class="input-box col-md-9" id="email"  >
</div>
   <table class="text-white">
       

       <tr>
           <td>   Gender     </td>
           <td colspan="3" class="text-center"> <input type="radio" name="gender" value="male"> male
                <input type="radio" name="gender" value="female"> female </td>
       </tr>
        <tr>
           <td class="p-1">   BLOOD GROUP       </td>
           <td  colspan="3" class="text-center" > <select name="bgroup"> <option value="A+"> A+</option>
                <option value="A-"> A-</option>
                <option value="B+"> B+</option>
                <option value="B-"> B-</option>
                <option value="O+"> O+</option>
                <option value="O-"> O-</option>
           </SELECT> </td>
       </tr>
         <tr>
           <td>   address     </td>
           <td  class="text-center" > <textarea row="5" col="17" name="address" placeholder="Address" class="input-area-box"  ></textarea></td>
       </tr>
                <tr>
            <td colspan="2" class="text-center" >
                <input type="hidden" name="id"  >
                <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
            </td>   
        </tr>
</table>
</form>    
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>