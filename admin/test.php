
       <?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "gtKFFx";
$SALT = "eCwWELxi";
$txnid="m222222de9k3635d5672";
$name="anil";
$email="webanilsidhu@gmail.com";
$amount=10;
$phone="9999766582";
$surl="http://localhost/cake/my_app_name/view/sucess";
$furl="http://localhost/cake/my_app_name/view/failure";
$productInfo="xyzabc";

// Merchant Salt as provided by Payu

$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hashString=$MERCHANT_KEY."|".$txnid."|".$amount."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
   
$hash = strtolower(hash('sha512', $hashString));
?>

<<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment</title>
    <link rel="shortcut icon" href="img/Tavaru.png" type="image/png">
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href=""><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    <li>
                        <a  href="test.php"><i class="fa fa-key"></i> Go for payment</a>
                    </li>
                    <li>
                        <a  href=""><i class="fa fa-download"></i> Download receipt</a>
                    </li>
                    <li>
                        <a  href="../feedback/index.php"><i class="fa fa-refresh"></i> Give Feedback</a>
                    </li>
                    <li>
                        <a  href="../index.html"><i class="fa fa-step-backward"></i> Get Back</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Payment Information <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-15 col-sm-15">
                    <div class="panel panel-primary">
                        <div class="panel-heading">

PayUMoney Payment Request Form
</div>
                        <div class="panel-body">
						
<form action="https://sandboxsecure.payu.in/_payment"  name="payuform" method=POST >
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY;?>" />
<input type="hidden" name="hash"  value="<?php echo $hash;?>" />
<input type="hidden" name="txnid" value="<?php echo $txnid;?>"/>
<table id="customers">
<tr>
<td>Amount: </td>
<td><input name="amount" value="<?php echo $amount;?>" /></td>
<td>First Name: </td>
<td><input name="firstname" id="firstname" value="<?php echo $name;?>" /></td>
</tr>
<tr>
<td>Email: </td>
<td><input name="email" id="email"  value="<?php echo $email;?>" /></td>
<td>Phone: </td>
<td><input name="phone" value="<?php echo $phone;?> " /></td>
</tr>
<tr>
<td>Product Info: </td>
<td colspan="3"><textarea name="productinfo" ><?php echo $productInfo;?></textarea></td>
</tr>

<tr>
<td>Success URI: </td>
<td colspan="3"><input name="surl"  size="64" value="<?php echo $surl;?> " /></td>
</tr>
<tr>
<td>Failure URI: </td>
<td colspan="3"><input name="furl"  size="64" value="<?php echo $furl;?> " /></td>
</tr>
<tr>
<td colspan="3"><input type="hidden" name="service_provider" value="" /></td>
</tr>
<tr>

<td colspan="4"><input type="submit" value="Submit"  /></td>
</tr>
</table>
</form>
		
</div>
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
