<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
   <title>Pre Launch Survey</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="js/smoothscroll.js"></script>

   <!-- <link href='css/homepage/onepage-scroll.css' rel='stylesheet' type='text/css'>-->
    <link href='css/buttons.css' rel='stylesheet' type='text/css'>
    <link href='css/inputs.css' rel='stylesheet' type='text/css'>
    <link href='css/ccard.css' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" media="only screen and (min-width: 1024px)" href="css/desktop.css"/>

	<script>
	</script>
	
	
</head>
<body>

		   <nav class="navbar">
              
              <a class="signin" href="Logout.php"><button class="btn clear" type="button"><span>SIGN OUT</span></button></a>
              
			  <ol id="nav-menu">
			    <a data-scroll href="#welcome"><li><p>Welcome</p></li></a>				  
				  <a data-scroll href="#profile"><li><p>Profile</p></li></a>
				  <a data-scroll href="#survey"><li><p>Survey</p></li></a>
				  				  
			  </ol>
		   </nav>  
		   
		   
	<div class="wrapper">
	    <section class="page1" id="welcome">		   
			   <div class="main-text0">
			     <h1>Welcome</h1>
			     <h4>Help us in making our Services much more comfortable and reliable with a valuable survey of urs </h4>
			     <a href="#survey" target="_blank">
				     <p class="main-p">Take the Survey</p>  
				 </a>
			   </div>			   
			   
			   <div class="main-devices">
				   <img src="demo.png">

			   <div class="main-text">
			     <h1>Welcome</h1>
			     <h4>Help us in making our Services much more comfortable and reliable with a valuable survey of urs</h4>
			     <a data-scroll href="#survey" target="_blank">
				     <p class="main-p"><u>Take the Survey.</u></p> 
				 </a>
			   </div>

			   </div>
		       <div class="bottom-tease">
		          <a data-scroll href="#profile">
				  <button class="pagedown"></button>
				  </a>
		       </div>
	    </section>
	    
	    
	    <section id="survey"> 
		   <div class="page4-header">
			 <div class="headliner">
	            <h1>Survey</h1>
				<h6>We Thank u in advance for your Support and time in taking the Survey and supporting our services.</h6>
             </div>
			 <div class="headliner2">
			<form method="POST" name="form" action="<?php echo $editFormAction; ?>">
	<h5>1. What is ur Age? </h5>
    <p>
      <input class="with-gap" name="group1" type="radio" id="test1" value="10-19" required/>
      <label for="test1">10-19</label>
    </p>
    <p>
      <input class="with-gap" name="group1" type="radio" id="test2" value="20-29" required/>
      <label for="test2">20-29</label>
    </p>
    <p>
      <input class="with-gap" name="group1" type="radio" id="test3" value="30-39" required/>
      <label for="test3">30-39</label>
    </p>
	 <p>
      <input class="with-gap" name="group1" type="radio" id="test3" value="40-49" required/>
      <label for="test3">40-49</label>
    </p>
	<p>
      <input class="with-gap" name="group1" type="radio" id="test3" value="50+" required/>
      <label for="test3">50+</label>
    </p>

	
	
	<h5>2. What is your Occupation/Profession? </h5>
    <p>
      <input class="with-gap" name="group2" type="radio" id="test1" value="Jobs"required/>
      <label for="test1">Jobs.</label>
    </p>
    <p>
      <input class="with-gap" name="group2" type="radio" id="test2" value="Business" required/>
      <label for="test2">Business.</label>
    </p>
    <p>
      <input class="with-gap" name="group2" type="radio" id="test3" value="Student" required/>
      <label for="test3">Student.</label>
    </p>
	<p>
      <input class="with-gap" name="group2" type="radio" id="test4" value="Others" required/>
      <label for="test4">Others.</label>
    </p>
	
	
	
	<h5>3. Which type of Cab do you prefer? </h5>
    <p>
      <input class="with-gap" name="group3" type="radio" id="test1" value="Mini" required/>
      <label for="test1">Mini</label>
    </p>
    <p>
      <input class="with-gap" name="group3" type="radio" id="test2" value="Sedan" required/>
      <label for="test2">Sedan</label>
    </p>
    <p>
      <input class="with-gap" name="group3" type="radio" id="test3" value="Luxury" required/>
      <label for="test3">Luxury</label>
    </p>
	
	
	
	<h5>4. How often do u travel by a cab in a month? </h5>
    <p>
      <input class="with-gap" name="group4" type="radio" id="test1" value="<5times" required/>
      <label for="test1"> < 5times </label>
    </p>
    <p>
      <input class="with-gap" name="group4" type="radio" id="test2" value="5-10times" required/>
      <label for="test2">5-10 times</label>
    </p>
    <p>
      <input class="with-gap" name="group4" type="radio" id="test3" value="11-20times" required/>
      <label for="test3">11-20 times</label>
    </p>
	<p>
      <input class="with-gap" name="group4" type="radio" id="test4" value=">20times" required/>
      <label for="test4"> >20times </label>
    </p>
	
	
	
	<h5>5. Do you think the GPS system in a cab is important and is of more ease? </h5>
    <p>
      <input class="with-gap" name="group5" type="radio" id="test1" value="Yes" required/>
      <label for="test1">Yes</label>
    </p>
    <p>
      <input class="with-gap" name="group5" type="radio" id="test2" value="No" required/>
      <label for="test2">No</label>
    </p>
    
	
	
	<h5>6. Do you have any Smartphone so that u have an access to our App? </h5>
    <p>
      <input class="with-gap" name="group6" type="radio" id="test1" value="Yes" required/>
      <label for="test1">Yes</label>
    </p>
    <p>
      <input class="with-gap" name="group6" type="radio" id="test2" value="No" required/>
      <label for="test2">No</label>
    </p>
    
	
	
	<h5>7. Do you feel LADY DRIVERS are necessary for the lady travellers? </h5>
   <p>
      <input class="with-gap" name="group7" type="radio" id="test1" value="Yes" required/>
      <label for="test1">Yes</label>
    </p>
    <p>
      <input class="with-gap" name="group7" type="radio" id="test2" value="No" required/>
      <label for="test2">No</label>
    </p>
	
	
	<h5>8. Do you travel a lot during the late hours(10pm-6am)? </h5>
    <p>
      <input class="with-gap" name="group8" type="radio" id="test1" value="Yes" required/>
      <label for="test1">Yes</label>
    </p>
    <p>
      <input class="with-gap" name="group8" type="radio" id="test2" value="No" required/>
      <label for="test2">No</label>
    </p>
	
	
	<h5>9. Do you prefer to take a cab during InterCity Travel? </h5>
    <p>
      <input class="with-gap" name="group9" type="radio" id="test1" value="Yes" required/>
      <label for="test1">Yes</label>
    </p>
    <p>
      <input class="with-gap" name="group9" type="radio" id="test2" value="No" />
      <label for="test2">No</label>
    </p>
	
	
	<h5>10. What is your opinion about our cab fares? </h5>
    <p>
      <input class="with-gap" name="group10" type="radio" id="test1" value="Nominal" required/>
      <label for="test1">Nominal</label>
    </p>
    <p>
      <input class="with-gap" name="group10" type="radio" id="test2" value="OverPriced" required/>
      <label for="test2">OverPriced</label>
    </p>
    <p>
      <input class="with-gap" name="group10" type="radio" id="test3" value="Extremely OverPriced" required/>
      <label for="test3">Extremely OverPriced</label>
    </p>
	
	
		
	<h5>11. Any other Security or Development Suggestions you like to provide us for development of our services </h5>
    <div class="input-field col s12">
            <div class="row">
          <div class="input-field col s12">
            <textarea name="textarea" id="textarea1" class="materialize-textarea" length="250"></textarea>
            <label for="textarea1">Textarea</label>
          </div>
        </div>
    </div>
	
		<button onclick="Materialize.toast('Survey Submitted Successfully. ThankU for ur valuable time', 4000)"; class="btn waves-effect waves-teal btn-flat" type="submit" ><span>Submit</span></button></a>
		<input type="hidden" name="MM_insert" value="form">  
            </form>
    </div>
       </section>
  

<script>
$(".card-options").click(function () {
	$(this).parent().parent().find('.card-list').toggle(200);
});

</script>
<script>
    smoothScroll.init();
</script>

</body>
</html>
<?php
mysql_free_result($User);

mysql_free_result($Survey);
?>
