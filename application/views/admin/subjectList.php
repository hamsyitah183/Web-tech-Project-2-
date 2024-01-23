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
   
    <h1>List of course and subject</h1>
    <table class = "table">
        <thead>
            <tr>
                
                <td>Course Code</td>
                <td>Course Name</td>
                <td>Subject Code</td>
                <td>Subject Name</td>
            </tr>
        </thead>

        <tbody>
            <?php if($s->num_rows() > 0) : ?>
                <?php foreach ($s->result() as $row) : ?>
                    <tr>
                       
                        <td><?= $row->courseCode;?></td>
                        <td><?= $row->courseName;?></td>
                        <td><?= $row->subjectCode;?></td>
                        <td><?= $row->subjectName;?></td>

                       
                    </tr>
                
                <?php endforeach; ?>
            
        
            <?php endif; ?>
                
        </tbody>
    </table>
    
</div>
