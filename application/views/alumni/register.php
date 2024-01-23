<section class="background-radial-gradient overflow-hidden">
<style>
	
	.background-radial-gradient {
        background-color: #354A54;
    }

	.alumni-container{
		padding: 95px;
	}

	input[type=text]{
		width: 100%;
		padding: 15px;
		margin: 5px 0 15px 0;
		display: inline-block;
		border: none;
		background:#f1f1f1;
	}

	input[type=text]:focus{
		background: #ddd;
		outline: none;
	}

	hr{
		border: 1px solid #f1f1f1;
		margin-bottom: 25px;
	}

	.detail {
		font-weight: 600;
	}

	.instruction {
		font-weight: 500;
		
	}

	.registerbtn{
		background-color: lightgoldenrodyellow;
		color: black;
		padding: 16px 20px;
  		margin: 8px 0;
  		border: none;
  		cursor: pointer;
  		width: 100%;
  		opacity: 0.9;
	}

	.registerbtn:hover {
  		opacity:1;
		font-weight: 500;
	}

	a {
  		color: hsl(218, 81%, 75%);
	}

</style>
</head>

<body>
	<form action="<?=base_url()?>Alumni/register" method="post" style="border:1px solid #ccc">
		<div class="container">
			<?= $this->session->flashdata('status');?>
			<?= $this->session->flashdata('fail');?>
		</div>
		<div class="alumni-container mt-3">
			<h1 class="text-center" style="color:white;">Registration of FKI Alumni</h1>

			<p class="text-center detail" style="color: lightgoldenrodyellow;">Following graduation, your connection to the UMS community continues. UMS graduates are welcome to join the UMS Alumni Association, which is dedicated to strengthening friendships and networks from a variety of expertise. Indeed, many UMS Alumni have been appointed as ambassadors at large for their contributions in their fields, and they have had a significant impact on society and the nation, as well as improved the university's international reputation.</p>

			<p class="text-center instruction" style="color: white;">Please fill in this form to be one of FKI Alumni</p>
			<hr>
		<div class="row">
		<div class="col-lg-6">
			<label for="name" style="color:white;"><b>Name</b></label>
			<input type="text" placeholder="Enter your name" name="name" id = "name" required>
			<?php echo form_error('name', '<small class = "text-white bg-danger mt-3">', '</small>');?>

			<br>

			<label for="email" style="color:white;"><b>Email</b></label>
			<input type="text" placeholder="Enter your email" name="email" id = "email" required>
			<?php echo form_error('email', '<small class = "text-white mt-3 bg-danger">', '</small>');?>

			<br>

			<label for="phoneNo" style="color:white;"><b>Phone Number</b></label>
			<input type="text" placeholder="Enter your phone number" name="phoneNo" id = "phoneNo" required>
			<?php echo form_error('phoneNo', '<small class = "text-white bg-danger mt-3">', '</small>');?>

			
			

		</div>

		<div class="col-lg-6">
			<label for="program" style="color:white;"><b>Program</b></label>
			<input type="text" placeholder="Enter your program" name="program" id="program" required>
			<?php echo form_error('program', '<small class = "text-white bg-danger mt-3">', '</small>');?>

			<label for="department" style="color:white;"><b>Department</b></label>
			<input type="text" placeholder="Enter your department" name="department" id = "department" required>
			<?php echo form_error('department', '<small class = "text-white bg-danger mt-3">', '</small>');?>

			<br>

			<label for="yrGrad" style="color:white;"><b>Year of Graduation</b></label>
			<input type="text" placeholder="Enter your year of graduation" name="yrGrad" id = "yrGrad" required>
			<?php echo form_error('yrGrad', '<small class = "text-white bg-danger mt-3">', '</small>');?>

			
		</div>

		

		</div>
			<hr>

			<p class="text-center" style="color:white;">By submiting your details you agree to our <a href="#">Terms & Privacy</a></p>
			<button type="submit" class="registerbtn">Submit</button>
		</div>

	</form>