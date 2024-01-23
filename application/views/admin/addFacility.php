<style>
    * {
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
table, form {
    background-color: #E6F4F1;
}

</style>
<div class="container facility">
<a href="<?=base_url();?>admin" class = "text-white"><span class="material-symbols-outlined">arrow_circle_left</span></a>

<?php 
    $data = array(
        'class' => 'login_form container bg-white p-3',
        'role' => 'form',
        'style' => 'margin-top : 30px; width : 50%'

    )
?>
<h1 class = "text-center">Add Facility</h1>
    <?= form_open('Admin/addFacility',$data);?>
    <table class="table">
        <!-- Add picture for the facility -->
        <div class="form-group">
            <tr>
                <td>
                    <label for="link">
                        Link photos
                    </label>
                </td>

                <td>
                    <input type="text" name="picture" id="link" placeholder="link picture">
                </td>
        </div>

        <div class="form-group">
            <tr>
                <td>
                    <label for="title">
                        Title
                    </label>
                </td>

                <td>
                    <input type="text" name="title" id="title" placeholder="Picture title">
                </td>
             </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>
                    <label for="description">
                        Description
                    </label>
                </td>

                <td>
                    <!-- <input type="text" name = "description" id = "description"> -->
                    <textarea name="description" id="description" cols="30" rows="3" placeholder="Picture description"></textarea>
                </td>
            </tr>
        </div>

        
    </table>
    <input type="submit" value="Submit">
    <?=form_close();?>
</div>  
