<?php get_header();?>
    <div class="container py-1 bg-white px-0 pb-1 mt-1 shadow rounded h-100  m-auto d-block" style="height: 600px !important;">
 
        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item border-0 rounded-0 rounded-0 active" role="presentation">
              <button class="nav-link rounded-0 text-dark border-1 py-3 px-1 " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
            </li>
            <li class="nav-item border-0 rounded-0 rounded-0" role="presentation">
              <button class="nav-link rounded-0 text-dark border-1 py-3 px-1 " id="donate-tab" data-bs-toggle="tab" data-bs-target="#donate" type="button" role="tab" aria-controls="donate" aria-selected="false">donate</button>
            </li>
            <li class="nav-item border-0 rounded-0 rounded-0" role="presentation">
              <button class="nav-link rounded-0 text-dark border-1 py-3 px-1 " id="donnerslist-tab" data-bs-toggle="tab" data-bs-target="#donnerslist" type="button" role="tab" aria-controls="donnerslist" aria-selected="false">Donners list</button>
            </li>
            <li class="nav-item border-0 rounded-0 rounded-0" role="presentation">
              <button class="nav-link rounded-0 text-dark border-1 py-3 px-1 " id="contactus-tab" data-bs-toggle="tab" data-bs-target="#contactus" type="button" role="tab" aria-controls="contactus" aria-selected="false">Contact us</button>
            </li>
          </ul>
          <div class="tab-content p-2 border-0" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <?php get_template_part( 'inc/carousel' );?>
            </div>
            <div class="tab-pane fade  pt-1" id="donate" role="tabpanel" aria-labelledby="donate-tab">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                      <div class="card   border-0    p-1 m-auto rounded-0">
                        <?php get_template_part( 'donate' );?>   
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-9">
                      <div class="card   border-0    p-1 m-auto rounded-0">
                        <?php get_template_part( 'banks' );?>   
                      </div>
                  </div>
                </div>
            </div>
            <div class="tab-pane fade " id="donnerslist" role="tabpanel" aria-labelledby="donnerslist-tab">
                <div class="card   border-0 p-1">
                    <div class="card-header py-2 text-center border-0 bg-white">
                        <?php _e('Here we can find all donners list ');?>
                    </div>
                    <div class="card-body">
                      <?php get_template_part( 'donnerlist' );?> 
                    </div>
                </div>
            </div>
            <div class="tab-pane fade  pt-1" id="contactus" role="tabpanel" aria-labelledby="contactus-tab">
              <div class="card   border   bg-light bg-opacity-75 col-xs-12 col-sm-12 col-md-6 px-3 py-0 m-auto rounded-0 text-dark">
                   <?php get_template_part( 'contact' );?>
              </div>
          </div>
          </div>
    </div>
    <div class="container text-center mt-2 text-gluten text-dark">
        desgined and development by: <br>
         gadhyare <br>
         <a href="mailto:gadhyare3@gmail.com" class="text-dark text-decoration-none"> Email me </a> or
        <a href="tel:252634115346" class="text-dark text-decoration-none"> Call me </a>
    </div> 
 
 

<?php get_footer(  );?>