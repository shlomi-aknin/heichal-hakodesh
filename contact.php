	<?php include 'views/head.php';?>
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
				<div class="col-md-5 col-md-push-1 animate-box">
					<h3>דברו איתנו</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="שם משפחה">
							</div>
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="שם פרטי">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="אימייל">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="מהות הפנייה">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="ההודעה שלכם..."></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="שליחה" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
	<div id="map" class="fh5co-map"></div>
	<?php include 'views/footer.php';?>