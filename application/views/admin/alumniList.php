<style>
    a {
        text-decoration: none;
    }

    table, tr, td{
        background-color: #5799B6;
        border : 1px solid #5799B6;
    }

    .delete a{
        color:white;
    }

    thead{
        font-weight : 700;
    }
</style>
<div class="container">
    
        <a href="<?=base_url();?>admin" class = "text-white"><span class="material-symbols-outlined">arrow_circle_left</span></a>
    
    <h1>List of Alumni</h1>
    <table class = "table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>View</td>
                <td>Delete</td>
            </tr>
        </thead>

        <tbody>
            <?php if($s->num_rows() > 0) : ?>
                <?php foreach ($s->result() as $row) : ?>
                    <tr>
                        <td><?= $row->id?></td>
                        <td><?= $row->name;?></td>
                        <td><button class = "btn btn-success view"><a href="<?= base_url('admin/viewAlumni/'. $row->id);?> " class = "text-white">View</a></button></td>
                        <td><button class = "btn btn-danger delete"><a href="<?= base_url('admin/deleteAlumni/'. $row->id);?> ">Delete</a></button></td>
                    </tr>
                
                <?php endforeach; ?>
            
        
            <?php endif; ?>
                
        </tbody>
    </table>
    
</div>
