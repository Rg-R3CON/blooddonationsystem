<!-- C:\xampp\htdocs\projects\demoprojects\gitprojects\demoprojects\blooddonationsystem\blood-donation.php -->

<?php include 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blood-donation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="BLOOD.css">
</head>
<body>


<header class="bg-info">
<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="blood-bag.png" width="30" height="30" class="d-inline-block align-top" alt="">
    DONATE THE BLOOD
  </a>
</nav>    
</header>
<br>




<section>

<div class="container">
 <div class="card">
  <div class="inner-box" id="card">
    <div class="card-front">


<?php 
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$date = $_POST['date'];
    	$gender = $_POST['gender'];
		$bgroup = $_POST['bgroup'];
		$address = $_POST['address'];
  	$insert="INSERT INTO donor(name,email,mobile,date,gender,bgroup,address)VALUES('$name','$email','$mobile','$date','$gender','$bgroup','$address')";
	$result = mysqli_query($conn, $insert);
	if($result){
		// echo "data inserted"
		header('location:display.php');

	}else{
		echo "connection failed";		
	}


	}?>



    <h2>BLOOD-DONOR FORM</h2> 

 <form action="" method="post">
<input type="text" name="name" placeholder="name" class="input-box" require>
<input type="phone" name="mobile" placeholder="mobile-number" class="input-box" require>
<input type="email" name="email" placeholder="email" class="input-box" id="email" onsubmit="return validate()">
   <table class="text-white">
       <tr>
           <td>   Date Of Birth     </td>
           <td> <input type="date" name="date" class="input-box"> </td>
       </tr>

       <tr>
           <td>   Gender     </td>
           <td> <input type="radio" name="gender" value="male"> male
                <input type="radio" name="gender" value="female"> female </td>
       </tr>

        <tr>
           <td class="p-1">   BLOOD GROUP       </td>
           <td> <select name="bgroup"> <option value="A+"> A+</option>
                <option value="A-"> A-</option>
                <option value="B+"> B+</option>
                <option value="B-"> B-</option>
                <option value="O+"> O+</option>
                <option value="O-"> O-</option>


           </SELECT> </td>
       </tr>
         <tr>
           <td>   address     </td>
           <td> <textarea row="5" col="17" name="address" placeholder="Address" class="input-area-box"></textarea></td>
       </tr>

</table>

<button type="submit" class="submit-btn" name="submit">submit </button> <br>
 <button type="button" class="btn" onclick="openpatient()">I'm patient</button>

</form>    
      </div>


     
     <?php 
	if(isset($_POST['submit-patients'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$date = $_POST['date'];
    $gender = $_POST['gender'];
		$bgroup = $_POST['bgroup'];
		$address = $_POST['address'];
  	$insert="INSERT INTO patient(name,email,mobile,date,gender,bgroup,address)VALUES('$name','$email','$mobile','$date','$gender','$bgroup','$address')";
	  $result = mysqli_query($conn, $insert);
	if($result){
		// echo "data inserted"
		header('location:display.php');

	}else{
		echo "connection failed";		
	}


	}?>
     
     
     
     
     
     
     
     
     
     
      <div class="card-back">
             <h2>BLOOD-PATIENT FORM</h2> 

  
 <form action="" method="post">
<input type="text" name="name" placeholder="name" class="input-box" require>
<input type="phone" name="mobile" placeholder="mobile-number" class="input-box" require>
<input type="email" name="email" placeholder="email" class="input-box" id="email" onsubmit="return validate()">
   <table class="text-white">
 <tr>
           <td>   Date Of Birth     </td>
           <td> <input type="date" name="date" class="input-box"> </td>
       </tr>

       <tr>
           <td>   Gender     </td>
           <td> <input type="radio" name="gender" value="male"> male
                <input type="radio" name="gender" value="female"> female </td>
       </tr>

        <tr>
           <td class="p-1">   BLOOD GROUP </td>
           <td> <select name="bgroup"> <option value="A+"> A+</option>
                <option value="A-"> A-</option>
                <option value="B+"> B+</option>
                <option value="B-"> B-</option>
                <option value="O+"> O+</option>
                <option value="O-"> O-</option>
           </SELECT> </td>
       </tr>
         <tr>
           <td>   address     </td>
           <td> <textarea row="5" col="17" name="address" placeholder="Address" class="input-area-box"></textarea></td>
       </tr>
</table>

<button type="submit" class="submit-btn" name="submit-patients">submit </button> <br>
 <button type="button" class="btn" onclick="opendonor()">I'm donor</button>

</form>
      </div>
   

       


      </div>
    </div>
  </div>
</div>
    




<script>
  function validate(){
      var email = document.getElementById('email');
      var reg = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-zA-Z]+)(.[a-z]+)?$/;
      var result = reg.test(email);

    if(result==false){
        alert("sorry invalid email id");
        return false;

    }
        return true;
  }    

</script>





<script>
    var card = document.getElementById("card");
    function openpatient(){
        card.style.transform = "rotateY(-180deg)";
    }
    function opendonor(){
        card.style.transform = "rotateY(0deg)";
    }
</script>

    </section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>