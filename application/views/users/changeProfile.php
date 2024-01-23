<link rel="stylesheet" href="<?= base_url('assets/css/');?>register.css">

<div class="container" style = "margin-bottom : 10px">
     
                <a href = "<?php base_url();?>User" class = "text-white"><span class="material-symbols-outlined">arrow_circle_left</a>
    
</div>

<div class="container" id = "changeProfile">
    
    <?= form_open('Users/changeDetail')?>

        <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
    <style>
        .background-radial-gradient {
        background-color: #0b3142;
        }

        .bg-glass {
        background-color: #d6d3f0 !important;
        opacity : 90%;
        backdrop-filter: saturate(200%) blur(25px);
        }
    </style>
        
        <?php $data = $this->session->userdata('userdata');?>
    
      
        <h1 class =  "text-center"style="color: hsl(218, 81%, 95%)">
         Change your details
        </h1>
        
        <?php
        if($this->form_validation->run() == false)
         $this->session->flashdata('fail');
        ?>
    <div class="container px-4 py-2 px-md-5 text-center text-lg-start my-5">
        
        <div class="row">
            <!---the first section--->
            <div class="col-lg-6">
                <div class="card bg-glass">
                    <div class="card-body">
                    
                        <!-- Name -->
                        <div class="form-outline mb-4">
                        <label class="form-label text-left" for="formName">Name</label>
                            <?php $name = $this->session->userdata('name');?>
                            <input type="text" id="formName" class="form-control" name = "name" placeholder="Enter your name" value = "<?=$profile['name'];?>"/>
                            <?= form_error('name', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formEmail">Email address</label>
                        <input type="email" id="formEmail" class="form-control" name = "email" placeholder="Enter your email" value = "<?=$profile['email'];?>" readonly/>
                        <?= form_error('email'); ?>
                        </div>

                        <!-- Phone no-->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formPhonel">Phone number</label>
                        <input type="text" id="formPhone" class="form-control" name = "phoneNo" placeholder="Phone number" value = "<?=$profile['phoneNo'];?>"/>
                        <?= form_error('phoneNo', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                        <!-- Address line 1 -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formAdd1">Address Line 1</label>
                        <input type="text" id="formAdd1" class="form-control" name = "add1" placeholder = "Address line 1" value = "<?= $profile['add1'];?>"/>
                        <?= form_error('add1', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                        <!-- Address line 2 -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formAdd2">Address Line 2</label>
                        <input type="text" id="formAdd2" class="form-control" name = "add2" placeholder="Address line 2" value = "<?= $profile['add2'];?>"/>
                        <?= form_error('add2', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                        <!-- Address line 3 -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formAdd3">Address Line 3</label>
                        <input type="text" id="formAdd3" class="form-control" name = "add3" placeholder = "Address line 3"value = "<?= $profile['add3'];?>"/>
                        <?= form_error('add3', '<small class = "text-danger mt-3">', '</small>');?>
                        </div>

                        <!-- city -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formCity">City</label>
                        <input type="text" id="formCity" class="form-control" name = "city" placeholder="City" value = "<?= $profile['city'];?>"/>
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
                            <input type="text" id="formPostal" class="form-control" name = "postalCode" placeholder = "Postal Code" value = "<?=$profile['postalCode'];?>"/>
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
                                <option selected = "selected"><?= $this->session->userdata('state');?> </option>
                               <?php 
                                foreach ($state as $s) {
                                 
                                    echo "<option>". $s. "</option>";
                                }
                               ?>
                            </select>
                            <?= form_error('state', '<small class = "text-danger mt-3">', '</small>');?>
                        </div>

                        <!--DOB-->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formDOB">Birth date</label>
                        <input type="date" id="formDOB" class="form-control" name = "DOB" value = <?=$profile['DOB'];?>/>
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

                        
                        
                    </div>

                </div>
                
                <div class="card bg-glass mt-5">
                    <div class="card-body">
                        <label for="">Submit</label>

                        <button type="submit">Submit</button>
                    </div>
                </div>
            </div>
            
        </div>
            
    </div>
    
    <?= form_close()?>

</section>
<!-- Section: Design Block -->

</div>