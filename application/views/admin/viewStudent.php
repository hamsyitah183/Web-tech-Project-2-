<style>
    
      a {
        text-decoration: none;
    }

    
    table, tr, td{
        background-color: #5799B6;
        border : 1px solid #5799B6;
    }

   
    .first {
        font-weight: 700;
    }

    
    
</style>

<div class="container">
    
        <a href="<?=base_url();?>admin/studentList" class = "text-white"><span class="material-symbols-outlined">arrow_circle_left</span></a>
    
    <?php if($s->num_rows() > 0) : ?>
    <?php foreach ($s->result() as $row) : ?>
        <h1><?= $row->name;?>'s Profile</h1>
        <table class = "table">
        
                    <tr>
                        <td class = 'first'>Name</td>
                        <td><?= $row->name;?></td>
                    </tr>

                    <tr>
                        <td class = 'first'>Email</td>
                        <td><?= $row->email;?></td>
                    </tr>

                    <tr>
                        <td class = 'first'>Phone number</td>
                        <td><?= $row->phoneNo;?></td>
                    </tr>

                    <tr>
                        <td class = 'first'>Address Line 1</td>
                        <td><?= $row->add1;?></td>
                    </tr>

                    <tr>
                        <td class = 'first'>Address Line 2</td>
                        <td><?= $row->add2;?></td>
                    </tr>

                    <tr>
                        <td class = 'first'>Address Line 3</td>
                        <td><?= $row->add3;?></td>
                    </tr>

                    <tr>
                        <td class = 'first'>City</td>
                        <td><?= $row->city;?></td>
                    </tr>

                    <tr>
                        <td class = 'first'>State</td>
                        <td><?= $row->state;?></td>
                    </tr>

                    <tr>
                        <td class = 'first'>Date of Birth </td>
                        <td><?= $row->DOB;?></td>
                    </tr>

                    <tr>
                        <td class = 'first'>Gender</td>
                        <td><?= $row->gender;?></td>
                    </tr>

                    <tr>
                        <td class = 'first'>Account Created</td>
                        <td><?= $row->accountCreated;?></td>
                    </tr>
                    
        </table>
        <?php endforeach; ?>
                
            
    <?php endif; ?>
</div>