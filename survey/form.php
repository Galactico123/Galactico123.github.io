<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Signup Form</title>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/stylesheet-form.css">
</head>
<body>

	<div class="student-form">
	<div class="image-form">
		<img src="images/img.png" alt="img">
	</div>


	<div class="student-form-group top-border">
	<h1>Students Sign Up Form</h1>
	<p>You have made a big step for improving your academics. RocketAcademics is a nonprofit organization created during the Pandemic to help students catch up with their school work. Any student whose family can’t afford a private tutor is eligible for free tutoring through RocketAcademics. Instead of charging you, we rely on volunteers and donations to provide you with free academic support.</p>
	<span>*Required</span>
	
	</div>



	<form action="sendmail.php" method="post" id="myForm">
	<div class="student-form-group sec-one">
	<div class="label">
	<label><h4>Name<span>*</span></h4></label>
	</div>
	<input type="text" id="name" name="name" placeholder="Your answer" >	
	<div class="error"><p><i class='fas fa-exclamation-circle' style='color:red;'></i>This is a required question</p></div>
	</div>

	<div class="student-form-group  sec-two">
	<div class="label">
	<label><h4>School Name<span>*</span></h4></label>
	</div>
	<input type="text" id="schoolname" name="schoolname" placeholder="Your answer" >
	<div class="error"><p><i class='fas fa-exclamation-circle' style='color:red;'></i>This is a required question</p></div>
	</div>

	<div class="student-form-group  sec-three">
	<div class="label">
	<label><h4>Grade<span>*</span></h4></label>
	</div>
	<input type="text" id="grade" name="grade" placeholder="Your answer" >
	<div class="error"><p><i class='fas fa-exclamation-circle' style='color:red;'></i>This is a required question</p></div>
	</div>

	<div class="student-form-group  sec-four">
	<div class="label">
	<label><h4>Email<span>*</span></h4></label>
	</div>
	<input type="email" id="email" name="email" placeholder="Your answer" >
	<div class="error"><p><i class='fas fa-exclamation-circle' style='color:red;'></i>This is a required question</p></div>
	</div>

	<div class="student-form-group  sec-five">
	<div class="label">
	<label><h4>Please write 2-5 sentences about yourself (We would love to know you : ) )<span>*</span></h4></label>
	</div>
	<input type="text" id="detail" name="detail" placeholder="Your answer" >
	<div class="error"><p><i class='fas fa-exclamation-circle' style='color:red;'></i>This is a required question</p></div>
	</div>

	<div class="student-form-group inline">
	<label><h4>Subjects you need help with (you can select more than one)<span>*</span></h4></label><br><br>
	<input type="radio"  name="subject" value="English/Writing">
	<label for="English/Writing">English/Writing</label>
	<br>
	<input type="radio" name="subject" value="Elementary Common Core Math">
	<label for="Elementary Common Core Math">Elementary Common Core Math</label>
	<br>
	<input type="radio" name="subject" value="Middle School Common Core Math">
	<label for="Middle School Common Core Math">Middle School Common Core Math</label>
	<br>
	<input type="radio" name="subject" value="Algebra">
	<label for="Algebra">Algebra</label>
	<br>
	<input type="radio" name="subject" value="Geometry">
	<label for="Geometry">Geometry</label>
	<br>
	<input type="radio" name="subject" value="Science">
	<label for="Science">Science</label>
	<br>
	<input type="radio" name="subject" value="History">
	<label for="History">History</label>
	<br>
	<input type="radio" name="subject" value="Foreign Language: Spanish, French or Chinese">
	<label for="Foreign Language: Spanish, French or Chinese">Foreign Language: Spanish, French or Chinese</label>
	<br>
	<input type="radio" name="subject" value="Learn to Code">
	<label for="Learn to Code">Learn to Code</label><br>

	</div>


	<div class="student-form-group">
	<label><h4>Your available time for the tutor lesson (please click all that apply)<span>*</span></h4></label><br><br>
	<table>
		<tr>
			<td></td>
			<td>Morning</td>
			<td>Afternoon</td>
			<td>Evening</td>
		</tr>
		<tr>
			<td>Monday</td>
			<td><input type="checkbox" name="check_list[]" value="Morning-monday"></td>
			<td><input type="checkbox" name="check_list[]" value="Morning-afternoon"></td>
			<td><input type="checkbox" name="check_list[]" value="Morning-evening"></td>
		</tr>
		<tr>
			<td>Tuesday</td>
			<td><input type="checkbox" name="check_list[]" value="Tuesday-monday"></td>
			<td><input type="checkbox" name="check_list[]" value="Tuesday-afternoon"></td>
			<td><input type="checkbox" name="check_list[]" value="Tuesday-evening"></td>
		</tr>
		<tr>
			<td>Wednesday</td>
			<td><input type="checkbox" name="check_list[]" value="Wednesday-monday"></td>
			<td><input type="checkbox" name="check_list[]" value="Wednesday-afternoon"></td>
			<td><input type="checkbox" name="check_list[]" value="Wednesday-evening"></td>
		</tr>
		<tr>
			<td>Thursday</td>
			<td><input type="checkbox" name="check_list[]" value="Thursday-monday"></td>
			<td><input type="checkbox" name="check_list[]" value="Thursday-afternoon"></td>
			<td><input type="checkbox" name="check_list[]" value="Thursday-evening"></td>
		</tr>
		<tr>
			<td>Friday</td>
			<td><input type="checkbox" name="check_list[]" value="Friday-monday"></td>
			<td><input type="checkbox" name="check_list[]" value="Friday-afternoon"></td>
			<td><input type="checkbox" name="check_list[]" value="Friday-evening"></td>
		</tr>
		<tr>
			<td>Saturday</td>
			<td><input type="checkbox" name="check_list[]" value="Saturday-monday"></td>
			<td><input type="checkbox" name="check_list[]" value="Saturday-afternoon"></td>
			<td><input type="checkbox" name="check_list[]" value="Saturday-evening"></td>
		</tr>
		<tr>
			<td>Sunday</td>
			<td><input type="checkbox" name="check_list[]" value="Sunday-monday"></td>
			<td><input type="checkbox" name="check_list[]" value="Sunday-afternoon"></td>
			<td><input type="checkbox" name="check_list[]" value="Sunday-evening"></td>
		</tr>
	</table>

	<br>
	
	</div>

	<div class="student-form-group  sec-six">
	<div class="label">
	<label><h4>Please provide your legal guardian's contact information: Name, email address, phone number<span>*</span></h4></label>
	</div>
	<input type="text" id="guardian-contact" name="guardian-contact" placeholder="Your answer" >
	<div class="error"><p><i class='fas fa-exclamation-circle' style='color:red;'></i>This is a required question</p></div>
	</div>
	<input type="submit" name="submit" value="Submit">
	</form>


	</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script>
