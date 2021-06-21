
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


if(isset($_POST['package44'])){



$email =$link->real_escape_string( $_POST['email']);
$pname =$link->real_escape_string( $_POST['pname']);
$increase =$link->real_escape_string( $_POST['increase']);
$bonus =$link->real_escape_string($_POST['bonus']);
$duration =$link->real_escape_string($_POST['duration']);
$froms =$link->real_escape_string($_POST['froms']);
$tos =$link->real_escape_string($_POST['tos']);



    $sql = "INSERT INTO package4 (email,pname,increase,bonus,duration,froms,tos) VALUES ('$email','$pname','$increase','$bonus','$duration','$froms','$tos')";


$sql1= "SELECT * FROM package4 WHERE email = '$email'";
  $result1 = mysqli_query($link,$sql1);
  if(mysqli_num_rows($result1) > 0){
   $row = mysqli_fetch_assoc($result1);
   $row['email'];
 
  }
 
if(isset($row['email']) &&  $row['email']== $email){
	$msg= " Package4 already added";

}else{


                  if (mysqli_query($link, $sql)) {

  
               $msg= " Package4 has been successfully added";

                           } else {
                        $msg= " Package4 was not added ";
                         }
                        }   
}


if(isset($_POST['u44'])){
	
	
$email =$link->real_escape_string( $_POST['email']);
$pname =$link->real_escape_string( $_POST['pname']);
$increase =$link->real_escape_string( $_POST['increase']);
$bonus =$link->real_escape_string($_POST['bonus']);
$duration =$link->real_escape_string($_POST['duration']);
$froms =$link->real_escape_string($_POST['froms']);
$tos =$link->real_escape_string($_POST['tos']);

	
$sql1 = "UPDATE package4 SET email='$email',pname='$pname',increase='$increase',bonus='$bonus',duration='$duration',froms='$froms',tos='$tos'  WHERE email='$email'";

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


        
         

 
          <hr></hr>
          
        
          
            <div class="box-header with-border">
            
            <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
          </br>

     <form class="form-horizontal" action="package4.php" method="POST" >

           <legend>Package Four</legend>
		   
		   
		   <input type="hidden" name="email"  value="<?php echo $_SESSION['email'];?>" class="form-control">

     <div class="form-group">
        <input type="text" name="pname" placeholder="Package Name"  class="form-control">
        </div>

       <div class="form-group">
        <input type="number"  name="increase" placeholder="Daily Percentage Increase "  class="form-control">
      </div>

      <div class="form-group">
        <input type="number"   name="bonus" placeholder="Activation Bonus"   class="form-control">
      </div>

      <div class="form-group">
        <input type="number"  name="duration" placeholder="Package Duration"   class="form-control">
      </div>
        
       
        <div class="form-group">
        <input type="number"  name="froms" placeholder="Package Price 'FROM'"   class="form-control">
        </div>
        
		
        <div class="form-group">
        <input type="number"  name="tos" placeholder="Package Price 'TO'"   class="form-control">
        </div>
      <button style="" type="submit" class="btn btn-info" name="package4" >Add Package4 </button>
	  
	  <button style="" type="submit" class="btn btn-primary" name="u4" >Upgrade Package4 </button>
	  


    </form>
</br></br>

<a href="package2.php"><button style=""  class="btn btn-primary"  > Package Two </button></a>
<a href="package3.php"><button style=""  class="btn btn-primary" > Package Three </button></a>



    </div>
   </div>

   </div>
  </div>
  </section>
</div>

