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



include "header.php";


    ?>



<style>





</style>


 <div class="content-wrapper">
   <section class="content">


          <div class="box box-default">
            <div class="box-header with-border">

          <h4 align="center"><i class="fa fa-refresh"></i> CRYPTO INVESTMENT SCRIPT PLAN</h4>
          </br>
 
          <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
          </br>
          <div class="col-md-3 col-sm-12 col-sx-12">
          <div class="" style="background-color:#8fbaeb;color:#fff;padding:20%;border-radius:5%;">
  <div class="">
    <header>
      <h4 class="">

      <?php $sql= "SELECT * FROM package1";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				  while($row = mysqli_fetch_assoc($result)){  
            $row['pname'];
				  ?>

<form action="" method="POST">
       <?php echo $row['pname'];?>
       <?php
    $currentDateTime = date('Y-m-d H:i:s');
    
?> <input type="hidden" name="email" value="<?php  echo $_SESSION['email'];?>">
       <input type="hidden" name="pdate" value="0">
       <input type="hidden" name="pname" value=" <?php echo $row['pname'];?>">
       <input type="hidden" name="froms" value=" <?php echo $row['froms'];?>">
       <input type="hidden" name="bonus" value=" <?php echo $row['bonus'];?>">
       <input type="hidden" name="increase" value=" <?php echo $row['increase'];?>">
       <input type="hidden" name="duration" value=" <?php echo $row['duration'];?>">
      </h4>
      <div class="plan-cost"><span class="plan-price">
            <i class="fa fa-check"> </i> $<?php echo $row['froms'];?>- $<?php echo $row['tos'];?> </span> <span class="plan-type"><?php echo $row['duration'];?> Days</span></div>
    </header>
   
   <i class="fa fa-check"> </i> Plus $<?php echo $row['bonus'];?> Activation bonus</br>
      <i class="fa fa-check"> </i> Fast Activation</br>
      <i class="fa fa-check"> </i> <?php echo $row['increase'];?>% Profit Daily</br>
      
   </br>
    <div class="plan-select"><button type="submit" class="btn btn-danger" name="p1">Select Plan</button></div>
  </div>

</form>
  <?php
 }
			  }
			  ?>
			  </div>
			  </div>
  
 
  
   <div class="col-md-3 col-sm-12 col-sx-12">
          <div class="" style="background-color:#8fbaeb;color:#fff;padding:20%;border-radius:5%;">
    <header>
      <h4 class="">
         

      <?php $sql= "SELECT * FROM package2";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				  while($row = mysqli_fetch_assoc($result)){  
            $row['pname'];
				  ?>

<form action="" method="POST">
       <?php echo $row['pname'];?>
       <?php
    $currentDateTime = date('Y-m-d H:i:s');
    
?> <input type="hidden" name="email" value="<?php  echo $_SESSION['email'];?>">
       <input type="hidden" name="pdate" value="0">
       <input type="hidden" name="froms" value=" <?php echo $row['froms'];?>">
       <input type="hidden" name="pname" value=" <?php echo $row['pname'];?>">
       <input type="hidden" name="bonus" value=" <?php echo $row['bonus'];?>">
       <input type="hidden" name="increase" value=" <?php echo $row['increase'];?>">
       <input type="hidden" name="duration" value=" <?php echo $row['duration'];?>">
      </h4>
      <div class="plan-cost"><span class="plan-price">
            <i class="fa fa-check"> </i> $<?php echo $row['froms'];?>- $<?php echo $row['tos'];?> </span> <span class="plan-type"><?php echo $row['duration'];?> Days</span></div>
    </header>
   
   <i class="fa fa-check"> </i> Plus $<?php echo $row['bonus'];?> Activation bonus</br>
      <i class="fa fa-check"> </i> Fast Activation</br>
      <i class="fa fa-check"> </i> <?php echo $row['increase'];?>% Profit Daily</br>
      
   </br>
    <div class="plan-select"><button type="submit" class="btn btn-danger" name="p2">Select Plan</button></div>
  </div>
</div>
</form>




  <?php
 }
			  }
			  ?>
 
  <div class="col-md-3 col-sm-12 col-sx-12">
          <div class="" style="background-color:#8fbaeb;color:#fff;padding:20%;border-radius:5%;">
    <header>
      <h4 class="plan-title">


      <?php $sql= "SELECT * FROM package3";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				  while($row = mysqli_fetch_assoc($result)){  
            $row['pname'];
				  ?>
        
<form action="" method="POST">
       <?php echo $row['pname'];?>
       <?php
    $currentDateTime = date('Y-m-d H:i:s');
    
?> <input type="hidden" name="email" value="<?php  echo $_SESSION['email'];?>">
       <input type="hidden" name="pdate" value="0">
       <input type="hidden" name="pname" value=" <?php echo $row['pname'];?>">
       <input type="hidden" name="froms" value=" <?php echo $row['froms'];?>">
       <input type="hidden" name="bonus" value=" <?php echo $row['bonus'];?>">
       <input type="hidden" name="increase" value=" <?php echo $row['increase'];?>">
       <input type="hidden" name="duration" value=" <?php echo $row['duration'];?>">
      </h4>
      <div class="plan-cost"><span class="plan-price">
            <i class="fa fa-check"> </i> $<?php echo $row['froms'];?>- $<?php echo $row['tos'];?> </span> <span class="plan-type"><?php echo $row['duration'];?> Days</span></div>
    </header>
   
   <i class="fa fa-check"> </i> Plus $<?php echo $row['bonus'];?> Activation bonus</br>
      <i class="fa fa-check"> </i> Fast Activation</br>
      <i class="fa fa-check"> </i> <?php echo $row['increase'];?>% Profit Daily</br>
      
   </br>
    <div class="plan-select"><button type="submit" class="btn btn-danger" name="p3">Select Plan</button></div>
  </div>

</form>
 


  <?php
 }
			  }
			  ?>



  </div>


 
  </br>
          </div>
       
        </div>
</div>
       
        </div>
</div>
       
        </div>
</div>
       
        </div>

<script>
       
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
</script>