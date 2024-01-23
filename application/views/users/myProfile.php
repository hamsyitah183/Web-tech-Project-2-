<style>
#profile {
    font-family: 'Futura Md BT', sans-serif;
}
h1 {
    margin: 10px;
    padding: 10px;
}
 #tableProfile {
    border-radius: 20px;
    background-color:   #E6F4F1;

 }
#tableProfile tr:hover {
    background-color: cadetblue;
}
#details:hover {
    color: #203632;
    font-weight: 700;
    opacity: 80%;
 }

</style>
<link href="http://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">

<div class="container">

        <a href = "<?php base_url();?>User" class = "text-white"><span class="material-symbols-outlined">arrow_circle_left</a>

</div>

<div class="container profile" id = "profile" >
    <div class="text-center">
        <?= $this->session->flashdata('message');?>
    </div>
    <h1 class="text-center"><?= $title ?></h1>
    
    <table class = "table" id = "tableProfile">
        <?php 
            $data = array (
                'Name' => 'name', 'Email' => 'email', 'Phone number' => 'phoneNo', 
                'Address Line 1' => 'add1', 'Address Line 2' => 'add2', 'Address Line 3' => 'add3', 
                'City' => 'city', 'State' => 'state', 'Postal Code' => 'postalCode', 'Date of Birth' => 'DOB', 'Gender' => 'gender'
            );
            
            foreach($data as $d => $d_value) {
                echo "<tr><td><b>" . $d . "</b></td> <td id = 'details'>" . $profile[$d_value] . "</td></tr>";
         
            }
        ?>
    </table>

    