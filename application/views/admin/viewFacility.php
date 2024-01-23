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
    
        <a href="<?=base_url();?>admin/facilityList" class = "text-white"><span class="material-symbols-outlined">arrow_circle_left</span></a>
   
    <?php if($s->num_rows() > 0) : ?>
    <?php foreach ($s->result() as $row) : ?>
       
        <table class = "table">
        
                    <tr>
                        <td class = 'first'>Picture</td>
                        <td><img src = <?php echo $row->picture;?> class = "img-fluid img-thumbnail"></td>
                    </tr>

                    <tr>
                        <td class = 'first'>Title</td>
                        <td><?= $row->title;?></td>
                    </tr>

                    <tr>
                        <td class = 'first'>Description</td>
                        <td><?= $row->description;?></td>
                    </tr>

                   

                    
                    
        </table>
        <?php endforeach; ?>
                
            
    <?php endif; ?>
</div>