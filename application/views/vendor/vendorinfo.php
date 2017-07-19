<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--<form>-->
<?php	
$attributes = array('id' => 'formVendorInfo','name' => 'formVendorInfo');
echo form_open('vendor/vendorinfo/SubmitVendorInfo',$attributes); 
?>
	<div class="k_bg-grey">
		<div class="container k_venu-prof">
            
            <div class="row" style="background:white">
                <div class="col-md-4 col-sm-2 col-xs-2 k_sidemenu-div" style="background:#f5f5f5">
                    <ul class="nav nav-stacked k_sidemenu" id="k_accordion1">
                        <li> <a href="#k_firstLink" data-toggle="collapse" data-parent="#k_accordion1">Your Profile</a>

                           
                          
                        </li>
                        <li> <a href="#k_secondLink" data-toggle="collapse" data-parent="#k_accordion1">Venue</a>

                            
                        </li>
                        <li><a href="#">Spaces</a>
                        </li>
                        <li><a href="#">Pricing & Availability</a>
                        </li>
                        <li><a href="#">Menu</a>
                        </li>
                        <li><a href="#">Packages</a>
                        </li>
                        <li><a href="#">Booking and Cancellation</a>
                        </li>
                        <li><a href="#">Payment & Agreement</a>
                        </li>
                    </ul>
                </div>
                <div id="k_submenu" class="col-md-8 col-sm-6 col-xs-4 k_content-div k_bg-white">
                
                    <ul id="k_firstLink" class="collapse k_linkul">
                                <li class="panel"  style="border-top: none;"> <a id="k_clkid" class="accordion-toggle" href="#k_firstlink-sub1" data-toggle="collapse">Basics </a>
                                          
                               </li>
                                        <ul id="k_firstlink-sub1" class="collapse">
                                           <li>Test1</li>
                                           <li>Test1</li>
                                        </ul>
                               <li class="panel"> <a class="accordion-toggle" href="#k_firstlink-sub2" data-toggle="collapse">Your Location & Hours</a>
                                          
                               </li>
                                     <ul id="k_firstlink-sub2" class="collapse">
                                           <li>Test1</li>
                                           <li>Test1</li>
                                           </ul>
                               <li class="panel"> <a class="accordion-toggle" href="#k_firstlink-sub3" data-toggle="collapse">Your Team</a>
                                          
                               </li>
                                <ul id="k_firstlink-sub3" class="collapse">
                                           <li>Test1</li>
                                           <li>Test1</li>
                                           </ul>
                    </ul>

                <ul id="k_secondLink" class="collapse">
                    <li>SubTest2</li>
                    <li>SubTest2</li>
                    <li>SubTest2</li>
                    <li>SubTest2</li>
                </ul>
                  
                </div>
            </div>
        </div>
		<footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-xs-6 k_fulwdth">
                    <button class="btn btn-small btn-block k_back-btn" type="button" >Back</button>
                </div>
                 <div class="col-sm-6 col-xs-6 k_fulwdth">
                    <button class="btn btn-small btn-block k_next-btn" type="button" >Next</button>
                </div>
            </div>
          
        </div>
        </footer>
	</div>
<?php echo form_close(); ?>

<!-- END Form-->
 <script type="text/javascript">
        $( document ).ready(function() {
            $("#k_accordion1 li:nth-child(1)").addClass('k_white_color');
            $("#k_submenu .collapse:nth-child(1)").addClass('in');
            

        });

      /*   $("#k_submenu ul li a").click(function(){
               // $(".k_content-div .accordion-toggle").addClass("k_arrw");
             //  alert("ghh");
                $(".k_content-div .accordion-toggle:after").css("content", "\e113");
            });  */


        $("#k_accordion1 li").click(function() {
         
          $(".k_white_color").removeClass('k_white_color');

          $(this).addClass('k_white_color');
          $(".in").removeClass('in');

        });
         $("#k_submenu ul li a").click(function() {
      
          $(".collapse .in").removeClass('in');
        //  $(this).addClass('collapsed');

          
           

        });
    </script>
