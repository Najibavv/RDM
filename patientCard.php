<?php 
function myfav($pID, $name, $phoneNo, $medication, $time, $gender, $message, $pharmcist_id){
    // after this next, plain HTML
    ?>
    
    <!-- more HTML code here -->
    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/person.png" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href=""><?php echo $name ?></a>
                            <span class="text-primary me-1"><?php echo $time?></span>
                            
                        </div>
                    </div>
                </div>
    <?php   
    // .. some more PHP stuff
  return;
  }
  

?>