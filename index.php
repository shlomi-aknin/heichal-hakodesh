	<?php 
		include 'views/head.php';
		include 'data/index.php';
	?>
	<div id="fh5co-counter" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="40356" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">הפצות</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="30290" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">חברים</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="2039" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">בתי מדרש</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="997585" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">תלמידים</span>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-explore" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>שיעורים, אירועים, חדשות</h2>
					<p>חלק קטן ממגוון הפעילויות שהישיבה מציעה</p>
				</div>
			</div>
		</div>		
		<div class="fh5co-explore fh5co-explore1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-push-5 animate-box">
						<div class="embed-responsive embed-responsive-16by9">
						  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uh_DiO1RAbU" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-8 animate-box">
						<div class="mt">
							<h3>נפלה עטרת ראשינו</h3>
							<p>סרטון מרגש על מוהרא"ש זצוק"ל</p>
							<ul class="list-nav">
								<li><i class="icon-check2"></i>צילום ועריכה: נתן ברדוגו</li>
								<li><i class="icon-check2"></i>לחן, עיבוד ומילים: בריו חקשור</li>
								<li><i class="icon-check2"></i>פסנתרים: דוד אכילביץ</li>
							</ul>
							<p><a class="btn btn-primary btn-lg popup-youtube btn-video play-video" href="https://www.youtube.com/watch?v=uh_DiO1RAbU">הפעל סרטון</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-explore">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-pull-1 animate-box">
						<img class="img-responsive" src="https://i.ytimg.com/vi/GHz8ig5Iahc/maxresdefault.jpg" alt="work">
					</div>
					<div class="col-md-4 animate-box">
						<h3>שאלות ותשובות נבחרות</h3>
						<?php echo $data['rand_questions_html']; ?>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-project">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>תמונות אחרונות</h2>
					<p>מקבץ תמונות מאירועים אחרונים בפעילויות היכל הקודש באר שבע למען הקהילה</p>
				</div>
			</div>
		</div>
		<div class="container-fluid proj-bottom">
			<div class="row">
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="http://www.jdn.co.il/wp-content/uploads/2014/12/%D7%97%D7%A0%D7%95%D7%9B%D7%94-%D7%91%D7%97%D7%A6%D7%A8-%D7%94%D7%A7%D7%95%D7%93%D7%A9-%D7%9E%D7%95%D7%94%D7%A8%D7%90%D7%A9-%D7%A9%D7%99%D7%A7-3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>האדמו"ר מוהרא"ש שיק בהדלקת נרות חנוכה</h3>
						<span>קרא עוד</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="http://www.jdn.co.il/wp-content/uploads/2014/02/%D7%A9%D7%9E%D7%97%D7%AA-%D7%94%D7%90%D7%99%D7%A8%D7%95%D7%A1%D7%99%D7%9F-%D7%91%D7%97%D7%A6%D7%A8%D7%95%D7%AA-%D7%9E%D7%95%D7%94%D7%A8%D7%90%D7%A9-%D7%A9%D7%99%D7%A7-%D7%A9%D7%90%D7%A4%D7%A8%D7%90%D7%9F-2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>שמחת האירוסין בחצרות מוהרא''ש שיק - שאפראן</h3>
						<span>קרא עוד</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="http://www.jdn.co.il/wp-content/uploads/2013/11/%D7%94%D7%90%D7%93%D7%9E%D7%95%D7%A8-%D7%9E%D7%95%D7%94%D7%A8%D7%90%D7%A9-%D7%A9%D7%99%D7%A7-%D7%91%D7%A1%D7%A2%D7%95%D7%93%D7%AA-%D7%A8%D7%97-%D7%9B%D7%A1%D7%9C%D7%95-%D7%91%D7%91%D7%99%D7%AA-%D7%9E%D7%93%D7%A8%D7%A9%D7%95-%D7%91%D7%95%D7%99%D7%9C%D7%99%D7%90%D7%9E%D7%A1%D7%91%D7%95%D7%A8%D7%92-10.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>האדמו''ר מוהרא''ש שיק בסעודת ר''ח כסלו בבית</h3>
						<span>קרא עוד</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="http://www.jdn.co.il/wp-content/uploads/2014/12/%D7%97%D7%A0%D7%95%D7%9B%D7%94-%D7%91%D7%97%D7%A6%D7%A8-%D7%94%D7%A7%D7%95%D7%93%D7%A9-%D7%9E%D7%95%D7%94%D7%A8%D7%90%D7%A9-%D7%A9%D7%99%D7%A7-3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>האדמו"ר מוהרא"ש שיק בהדלקת נרות חנוכה</h3>
						<span>קרא עוד</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="http://www.jdn.co.il/wp-content/uploads/2014/02/%D7%A9%D7%9E%D7%97%D7%AA-%D7%94%D7%90%D7%99%D7%A8%D7%95%D7%A1%D7%99%D7%9F-%D7%91%D7%97%D7%A6%D7%A8%D7%95%D7%AA-%D7%9E%D7%95%D7%94%D7%A8%D7%90%D7%A9-%D7%A9%D7%99%D7%A7-%D7%A9%D7%90%D7%A4%D7%A8%D7%90%D7%9F-2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>שמחת האירוסין בחצרות מוהרא''ש שיק - שאפראן</h3>
						<span>קרא עוד</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="http://www.jdn.co.il/wp-content/uploads/2013/11/%D7%94%D7%90%D7%93%D7%9E%D7%95%D7%A8-%D7%9E%D7%95%D7%94%D7%A8%D7%90%D7%A9-%D7%A9%D7%99%D7%A7-%D7%91%D7%A1%D7%A2%D7%95%D7%93%D7%AA-%D7%A8%D7%97-%D7%9B%D7%A1%D7%9C%D7%95-%D7%91%D7%91%D7%99%D7%AA-%D7%9E%D7%93%D7%A8%D7%A9%D7%95-%D7%91%D7%95%D7%99%D7%9C%D7%99%D7%90%D7%9E%D7%A1%D7%91%D7%95%D7%A8%D7%92-10.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>האדמו''ר מוהרא''ש שיק בסעודת ר''ח כסלו בבית</h3>
						<span>קרא עוד</span>
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="features">
					<div class="col-md-4 animate-box">
						<h4>בית התבשיל</h4>
						<p>ארוחות חמות מוענקות לאנשים נזקקיםץ כל דכפין ייתי ויכול.</p>
					</div>
					<div class="col-md-4 animate-box">
						<h4>זיכוי הרבים</h4>
						<p>אנו מפיצים את ספריו והשו"ת של כ"ק מוהרא"ש זצוק"ל</p>
					</div>
					<div class="col-md-4 animate-box">
						<h4>שיעורי תורה</h4>
						<p>בהיכל הקודש באר שבע נערכים שיעורי תורה קבועים מדי יום על פי תורת רבי נחמן</p>
					</div>
				</div>
				<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-lg btn-learn" href="#">לפעילויות הישיבה</a></p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Testimonials</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person_1.jpg" alt="user">
									</figure>
									<span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person_2.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person_3.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>אייטמים נבחרים</h2>
					<p>כמה אייטמים שנבחרו אקראית</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/project-4.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Nov. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/project-2.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Nov. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Nov. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'views/footer.php';?>