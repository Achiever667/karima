<?php

session_start();


include "../../config/db.php";
include "../../config/config.php";

$msg = "";
use PHPMailer\PHPMailer\PHPMailer;

$email=$_GET['email'];

if(isset($_SESSION['email'])){
	

  $sql = "UPDATE users SET session='1' WHERE email='$email'";

  mysqli_query($link, $sql) or die(mysqli_error($link));


}
else{


header("location:../form/signin.php");
}

if(isset($_POST['p1'])){



  $email =$link->real_escape_string( $_POST['email']);
  $pname =$link->real_escape_string( $_POST['pname']);
  $increase =$link->real_escape_string( $_POST['increase']);
  $bonus =$link->real_escape_string($_POST['bonus']);
  $duration =$link->real_escape_string($_POST['duration']);
  $pdate =$link->real_escape_string($_POST['pdate']);
  $froms =$link->real_escape_string($_POST['froms']);

  
  $sql1= "SELECT * FROM users WHERE email = '$email'";
    $result1 = mysqli_query($link,$sql1);
    if(mysqli_num_rows($result1) > 0){
     $row = mysqli_fetch_assoc($result1);
     $row['activate'];
     $row['bonus'];
   
    
    if(isset($row['activate']) &&  $row['activate']=='1' && isset($row['bonus'])){
 $bonuses =  $row['bonus'];


      $sql4 = "UPDATE users SET walletbalance = walletbalance - $bonuses WHERE email='$email'";
      mysqli_query($link, $sql4);
    }
  }
  
      $sql = "UPDATE users SET email='$email',pname='$pname',increase='$increase',bonus='$bonus',duration='$duration',pdate='$pdate',froms='$froms',activate='0'  WHERE email='$email'";
  
  
   
  if(isset($row['email']) &&  $row['pname']== $pname){
    $msg= " Package already selected you can only upgrade package!";
  
  }else{
      
      
      
      if(isset($row['activate']) &&  $row['activate']=='1'){
    $msg= "A Package is already running!";
  
  }else{
      
  
  
                    if (mysqli_query($link, $sql)) {
  
    
                 $msg= " Package has been successfully selected!";
  
                             } else {
                          $msg= " Package was not selected !";
                           }
                          }  
  }
  }
  

//package 2

if(isset($_POST['p2'])){



  $email =$link->real_escape_string( $_POST['email']);
  $pname =$link->real_escape_string( $_POST['pname']);
  $increase =$link->real_escape_string( $_POST['increase']);
  $bonus =$link->real_escape_string($_POST['bonus']);
  $duration =$link->real_escape_string($_POST['duration']);
  $pdate =$link->real_escape_string($_POST['pdate']);
  $froms =$link->real_escape_string($_POST['froms']);

  
  
  
  $sql1= "SELECT * FROM users WHERE email = '$email'";
    $result1 = mysqli_query($link,$sql1);
    if(mysqli_num_rows($result1) > 0){
     $row = mysqli_fetch_assoc($result1);
     $row['activate'];
     $row['bonus'];
   
    
    if(isset($row['activate']) &&  $row['activate']=='1' && isset($row['bonus'])){
 $bonuses =  $row['bonus'];


      $sql4 = "UPDATE users SET walletbalance = walletbalance - $bonuses WHERE email='$email'";
      mysqli_query($link, $sql4);
    }
  }
  
      $sql = "UPDATE users SET email='$email',pname='$pname',increase='$increase',bonus='$bonus',duration='$duration',pdate='$pdate',froms='$froms',activate='0'  WHERE email='$email'";
   
  if(isset($row['email']) &&  $row['pname']== $pname){
    $msg= " Package already selected you can only upgrade package!";
  
  }else{
      
      
       
      if(isset($row['activate']) &&  $row['activate']=='1'){
    $msg= "A Package is already running!";
  
  }else{
      
  
  
                    if (mysqli_query($link, $sql)) {
  
    
                 $msg= " Package has been successfully selected!";
  
                             } else {
                          $msg= " Package was not selected !";
                           }
                          }   
  }
}

// end of package 2


// package 3

