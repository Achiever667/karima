<?php
session_start();

include "../../config/db.php";
include "../../config/config.php";

include "header.php";
$msg = "";
use PHPMailer\PHPMailer\PHPMailer;
if(isset($_GET['email'])){
	$email = $_GET['email'];
}else{
	$email = '';
}


if(isset($_SESSION['uid'])){
	



}
else{


	header("location:../c2wadmin/signin.php");
}
 


  $sql= "SELECT * FROM users WHERE email = '$email'";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
          $row = mysqli_fetch_assoc($result);

      
          $username =  $row['username'];
          
          

        }
				  if(isset($row['username'])  && isset($row['email']) && isset($row['walletbalance']) ){
                      $username;
                      $email;
				  }else{
           
    
              $username =  '';

                $email =  '';
          }
        
          
				  
        
      
      



    if(isset($_POST['edit'])){
	
	
      $emails =$link->real_escape_string( $_POST['email']);
       $username =$link->real_escape_string( $_POST['username']);
        $password =$link->real_escape_string( $_POST['password']);
      $walletbalance =$link->real_escape_string( $_POST['walletbalance']);
      $refbonus =$link->real_escape_string( $_POST['refbonus']);
      $refcode =$link->real_escape_string( $_POST['refcode']);
      $profit =$link->real_escape_string( $_POST['profit']);
      $pname =$link->real_escape_string( $_POST['pname']);
      
        $phone =$link->real_escape_string( $_POST['phone']);
          $address =$link->real_escape_string( $_POST['address']);
            $country =$link->real_escape_string( $_POST['country']);


      
          
        
      $sql1 = "UPDATE users SET username='$username', email='$emails',password='$password', walletbalance='$walletbalance', refbonus='$refbonus', refcode='$refcode', profit='$profit', pname='$pname', phone='$phone', country='$country', address='$address'       WHERE email='$email'";
      
      if (mysqli_query($link, $sql1)) {
          $msg = "Account Details Edited Successfully!";
      } else {
          $msg = "Cannot Edit Account! ";
      }
      }



 $sql= "SELECT * FROM users WHERE email = '$email'";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
          $row = mysqli_fetch_assoc($result);

      
          $username =  $row['username'];
          
          

        }
				  if(isset($row['username'])  && isset($row['email']) && isset($row['walletbalance']) ){
                      $username;
                      $email;
				  }else{
           
    
              $username =  '';

                $email =  '';
          }

  
  if(isset($row['active'])  && $row['active']==1){
    $acst = 'Activated &nbsp;&nbsp;<i style="color:green;font-size:20px;" class="fa  fa-check" ></i>';
    
  }else{
    $acst = 'Deactivated &nbsp;&nbsp;<i style="color:red;font-size:20px;" class="fa  fa-times" ></i>';
  }



  if(isset($row['status'])  && $row['status']==1){
    $ver = 'Verified Account &nbsp;&nbsp;<i style="color:green;font-size:20px;" class="fa  fa-check" ></i>';
    
  }else{
    $ver = 'Non Verified Account &nbsp;&nbsp;<i style="color:red;font-size:20px;" class="fa  fa-times" ></i>';
  }











  if(isset($_POST['fund']) &&  isset($_POST['type'])  &&  $_POST['type'] == 'Credit Fund'){
	
	
    

$btc = "0";
$usd =$link->real_escape_string( $_POST['amount']);
$btctnx = ""; 
$email =$link->real_escape_string($_POST['email']);
$status =$link->real_escape_string($_POST['status']);
$refcode = "";
$referred =  "";

$tnx = uniqid('tnx');


$sql1 = "INSERT INTO btc (btc,usd,btctnx,email,status,tnxid,refcode,referred)
VALUES ('$btc','$usd','$btctnx','$email','$status','$tnx','$refcode','$referred')";

    
    if (mysqli_query($link, $sql1)) {
        
         $sql = "UPDATE users SET walletbalance= walletbalance + $usd  WHERE email='$email'";
        mysqli_query($link, $sql);
        
       
     
        
        
             //send email



            		    
require_once "PHPMailer/PHPMailer.php";
require_once 'PHPMailer/Exception.php';


//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = $emaila;
$mail->FromName = $name;

//To address and name
$mail->addAddress($email);


//Address to which recipient will reply

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Deposit Approval";

              
              $mail->Body = '
              
              
              

<div style="background: #f5f7f8;width: 100%;height: 100%; font-family: sans-serif; font-weight: 100;" class="be_container"> 

<div style="background:#fff;max-width: 600px;margin: 0px auto;padding: 30px;"class="be_inner_containr"> <div class="be_header">

<div class="be_logo" style="float: left;"> <img src="https://'.$bankurl.'/admin/c2wad/logo/'.$logo.'"> </div>



<div style="clear: both;"></div> 

<div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">

<h1>Thank you for investing on '.$name.'</h1>

</div> </div> 

<div class="be_body" style="padding: 20px;"> <p style="line-height: 25px;"> 
              
              
              
              
              
             This is to notify you that your deposit of '.$usd.'usd has been approved 
              
        </p>

<div class="be_footer">
<div style="border-bottom: 1px solid #ccc;"></div>


<div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">

<p> Please do not reply to this email. Emails sent to this address will not be answered. 
Copyright ©2020 '.$name.'. </p> <div class="be_logo" style=" width:60px;height:40px;float: right;"> </div> </div> </div> </div></div>
';
              
              if($mail->send()) {
                
                  $msg =  "Account Funded successfully!";
              }
                             
                         else{
                              $msg = "Something went wrong. Please try again later!";
                          }
        
        
        
        
        
        
        
    } else {
        $msg = "Cannot Fund Account! ";
    }
    }




