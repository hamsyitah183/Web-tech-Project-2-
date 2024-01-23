
<div class="container loginUser" style = "background-color: white">

<?php 
    $data = array(
        'class' => 'login_form container bg-white p-3',
        'role' => 'form',
        'style' => 'margin-top : 30px; width : 50%'

    )
?>
    <?= form_open('auth/adminLogin', $data)?>
   
    <h4>Admin Login</h4>
    <table class = "table loginForm" style = "border : 0px;">
        <!--Email--->
        <div class="form-group">
        <tr>
            <td>
                <?= form_label('Name');?>

                <?php $data =
                    array (
                        'name' => 'name',
                        'placeholder' => 'Enter your name',
                        'value' => set_value('name'),
                        'class' => 'adminName'
                    ); 
                
                ?>
            </td>
                    
                
            <td>
                <?= form_input($data);?>
            </td>
        </tr>
        </div>


        <!---Password-->
        <div class="form-group">
        <tr>
            <td>
                <?= form_label('Password');?>

                <?php $data = 
                    array (
                        'name' => 'password',
                        'placeholder' => 'Enter your password',
                        'class' => 'passwordLogin',
                        'type' => 'password'
                    );
                ?>
 
            </td>

            <td>
                <?= form_input($data);?>
                   
            </td>
            
        </tr>
        </div>
    </table>
   
    <!---submission-->
    <button type="submit">Submit</button>

   
    <!---->
    <?=form_close();?>

</div>