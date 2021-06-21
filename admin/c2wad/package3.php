<?php

session_start();


include "../../config/db.php";

$msg = "";
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_SESSION['uid'])){
	



}
else{


	header("location:../c2wadmin/signin.php");
}



if(isset($_POST['package33'])){



$email =$link->real_escape_string( $_POST['email']);
$pname =$link->real_escape_string( $_POST['pname']);
$increase =$link->real_escape_string( $_POST['increase']);
$bonus =$link->real_escape_string($_POST['bonus']);
$duration =$link->real_escape_string($_POST['duration']);
$froms =$link->real_escape_string($_POST['froms']);
$tos =$link->real_escape_string($_POST['tos']);



    $sql = "INSERT INTO package3 (email,pname,increase,bonus,duration,froms,tos) VALUES ('$email','$pname','$increase','$bonus','$duration','$froms','$tos')";


$sql1= "SELECT * FROM package3 WHERE id = '5'";
  $result1 = mysqli_query($link,$sql1);
  if(mysqli_num_rows($result1) > 0){
   $row = mysqli_fetch_assoc($result1);
   $row['id'];
 
  }
 
if(isset($row['id']) &&  $row['id']== '5'){
	$msg= " Package3 already added";

}else{


                  if (mysqli_query($link, $sql)) {

  
               $msg= " Package3 has been successfully added";

                           } else {
                        $msg= " Package3 was not added ";
                         }
                        }   
}



if(isset($_POST['u3'])){
	
	
$email =$link->real_escape_string( $_POST['email']);
$pname =$link->real_escape_string( $_POST['pname']);
$increase =$link->real_escape_string( $_POST['increase']);
$bonus =$link->real_escape_string($_POST['bonus']);
$duration =$link->real_escape_string($_POST['duration']);
$froms =$link->real_escape_string($_POST['froms']);
$tos =$link->real_escape_string($_POST['tos']);

	
$sql1 = "UPDATE package3 SET email='$email',pname='$pname',increase='$increase',bonus='$bonus',duration='$duration',froms='$froms',tos='$tos'  WHERE id='5'";

if (mysqli_query($link, $sql1)) {
    $msg = "Package updated successfully!";
} else {
    $msg = "Package not updated! ";
}
}


include "header.php";


    ?>





 <div class="content-wrapper">
  


  <!-- Main content -->
  <section class="content">



   




<div class="col-md-12 col-sm-12 col-sx-12">
          <div class="box box-default">
            <div class="box-header with-border">

          <h4 align="center"><i class="fa fa-gears"></i> PACKAGE MANAGEMENT</h4>
</br>

   
         <?php
  

$sql1= "SELECT * FROM package3 WHERE id = '5'";
  $result1 = mysqli_query($link,$sql1);
  if(mysqli_num_rows($result1) > 0){
   $row = mysqli_fetch_assoc($result1);
   
   $row['email'];
 
  }


?>
        
         

 
          <hr></hr>
          
        
          
            <div class="box-header with-border">
            
            <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
          </br>

     <form class="form-horizontal" action="package3.php" method="POST" >

           <legend>Package Three</legend>
		   
		   
		   <input type="hidden" name="email"  value="<?php echo $_SESSION['email'];?>" class="form-control">

     <div class="form-group">
        <input type="text" name="pname" placeholder="Package Name"  value="<?php echo $row['pname'];?>" class="form-control">
        </div>

       <div class="form-group">
        <input type="text"  name="increase" placeholder="Daily Percentage Increase " value="<?php echo $row['increase'];?>"  class="form-control">
      </div>

      <div class="form-group">
        <input type="text"   name="bonus" placeholder="Activation Bonus"   value="<?php echo $row['bonus'];?>" class="form-control">
      </div>

      <div class="form-group">
        <input type="text"  name="duration" placeholder="Package Duration"   value="<?php echo $row['duration'];?>"  class="form-control">
      </div>
        
       
        <div class="form-group">
        <input type="text"  name="froms" placeholder="Package Price 'FROM'"  value="<?php echo $row['froms'];?>"  class="form-control">
        </div>
        
		
        <div class="form-group">
        <input type="text"  name="tos" placeholder="Package Price 'TO'" value="<?php echo $row['tos'];?>"  class="form-control">
        </div>
      <button style="" type="submit" class="btn btn-info" name="package3" >Add Package3 </button>
	  
	  <button style="" type="submit" class="btn btn-primary" name="u3" >Upgrade Package3 </button>
	  


    </form>
</br></br>

<a href="package2.php"><button style=""  class="btn btn-primary"  > Package Two </button></a>



    </div>
   </div>

   </div>
  </div>
  </section>
</div>