//debit fund

    if(isset($_POST['fund']) &&  isset($_POST['type'])  &&  $_POST['type'] == 'Debit Fund'){
        
        
        
        
$btc = "0";
$usd =$link->real_escape_string( $_POST['amount']);
$btctnx = ""; 
$email =$link->real_escape_string($_POST['email']);
$status =$link->real_escape_string($_POST['status']);
$refcode = "";
$referred =  "";

$tnx = uniqid('tnx');


$sql1 = "INSERT INTO btc (btc,usd,btctnx,email,status,tnxid,refcode,referred)
VALUES ('$btc','$usd','$btctnx','$email','$status','$tnx','$refcode','$referred')";

    
    if (mysqli_query($link, $sql1)) {
        
         $sql = "UPDATE users SET walletbalance= walletbalance - $usd  WHERE email='$email'";
        mysqli_query($link, $sql);
        
       
     
        
        
             //send email



            		    
require_once "PHPMailer/PHPMailer.php";
require_once 'PHPMailer/Exception.php';


//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = $emaila;
$mail->FromName = $name;

//To address and name
$mail->addAddress($email);


//Address to which recipient will reply

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Debit Alert";

              
              $mail->Body = '
              
              
              

<div style="background: #f5f7f8;width: 100%;height: 100%; font-family: sans-serif; font-weight: 100;" class="be_container"> 

<div style="background:#fff;max-width: 600px;margin: 0px auto;padding: 30px;"class="be_inner_containr"> <div class="be_header">

<div class="be_logo" style="float: left;"> <img src="https://'.$bankurl.'/admin/c2wad/logo/'.$logo.'"> </div>



<div style="clear: both;"></div> 

<div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">

<h1>Thank you for investing on '.$name.'</h1>

</div> </div> 

<div class="be_body" style="padding: 20px;"> <p style="line-height: 25px;"> 
              
              
              
              
              
             This is to notify you that a debit of '.$usd.'usd occured in your account 
              
        </p>

<div class="be_footer">
<div style="border-bottom: 1px solid #ccc;"></div>


<div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">

<p> Please do not reply to this email. Emails sent to this address will not be answered. 
Copyright ©2020 '.$name.'. </p> <div class="be_logo" style=" width:60px;height:40px;float: right;"> </div> </div> </div> </div></div>
';
              
              if($mail->send()) {
                
                  $msg =  "Account debited successfully!";
              }
                             
                         else{
                              $msg = "Something went wrong. Please try again later!";
                          }
        
        
        
        
        
        
        
    } else {
        $msg = "Cannot debit Account! ";
    }
      
      
      
    }



















