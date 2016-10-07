<!DOCTYPE html>
<html lang="cs">
<head>
        <meta charset="utf-8">
        <title>Registration- Survey</title>
        <link type="text/css" rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/main.css">
        <style>
            html { background-color: #FF7043 }
        </style>
    </head>
    <body>
        <div class="row reg_page">
            <div class="col m12">
                <div class="row">
                    <div class="col l6">
                        <a href="#">
                            <h1>Registration</h1>
                        </a>
                    </div>
                </div>
                
                <div class="col center">
                    <div class="reg_form z-depth-4 col l8 m9 s12">
                      <form action="<?php echo $editFormAction; ?>" name="form" class="col s12" autocomplete="off" method="POST">
						 <div class="row">
        <div class="input-field col s5">
		<i class="mdi-hardware-keyboard-arrow-right prefix"></i>
          <input id="first_name" name="first_name" type="text" class="validate" required>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s5">
		<i class="mdi-hardware-keyboard-arrow-right prefix"></i>
          <input id="last_name" name="last_name" type="text" class="validate" required>
          <label for="last_name">Last Name</label>
        </div>
      </div>
                            <div class="input-field col s12">
                                <i class="mdi-action-account-circle prefix"></i>
                                <input type="email" name="email" id="email" maxlength="30" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="mdi-communication-vpn-key prefix"></i>
                                <input type="password" name="password" id="password" maxlength="30" required>
                                <label for="password">Password</label>
                            </div>
                            
                            <div class="input-field col s12">
							    
								<select name="Gender" class="validate" required>
									<option value="Gender" disabled selected>Gender</option>
									<option value="Male" class="validate" required>Male </option>
									<option value="Female" class="validate" required>Female</option>
									
								</select>
								<label>Select</label>
							</div>
							 <div class="row">
        <div class="input-field col s3">
		<i class="mdi-hardware-keyboard-arrow-right prefix"></i>
          <input id="DOB_date" name="DOB_date" type="text" class="validate" required>
          <label for="DOB_date">Date</label>
        </div>
        <div class="input-field col s3">
		<i class="mdi-hardware-keyboard-arrow-right prefix"></i>
          <input id="DOB_month" name="DOB_month" type="text" class="validate" required>
          <label for="DOB_month">Month</label>
        </div>
		<div class="input-field col s3">
		<i class="mdi-hardware-keyboard-arrow-right prefix"></i>
          <input id="DOB_year" name="DOB_year" type="text" class="validate" required>
          <label for="DOB_year">Year</label>
        </div>
      </div>
  
  
                        <div class="center-btn">
						
                                <button type="submit" class="waves-effect waves-light btn" id="to_register"><i class="mdi-action-done left"></i>Register</button>
                          </div>
                        <input type="hidden" name="MM_insert" value="form">
                      </form>
                    </div>
                </div>
                <div class="center-btn">
                    <a class="waves-effect waves-light btn-large" id="login_1"  href="Login.php"><i class="mdi-hardware-keyboard-arrow-left left"></i>Login</a>
                </div>
            </div>
        </div>

       
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
                $( document ).ready(function() {
                
                                });
								  $(document).ready(function() {
    $('select').material_select();
	 
  });
            </script>

</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