if(isset($_POST['p3'])){



  $email =$link->real_escape_string( $_POST['email']);
  $pname =$link->real_escape_string( $_POST['pname']);
  $increase =$link->real_escape_string( $_POST['increase']);
  $bonus =$link->real_escape_string($_POST['bonus']);
  $duration =$link->real_escape_string($_POST['duration']);
  $pdate =$link->real_escape_string($_POST['pdate']);
  $froms =$link->real_escape_string($_POST['froms']);

  
  
  $sql1= "SELECT * FROM users WHERE email = '$email'";
    $result1 = mysqli_query($link,$sql1);
    if(mysqli_num_rows($result1) > 0){
     $row = mysqli_fetch_assoc($result1);
     $row['activate'];
     $row['bonus'];
   
    
    if(isset($row['activate']) &&  $row['activate']=='1' && isset($row['bonus'])){
 $bonuses =  $row['bonus'];


      $sql4 = "UPDATE users SET walletbalance = walletbalance - $bonuses WHERE email='$email'";
      mysqli_query($link, $sql4);
    }
  }
  
      $sql = "UPDATE users SET email='$email',pname='$pname',increase='$increase',bonus='$bonus',duration='$duration',pdate='$pdate',froms='$froms',activate='0'  WHERE email='$email'";
  if(isset($row['email']) &&  $row['pname']== $pname){
    $msg= " Package already selected you can only upgrade package!";
  
  }else{
  
  
  
  if(isset($row['activate']) &&  $row['activate']=='1'){
    $msg= "A Package is already running!";
  
  }else{
      
  
  
                    if (mysqli_query($link, $sql)) {
  
    
                 $msg= " Package has been successfully selected!";
  
                             } else {
                          $msg= " Package was not selected !";
                           }
                          }   
  }
}
  
// end of package 3

include "header.php";


    ?>



<style>





</style>












<link rel="stylesheet" href="http://cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.css"/>
    <link rel="stylesheet" href="http://cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css"/>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/responsive/1.0.2/js/dataTables.responsive.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

   


<div class="panel-header bg-light-gradient shadow">
						<div class="page-inner py-5">
							<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
								<div>
									<h2 class="text-dark pb-2 fw-bold">Investment Packages</h2>







                  
									<h5 style="color:#000" class="text-dark op-7 mb-2"><marquee style="color:#000" width="50%" >Thanks for investing in <?php  echo $name;?> have a nice day!</marquee></h5>
								</div>
								</br>


              

								<div class="ml-md-auto py-2 py-md-0">
									<label for="" class="p-1 text-secondary">Referral Link</label><br>
 <input type="text" id="myInput" style="width:50%; padding:4px; border-radius:5%;" value="https://<?php echo $bankurl;?>/users/form/signup.php?refcode=<?php echo $_SESSION['refcode'];?>" class="p-2 text-secondary" readonly="true"/>
 <button class="btn border-secondary" onclick="myFunction()">Copy</button>
								</div>
							</div>
						</div>
				


<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "title": "S&P 500",
      "proName": "OANDA:SPX500USD"
    },
    {
      "title": "Nasdaq 100",
      "proName": "OANDA:NAS100USD"
    },
    {
      "title": "EUR/USD",
      "proName": "FX_IDC:EURUSD"
    },
    {
      "title": "BTC/USD",
      "proName": "BITSTAMP:BTCUSD"
    },
    {
      "title": "ETH/USD",
      "proName": "BITSTAMP:ETHUSD"
    }
  ],
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>


               
              
            </div> 







 
          <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
          </br>





            <div class="page-inner " style="margin-top:50px">


