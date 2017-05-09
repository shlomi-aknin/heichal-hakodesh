	<?php 
	include 'views/head.php';
	?>
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>מידע</h3>
						<ul>
							<li class="address"><?php echo $data['site']['address']; ?></li>
							<li class="phone"><a href="tel://<?php echo $data['site']['phone']; ?>"><?php echo $data['site']['phone']; ?></a></li>
							<li class="email"><a href="mailto:<?php echo $data['site']['email']; ?>"><?php echo $data['site']['email']; ?></a></li>
							<li class="url"><a href="<?php echo $data['site']['domain']; ?>"><?php echo $data['site']['domain']; ?></a></li>
						</ul>
					</div>

				</div>
				<div id="contact-msg-sent" class="col-md-5 col-md-push-1 hide">
					<h3>הודעתך נשלחה!</h3>
					<div class="alert alert-success">
					  אנו מודים לך על פנייתך. נחזור אליך בהקדם.
					</div>
				</div>
				<div id="contact-form-wrap" class="col-md-5 col-md-push-1 animate-box">
					<h3>דברו איתנו</h3>
					<form id="contact-form" action="" method="post">
						<div class="row form-group">
							<div class="alert alert-danger hide" role="alert">&#42; נא למלא את השדות המודגשים</div>
							<div class="col-md-6 xs-margin-btm-15">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" name="lname" class="form-control required" placeholder="שם משפחה">
							</div>
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" name="fname" class="form-control required" placeholder="שם פרטי">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="hidden" name="email" value="honeypot_trap">
								<input type="text" name="c_email_1" class="form-control required" placeholder="אימייל">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" name="subject" class="form-control required" placeholder="מהות הפנייה">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="ההודעה שלכם..."></textarea>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">שליחה <i class="fa fa-spinner fa-spin hide"></i></button>
							<input type="hidden" name="action" value="contact_form">
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>
	<div id="map" class="fh5co-map"></div>
	<?php include 'views/footer.php';?>