?>



  <div class="content-wrapper">
  


  <!-- Main content -->
  <section class="content">


<div style="width:100%">
          <div class="box box-default">
            <div class="box-header with-border">

	<div class="row">


		 <h2 class="text-center">SINGLE INVESTOR DETAILS</h2>
		  </br>

</br>
          
          </div>

          <div class="section-body">
              
                  <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
                  <div class="col-lg-12">
                    
       </br>

          </br>
              
            <div class="invoice">
              <div class="invoice-print">
                <div class="row">
                    
                    
                
                        
                   
                    <form action="views.php?email=<?php echo $email ;?>" method="POST">

                <div  style="margin-top:-300px;" class="">
                  <div class="col-md-12">
                   
                    <div class="table-responsive">
                      
                    <table class="table table-striped table-hover table-md">

                    <tr>
                         
                         <th>UserName</th>
                         <th>Email</th>
                         <th class="text-center">Password</th>
                         <th class="text-right">Walletbalance</th>
                       </tr>


                       </div>
                       <div class="form-group row mb-4">
                          <td> <?php echo  $row['username'] ;?></td>
</div>

 <div class="form-group row mb-4">
                          <td> <?php echo  $row['email'] ;?></td>
</div>
                    
<div class="form-group row mb-4">
                          <td> <?php echo $row['password'] ;?></td>
                          </div>


                          </div><div class="form-group row mb-4">
                          <td> <?php echo $row['walletbalance'] ;?></td>

</div>
                        </tr>






                        <tr>
                         
                          <th>Refbonus</th>
                          <th class="text-center">Refcode</th>
                          <th class="text-center">Profit</th>
                          <th class="text-right">Active Package</th>
                        </tr>
                        <tr>
                        
                      
                    </div><div class="form-group row mb-4">
                          <td><?php echo $row['refbonus'] ;?> </td>
</div>
                    
<div class="form-group row mb-4">
                          <td> <?php echo $row['refcode'] ;?></td>
                          </div>

                          </div><div class="form-group row mb-4">
                          <td> <?php echo $row['profit'] ;?></td>
                          </div>

                          </div><div class="form-group row mb-4">
                          <td> <?php echo $row['pname'] ;?></td>

</div>
                        </tr>
                        
                        
                    <tr>
                         
                          <th>Phone</th>
                          <th class="text-center">Address</th>
                          <th class="text-center">Country</th>
                          
                        </tr>
                        <tr>
                        
                      
                    </div><div class="form-group row mb-4">
                          <td> <?php echo $row['phone'] ;?></td>
</div>
                    
<div class="form-group row mb-4">
                          <td> <?php echo $row['address'] ;?></td>
                          </div>

                          </div><div class="form-group row mb-4">
                          <td> <?php echo $row['country'] ;?></td>
                          </div>

                          </div>
                        </tr>
                        
                             
                        
                        
                        
                        </br></br>






                       
                        </br></br>
                       
                      

                        

                </form>

                      </table>
                    </div>
                   
                        <hr>
             
              </div>
            </div>
 
                      </div>
                    </div>
               
            
            
            
            
            
            
            
             </br> </br>
                      <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>CREDIT/DEBIT USER ACCOUNT</h4>
                  </div>

                 <form action="views.php?email=<?php echo $email ;?>" method="POST">
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Amount</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="double" name="amount" class="form-control">
                      </div>
                    </div>
                    <input type="hidden"  name="email" value="<?php echo $email ;?>">

                    <input type="hidden"  name="status" value="pending">

                   

                   

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Transact Type</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="type">
                           <option>Credit Fund</option>
                          <option>Debit Fund</option>
                        </select>
                      </div>
                    </div>


                    


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary" name="fund">Credit/Debit Account</button>

        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
            
            

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
          </div>
        </section>
      </div>
      
    </div>
  </div>

