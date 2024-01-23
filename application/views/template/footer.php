

<footer class="pb-0" id="footerWeb">
        <section class="container-fluid pt-3 " id="footerBottom">
            <div class="row">
                <div class="col-lg-2 col-sm-12">
                    <h1 class="text-center">UMS FKI</h1>
                    <img src="https://wartaoriental.com/wp-content/uploads/2021/06/Logo-UMS-1024x1024.png" class="img-fluid ums-logo">
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 " id="footerLink">
                    <h3>USEFUL LINKS</h3>
                    <ul class="footerLink justify-content " style="list-style-type:none;">
                        <a href="<?=base_url()?>welcome"><li>About us</li></a>
                        <a href="<?=base_url()?>welcome/software"><li >Software engineer</li></a>
                        <a href="<?=base_url()?>welcome/network"><li >Network engineer</li></a>
                        <a href="<?=base_url()?>welcome/data"><li >Data Scientist</li></a>
                        <a href="<?=base_url()?>welcome/business"><li >Business Computing</li></a>
                        <a href="<?=base_url()?>welcome/multimedia"><li >Multimedia Technology</li></a>
                      </ul>
                </div>
               <div class="col-lg-3 col-md-5 col-sm-12 text-left" id="footerDetails">
                   <h3>CONTACT US</h3>
                   <div>
                       <p>Faculty of Computing and Informatics</p>
                       <p>University Malaysia Sabah</p>
                       <p>Jalan UMS</p>
                       <p>88400 Kota Kinabalu, Sabah, Malaysia</p>
                       <p><b>Phone:</b> 0143290092</p>
                       <p><b>Email:</b> hamsyitahnur@gmail.com</p>
                   </div>

               </div>
               <div class="col-lg-2 col-sm-12 col-md-9" id="footerContact">
                   <h3 style="text-transform:uppercase">our newsletter</h3>
                   <p class="text-muted">Stay Updated</p>
                    <button type="submit" class = "btn btn-primary">
                        <a href="<?php echo base_url();?>Welcome/newsletter" class = "text-white">Click to register</a>
                    </button>
                    
                    <h3 class="mt-3">Follow us</h3>
                    <p class="text-muted">Let us be social</p>
                    <div class="column text-dark pb-3">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-youtube"></i>
                    
                    </div>
               </div>
            </div>
        </section>

        <section id="footerCopy">
            <div class="container-fluid pb-2" class="footerCopy">
                <p class="text-center pt-2">
                    Copyright &copy; <i class="font-weight-bold"><span id="year"></span><script>var d = new Date(); let years = d.getFullYear(); document.getElementById("year").innerHTML = years;</script> .All right reserved<i>
                </p>
            </div>
        </section>
    </footer>
    

    

     <!--Requirement text-->
     <script>
        function loadDoc() {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("requirementNet").innerHTML =
            this.responseText;
            }
        };
        xhttp.open("GET", "<?php echo base_url('assets/')?>requirement.txt");
        xhttp.send();
        }
        </script>
    <script src="<?=base_url('assets/')?>js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="<?= base_url('assets/');?>js/gsap.js"></script>
</body>
</html>