<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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

    .add {
        margin-bottom: 10px;
    }

    .btn:hover {
        font-weight: 700;
    }

   
</style>
<div class="container">
    
    <h1 class="text-center text-bold">Admin Setting</h1>
   
    <div id="accordion">
        <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                <span class="material-symbols-outlined firstIcon"> person_filled</span>Student
                </a>
            </div>
            <div id="collapseOne" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <button type="submit" class = "btn ">
                        <a href="<?= base_url();?>admin/studentList" class = "text-white">Student list</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                <span class="material-symbols-outlined">store</span>
                    Facility
                </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <button type="submit" class = "btn add">
                        <a href="<?= base_url();?>admin/addFacility" class = "text-white">Add Facility</a>
                    </button>
                    <br>
                    <button type="submit" class = "btn">
                        <a href="<?= base_url();?>admin/facilityList" class = "text-white">Facility list</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                <span class="material-symbols-outlined">diversity_3</span>
                    Alumni
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <button type="submit" class = "btn">
                        <a href="<?= base_url();?>admin/alumniList" class = "text-white">Alumni list</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseFour">
                <span class="material-symbols-outlined">unsubscribe</span> Newsletter
                </a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <button type="submit" class = "btn ">
                        <a href="<?= base_url();?>admin/subscriberList" class = "text-white">Subscriber list</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseFive">
                <span class="material-symbols-outlined">manage_search</span> Search
                </a>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <button type="submit" class = "btn ">
                        <a href="<?= base_url();?>admin/subjectList" class = "text-white">Programme and subject list</a>
                    </button>
                </div>
            </div>
        </div>
  </div>

  
    <button type="submit" class = "btn btn-primary text-white">
        <a href="<?= base_url();?>admin/logout" class = "text-white"><span class="material-symbols-outlined">exit_to_app</span>Logout</a>
    </button>

</div>