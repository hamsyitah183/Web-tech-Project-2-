<style>
.back {
    margin-bottom: 20px;
}

</style>

<div class="container">
<button class = "btn btn-primary back">
        <a href="<?=base_url();?>admin/studentList" class = "text-white">Back</a>
    </button>
    <form method = "post" action = "<?php echo base_url('admin/updateUser/'.$s->id);?>">
<!-- <//?php  if($s->num_rows() > 0) :?> -->
<!-- <//?php foreach($s->result() as $row) : ?> -->
<div class="row">
            <!---the first section--->
    
            <div class="col-lg-6">
                <div class="card bg-glass">
                    <div class="card-body">
                      
                    
                        <!-- Name -->
                        <div class="form-outline mb-4">
                        <label class="form-label text-left" for="formName">Name</label>
                            <input type="text" id="formName" class="form-control" name = "name" placeholder="Enter your name" value = "<?= $s->name?>"/>
                            <?= form_error('name', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formEmail">Email address</label>
                        <input type="email" id="formEmail" class="form-control" name = "email" placeholder="Enter your email" value = "<?=$s->email;?>"/>
                        <?= form_error('email', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                        <!-- Phone no-->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formPhonel">Phone number</label>
                        <input type="text" id="formPhone" class="form-control" name = "phoneNo" placeholder="Phone number" value = "<?=($s->phoneNo);?>"/>
                        <?= form_error('phoneNo', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                        <!-- Address line 1 -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formAdd1">Address Line 1</label>
                        <input type="text" id="formAdd1" class="form-control" name = "add1" placeholder = "Address line 1" value = "<?= $s->add1;?>"/>
                        <?= form_error('add1', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                        <!-- Address line 2 -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formAdd2">Address Line 2</label>
                        <input type="text" id="formAdd2" class="form-control" name = "add2" placeholder="Address line 2" value = "<?= $s->add2;?>"/>
                        <?= form_error('add2', '<small class = "text-danger mt-3">', '</small>'); ?>
                        </div>

                       
                    </div>

                </div>
            </div>


            <!---the second section--->
            <div class="col-lg-6">
                <div class="card bg-glass">
                    <div class="card-body">

                        <!-- Address line 3 -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formAdd3">Address Line 3</label>
                        <input type="text" id="formAdd3" class="form-control" name = "add3" placeholder = "Address line 3"value = "<?= $s->add3;?>"/>
                        <?= form_error('add3', '<small class = "text-danger mt-3">', '</small>');?>
                        </div>

                        <!-- city -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formCity">City</label>
                        <input type="text" id="formCity" class="form-control" name = "city" placeholder="City" value = "<?= $s->city;?>"/>
                        <?= form_error('city', '<small class = "text-danger mt-3">', '</small>');?>

                        </div>

                        <!-- Postal code -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="formPostal">Postal Code</label>
                            <input type="text" id="formPostal" class="form-control" name = "postalCode" placeholder = "Postal Code" value = "<?= $s->postalCode;?>"/>
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
                                foreach ($state as $st) {
                                    echo "<option> $st </option>";
                                }
                               ?>
                            </select>
                            <?= form_error('state', '<small class = "text-danger mt-3">', '</small>');?>
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
    
    <?= form_close()?>
    <!-- <//?php endforeach;?> -->
    <!-- <//?php endif;?> -->

    </div>