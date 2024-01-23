<body data-spy="scroll" data-target=".navbar" data-offset="50" >
    <header >
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg fixed-top r-nav nav-Color p-lg-3" id="navbarMiss">
                <a href="<?php echo base_url()?>" class="navbar-brand">
                    <img src="https://fki.ums.edu.my/fki/wp-content/uploads/sites/6/2019/12/NewFKIums-600x78.png" height="40" class="d-inline-block align-top">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navDrop" aria-controls="navDrop" aria-expanded="false" aria-label="Toggle navigation" style="background-color:black">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <!--Nav item-->
                <div class="collapse navbar-collapse justify-content-end mr-lg-3 nav-Content" id="navDrop" >
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php echo base_url()?>" class="nav-link active">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url()?>search" class="nav-link">Search</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="<?php echo base_url()?>welcome/about" class="nav-link dropdown-toggle" id="navUndergraduate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                            <div class="dropdown-menu nav-Content2">
                               
                                <a href="<?php echo base_url()?>welcome/facility" class="dropdown-item">Facility</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="<?php echo base_url()?>#undergraduate" class="nav-link dropdown-toggle" id="navUndergraduate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Undergraduate</a>
                            <div class="dropdown-menu nav-Content2">
                                <a href="<?php echo base_url()?>welcome/software" class="dropdown-item">Software Engineering</a>
                                <a href="<?php echo base_url()?>welcome/network" class="dropdown-item">Network Engineering</a>
                                <a href="<?php echo base_url()?>welcome/data" class="dropdown-item">Data Science</a>
                                <a href="<?php echo base_url()?>welcome/business" class="dropdown-item">Business Computing</a>
                                <a href="<?php echo base_url()?>welcome/multimedia" class="dropdown-item">Multimedia Technology</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="<?php echo base_url()?>#postgraduate" class="nav-link dropdown-toggle" id="navUndergraduate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Postgraduate</a>
                            <div class="dropdown-menu dropdown-menu-right nav-Content2">
                                <a href="<?php echo base_url()?>#postgraduate" class="dropdown-item">Doctor of Philosophy (CS)</a>
                                <a href="<?php echo base_url()?>#postgraduate" class="dropdown-item">Doctor of Philosophy (IT)</a>
                                <a href="<?php echo base_url()?>#postgraduate" class="dropdown-item">Master of Science (Computer Science)</a>
                                <a href="<?php echo base_url()?>#postgraduate" class="dropdown-item">Master of Science (Information Technology)</a>
                            </div>
                        </li>
                       
                        <li class="nav-item dropdown">
                            <a href="<?php echo base_url()?>Alumni" class="nav-link dropdown-toggle" id="navUndergraduate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alumni</a>
                            <div class="dropdown-menu dropdown-menu-right nav-Content2">
                                <a href="<?php echo base_url()?>Alumni" class="dropdown-item">Staff FKI</a>
                                <a href="<?php echo base_url()?>Alumni/register" class="dropdown-item" onclick="openForm()">Alumni Registration</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url()?>welcome/academic" class="nav-link">Academic Calendar</a>
                        </li>
                        <li class="nav-item">
                            <?php
                                if($this->session->userdata('status') == 'user' && $this->session->userdata('logged_in') == true)
                                {
                                    $link = "users";
                                    $preferences = "Setting";
                                }
                                else if ($this->session->userdata('status') == 'admin' && $this->session->userdata('logged_in') == true)
                                {
                                    $link = "admin";
                                    $preferences = "Setting";
                                }
                                else 
                                {
                                    $link = "auth";
                                    $preferences = "Log in / Register";
                                }
                            ?>
                            <a href = "<?php echo base_url().$link?>"class = "nav-link"><?= $preferences;?></a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
            
        </div>
    </header>