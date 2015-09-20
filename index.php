<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to Parking Manager</title>
		<link rel="stylesheet" type="text/css" href="index.css" />
		<script type="text/javascript" src="index.js"></script>

	</head>
	<body>
	<div id="wholepage">
	<div id="wrapper">
		<header id="header">
			<div>
				<img src="images/logo.png" id="logo" />
			</div>
			<div id="backheader">
				<p id="headtext">Parkspace Manager</p>
			</div>
			
		</header>
		<!--End of the header -->
		
		<section>
		
		<div id="indexmain">

		<!-- Login -->
		<div id="login">
				<h2 id="logintext">Log In!</h2>
		</div>
		
		<div id="loginbox">
			<form action="login.php" method="post">
			<label class="logintext2">Username or Email</label> <input type="text" name="loginemail" placeholder="abc123 / abc@email.com" value="" required/> <br />
			<label class="logintext2">Password</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="loginpassword" value="" required/> <br />
			<div id="loginsubmit">
			<input type="submit" id="loginbutton" value="Login" />
			</div>
			</form>

		</div>
		<!-- Login Ends here! -->
			<h1 id="signuppara">Sign Up!</h1>
			<div id="signup">

			<form action="confirmregistration.php" method="POST" id="indexform">
				<label class="formlabel">First Name</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="fname" placeholder="eg: Harry,Emma" required/><br/>
				<label class="formlabel">Last Name</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="lname" placeholder="eg: Potter,Watson"/><br/>
				
				<div class="formmove">
				<label class="formlabel">Gender</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="gender">male</label><input type="radio" name="sex" value="Male" /><label class="gender">female</label><input type="radio" name="sex" value="Female" /><br />
				</div>
				<div class="formmove">
				<label class="formlabel">Select Username</label> <input type="text" name="username" placeholder="harry123" required/><br/>
				</div>
				<div class="formmove">
				<label class="formlabel">Email</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" id="email" name="email" placeholder="eg: example@email.com" required/><br/>
				</div>
				<div class="formmove">
				<label class="formlabel">Re-enter Email</label> <input type="email" id="re-email" name="re-email" placeholder="eg: example@email.com" required/> <br/>
				</div>
					
				<div class="formmove">
				<label class="formlabel">New Password</label> <input type="password" name="password" value="" required/> <br />
				</div>
				<label class="formlabel">Birthday</label> 
				<select name="day">
					<option value="1">1</option>
					<option value="2">2</option>					
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>

				<select name="month">
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
					</select>

				<select name="year">
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
					<option value="2011">2011</option>
					<option value="2010">2010</option>
					<option value="2009">2009</option>
					<option value="2008">2008</option>
					<option value="2007">2007</option>
					<option value="2006">2006</option>
					<option value="2005">2005</option>
					<option value="2004">2004</option>
					<option value="2003">2003</option>
					<option value="2002">2002</option>
					<option value="2001">2001</option>
					<option value="2000">2000</option>
					<option value="1999">1999</option>
					<option value="1998">1998</option>
					<option value="1997">1997</option>
					<option value="1996">1996</option>
					<option value="1995">1995</option>
					<option value="1994">1994</option>
					<option value="1993">1993</option>
					<option value="1992">1992</option>
					<option value="1991">1991</option>
					<option value="1990">1990</option>
					<option value="1989">1989</option>
					<option value="1988">1988</option>
					<option value="1987">1987</option>
					<option value="1986">1986</option>
					<option value="1985">1985</option>
					<option value="1984">1984</option>
					<option value="1983">1983</option>
					<option value="1982">1982</option>
					<option value="1981">1981</option>
					<option value="1980">1980</option>
				</select>
				
				<br />
				<br/>
				<div id="submit" >
					<input type="submit" id="submitButton" onclick="email();" name="submit" value="Sign Up" />
				</div>
				
			</form>
			<div>
				
			</div>
			</div>
		</div>
			
		</section>
		<aside></aside>
		<footer></footer>
		</div>
		</div>
		
	</body>
</html>