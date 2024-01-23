
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<style>
    a {
        text-decoration : none;
    }

    .card {
        margin-bottom: 20px;
        margin-top: 30px;
        background-color: #354A54;
        
    }

    .card-link {
        color: #E6F4F1;
    }

    .btn {
        background-color: #5799B6;
    }

    .edit {
        margin-bottom: 10px;
    }

    .btn:hover {
        font-weight: 700;
    }
</style>
<div class="container">
    
    <h1 class="text-center text-bold">User Setting</h1>
   
    <div id="accordion">
        <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                <span class="material-symbols-outlined firstIcon"> person_filled</span> Profile
                </a>
            </div>
            <div id="collapseOne" class="collapse" data-parent="#accordion">
                <div class="card-body">
                <button type="submit" class = "btn edit">
                    <a href="<?php base_url();?>users/changeDetail" class = "text-white">Edit profile</a>
                </button>

                <br>

                <button type="submit" class = "btn ">
                    <a href="<?php base_url();?>users/myProfile" class = "text-white">My profile</a>
                </button>
                </div>
            </div>
        </div>

    </div>
        
  

  
    <button type="submit" class = "btn btn-primary text-white">
        <a href="<?= base_url();?>users/logout" class = "text-white"><span class="material-symbols-outlined">exit_to_app</span>logout</a>
    </button>
</div>