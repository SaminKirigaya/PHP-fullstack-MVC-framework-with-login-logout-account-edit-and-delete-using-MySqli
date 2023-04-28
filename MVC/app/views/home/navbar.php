<?php
    

    echo '    <nav class="navbar navbar-expand-lg navdesignbod  ">
                    <div class="container-fluid">
                        <a class="navbar-brand ms-4 logostyle" href="#">Office Logo</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                        <div class="navbar-nav medmarg ">
                            <div id="bor1" class="row rowdes">
                                <a id="act1" class="nav-link navtextstyl" href="https://localhost/MVC">Home</a>

                            </div>
                            
                            <div id="bor2" class="row rowdes">
                                <a id="act2" class="nav-link  navtextstyl" href="#">Packages</a>

                            </div>

                            <div id="bor3" class="row rowdes">
                                <a id="act3" class="nav-link navtextstyl" href="#">Contact</a>

                            </div>';


                             
                                
                if(!isset($_SESSION['id'])){
                    echo '<div id="bor5" class="row rowdes">
                                <a id="act5" class="nav-link navtextstyl" href="https://localhost/MVC/home/log">Login</a>

                            </div>
                            <div id="bor4" class="row rowdes1 ">
                                <a id="act4" class="nav-link navtextstyl" href="https://localhost/MVC/home/reg">Registration</a>
                                  
                            </div>';
                        }
                else{
                    echo '  <div id="bor5" class="row rowdes2">
                                <a id="act5" class="nav-link navtextstyl" href="https://localhost/MVC/home/profile">'.'<small>'.$_SESSION['user'].'</small></a>

                            </div>
                            <div id="bor4" class="row rowdes3 ">
                                <a id="act4" class="nav-link navtextstyl" href="https://localhost/MVC/home/logout">Logout</a>
                      
                            </div>';
                }       

                                

                            



                            
    echo                    '</div>
                        </div>
                    </div>
               </nav>';


?>

