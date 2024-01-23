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
    
        <a href="<?=base_url();?>admin/alumniList" class = "text-white"><span class="material-symbols-outlined">arrow_circle_left</span></a>
   
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
                        <td class = 'first'>Program</td>
                        <td><?= $row->program;?></td>
                    </tr>

                    <tr>
                        <td class = 'first'>Department</td>
                        <td><?= $row->department;?></td>
                    </tr>

                    <tr>
                        <td class = 'first'>Year Grad</td>
                        <td><?= $row->yrGrad;?></td>
                    </tr>

                    
                    
        </table>
        <?php endforeach; ?>
                
            
    <?php endif; ?>
</div>