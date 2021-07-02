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









$sql2= "SELECT * FROM users WHERE email= '$email'";
$result2 = mysqli_query($link,$sql2);
if(mysqli_num_rows($result2) > 0){
 $row = mysqli_fetch_assoc($result2);
 $pdate = $row['pdate'];
 $duration = $row['duration'];
 $increase = $row['increase'];
 $usd = $row['usd'];
}


        if(isset($row['pdate']) &&  $row['pdate'] != '0' && isset($row['duration'])  && isset($row['increase'])  && isset($row['usd']) ){
         
          $endpackage = new DateTime($pdate);
          $endpackage->modify( '+ '.$duration. 'day');
 $Date2 = $endpackage->format('Y-m-d');
 $current=date("Y/m/d");

 $diff = abs(strtotime($Date2) - strtotime($current));

 $days=floor($diff / (60*60*24));
$daily = $duration - $days;
$percentage = ($increase/100) * $daily * $usd;
$_SESSION['pprofit'] = $percentage;


     
$add="days";
       
 }else {
   $daily ="";
   $percentage ="";
   $Date = "0";
   $days ="No active days";
   $diff = "";
   $Date2 = 'No active date';
 }
if(isset($_SESSION['pprofit'])){

  $profit = $_SESSION['pprofit'];
}else{
  $profit = "0";
  $_SESSION['pprofit'] = "0";
}
 


	
include "header.php";



?>





<div class="panel-header bg-light-gradient shadow">
						<div class="page-inner py-5">
							<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
								<div>
									<h2 class="text-dark pb-2 fw-bold">My Account</h2>







                  
									<h5 style="color:#000" class="text-white op-7 mb-2"><marquee style="color:#000" width="50%" >Thanks for investing in <?php  echo $name;?> have a nice day!</marquee></h5>
								</div>
								</br>


              

								<div class="ml-md-auto py-2 py-md-0">
									<label for="" class="p-1 text-secondary">Referral Link</label>
 <input type="text" id="myInput" style="width:50%; padding:4px; border-radius:5%;" value="https://<?php echo $bankurl;?>/users/form/signup.php?refcode=<?php echo $_SESSION['refcode'];?>" class="p-2 text-secondary" readonly="true"/>
 <button class="btn border-secondary" onclick="myFunction()">Copy</button>
								</div>
							</div>
						</div>
				



  <script>
  


</script>

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







					<div class="page-inner " style="margin-top:10px">
						<div class="row row-card-no-pd mt--2">
							<div class="col-sm-6 col-md-4  " >
								<div class="card card-stats card-round bg-light shadow">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="fa fa-users " style="color:#000"></i>
												</div>
											</div>
											<div class="col-7 col-stats p-4" >
												<div class="numbers">

                      

													<p class="card-category" style="color:#000">Investment Profit</p>
													<h4 class="card-title" style="color:#000">$ <?php echo $_SESSION['profit'];?> USD</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-4">
								<div class="card card-stats card-round bg-light shadow" style = "color: #003399">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="flaticon-coins " style="color:#000"></i>
												</div>
											</div>
											<div class="col-7 col-stats p-4">
												<div class="numbers">
													<p class="card-category" style="color:#000">Total Balance</p>
													<h4 class="card-title" style="color:#000">$<?php echo round($_SESSION['walletbalance'],2) + round($_SESSION['profit'],2);?> USD</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-4">
								<div class="card card-stats card-round bg-light shadow" style="background-color:#2949a3">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="flaticon-error" style="color:#000"></i>
												</div>
											</div>
											<div class="col-7 col-stats p-4">
												<div class="numbers">


                        

													<p class="card-category" style="color:#000">Referral Bonus</p>
													<h4 class="card-title" style="color:#000">	$<?php echo $_SESSION['refbonus'];?> USD</h4>
												</div>
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
            
            
         
    

