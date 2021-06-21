<?php
session_start();
include "../../config/db.php";
include "../../config/config.php";

$msg = "";
use PHPMailer\PHPMailer\PHPMailer;

$username=$_GET['username'];
$email=$_GET['email'];

if(isset($_SESSION['email'])){
	

    $sql = "UPDATE users SET session='1' WHERE email='$email'";

    mysqli_query($link, $sql) or die(mysqli_error($link));


}
else{


	header("location:../form/signin.php");
}


if ($_SERVER['REQUEST_METHOD'] == "POST"){

$target_dir = "verify/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $msg=  "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $msg=  "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $msg=  "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    $msg=  "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $msg=  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   $msg=  "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	 $fileToUpload = $_FILES["fileToUpload"]["name"];

	 $sql = "UPDATE users SET image ='$fileToUpload',verify='1' WHERE email='$email'";

	  mysqli_query($link, $sql) or die(mysqli_error($link));

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $msg= "Your identity  ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded and you have been verified successfully. You can now enjoy all our services.";
    } else {
        $msg= "Sorry, there was an error uploading your file.";
    }
}

}


include "header.php";

?>
 

 <div class="panel-header bg-light-gradient shadow">
						<div class="page-inner py-5">
							<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
								<div>
									<h2 class="text-dark pb-2 fw-bold">Acount Verification</h2>







                  
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





            <div class="page-inner " style="margin-top:50px">


<div class="row row-card-no-pd mt--2">










  <div class="col-md-12 col-sm-12 col-sx-12">
          <div class="box box-default">
            <div class="box-header with-border">
   
<h2 align="center" style="color:black">INVESTORS FINAL VERIFICATION </h2>
<h5 align="center" style="color:black">Dear  <?php echo $_SESSION['username'];?>, NOTE:All information provided by you can not be accessed by anyone, the platform uses end to end encryption to secure all its investors details.  
</br>
Please verify you are not a robot by completing the below upload to have to withdrawal </h5>

</br>
<?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>


<form action="verify.php?&username=<?php  echo $_SESSION['username']?>&email=<?php  echo $_SESSION['email']?>&sessions= <?php  echo $_SESSION['session']?>" method="POST" enctype="multipart/form-data"  class="form-horizontal form-label-left" >




   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Upload any means of ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="fileToUpload" id="fileToUpload" class="form-control col-md-7 col-xs-12" required >
                        </div>
                      </div>


   <div class="col-md-6 col-md-offset-3">

                          <button type="submit"  class="btn btn-primary" value="Upload Image" name="submit">Upload ID</button>
                        </div>


</form>



          </div>
        
        </div>
          <div class="clearfix"></div>
 
        </div>
        </div>
 </div>
        </div>
      
       
        
        <?php
		 
		 include 'footer.php';
		 
		 ?>   