$(document).ready(function(){
    $('#myForm #name').blur(function(){
        if(!$(this).val()){
            
            $('.sec-one .error').show();
            $("#name").css( "border-bottom", "1px solid red");
            $(".sec-one").css( "border", "1px solid red");
        } else{
            $('.sec-one .error').hide();
            $(".sec-one").css( "border", "1px solid lightgrey");
            $("#name").css( "border-bottom", "1px solid lightgrey");
        }
    });

     $('#myForm #schoolname').blur(function(){
        if(!$(this).val()){
            
            $('.sec-two .error').show();
            $("#schoolname").css( "border-bottom", "1px solid red");
            $(".sec-two").css( "border", "1px solid red");
        } else{
            $('.sec-two .error').hide();
            $(".sec-two").css( "border", "1px solid lightgrey");
            $("#schoolname").css( "border-bottom", "1px solid lightgrey");
        }
    });


      $('#myForm #grade').blur(function(){
        if(!$(this).val()){
            
            $('.sec-three .error').show();
            $("#grade").css( "border-bottom", "1px solid red");
            $(".sec-three").css( "border", "1px solid red");
        } else{
            $('.sec-three .error').hide();
            $(".sec-three").css( "border", "1px solid lightgrey");
            $("#grade").css( "border-bottom", "1px solid lightgrey");
        }
    });

       $('#myForm #email').blur(function(){
        if(!$(this).val()){
            
            $('.sec-four .error').show();
            $("#email").css( "border-bottom", "1px solid red");
            $(".sec-four").css( "border", "1px solid red");
        } else{
            $('.sec-four .error').hide();
            $(".sec-four").css( "border", "1px solid lightgrey");
            $("#email").css( "border-bottom", "1px solid lightgrey");
        }
    });

        $('#myForm #detail').blur(function(){
        if(!$(this).val()){
            
            $('.sec-five .error').show();
            $("#detail").css( "border-bottom", "1px solid red");
            $(".sec-five").css( "border", "1px solid red");
        } else{
            $('.sec-five .error').hide();
            $(".sec-five").css( "border", "1px solid lightgrey");
            $("#detail").css( "border-bottom", "1px solid lightgrey");
        }
    });

        $('#myForm #guardian-contact').blur(function(){
        if(!$(this).val()){
            
            $('.sec-six .error').show();
            $("#guardian-contact").css( "border-bottom", "1px solid red");
            $(".sec-six").css( "border", "1px solid red");
        } else{
            $('.sec-six .error').hide();
            $(".sec-six").css( "border", "1px solid lightgrey");
            $("#guardian-contact").css( "border-bottom", "1px solid lightgrey");
        }
    });



});
</script>
</body>
</html>