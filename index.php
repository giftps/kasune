<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="icon" href="./scr/favicon.ico">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="theme-color" content="#000000">
	<meta name="description" content="Web site created using create-react-app">
	<link rel="apple-touch-icon" href="./scr/logo192.png">
	<link rel="manifest" href="./scr/manifest.json">
	<title>The Kasune Project</title>
	<link href="./scr/static/css/main.d14e289e.css" rel="stylesheet">

	<!-- <script defer="defer" src="./scr/static/js/main.d4fcee54.js"></script> -->


	<!-- <link href="scr/app.css" rel="stylesheet"> -->
	<link href="scr/bootstrap5.min.css" rel="stylesheet">
	<script src="scr/bootstrap.bundle.min.js"></script>

	<style>
		body {
			background-color: #FFFFFF !important;
		}

		h1 {
			color: #151515;
		}

		navbar-link nav-link {
			color: #FFFFFF;
		}

		.project {
			background-color: #FFFFFF;
			color: #151515 !important;
		}

		.project p {
			color: #151515 !important;
			width: 86%;
		}

		.project .nav.nav-pills {
			border: #151515 2px solid;
		}

		.project .nav.nav-pills .nav-link {
			color: #458e85;
		}

		.skill {
			background: #FFFFFF;
		}

		.skill-bx {
			background: #FFFFFF;
			border: #458e85 2px solid;
			color: #151515;
		}

		.contact {
			/* background: linear-gradient(90.21deg, #6E7271 5.91%, #fff 181.58%); */
			background: linear-gradient(90.21deg, #000 5.91%, #084a0e 81.58%);

			/* background: #FFFFFF; */
			padding: 60px 0 200px;
			color: #151515;
		}

		.contact form input,
		.contact form textarea {
			color: #151515 !important;
		}

		.newsletter-bx {
			border: #002F04 1px solid;
		}

		input[type="text"] {
			color: #151515 !important;
		}

		p,
		ul li {
			text-align: left !important;
		}

		.footer {
			background-color: #FFFFFF;
		}

		.footer p {
			color: #151515;
		}

		h1,
		h2,
		h3,
		h4,
		h5 {
			text-align: center;
		}

		.newsletter-bx h3 {
			font-size: 20px;
		}

		.skill h3,
		h4 {
			text-align: left;
		}

		.banner {
			/* background: linear-gradient(90.21deg, #6E7271 5.91%, #fff 181.58%); */
			/* background-image: linear-gradient(90deg, rgba(64, 166, 112, 0.6055672268907564) 46%, rgba(9, 121, 50, 0.3562675070028011) 100%); url('scr/static/media/hbg.jpg'); */
			background:linear-gradient(90.21deg, #000 5.91%, #084a0e 81.58%);
			color:#fff;
		}
	</style>
</head>

<body>

	<div class="App">
		<!-- <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
			<div class="container-fluid"> -->
		<nav class="navbar navbar-expand-md navbar-light" style="position:fixed_">
			<div class="container">
				<a class="navbar-brand" href="javascript:void(0)">
					<img style="width:200px; border-radius: 20px" src="./scr/static/media/logo.ab1df93785b722e1db63.png" alt="Logo">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="mynavbar">
					<div class="ms-auto navbar-nav">
						<ul class="navbar-nav ms-auto nav" style="display: flex;justify-content: center;align-items: center;">
							<li class="nav-item">
								<a href="#home" data-bs-toggle="tab" onclick="scrollToSection('home')" class="active navbar-link nav-link">Home</a>
							</li>
							<li class="nav-item">
								<a href="#our-story" data-bs-toggle="tab" onclick="scrollToSection('our-story')" class="navbar-link nav-link">Our Story</a>
							</li>
							<li class="nav-item">
								<a href="#our-projects" data-bs-toggle="tab" onclick="scrollToSection('our-projects')" class="navbar-link nav-link">Our Projects</a>
							</li>
							<li class="nav-item">
								<a href="#our-people" data-bs-toggle="tab" onclick="scrollToSection('our-people')" class="navbar-link nav-link">Our People</a>
							</li>
							<li class="nav-item">
								<span class="navbar-text">
									<a href="/tkp/#contact1" onclick="scrollToSection('contact1')"><button class="vvd"><span>Get in Touch</span></button></a>
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<section class="banner" id="home">
			<div class="container_">
				<div class="aligh-items-center row">
					<!-- <div class="col-xl-7 col-md-6 col-12"> -->
					<div>
						<center>
							<h1 style="font-size: 10vw; color:#fff; white-space: nowrap;"><span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject</h1>
						</center>
						<div class="animate__animated animate__fadeIn">
							<div style="display: flex; justify-content: center; align-items: center; text-align: center; padding: 20px;">
							</div>
						</div>
					</div>
					<!-- </div> -->
					<div class="col-xl-5 col-md-6 col-12">
						<div>
							<div class="animate__animated animate__zoomIn"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="project" id="projects">
			<div class="container">
				<div class="row">
					<div size="12" class="col">
						<div>
							<div class="">
								<!-- //////////////! -->
								<ul class="nav nav-pills">
									<li class="nav-item">
										<a class="nav-link block-itm active" data-bs-toggle="pill" href="#our-story">Our Story</a>
									</li>
									<li class="nav-item">
										<a class="nav-link block-itm" data-bs-toggle="pill" href="#our-projects">Our Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link block-itm" data-bs-toggle="pill" href="#our-people">Our People</a>
									</li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane container active" id="our-story">
										<div role="tabpanel" id="projects-tabs-tabpane-first" aria-labelledby="projects-tabs-tab-first" class="fade tab-pane active show">
											<div style="display: flex; justify-content: center; align-items: center; padding: 20px;">
												<img src="./scr/static/media/project-img1.ebafc1d6e467a3f42bfe.png" style="width: 100%; max-width:450px; height: auto; border-radius: 20px;">
											</div>
											<h2>Who We Are</h2>
											<p><span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject is an organisation whose purpose is to provide funding for equitable access to quality education at identified levels in Zambia.&nbsp;<span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject will continuously strive to improve capacity for quality service delivery and mobilise resources to address the critical issues that hinder the youth of Zambia from gaining equitable access to a quality education, be it academic or vocational. Through further education, <span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject seeks to empower young people realise their full potential as well as strengthen their capacity to achieve sustainable economic levels that break the cycle of poverty.&nbsp;With providing access to further education at its core, the <span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject takes a holistic approach in its pursuit to empower young people. The&nbsp;programmes meet recipients at their point of need, dealing with issues that might impact negatively on their personal journeys through education. High on the agenda is self care. There is no question that there can be no success where one’s mental health is in crisis. The work of <span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject supports and highlights the importance of a robust and resilient mental state, as this is the gateway to any form of success. </p>
										</div>
									</div>
									<div class="tab-pane container fade" id="our-projects">
										<!-- <div role="tabpanel" id="projects-tabs-tabpane-second" aria-labelledby="projects-tabs-tab-second" class="fade tab-pane"> -->
										<h3>Education </h3>
										<h3 style="color:#3e4240">The Mayeba Fund</h3>
										<p><span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject provides access to higher education by providing funding using an equitable approach.&nbsp;&nbsp;How funding is provided depends on the ambitions of the young person, their basic formal education, school leaving results etc. Prospective students are then supported in making goals that are realistic and achievable. <span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject supports academic or vocational education as it is important that opportunities are reflective of different abilities and ambitions. <span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject encourages families to participate on all levels in supporting their loved one (including financial support) on the agreed educational pathway.</p>
										<p> <span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject also provides funding for extra tuition in preparation for Grade 7 and 9 GCSE exams respectively. The Grade 7 certificate is the primary school leaving certificate, while the Grade 9 certificate enables young people to continue their secondary school education. Without obtaining the required level of points needed at each stage of key exams, the educational journey for many young people ends at either 13 or 16 years of age. Additionally, <span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject pays for extra tuition in preparation for Grade 12 GCSE exams, for 18 year olds. These are even more crucial as young people have come this far and they cannot afford to leave secondary school without a full Grade 12 GCSE Certificate. An interruption at any stage of this educational journey, could be a catalyst for early marriages, unplanned pregnancies, mental health issues and a myriad of forms of substance abuse, all this, already now painfully commonplace.</p>
										<h3>Community Outreach</h3>
										<!-- <h3></h3> -->
										<h3 style="color:#3e4240">The Paulina Fund</h3>

										<p><span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject works to raise awareness of social, economic and mental health issues that affect the youth and the different communities of which they are a part of, be it rural or urban through our community outreach programmes. <span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject will engage and encourage the community on programme planning, implementation and sustainability. This will include, for instance, preparing business plans, business grants and forming cooperatives, to create financial empowerment. <span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject will also focus on raising awareness of the importance of a healthy mental state in these communities and highlight the benefits of accessing psychosocial support. <span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject will work in partnership with established specialist organisations and will play an active role in disrupting the status quo on the stigma associated with mental health challenges.</p>
										<!-- </div> -->
									</div>
									<div class="tab-pane container fade" id="our-people">
										<!-- <div role="tabpanel" id="projects-tabs-tabpane-third" aria-labelledby="projects-tabs-tab-third" class="fade tab-pane"> -->
										<h3>The Founder</h3>
										<br>
										<img src="./scr/static/media/founder-img.11ea5534359432b2f333.png" alt="Header Img" style="display: block; margin-left: auto; margin-right: auto; border-radius: 60px;width: 100%; max-width:400px;height:auto">
										<br>
										<h3>Ruth Kasune Banda</h3>
										<br>
										<p><span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject is the result of a relentless self challenge of my social responsibilities that started in early 1995, just after my 23rd &nbsp;birthday and it finally launched in January 2021. That is a long time to sit on a vision that has such urgency. <span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject is indeed a labour of love. However, my vision is simple. My call to social action is urgent. My prayer is truly a sincere one: Let us work together, to ensure our youth have equitable access to quality education. Education in all its forms should never be only for those who can afford it, it should be for all who hunger for it. Please join me in my work and with God before us, let us educate the youth of our beloved Zambia!</p>
										<h3>The Inspiration</h3>
										<br>
										<img src="./scr/static/media/gd.jpg" alt="Header Img" style="display: block; margin-left: auto; margin-right: auto; border-radius: 60px;width: 100%; max-width:400px;height:auto">
										<br>
										<h3>Rodwin Chilikwela Kasune</h3>
										<br>
										<p>Rodwin Chilikwela Kasune was my maternal grandfather. He was a wholesome human being who recognised the emancipatory and transformative power of tertiary education. His passion for education has remained with me so many years after his death when I was 11 years old. These charitable works are to honour his life and generosity of spirit and are a monumental mark of his lasting legacy of kindness on my life.</p>
										<!-- </div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="skill" id="skills">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="skill-bx wow zoomIn">
							<h3>Our Aims</h3>
							<h4>We only have one&nbsp;Aim:</h4>
							<div style="list-style-type:none; ">
								<p>To provide equitable access to quality education</p>
							</div>
							<h3>Our Objectives</h3>
							<div style="list-style-type:none; margin-top_: 19px;">
								<p>To provide funding for academic and vocational education</p>
								<p>To emphasise that education is the bedrock of a hopeful future.</p>
								<p>To emphasise that it takes a whole village to raise just one child.</p>
								<p>To emphasise that equitable access to quality education is a basic human right of every child.</p>
								<p>To emphasise that every young mind matters.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="contact" id="connect">
			<div class="container">
				<div class="align-items-center row">
					<div size="12" class="col-md-6">
						<div style="padding: 10px 30px;backgroundcolor:pink!important; margin-right:20px" class="row col-md-12">
							<div class="col-md-6" style=" backgroundcolor:red!important;color:#fff; font-family: Times, serif;display:auto; left:50;top:50; font-size:1.7em; font-weight:550; padding-top:100px; text-decoration:justify;">
								Educating Our Youth, <br>
								Advocating for Their Mental Health
							</div>
							<div class="col-md-6" style="display:auto; right:0!important; left:100%">
								<img class="" src="./scr/static/media/grad.png" alt="Contact Us" style="border-radius:20px; width:300px; max-width: 700px; height: 450px;">
							</div>
						</div>
					</div>
					<div size="12" class="col-md-6">
						<div>
							<h2 style="color:#FFFFFF">Get In Touch</h2>
							<!-- <div class="" style="display: none">
								<h2>Get In Touch</h2>
								<form>
									<div class="row">
										<div size="12" class="px-1 col-sm-6"><input type="text" placeholder="First Name" value=""></div>
										<div size="12" class="px-1 col-sm-6"><input type="text" placeholder="Last Name" value=""></div>
										<div size="12" class="px-1 col-sm-6"><input type="email" placeholder="Email Address" value=""></div>
										<div size="12" class="px-1 col-sm-6"><input type="tel" placeholder="Phone No." value=""></div>
										<div size="12" class="px-1 col"><textarea rows="6" placeholder="Message"></textarea><button type="submit"><span>Send</span></button></div>
									</div>
								</form>
							</div> -->

							<div class="contact1" id="contact1">
								<div class="container-contact1">

									<form class="contact1-form validate-form">

										<div class="wrap-input1 validate-input" data-validate="Name is required">
											<input class="input1" type="text" name="name" placeholder="Name">
											<span class="shadow-input1"></span>
										</div>

										<div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
											<input class="input1" type="text" name="email" placeholder="Email">
											<span class="shadow-input1"></span>
										</div>

										<div class="wrap-input1 validate-input" data-validate="Subject is required">
											<input class="input1" type="text" name="subject" placeholder="Subject">
											<span class="shadow-input1"></span>
										</div>

										<div class="wrap-input1 validate-input" data-validate="Message is required">
											<textarea rows="5" class="input1" name="message" placeholder="Message"></textarea>
											<span class="shadow-input1"></span>
										</div>

										<div class="container-contact1-form-btn" style="text-align: center;">
											<button class="contact1-form-btn btn-sm">
												<span>
													Send Email
													<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
												</span>
											</button>
										</div>
									</form>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="footer">
			<div class="container">
				<div class="align-items-center row">
					<div class="col-lg-12">
						<div class="newsletter-bx wow slideInUp">
							<div class="text-center">
								<h2>The Reason I Am</h2>
								<h4 style="text-align: left!important;">I say to the young people... <i> "When I help you make sense of your life, my life makes sense."</i> That is the reason I am.</h4>
								<!-- <hr> -->
								<h3 style="text-align: left!important;">What is the reason you are?</h3>
							</div>
						</div>
					</div>
					<div size="12" class="col-sm-6">
						<img style="width:200px; border-radius:20px" src="./scr/static/media/logo.ab1df93785b722e1db63.png" alt="Logo">
					</div>
					<div size="12" class="text-center text-sm-end col-sm-6 col-md-3">
						<p>Copyright &copy; <?php echo date('Y') ?> <span style="color: green;">T</span>he<span style="color: green;">K</span>asune<span style="color: green;">P</span>roject </p>
					</div>
					<div size="12" class="text-center text-sm-end col-sm-6 col-md-3">
						<p><span style="">Designed by <a target="_blank" href="https://barelynx.com">Barelynx Technology Ltd.</a></span> </p>
					</div>
				</div>
			</div>
		</footer>
	</div>

</body>

<script>
	function scrollToSection(sectionId) {
		document.getElementById(sectionId).scrollIntoView({
			behavior: 'smooth'
		});

		// Remove active class from all tabs
		// document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));

		// // Add active class to the clicked tab
		// element.classList.add('active');

		// Remove active class from all tab panes
		// document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active', 'show'));

		// Add active class to the corresponding tab pane
		// document.getElementById(sectionId).classList.add('active', 'show');
	}
</script>

</html>