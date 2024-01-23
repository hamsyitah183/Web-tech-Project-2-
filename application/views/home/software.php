
<section>
            <div class="bg-1" style="background-image:linear-gradient(rgba(3, 3, 3, 0.5), rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'); background-position: center; background-size: cover; height: 60vmin; width: auto; display: flex; flex-direction: column; align-items: center; ">
                <h1 class="text-center text-white" style="padding-top:23vmin; padding-bottom: 0; font-size:4vmax; margin-top:10vmin;" ><span class="element"></span></h1>
            </div>
            
            
            <div class="container detail mt-0" id="software-engineering" role="tablist">
                <div class="row">
                    <div class="col-lg-12 mt-0 mb-0 pt-0 pb-0">
                        <p class="font-italic text-white pt-3">(Undergraduate program)</p>
                        <h1>Software Engineering</h1>
                    </div>
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs mb-3 mt-3 ">
                            <li class="nav-item">
                                <a class="nav-link active" id="programme-tab" data-toggle="tab" href="#programme" role="tab" aria-controls="programme" aria-selected="true">Programme Description</a>
                              </li>
                            <li class="nav-item">
                              <a class="nav-link" id="course-tab" data-toggle="tab" href="#course" role="tab" aria-controls="course" aria-selected="false">Course structure</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="requirement-tab" data-toggle="tab" href="#requirement" role="tab" aria-controls="requirement" aria-selected="false" onclick="loadDoc()">Requirement</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="fee-tab" data-toggle="tab" href="#fee" role="tab" aria-controls="fee" aria-selected="false">Fee</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="apply-tab" data-toggle="tab" href="#apply" role="tab" aria-controls="apply" aria-selected="false">How to apply</a>
                            </li>
                          </ul>

                          <div class="tab-content" id="myTabContent">
                            <!---Programme Description-->
                            <div class="tab-pane fade show active" id="programme" role="tabpanel" aria-labelledby="programme-tab" class="requirementBg" >
                                <div class="container px-2" id="programmeDescription">
                                    <p>
                                        The programme aims to produce graduates with knowledge and skills in computer science and software engineering. 
                                        Students will be exposed to and trained in the 
                                        fundamentals of computer systems as well as the advancement of technologies in the field of computer science.
                                    </p>

                                    <p>
                                        The courses offered include computer programming, object-oriented programming, software quality and testing, human computer interaction, theory of computation, operating system, artificial intelligence, final year project, to name a few.
                                    </p>

                                    <p>
                                        Apart from technical skills, students will be exposed to the soft skills through courses offered. In the final year, students will involve in a computer software development project under the supervision of academic personnel. Their also need to undergo industrial training during their final semester.
                                    </p>

                                    
                                </div>
                            </div>
                            <!--Syllibus-->
                            <div class="tab-pane fade " id="course" role="tabpanel" aria-labelledby="course-tab">
                                <div id="accordion">
                                    <div class="card">
                                      <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                          <button class="btn btn-link" data-toggle="collapse" data-target="#firstYear" aria-expanded="true" aria-controls="firstYear">
                                            <p>First year</p>
                                          </button>
                                        </h5>
                                      </div>
                                  
                                      <!---first year-->
                                      <div id="firstYear" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row  px-lg-0 py-lg-0 mx-lg-0 my-lg-0 px-0 py-0 mx-0 my-0" style="font-size:small">
                                            <div class="col-lg-6 first-box">
                                                    <!--First semester-->
                                            
                                                <dl>
                                                    <dt class="pb-sm-2" >Semester 1</dt>

                                                    <!--University core-->
                                                    <h5 class="text-muted">University Core (6 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>UW00702</dt> <dd>Philosophy and Contemporary Issues</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl>
                                                                    <dt>ULXXX02</dt> <dd>(Student Choice)</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl>
                                                                    <dt>ULXXX02</dt> <dd>(Student Choice)</dd>
                                                                </dl>
                                                            </li>
                                                        </ul>
                                                    </dd>

                                                    <!--Language-->
                                                    <h5 class="text-muted">Language (2 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>UB0XXX2 / UX00XX2</dt> <dd></dd>
                                                                </dl>
                                                            </li>
                                                
                                                        </ul>
                                                    </dd>

                                                    <!--co-curriculum-->
                                                    <h5 class="text-muted">Co-Curriculum (3 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>ECXXXX3</dt> <dd> Co-Curriculum</dd>
                                                                </dl>
                                                            </li>
                                                
                                                        </ul>
                                                    </dd>

                                                    <!--Faculty core-->
                                                    <h5 class="text-muted">Faculty Core (6 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>KT14303</dt> <dd>Programming Principle</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl>
                                                                    <dt>KT14503</dt> <dd>Mathematics for Computing</dd>
                                                                </dl>
                                                            </li>
                                                
                                                        </ul>
                                                    </dd>
                                                </dl>

                                                </div>

                                                <div class="col-lg-6 second-box">
                                                    
                                                    <!--Second semester-->
                                                    <dl>
                                                        <dt class="pb-sm-2" >Semester 2</dt>
    
                                                        <!--University core-->
                                                        <h5 class="text-muted">University Core (4 Credit Hours)</h5>
                                                        <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                            <ul>
                                                                <li>
                                                                    <dl>
                                                                        <dt>UW00802 </dt> <dd>Appreciation of Ethics and Civilizations</dd>
                                                                    </dl>
                                                                </li>
                                                                <li>
                                                                    <dl>
                                                                        <dt>ULXXX02</dt> <dd>(Student Choice)</dd>
                                                                    </dl>
                                                                </li>
                            
                                                            </ul>
                                                        </dd>
    
                                                        <!--Language-->
                                                        <h5 class="text-muted">Language (2 Credit Hours)</h5>
                                                        <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                            <ul>
                                                                <li>
                                                                    <dl>
                                                                        <dt>UB0XXX2 / UX00XX2</dt> <dd></dd>
                                                                    </dl>
                                                                </li>
                                                    
                                                            </ul>
                                                        </dd>
    
                                                        <!--Faculty core-->
                                                        <h5 class="text-muted">Faculty Core (6 Credit Hours)</h5>
                                                        <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                            <ul>
                                                                <li>
                                                                    <dl>
                                                                        <dt>KT14203</dt> <dd>Computer Architecture & Organization</dd>
                                                                    </dl>
                                                                    <dl>
                                                                        <dt>KT14403</dt> <dd>Discrete Structures</dd>
                                                                    </dl>
                                                                </li>
                                                    
                                                            </ul>
                                                        </dd>
    
                                                        <!--Faculty core-->
                                                        <h5 class="text-muted">Programme Core (3 Credit Hours)</h5>
                                                        <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                            <ul>
                                                                <li>
                                                                    <dl>
                                                                        <dt>KK14203</dt> <dd>Object Oriented Programming</dd>
                                                                    </dl>
                                                                   
                                                                </li>
                                                    
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                

                                                </div>
                                            </div>

                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#secondYear" aria-expanded="false" aria-controls="secondYear">
                                           
                                           <!---second year-->
                                            <p>Second year</p>
                                          </button>
                                        </h5>
                                      </div>
                                      <div id="secondYear" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                          <div class="row  px-lg-0 py-lg-0 mx-lg-0 my-lg-0 px-0 py-0 mx-0 my-0" style="font-size:small">
                                            <div class="col-lg-6 first-box">
                                                    <!--First semester-->
                                            
                                                <dl>
                                                    <dt class="pb-sm-2" >Semester 1</dt>

                                                    <!--University core-->
                                                    <h5 class="text-muted">University Core (6 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>UW00702</dt> <dd>Philosophy and Contemporary Issues</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl>
                                                                    <dt>ULXXX02</dt> <dd>(Student Choice)</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl>
                                                                    <dt>ULXXX02</dt> <dd>(Student Choice)</dd>
                                                                </dl>
                                                            </li>
                                                        </ul>
                                                    </dd>

                                                    <!--Language-->
                                                    <h5 class="text-muted">Language (2 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>UB0XXX2 / UX00XX2</dt> <dd></dd>
                                                                </dl>
                                                            </li>
                                                
                                                        </ul>
                                                    </dd>

                                                    <!--co-curriculum-->
                                                    <h5 class="text-muted">Co-Curriculum (3 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>ECXXXX3</dt> <dd> Co-Curriculum</dd>
                                                                </dl>
                                                            </li>
                                                
                                                        </ul>
                                                    </dd>

                                                    <!--Faculty core-->
                                                    <h5 class="text-muted">Faculty Core (6 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>KT14303</dt> <dd>Programming Principle</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl>
                                                                    <dt>KT14503</dt> <dd>Mathematics for Computing</dd>
                                                                </dl>
                                                            </li>
                                                
                                                        </ul>
                                                    </dd>
                                                </dl>

                                                </div>

                                                <div class="col-lg-6 second-box">
                                                    <!--Second semester-->
                                                    <dl>
                                                        <dt class="pb-sm-2 second-box" >Semester 2</dt>
    
                                                        <!--University core-->
                                                        <h5 class="text-muted">University Core (2 Credit Hours)</h5>
                                                        <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                            <ul>
                                                                <li>
                                                                    <dl>
                                                                        <dt>UW00302</dt> <dd>Fundamentals Of Entrepreneurial Acculturation (APK)</dd>
                                                                    </dl>
                                                                </li>
                                                                
                                                            </ul>
                                                        </dd>
    
                                                        <!--Language-->
                                                        <h5 class="text-muted">Language (2 Credit Hours)</h5>
                                                        <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                            <ul>
                                                                <li>
                                                                    <dl>
                                                                        <dt>UB0XXX2 / UX00XX2</dt> <dd></dd>
                                                                    </dl>
                                                                </li>
                                                    
                                                            </ul>
                                                        </dd>
    
                                                        <!--Faculty core-->
                                                        <h5 class="text-muted">Faculty Core (6 Credit Hours)</h5>
                                                        <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                            <ul>
                                                                <li>
                                                                    <dl>
                                                                        <dt>KT24103</dt> <dd>Data Structures & Algorithms</dd>
                                                                    </dl>
                                                                </li>
                                                                <li>
                                                                    <dl>
                                                                        <dt>KT24503</dt> <dd>Database</dd>
                                                                    </dl>
                                                                </li>
                                                    
                                                            </ul>
                                                        </dd>
    
                                                        <!--Faculty core-->
                                                        <h5 class="text-muted">Programme Core (6 Credit Hours)</h5>
                                                        <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                            <ul>
                                                                <li>
                                                                    <dl>
                                                                        <dt>KK24103</dt> <dd>System Analysis</dd>
                                                                    </dl>
                                                                   
                                                                </li>
                                                                
                                                                <li>
                                                                    <dl>
                                                                        <dt>KK24303</dt> <dd>Data Communication</dd>
                                                                    </dl>
                                                                   
                                                                </li>
                                                    
                                                            </ul>
                                                        </dd>

                                                        <!--Elective-->
                                                        <h5 class="text-muted">Elective (3 Credit Hours)</h5>
                                                        <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                            <ul>
                                                                <li>
                                                                    <dl>
                                                                        <dt>KK0XX03</dt> <dd>Elective 1</dd>
                                                                    </dl>
                                                                   
                                                                </li>
                                                               
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                

                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#thirdYear" aria-expanded="false" aria-controls="thirdYear">
                                            Third Year
                                          </button>
                                        </h5>
                                      </div>

                                      <!--third year-->
                                      <div id="thirdYear" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                          <div class="row  px-lg-0 py-lg-0 mx-lg-0 my-lg-0 px-0 py-0 mx-0 my-0" style="font-size:small">
                                            <div class="col-lg-6 first-box">
                                                    <!--First semester-->
                                            
                                                <dl>
                                                    <dt class="pb-sm-2" >Semester 1</dt>

                                                    <!--Faculty core-->
                                                    <h5 class="text-muted">Faculty Core (6 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>KT34103</dt> <dd>Artificial Intelligence</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl>
                                                                    <dt>KT34303</dt> <dd>Computer Graphics</dd>
                                                                </dl>
                                                            </li>
                                                
                                                        </ul>
                                                    </dd>

                                                    <!--Program core-->
                                                    <h5 class="text-muted">Faculty Core (6 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>KK34103</dt> <dd>Software Project Management</dd>
                                                                </dl>
                                                                <dl>
                                                            </li>
                                                            <li>
                                                                    <dt>KK34503</dt> <dd>Software Quality and Testing</dd>
                                                                </dl>
                                                            </li>
                                                
                                                        </ul>
                                                    </dd>

                                                    <!--Elective-->
                                                    <h5 class="text-muted">Elective (3 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>KK0XX03</dt> <dd>Elective 2</dd>
                                                                </dl>
                                                                
                                                            </li>
                                                
                                                        </ul>
                                                    </dd>
                                                </dl>

                                                </div>

                                                <div class="col-lg-6 second-box">
                                                    <!--second semester-->
                                            
                                                <dl>
                                                    <dt class="pb-sm-2" >Semester 2</dt>

                                                
                                                    <!--Programme core-->
                                                    <h5 class="text-muted">Programme Core (12 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>KK34203</dt> <dd>Project I</dd>
                                                                </dl>
                                                               
                                                            </li>
                                                            
                                                            <li>
                                                                <dl>
                                                                    <dt>KK34403</dt> <dd>Human Computer Interaction</dd>
                                                                </dl>
                                                               
                                                            </li>

                                                            <li>
                                                                <dl>
                                                                    <dt>KK34603</dt> <dd>Computer Security</dd>
                                                                </dl>
                                                               
                                                            </li>

                                                            <li>
                                                                <dl>
                                                                    <dt>KK34803</dt> <dd>Parallel Programming And Distributed Systems</dd>
                                                                </dl>
                                                               
                                                            </li>
                                                        </ul>
                                                    </dd>

                                                    <!--Elective-->
                                                    <h5 class="text-muted">Elective (3 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>KK0XX03</dt> <dd>Elective 3</dd>
                                                                </dl>
                                                                
                                                            </li>
                                                
                                                        </ul>
                                                    </dd>
                                                </dl>

                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="card">
                                        <!--Fourth year-->
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                          <button class="btn btn-link" data-toggle="collapse" data-target="#fourthYear" aria-expanded="false" aria-controls="fourthYear">
                                            <p>Fourth year</p>
                                          </button>
                                        </h5>
                                      </div>
                                  
                                      <div id="fourthYear" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row  px-lg-0 py-lg-0 mx-lg-0 my-lg-0 px-0 py-0 mx-0 my-0" style="font-size:smaller">
                                            <div class="col-lg-6 first-box">
                                                    <!--First semester-->
                                            
                                                <dl>
                                                    <dt class="pb-sm-2" >Semester 1</dt>

                                                    <!--Faculty core-->
                                                    <h5 class="text-muted">Faculty Core (5 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>KT44103</dt> <dd>Ethics and Law in ICT</dd>
                                                                </dl>
                                                                
                                                            </li>
                                                
                                                        </ul>
                                                    </dd>

                                                    <!--Programme core-->
                                                    <h5 class="text-muted">Programme Core (6 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>KK44703</dt> <dd>Project II</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl>
                                                                    <dt>KK44903</dt> <dd>Software Maintenance & Evolution</dd>
                                                                </dl>
                                                                
                                                            </li>
                                                
                                                        </ul>
                                                    </dd>

                                                    <!--elective core-->
                                                    <h5 class="text-muted">Elective (3 Credit Hours)</h5>
                                                    <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>KK0XX03</dt> <dd>Elective 4</dd>
                                                                </dl>

                                                            </li>
                                                
                                                        </ul>
                                                    </dd>
                                                </dl>

                                                </div>

                                                <div class="col-lg-6 second-box">
                                                    
                                                    <!--Second semester-->
                                                    <dl>
                                                        <dt class="pb-sm-2" >Semester 2</dt>
    
                                                        <!--University core-->
                                                        <h5 class="text-muted">University Core (4 Credit Hours)</h5>
                                                        <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                            <ul>
                                                                <li>
                                                                    <dl>
                                                                        <dt>UW00802 </dt> <dd>Appreciation of Ethics and Civilizations</dd>
                                                                    </dl>
                                                                </li>
                                                                <li>
                                                                    <dl>
                                                                        <dt>ULXXX02</dt> <dd>(Student Choice)</dd>
                                                                    </dl>
                                                                </li>
                            
                                                            </ul>
                                                        </dd>
    
                                                        <!--Language-->
                                                        <h5 class="text-muted">Language (2 Credit Hours)</h5>
                                                        <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                            <ul>
                                                                <li>
                                                                    <dl>
                                                                        <dt>UB0XXX2 / UX00XX2</dt> <dd></dd>
                                                                    </dl>
                                                                </li>
                                                    
                                                            </ul>
                                                        </dd>
    
                                                        <!--Faculty core-->
                                                        <h5 class="text-muted">Faculty Core (6 Credit Hours)</h5>
                                                        <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                            <ul>
                                                                <li>
                                                                    <dl>
                                                                        <dt>KT14203</dt> <dd>Computer Architecture & Organization</dd>
                                                                    </dl>
                                                                </li>
                                                                <li>
                                                                    <dl>
                                                                        <dt>KT14403</dt> <dd>Discrete Structures</dd>
                                                                    </dl>
                                                                </li>
                                                    
                                                            </ul>
                                                        </dd>
    
                                                        <!--Faculty core-->
                                                        <h5 class="text-muted">Programme Core (3 Credit Hours)</h5>
                                                        <dd class="pl-lg-3 pl-sm-3 pl-md-3">
                                                            <ul>
                                                                <li>
                                                                    <dl>
                                                                        <dt>KK14203</dt> <dd>Object Oriented Programming</dd>
                                                                    </dl>
                                                                   
                                                                </li>
                                                    
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                

                                                </div>
                                            </div>

                                        </div>
                                      </div>
                                    </div>
                                    
                                    </div>
                                    
                                  </div>
                            
                            <div class="tab-pane fade" id="requirement" role="tabpanel" aria-labelledby="requirement-tab" class="requirementBg" style="background-color:#FFEACE;">
                                <div id="requirementNet"></div>
                            </div>
                            <div class="tab-pane fade" id="fee" role="tabpanel" aria-labelledby="fee-tab">
                                <div class="container col-lg-12 px-2">
                                    <table class="table " style="font-size:small">
                                        <div class="thead">
                                            <tr style="background-color:#8F7158; opacity:79%">
                                                <th class="col-lg-7" colspan="2">
                                                    <h4 class="text-center">Fees</h4>
                                                </th>
                                                <th class="co-lg-5">
                                                    <h4>Science and Information Technology</h4>
                                                    <h6 class="text-center">(RM)</h6>
                                                </th>
                                            </tr>
                                        </div>
                                        <div class="tbody">
                                            <tr>
                                                <td>Non-Recurrent Fees (Payable only once by every student)</td>
                                                <td>New Student Registration Fees</td>
                                                <td class="text-center">700.00</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3">Recurrent Fees - 18 weeks/semester (Payable every semester)</td>
                                                <td>Tuition Fees Per Semester</td>
                                                <td class="text-center">960.00</td>
                                            </tr>
                                            <tr>
                                                
                                                <td>Hostel Fees</td>
                                                <td class="text-center">665.00</td>
                                            </tr>
                                            <tr>
                                                <td>Accreditation Fee</td>
                                                <td class="text-center">-</td>
                                            </tr>

                                            <tr>
                                                <td class="text-center" colspan="2"><b>Total</b></td>
                                                <td class="text-center"t><b>1,625.00</b></td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2">Payable every session (Annually)</td>
                                                <td>Insurance</td>
                                                <td class="text-center">25.00</td>
                                            </tr>

                                            <tr>
                                                <td>Students Society Membership Fee</td>
                                                <td class="text-center">5.00 </td>
                                            </tr>

                                            <tr>
                                                <td class="text-center" colspan="2"><b>Total</b></td>
                                                <td class="text-center"t><b>30.00</b></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center" colspan="2"><b>Sub-total (New Students)</b></td>
                                                <td class="text-center"t><b>2,355.00</b></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center" colspan="2"><i>Total Payment For 4 Years Studies (Excluding
                                                    Hostel Fees)</i></td>
                                                <td class="text-center"t><i>8,500.00</i></td>
                                            </tr>
                                        </div>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="apply" role="tabpanel" aria-labelledby="apply-tab">
                                <div class="container applyTab">
                                    <div class="row px-lg-0 py-lg-0 mx-lg-0 my-lg-0 px-0 py-0 mx-0 my-0">
                                        <div class="col-lg-4">
                                            <img src="https://images.pexels.com/photos/4778664/pexels-photo-4778664.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" width="100%" height="50%">
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="container">
                                                <div class="d-flex flex-column">
                                                    <h2 class="p-2">How to Apply</h2>
                                                    <p class="text-left p-2">
                                                        Bachelor Degree Programmes (only for local student)
                                                    </p>
                                                    <ul class="p-2">
                                                        <li class="p-2">
                                                            The application is open for applicants with <b>STPM / Matriculation / STAM / Diploma / or equivalent</b>
                                                        </li>
                                                        <li class="p-2">
                                                            Admission requirement to Universiti Malaysia Sabah is subjected to the <span class=text-mute>'Peraturan Pengajian Prasiswazah UMS'</span>
                                                        </li>
                                                    </ul>

                                                    <div>
                                                        <p>
                                                            For more information regards to the academic of Universiti Malaysia Sabah, please contact :
                                                            <br><b>Academic and Service Divisions,</b><br>
                                                            Universiti Malaysia Sabah, <br>
                                                            Tel : (+6088) 320000 Ext: 691259 . <br>
                                                            Website: <a href="http://bpa.ums.edu.my/" class="a-hover">http://bpa.ums.edu.my/</a>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </section>

        <!---Career prospect section-->
        <section id="prospectJob" style="background-image: linear-gradient(rgba(3, 3, 3, 0.8), rgba(0,0,0,0.5)),url('https://images.pexels.com/photos/1181676/pexels-photo-1181676.jpeg?auto=compress&cs=tinysrgb&w=600');">
            <div class="container mt-0 prospectBg" >
                <h1 class="text-left pb-2">Career Prospect</h1>
                <div class="row">
                    <div class="col-lg-4 prospectJob">
                        <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="img-fluid thumbnail jobPic">
                    </div>
                    <div class="col-lg-8 jobs">
                        <div class="row text-center" id="listJob">
                            <div class="col-lg-3 col-sm-12">
                                <p>Software Engineer</p>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <p>Application Software</p>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <p>System Software</p>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <p>Database Administrator</p>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <p>Computer System Analyst</p>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <p>Computer Support Specialists</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container pb-sm-2" id="courseOutcome">
                <p class="pt-3 pb-3 text-justify font-weight-bold mt-2 px-2" style="color:#FFF7ED; background-color: rgba(58, 56, 56, 0.486);"> 
                    Graduates of Bachelor of Computer Science (Software Engineering) with 
                    Honors will have the opportunity to pply strong analytical and 
                    critical thinking skills to solve problems in Computer Science 
                    particularly in the 
                    field of Software Engineering (Knowledge, Cognitive).
                </p>
            </div>
        </section>
    </main>

    <!--Typed effect-->
    <script>
        $(document).ready(function(){
    
        var typed= new Typed(".element",{
            strings: ["HC00 Software Engineering", "UH6481001 SOFTWARE ENGINEERING", "SOFTWARE ENGINEERING", "Kejuruteraan Perisian"],
            smartBackspace:true,
            typeSpeed:50,
            backSpeed:30,
            loop:true,
            loopCount:Infinity,
            startDelay:1000
        
        });
    

});

    </script>

    