<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Covid19-CAP</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="js/validation.js"></script> 
  </head>  
  
  <body class="size-1140">    
      <!-- Top Navigation -->
      <nav class="background-white background-primary-hightlight">
        <div class="line">
          <div class="s-12 l-2">
            <a href="index.html" class="logo"><img src="img/logo-free.png" alt=""></a>
          </div>
          <div class="top-nav s-12 l-10">
            <p class="nav-text"></p>
            <ul class="right chevron">
              <li><a href="index.html">Home</a></li>
              <li><a>Services</a>
                <ul>
                  <li><a href="gr.html">Groceries Delivery</a>
                  </li>
                  <li><a href="medi.html">Medical Assistance</a></li>
                </ul>
              </li>
              <li><a href="bb.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
	 <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Query Gathered</h1><br>         
        </header>
		<center>
		    <?php if (isset($_POST['form_submitted'])): ?> 
				<p>Name: <?php echo $_POST["name"]; ?><br></p>
				<p>E-mail: <?php echo $_POST["email"]; ?><br></p>
				<p>Age: <?php echo $_POST["age"]; ?><br></p>
				<p>Gender: <?php echo $_POST["gender"]; ?><br></p>
				<p>Contact No:<?php echo $_POST["contact_no"]; ?><br></p>
				<p>District:<?php echo $_POST["district"]; ?><br></p>
				<p>Area: <?php echo $_POST["Area"]; ?><br></p>
				<p>Complete Address: <?php echo $_POST["complete_address"]; ?><br></p>
				<p>Alternate Contact Number: <?php echo $_POST["acontact_no"]; ?><br></p>
				<p>Medical Assistance:<?php echo $_POST["medass"]; ?><br></p>
				<p>Med Detail: <?php echo $_POST["med_detail"]; ?><br></p>
				<p>Do u need Doctor?: <?php echo $_POST["yes"]; ?><br></p>
				<p>Query Submitted</p>
				
 <?php if (isset($_POST['form_submitted'])): ?> 

	
		<?php
			/* Attempt MySQL server connection. Assuming you are running MySQL
			server with default setting (user 'root' with no password) */
			$link = mysqli_connect("localhost", "root", "", "test");
			 if($link === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
				}
 
				// Escape user inputs for security
				$first_name = mysqli_real_escape_string($link, $_REQUEST['name']);
				$email = mysqli_real_escape_string($link, $_REQUEST['email']);
				$age = mysqli_real_escape_string($link, $_REQUEST['age']);
				$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
				$contact_no = mysqli_real_escape_string($link, $_REQUEST['contact_no']);
				$district = mysqli_real_escape_string($link, $_REQUEST['district']);
				$Area = mysqli_real_escape_string($link, $_REQUEST['Area']);
				$complete_address = mysqli_real_escape_string($link, $_REQUEST['complete_address']);
				$acontact_no = mysqli_real_escape_string($link, $_REQUEST['acontact_no']);
				$medass = mysqli_real_escape_string($link, $_REQUEST['medass']);
				$med_detail = mysqli_real_escape_string($link, $_REQUEST['med_detail']);
				$yes = mysqli_real_escape_string($link, $_REQUEST['yes']);
				 
				// Attempt insert query execution
				$sql = "INSERT INTO medsub(name, email,age, gender,contact_no,Area,complete_address, acontact_no,medass,med_detail, yes,district) VALUES ('$first_name', '$email','$age','$gender', '$contact_no','$Area', '$complete_address','$acontact_no',
				'$medass','$med_detail','$yes','$district')";
				if(mysqli_query($link, $sql)){
					echo "Registration Successfully.";
				} else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
				 
				// Close connection
				mysqli_close($link);
?>
		
<?php endif; ?> 	

		
<?php endif; ?> 	
	  </article>
	 <!-- Main Footer -->
      <section class="section background-dark">
        <div class="line">
          <div class="margin">
            <!-- Collumn 1 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Our Mission<br>எமது நோக்கம்</h4>
              <p class="text-size-20"><em>"To control Corona Virus, To save people"<br>"கொரோனா தொற்றைக் கட்டுப்படுத்தி, மக்களைக் காப்பாற்றுதல்"</em><p>
                            
              <div class="line">
                <h4 class="text-uppercase text-strong margin-top-30">Our Vision<br>எமது பார்வை</h4>
                <div class="margin">
                  <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="/"><img src="img/blog-04.png" alt=""></a>
                  </div>
                  <div class="s-12 m-12 l-8 margin-m-bottom">
                    <p>To rebuild Economy, To build Nation Stronger than ever before<br>பொருளாதாரத்தை மீண்டும் கட்டியெழுப்பி, வலுவான தேசத்தை உருவாக்குதல்</p>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Collumn 2 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Contact Collector Office</h4><br>
			                <h4 class="text-uppercase text-medium">மாவட்ட ஆட்சியர் அலுவலகத்தைத் தொடர்பு கொள்ள</h4><br>

              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-mail text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="/" class="text-primary-hover"><b>மின்னஞ்சல் E-mail:</b> contact@cap.com</a></p>
                </div>
              </div><br>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-smartphone text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>அலைபேசி Phone:</b>9965560256</p>
                </div>
              </div><br>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-twitter text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="https://twitter.com/TPRDtCollector?s=09" class="text-primary-hover"><b> சுட்டுரை Twitter</b></a></p>
                </div>
              </div><br>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-facebook text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11">
                  <p><a href="https://m.facebook.com/TPRDtCollector/" class="text-primary-hover"><b>முகநூல் Facebook</b></a></p>
                </div>
              </div>
            </div><br>
           
            <!-- Collumn 3 -->
            <div class="s-12 m-12 l-4">
              <h4 class="text-uppercase text-strong">Join As A Volunteer</h4><br>
              <h4 class="text-uppercase text-medium">தன்னார்வலராக சேர</h4><br>
              <form action="pro.php" method="post" class="customform text-white">
                <div class="line">
                  <div class="margin">
				   <div class="s-12">
				  <label for="aadhar">ஆதார் எண் AADHAR ID:</label>
				  <input type="text" name="aadhar" id="txtAadhar" onblur="AadharValidate()"  placeholder="Your AADHAR No" />
                </div>
                    <div class="s-12 m-12 l-6">
					<label for="email">மின்னஞ்சல் E-mail:</label>	
                      <input name="email" class="required email border-radius" placeholder="Your e-mail" title="Your e-mail" type="text" />
                    </div>
             
                  </div>
                </div>
                <div class="s-12">
				  <label for="name">பெயர் Name:</label>
                      <input name="name" class="name border-radius" placeholder="Your name" title="Your name" type="text" />
                </div>
				
				<script type="text/javascript">
					function AadharValidate() {
						var aadhar = document.getElementById("txtAadhar").value;
						var adharcardTwelveDigit = /^\d{12}$/;
						var adharSixteenDigit = /^\d{16}$/;
						if (aadhar != '') {
							if (aadhar.match(adharcardTwelveDigit)) {
							
								return true;
							}
							else if (aadhar.match(adharSixteenDigit)) {
							
								return true;
							}
							else {
								alert("Enter valid Aadhar Number");
								return false;
							}
						}
					}
				</script>
								
				 <input type="hidden" name="form_submitted" value="0" />
				 
                <div class="s-12"><button class="submit-form button background-primary border-radius text-white" " type="submit">Submit Button</button></div> <br>
              </form>
            </div>
          </div>
        </div>
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      <!-- Bottom Footer -->
    </footer> 
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
   </body>
</html>