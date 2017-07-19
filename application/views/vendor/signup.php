<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!--<form>-->
<?php	
$attributes = array('id' => 'formSignup','name' => 'formSignup');
echo form_open('vendor/signup/SubmitSignUp',$attributes); 
?>
	<div class="container">
		<p class="atxt"> Sign Up To Join PriveTable! </p>
		<hr>
		
		<div class="row text-center">
			<div class="col-sm-5"><p class="aheader">First Name</p>
				<input type="text" class="adesign1 atxt1" name="FirstName" id="FirstName" placeholder="Enter Your First Name"  />
			</div>
			<div class="col-sm-5"><p class="aheader">Last Name</p>
				<input type="text" class="adesign1 atxt2" name="LastName" id="LastName" placeholder="Enter Your Last Name" />
			</div>
		</div>
		<div class="row text-center atop-buffer">
			<div class="col-sm-12 atxt3">
			 <p class="aheader">Email</p>
			 <input type="text" class="adesign1 atxt4" name="Email" id="Email" placeholder="Enter Your Email Here" />
			</div>
		</div> 
		<div class="row text-center atop-buffer">
			<div class="col-sm-12 atxt3">
			 <p class="aheader">Password</p>
			 <input type="password" class="adesign1 atxt4" name="Password" id="Password" placeholder="Password should be atleast 6 characters" />
			</div>
		</div>
		<div class="row text-center atop-buffer">
			<div class="col-sm-12 atxt3">
			 <p class="aheader">Confirm Password</p>
			 <input type="password" class="adesign1 atxt4" name="ConfirmPassword" id="ConfirmPassword" placeholder="Re-enter Your Password" />
			  <!--<div class="checkbox">
			<label class="acheck"><input type="checkbox" value="">Check here to agree to PriveTable Terms of Service & Privacy Policy</label>
			 </div>-->
			 <div class="checkbox">
							<input id="checkbox5" type="checkbox" class="styled" name="chkTerms" id="chkTerms" checked="">
							<label for="checkbox5" class="acheck">
								Check here to agree to PriveTable Terms of Service & Privacy Policy
							</label>
			 </div>
			</div>
			 <button type="submit" class="btn abtn-xl" id="btn123">SIGN UP</button>
		</div>
		<div class="row text-center">
			<div class="col-sm-6">
				<p class="atxt6">Already have an account? <span class="atxt5">Log In Here</span></p>
			</div>
			<div class="col-sm-6">
				<p class="atxt7">Forgot Password? <span class="atxt5">Click Here</span></p>
			</div>
		</div>

		
	</div>
<?php echo form_close(); ?>
<script>
	
$(function() {
    $("#formSignup input").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events

            alert('error');
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
			if($("input#FirstName").val()=='')
			{
				$("#FirstName").attr("placeholder", "Enter Your First Name");
				$('#FirstName').addClass('validatemsg');
			}
			if($("input#LastName").val()=='')
			{
				$("#LastName").attr("placeholder", "Enter Your Last Name");
				$('#LastName').addClass('validatemsg');
				return false;
			}
			if($("input#LastName").val()=='')
			{
				$("#LastName").attr("placeholder", "Enter Your Last Name");
				$('#LastName').addClass('validatemsg');
				return false;
			}
			
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

});

</script>
<!-- END Form-->
