<?php  
 include 'conn.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <title>blood-donation</title>
</head>
<body>

<style>
  .container {
    padding-top: 25px;
  }
  h2{
    text-align:center;
}
/* button operations*/
.btn-secondary{
    background-color: #37fa88;
    padding: 1%;
    color: wheat;
    text-decoration: none;
    font-weight: bold;
}
.btn-secondary:hover{
    background-color: #115304 ;
}.btn-danger{
    background-color: #e92c25;
    padding: 1%;
    color: wheat;
    text-decoration: none;
    font-weight: bold;
}
.btn-danger:hover{
    background-color: #4d0404;
}
</style>

	<div class="container">
  
       <h2>  Donor And Patients Details     </h2>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">sno</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">date</th>
      <th scope="col">gender</th>
      <th scope="col">bgroup</th>
      <th scope="col">address</th>
      <th scope="col">operation</th>

    </tr>
  </thead>
  <tbody>
<tr><td><h5> Donor Details </h5></td></tr>
<?php 


$sql = "SELECT * FROM donor";
$result=mysqli_query($conn,$sql);
if($result){
/*this is will fetch the record from db
	$row=mysqli_fetch_assoc($result);
	echo $row['name']; */

	while($row=mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$date = $row['date'];
		$gender = $row['gender'];
		$bgroup = $row['bgroup'];
		$address = $row['address'];



    echo '		
  <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$date.'</td>
      <td>'.$gender.'</td>
      <td>'.$bgroup.'</td>
      <td>'.$address.'</td>
       <td>
                    <a href="update.php?id='.$id.'" class="btn btn-secondary">update </a>
                    <a href="delete.php?id='.$id.'" class="btn btn-danger">delete </a>
        </td>

    </tr>'; 

	}
}

?>







<tr><td><h5> Patient Details </h5></td></tr>


<?php 

$sql = "SELECT * FROM patient";
$result=mysqli_query($conn,$sql);
if($result){
/*this is will fetch the record from db
	$row=mysqli_fetch_assoc($result);
	echo $row['name']; */


	while($row=mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$date = $row['date'];
		$gender = $row['gender'];
		$bgroup = $row['bgroup'];
		$address = $row['address'];



    echo '		
  <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$date.'</td>
      <td>'.$gender.'</td>
      <td>'.$bgroup.'</td>
      <td>'.$address.'</td>
   <td>
                    <a href="updatepatient.php?id='.$id.'" class="btn btn-secondary">update admin</a>
                    <a href="deletepatient.php?id='.$id.'" class="btn btn-danger">delete admin</a>
        </td>




    </tr>'; 

	}
}

?>









  </tbody>
</table>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>