<div class="row row-card-no-pd mt--2">
  <div class="col-sm-6 col-md-4  col-xs-6" >
    <div class="card card-stats card-round" style="background-color:purple">
      <div class="card-body ">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
              <i class="fa fa-users " style="color:#fff"></i>
            </div>
          </div>
          <div class="col-7 col-stats" >
            <div class="numbers">

          


             
      <?php $sql= "SELECT * FROM package1";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				  while($row = mysqli_fetch_assoc($result)){  
            $row['pname'];
				  ?>

<form action="investment.php?email=<?php  echo $_SESSION['email'];?>" method="POST">
       <h4 style="color:#fff"><?php echo $row['pname'];?></h4>
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
            <i class="fa fa-check" style="color:#fff"> </i><span style="color:#fff"> $<?php echo $row['froms'];?>- $<?php echo $row['tos'];?> </span> </br>
            <i class="fa fa-check" style="color:#fff"> </i><span style="color:#fff" class="plan-type"><?php echo $row['duration'];?> Days Investment</span></div>
    </header>
   
   <i class="fa fa-check" style="color:#fff"> </i><span style="color:#fff">  Plus $<?php echo $row['bonus'];?> Activation bonus</br>
      <i class="fa fa-check" style="color:#fff"> </i> <span style="color:#fff"> Fast Activation</br>
      <i class="fa fa-check" style="color:#fff"> </i> <span style="color:#fff"> <?php echo $row['increase'];?>% Profit Daily</br>
      
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
        </div>
      </div>
    </div>
  






  <div class="col-sm-6 col-md-4 col-xs-6">
    <div class="card card-stats card-round" style="background-color:#2949a3">
      <div class="card-body ">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
              <i class="flaticon-coins " style="color:#fff"></i>
            </div>
          </div>
          <div class="col-7 col-stats">
            <div class="numbers">


            
      <?php $sql= "SELECT * FROM package2";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				  while($row = mysqli_fetch_assoc($result)){  
            $row['pname'];
				  ?>

<form action="investment.php?email=<?php  echo $_SESSION['email'];?>" method="POST">
<h4 style="color:#fff"><?php echo $row['pname'];?></h4>
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
            <i class="fa fa-check" style="color:#fff"> </i><span style="color:#fff"> $<?php echo $row['froms'];?>- $<?php echo $row['tos'];?> </span> </br>
            <i class="fa fa-check" style="color:#fff"> </i><span style="color:#fff" class="plan-type"><?php echo $row['duration'];?> Days Investment</span></div>
    </header>
   
   <i class="fa fa-check" style="color:#fff"> </i> <span style="color:#fff"> Plus $<?php echo $row['bonus'];?> Activation bonus</br>
      <i class="fa fa-check" style="color:#fff"> </i> <span style="color:#fff"> Fast Activation</br>
      <i class="fa fa-check" style="color:#fff"> </i> <span style="color:#fff"> <?php echo $row['increase'];?>% Profit Daily</br>
      
   </br>
    <div class="plan-select"><button type="submit" class="btn btn-danger" name="p2">Select Plan</button></div>
  </div>
</div>
</form>




  <?php
 }
			  }
			  ?>
            </div>
          </div>
        </div>
      </div>
   


  <div class="col-sm-6 col-md-4">
    <div class="card card-stats card-round" style="background-color:purple">
      <div class="card-body">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
              <i class="flaticon-settings" style="color:#fff"></i>
            </div>
          </div>
          <div class="col-7 col-stats">
            <div class="numbers">
  

              
      <?php $sql= "SELECT * FROM package3";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				  while($row = mysqli_fetch_assoc($result)){  
            $row['pname'];
				  ?>
        
<form action="investment.php?email=<?php  echo $_SESSION['email'];?>" method="POST">
<h4 style="color:#fff"><?php echo $row['pname'];?></h4>
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
            <i class="fa fa-check" style="color:#fff"> </i> <span style="color:#fff"> $<?php echo $row['froms'];?>- $<?php echo $row['tos'];?> </span> </br>
            <i class="fa fa-check" style="color:#fff"> </i> <span style="color:#fff" class="plan-type"><?php echo $row['duration'];?> Days Investment</span></div>
    </header>
   
   <i class="fa fa-check" style="color:#fff"> </i> <span style="color:#fff"> Plus $<?php echo $row['bonus'];?> Activation bonus</br>
      <i class="fa fa-check" style="color:#fff"> </i> <span style="color:#fff"> Fast Activation</br>
      <i class="fa fa-check" style="color:#fff"> </i> <span style="color:#fff"> <?php echo $row['increase'];?>% Profit Daily</br>
      
   </br>
    <div class="plan-select"><button type="submit" class="btn btn-danger" name="p3">Select Plan</button></div>
  </div>

</form>
 


  <?php
 }
			  }
			  ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    
  <?php
		 
		 include 'footer.php';
		 
		 ?>   



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