<link rel="stylesheet" href="<?= base_url('assets/css/');?>register.css">
<div class="container" id = "registration">
    <?= form_open('auth/register')?>

        <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
    <style>
        .background-radial-gradient {
        background-color: #354A54;
        }

        .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
        }
    </style>

    
      
        <h1 class =  "text-center"style="color: hsl(218, 81%, 95%)">
          Welcome to <br />
          <span style="color: hsl(218, 81%, 75%)">our registration sites</span>
        </h1>
        <p class="text-center " style="color: hsl(218, 81%, 85%)">
          Please fill in your information based on your IC
        </p>
    
        <div class="container text-center">
            <?= $this->session->flashdata('email');
            $this->session->flashdata('fail'); ?>
        </div>
       
    <div class="container px-4 py-2 px-md-5 text-center text-lg-start my-5">
        
        <div class="row">
            <!---the first section--->
            <div class="col-lg-6">
                <div class="card bg-glass">
                    <div class="card-body">
                    
                        <!-- Name -->
                        <div class="form-outline mb-4">
                        <label class="form-label text-left" for="formName">Name</label>
                            <input type="text" id="formName" class="form-control" name = "name" placeholder="Enter your name" value = "<?=set_value('name');?>"/>
                            <?= form_error('name', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formEmail">Email address</label>
                        <input type="email" id="formEmail" class="form-control" name = "email" placeholder="Enter your email" value = "<?=set_value('email');?>"/>
                        <?= form_error('email', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                        <!-- Phone no-->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formPhonel">Phone number</label>
                        <input type="text" id="formPhone" class="form-control" name = "phoneNo" placeholder="Phone number" value = "<?=set_value('phoneNo');?>"/>
                        <?= form_error('phoneNo', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                        <!-- Address line 1 -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formAdd1">Address Line 1</label>
                        <input type="text" id="formAdd1" class="form-control" name = "add1" placeholder = "Address line 1" value = "<?= set_value('add1');?>"/>
                        <?= form_error('add1', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                        <!-- Address line 2 -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formAdd2">Address Line 2</label>
                        <input type="text" id="formAdd2" class="form-control" name = "add2" placeholder="Address line 2" value = "<?= set_value('add2');?>"/>
                        <?= form_error('add2', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                        <!-- Address line 3 -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formAdd3">Address Line 3</label>
                        <input type="text" id="formAdd3" class="form-control" name = "add3" placeholder = "Address line 3"value = "<?= set_value('add3');?>"/>
                        <?= form_error('add3', '<small class = "text-danger mt-3">', '</small>');?>
                        </div>

                        <!-- city -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formCity">City</label>
                        <input type="text" id="formCity" class="form-control" name = "city" placeholder="City" value = "<?= set_value('city');?>"/>
                        <?= form_error('city', '<small class = "text-danger mt-3">', '</small>');?>

                        </div>

                    </div>

                </div>
            </div>


            <!---the second section--->
            <div class="col-lg-6">
                <div class="card bg-glass">
                    <div class="card-body">
                    
                        <!-- Postal code -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formPostal">Postal Code</label>
                            <input type="text" id="formPostal" class="form-control" name = "postalCode" placeholder = "Postal Code" value = "<?= set_value('postalCode');?>"/>
                            <?= form_error('postalCode', '<small class = "text-danger mt-3">', '</small>');?>
                        </div>

                        <!-- State -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formState">State</label>
                            <?php 
                                $state = array (
                                    'Johor', 'Kedah', 'Kelantan', 'Malacca', 'Negeri Sembilan', 'Pahang', 'Penang',
                                    'Perak', 'Perlis', 'Sabah', 'Sarawak', 'Selangor', 'Terengganu', 'Kuala Lumpur',
                                    'Labuan', 'Putrajaya'
                                );
                            ?>
                            <select name="state" id="formState">
                               <?php 
                                foreach ($state as $s) {
                                    echo "<option> $s </option>";
                                }
                               ?>
                            </select>
                            <?= form_error('state', '<small class = "text-danger mt-3">', '</small>');?>
                        </div>

                        <!--DOB-->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formDOB">Birth date</label>
                        <input type="date" id="formDOB" class="form-control" name = "DOB" value = <?=set_value('DOB');?>/>
                        <?= form_error('DOB', '<small class = "text-danger mt-3">', '</small>');?>

                        </div>

                        <!-- gender -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formGender">Gender</label>
                        <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="male">Male</label>
                                            <input type="radio" name="gender" id="male" value = "1">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="female">Female</label>
                                            <input type="radio" name="gender" id="female" value = "2">
                                        </div>
                                    </div>
                                </div>
                                <?= form_error('gender', '<small class = "text-danger mt-3">', '</small>');?>

                        </div>

                        <!-- Password -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formPass">Password</label>
                        <input type="password" id="formPass" class="form-control" name = "password"/>
                        <?= form_error('password', '<small class = "text-danger mt-3">', '</small>');?>

                        </div>

                        <!-- Password Confirmation -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formPassCon">Password confirmation</label>
                        <input type="password" id="formPassCon" class="form-control" name = "passwordConfirm"/>
                        <?= form_error('passwordConfirm', '<small class = "text-danger mt-3">', '</small>');?>

                        </div>

                        
                    </div>

                </div>
                
                <div class="card bg-glass mt-5">
                    <div class="card-body">
                        <label for="">Submit</label>

                        <button type="submit">Submit</button>
                    </div>
                </div>

                <div class="card bg-glass mt-5">
                    <div class="card-body">
                       <p>Already have an account go <a href = "login">here</a></p>
                    </div>
                </div>
            </div>
            
        </div>
            
    </div>
    
    <?= form_close()?>

</section>
<!-- Section: Design Block -->

</div>