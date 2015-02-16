<?php $this->load->view('header', array('num' => 0, 'title' => 'HOME')); ?>
  
            <div class="frame">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>
                    
                      <div class="carousel-inner">
                    
                        <div class="item active">
                          <img src="<?php echo base_url();?>assets/img/slider/teeth1.jpg" alt="image1">
                          <div class="carousel-caption">
                            <h3>First Teeth</h3>
                          </div>
                        </div>
                    
                        <div class="item">
                          <img src="<?php echo base_url();?>assets/img/slider/teeth2.jpg" alt="image1">
                          <div class="carousel-caption">
                            <h3>Second Teeth</h3>
                          </div>
                        </div>
                    
                        <div class="item">
                          <img src="<?php echo base_url();?>assets/img/slider/teeth3.jpg" alt="image1">
                          <div class="carousel-caption">
                            <h3>Third Teeth</h3>
                          </div>
                        </div>
                         
                        
                        
                      </div><!--/.carousel-inner-->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div><!--/.carousel-->
              </div>
            
            <div class="element-container">
              <h2>Gayatin Dental Clinic</h2><p></p>
                  <p>What is a dental clinic? People often want to know exactly what is a dental clinic and if there is actually a difference between them and dental offices. 
                  The facts are in and we are happy to inform you that they are both the same thing. The lead dentist or owner of the practice makes the call as to if he or 
                  she wants to use the term clinic, office or even center.</p><br>
                  <p>At Gayatin Dental Clinic, we provide general dental care as well as specialized procedures such as veneers and dental implants. The videos below detail 
                  our most common procedures. Each of these videos will help you to become more familiar with the specific steps involved in taking care of your teeth.</p>
                  <p>Our dentist primary focus is on providing gentle care.</p><br>
                  <p>We understand that when it comes to choosing a dentist, that you want one that you can trust. Gayatin Dental Clinic has been a trusted part of the local 
                  community for years because we truly care about your smile.</p>
            </div>
  
<?php $this->load->view('footer'); ?>