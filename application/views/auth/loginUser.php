
<div class="container loginUser" style = "background-color: white">

<?php 
    $data = array(
        'class' => 'login_form container bg-white p-3',
        'role' => 'form',
        'style' => 'margin-top : 30px; width : 50%'

    )
?>
    <?= form_open('auth/login', $data)?>
    <div class="container text-center" style = "width: 50%; ">
       
        <?php echo $this->session->flashdata('fail');?>
        <?php echo $this->session->flashdata('success');?>

    </div>
    <h4>User login</h4>
    <table class = "table loginForm" style = "border : 0px;">
        <!--Email--->
        <div class="form-group">
        <tr>
            <td>
                <?= form_label('Email');?>

                <?php $data =
                    array (
                        'name' => 'email',
                        'placeholder' => 'Enter your email here',
                        'value' => set_value('email'),
                        'class' => 'emailLogin'
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
                        'placeholder' => 'Enter your password here',
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

    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-left pt-3">
                <p>Don't have an account yet? Go <a href = "register">here</a></p>
            </div>
        </div>
    </div>
    <!---->
    <?=form_close();?>

</div>