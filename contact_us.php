<?php include 'base_full_width.php' ?>
     
	<?php startblock('page_title'); ?>
		IIPS - Contact Us
	<?php endblock(); ?>
	 
	<?php startblock('content'); ?>
		<div class="row">
			<div class="col-lg-12">
          <h3 class="page-header"><b>Contact Us <small>We'd Love to Hear From You!</small></b></h3>
          <ol class="breadcrumb">
            <li><a href="index">Home</a></li>
            <li class="active">Contact</li>
          </ol>
        </div>
        
        <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Let's Get In Touch!</h3>
          <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Name</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email Address</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Phone Number</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Message</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">Submit</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h4><b>International Institute of Professional Studies</b></h4>
          <p>
            TakshaShila Campus<br>
			Khandwa Road, Indore<br>
			Indore, India, 452001 
          </p>
          <p><i class="icon-phone"></i> <abbr title="Phone">P</abbr>: </p>
          <p><i class="icon-envelope"></i> <abbr title="Email">E</abbr>: <a href="mailto:feedback@iips.edu.in">feedback@iips.edu.in</a></p>
          <p><i class="icon-clock"></i> <abbr title="Hours">H</abbr>: Monday - Friday: 10:30 AM to 5:30 PM</p>

            <a href="https://www.facebook.com/expressions12?ref=br_rs" target="_blank" align="left"><img src="http://www.niftybuttons.com/blue/facebook.png"></a>
<a href="https://twitter.com" target="_blank" align="left"><img src="http://www.niftybuttons.com/blue/twitter.png"></a>
    
          
        </div>

        </div>   
	
	<?php endblock(); ?>