<?php 
ob_start();
$to='oxbis@emirates.net.ae,jirishjose000@gmail.com';

		  if($_POST) 
		  {
		        $body = "<table><tr><td>Conatct name:</td><td>".stripslashes($_POST["name"])."</td></tr>";	
				$body = "<table><tr><td>Country:</td><td>".stripslashes($_POST["Country"])."</td></tr>";				
				$body .= "<tr><td>Email :</td><td>".stripslashes($_POST["email"])."</td></tr>";
               	$body .= "<tr><td>Telephone :</td><td>".stripslashes($_POST["phone"])."</td></tr>";
					$body .= "<tr><td>Subject :</td><td>".stripslashes($_POST["sub"])."</td></tr>";
				$body .= "<tr><td>Comments :</td><td>".stripslashes($_POST["comments"])."</td></tr></table>";				
				$subject="Oxford";
				
				
				/* To send HTML mail, you can set the Content-type header. */
				 $headers  = "MIME-Version: 1.0\r\n";
				 $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				
				/* additional headers */
				 $headers .= "From:".stripslashes($_POST["name"])."<".stripslashes($_POST["email"]).">\r\n";
				 
				 
				$msg .= "User come from : ".$_SERVER["HTTP_REFERER"]."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; //Referrer
				$msg .= "User IP : ".$_SERVER["REMOTE_ADDR"]; //Sender's IP
				$body .="<tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr>
  <td colspan='2'><i>".$msg."</i></td>
</tr></table>";
				 

				mail($to, $subject, $body, $headers);
				
				ob_clean();
				header("location:thankyou.php");
				exit;
		  }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OXFORD BUSINESS INFORMATION SERVICES</title>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script language="javascript" type="text/javascript">

