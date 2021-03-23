

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="css/style.css">

	<script>
		var subjectObject = {
  "India": {
	  "Andhra Pradesh":["Adoni","Amaravati","Chitoor","Guntur"],
	  "Arunachal Pradesh":["Itanagar","Tawang","Ziro","Basar"],
	  "Assam":["Dispur","Guwahati","Tezpur","Dhuburi"],
	  "Bihar": ["Patna", "Madhubani", "Bihar Sharif", "Gaya"],
	  "Chhattisgarh":["Ambikapur","Raipur","Durg","Bilaspur"],
	  "Delhi":["Delhi","New Delhi"],
	  "Goa":["Panaji","Madgaon"],
	  "Gujarat":["Gandhinagar","Ahmadabad","Jamnagar","Palanpur"],
	  "Haryana":["Chandigarh","Gurgaon","Karnal","Faridabad"],
	  "Himachal Pradesh":["Shimla","Bilaspur","Dharmshala","Kullu"],
	  "Jammu And Kashmir":["Srinagar","Baramula","Udhampur","Gulmarg"],
    "Jharkhand": ["Ranchi", "Bokaro", "Jamshedpur", "Dhanbad"],
	"Karnataka":["Bangalore","Hassan","Bidar","Badami"],
	"Kerala":["Thiruvananthapuram","Kochi","Idukki","Kannur"],
	"Madhya Pradesh":["Bhopal","Barwani","Gwalior","Jabalpur"],
	"Maharashtra":["Mumbai","Thane","Pune","Nashik"],
	"Manipur":["Imphal"],
	"Meghalaya":["Cherrapunji","Shillong"],
	"Mizoram":["Aizawl","Lunglei"],
	"Nagaland":["Kohima","Phek","Wokha","Mon"],
	"Odisha":["Bhubaneshwar","Cuttack","Dhenkanal","Puri"],
	"Puducherry":["Puducherry","Mahe","Karaikal","Yanam"],
	"Punjab":["Chandigarh","Amritsar","Patiala","Firozpur"],
	"Rajasthan":["Jaipur","Kota","Udaipur","Jodhpur"],
	"Sikkim":["Gangtok","Lachung","Gyalsing","Mangan"],
	"Tamil Nadu":["Chennai","Erode","Coimbatore","Tiruppur"],
	"Telangana":["Hyderabad","Karimnagar","Nizamabad","Warangal"],
	"Tripura":["Agartala"],
	"Uttar Pradesh":["Varanasi","Mirzapur","Lucknow","Agra"],
	"Uttarakhand":["Dehra Dun","Mussoorie","Nainital","Haridwar"],


    
    "West Bengal": ["Kolkata", "Hugli", "Titagarh", "Shrirampur"]    
  },
  "Other": {
    "Other": ["Other"]
  }
}

window.onload = function() {
  var subjectSel = document.getElementById("country");
  var topicSel = document.getElementById("state");
  var chapterSel = document.getElementById("city");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    chapterSel.length = 1;
    topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
  topicSel.onchange = function() {
    //empty Chapters dropdown
    chapterSel.length = 1;
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
	</script>
</head>
<body>
	<body>
		<div id="particles-js"></div>
		<script type="text/javascript" src="js/particles.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
	<div class="loginBox">
		<img class="user" src="images/2.png" height="100px" width="100px">
		<h3>Sign Up Here</h3>
		<form action="config.php" method="POST">
			<div class="inputBox">
				<input type="text" name="email" placeholder="Email" id="email" required>
				<span><i class="fa fa-user" aria-hidden="true"></i></span>
				</div>
				<div class="inputBox">
					<input type="text" name="phone" placeholder="Phone Number" id="phone" required>
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
				</div>
				<div class="custom-select">
				 <select name="country[]" id="country">
					<option value="" selected="selected" id="cnt">Select Country</option>
			
					
				  </select>
				  <br><br>
				
				
				<select name="state[]" id="state">
					<option value=""  selected="selected">Please select Country first</option>
					
				  </select>
					<br><br>
				
				
					<select name="city[]" id="city">
						<option value="" selected="selected">Please select State first</option>
					</select>
					<br><br>
				</div>
				
				<div class="inputBox">
					<input type="password" name="password" placeholder="Password" id="pass" minlength="8" required>
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
					<center style="color:#fff">(Password must be at least 8-digit)</center><br>
				</div>
				<div class="inputBox">
					<input type="password" name="Re-password" placeholder="Re-password" id="pass" minlength="8" required>
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
				</div>
				<input type="submit" name="Signup" value="Sign-up">
		</form>
		
	</div>
</body>
</html>