function validate_quickcontact(thisform)
{
	with (thisform)
	{
	//	if(fname.value=="Name")fname.value="";	
	if (emptyvalidation(name,"Oops! You forgot to fill in your Name")==false) 
		{
		name.focus();
		return false;	
		}
		if (emptyvalidation(email,"Oops! You forgot to fill in your Email Address")==false) 
		{
		email.focus();
		return false;	
		}	
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = thisform.email.value;
  
	if(reg.test(address) == false) 
	{ 
      alert('Oops! You have entered an invalid Email Address');
	  email.focus();
	  email.select();
      return false;
   }
	if (emptyvalidation(phone,"Oops! You forgot to fill in your Phone Number")==false) 
		{
		phone.focus();
		return false;	
		}
		
	}
	thisform.submit();
}	
function emptyvalidation(entered, alertbox)
{
	with (entered)
	{
		while (value.charAt(0) == ' ')
			value = value.substring(1);
		while (value.charAt(value.length - 1) == ' ')
			value = value.substring(0, value.length - 1);
		if (value==null || value=="")
		{
			if (alertbox!="") alert(alertbox);
			return false;
		}
		else return true;
	}
}

	
</script>
<link href="css/substyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<!-- Start To Id Wrapper --->
    <div id="wrapper">
    	<!-- Start To Id header --->
    <div id="header">
        	<div id="top">
            	<a href="index.html">
       	    <div id="logo"></div></a>
                <div class="sclntwrk">
                	<div class="icon">
                    	<ul>
                        	<li><a href="#"><div class="icon-f"></div></a></li>
                            <li><a href="#"><div class="icon-t"></div></a></li>
                            <li><a href="#"><div class="icon-in"></div></a></li>
                        </ul>
                    </div>
                </div>
                <div class="callsnw">
                	<div class="cellno">+971-50-7172270</div>
                    <div class="msginfo">oxbis@eim.ae</div>
                </div>
            <div class="clear"></div>
            </div>
      </div>
        <!-- End To Id navication --->
        <!-- Strart To Id header --->
        <div id="navication">
        	<div class="menu">
            	<ul>
                	<li><a href="index.html">Home</a></li>
                    <li><a href="ourteam.html">Our Team</a></li>
                    <li><a href="accountservices.html">Accounts & Audit</a></li>
                  <li><a href="businessadvisory.html">Business Advisory</a></li>
                    <li><a href="taxservices.html">International Tax</a></li>
                  <li style="background-image:none;"><a href="contactus.html"  class="current">Contact Us</a></li>
                </ul>
            </div>
        </div>
    <!-- End To Id navication --->
        <!-- Start To Id banner --->
        <div id="banner">
        	<div class="subbanr"><img src="images/Banners/1.jpg" align="" alt="" border="0" /></div>
        </div>
        <!-- End To Id banner --->
        <div class="clear"></div>
        <!-- Start To Id middle --->
        <div id="middle">
        	<div class="midl-cnt">
            	<div class="middle-top">
                    <div class="mdlleft">
                    	<h1>contact us</h1>
                        	<div class="contcts">
                        	  <div id="Formarea">
                                <div class="contForm">
                                  <div align="center" style="font-size:35px;">Thank you</div>
                                  <div align="center" style="font-size:24px;">Your Valuable suggestion has been submitted. </div>
                                  <p>&nbsp;</p>
                                </div>
                        	    <div class="clear"></div>
                      	    </div>
                            </div>
                            
                            <div style=" padding-left:400px;">
                              <p><strong>UAE</strong><br />
                                  <strong style="font-size:13px;">Oxford Business  Information Services</strong><br />
                                Office M-01C, Mezzanine Floor,<br />
                                Al Habtoor Towers,<br />
                                King Faisal Street, Sharjah, UAE</p>
                              <p>T: +971-6-5749519, M : +971-50-7172270<br />
                                Email : <a href="mailto:oxbis@eim.ae">oxbis@eim.ae</a>
                                <br />
                                <br />
                              </p>
                              <p><strong>Associates  in India</strong><br />
                                  <strong style="font-size:13px;">R.Shetty &amp;  Associates</strong><br />
                                303, Srishti Plaza Commercial Complex<br />
                                Saki-Vihar Road, Powai. Mumbai-400072, India</p>
                              <p>P: + 91-22-42153573, M: + 91-9892990142<br />
                              Email: <a href="mailto:r.shettyandassoc@gmail.com">r.shettyandassoc@gmail.com</a> </p>
                            </div>
                        <div class="clear"></div>
                  </div>
                    <div class="mdlright">
                    	<div class="whoarewe"><a href="ourteam.html"><img src="images/whowearesub.jpg" alt=""  /></a></div>
                  <a href="taxservices.html"><div class="sbpagelft"><div class="sbact"><h2>Tax Services In CIS Countries</h2></div></div></a>
                        <a href="accountservices.html"><div class="sbpagelft"><div class="sbfenq"><h2>Accounts And Audit</h2></div></div></a>
                  <a href="businessadvisory.html"><div class="sbpagelft"><div class="sbadvis"><h2>Business Advisory Services</h2></div></div></a>
                	</div>
                    
                
                </div>
            <div class="clear"></div>
            </div>
        </div>
        <!-- End To Id middle --->
        <!-- Start To Id bottom --->
      <div id="bottom">
        	<div id="bott">
            	<div class="bot-area">&nbsp;&nbsp;&nbsp;
            	  <table width="974" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="252"><h2><a href="accountservices.html">Accounts &amp; Audit</a></h2></td>
                      <td width="250"><h2><a href="businessadvisory.html">Business Advisory Services</a></h2></td>
                      <td width="250"><h2><a href="taxservices.html">International Tax</a></h2></td>
                      <td width="251"><h2><a href="businessadvisory.html">Other Services</a></h2></td>
                    </tr>
                    <tr>
                      <td valign="top"><div class="for-wel">
                        <ul>
                          <li><a href="accountservices.html">Accounting software solutions </a></li>
                          <li><a href="accountservices.html">Accounting outsourcing</a></li>
                          <li><a href="accountservices.html">Internal Audit </a></li>
                         <li><a href="accountservices.html">Inventory Audit</a></li>
                        </ul>
                        <div class="book-form"></div>
                      </div></td>
                      <td valign="top"><div class="for-wel">
                        <ul>
                          <li><a href="businessadvisory.html">Budgeting & forecasting</a></li>
                          <li><a href="businessadvisory.html">Feasibility studies</a></li>
                          <li><a href="businessadvisory.html">Business restructuring</a></li>
                          <li><a href="businessadvisory.html">Mergers & acquisitions</a></li>
                        </ul>
                        <div class="book-form"></div>
                      </div></td>
                      <td valign="top"><div class="for-wel">
                        <ul>
                          <li><a href="taxservices.html">Tax planning</a></li>
                          <li><a href="taxservices.html">Structuring of business unit</a></li>
                          <li><a href="taxservices.html">Compliance services</a></li>
                          <li><a href="taxservices.html">Risk assessment / mitigation</a></li>
                        </ul>
                        <div class="book-form"></div>
                      </div></td>
                      <td valign="top"><div class="for-wel">
                        <ul>
                          <li><a href="businessadvisory.html">UAE Commercial & Labor Laws</a></li>
                          <li><a href="businessadvisory.html">Company Formation services</a></li>
                          <li><a href="businessadvisory.html">Trade Mark & Patent Registration</a></li>
						  <li><a href="businessadvisory.html">Executive Training</a></li>
                        </ul>
                        <div class="book-form"></div>
                      </div></td>
                    </tr>
                    <tr>
                      <td colspan="4" valign="top"><div id="footer">
                        <div class="foot-cnt">
                          <div class="foot-lft">
                            <div class="foot-nav">
                              <ul>
                               <li><a href="index.html" class="current">Home</a></li>
                    <li><a href="ourteam.html">Our Team</a></li>
                    <li><a href="accountservices.html">Accounts & Audit</a></li>
                  <li><a href="businessadvisory.html">Business Advisory</a></li>
                    <li><a href="taxservices.html">International Tax</a></li>
                  <li ><a href="contactus.html">Contact Us</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="foot-btm-lft"> © 2013. CIS Tax Services All rights reserved </div>
                          <div class="foot-btm-rht"> Designed &amp; Developed by : <a href="http://www.cochinwebdesign.com" target="_self">cochin web design</a> </div>
                          <div class="clear"></div>
                        </div>
                      </div></td>
                    </tr>
                  </table>
            	</div>
       	  </div><div class="clear"></div>
        </div>
    </div>
    <!-- End To Id Wrapper --->
</body>
</html>
