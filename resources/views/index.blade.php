<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Dimas Syauqi Syafa | Portfolio</title>
		<link rel="icon" type="image/png" href="{{ asset('pub/images/male-technologist.png') }}" hreflang="en-us">
		<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('pub/style.css') }}">
	</head>
	<body>
	<div id = "site">
		<!-- Toggle Dark/Light Mode -->
		<div class="switch-wrapper">
			<div class="nav-wrapper">
				<img src="{{ asset('pub/images/dimas.jpg') }}" alt="Foto Profil" class="intro_photo">
				<span class="nav-name">Qi</span>
				<nav>
					<a href="#home">Home</a>
					<a href="#aboutme">About Me</a>
					<a href="#skills">Skills</a>
					<!-- <a href="#experience">Experience</a> -->
					<a href="#project">Project</a>
					<a href="#contact">Contact</a>
				</nav>
				<div class="sun"></div>
				<div class="toggle-wrapper">
					<input type="checkbox" id="switch"/>
					<label for="switch" id="switch1">Toggle</label>
				</div>
				<div class="moon"></div>
			</div>
		</div>

		<!-- Header Introduction - Home -->
		<header class="intro" id="home">
			<h1 class="intro_hello">
				Hello!
				<span  id="wave" class="emoji wave-hand animated "></span>
			</h1>
			@foreach ($dataHome as $item)
			<h2 class="intro_tagline">
				I'm
				<div class="myname">{{ $item->nama }}</div>
				<br>
				<br>
				<br>
				<div class="mytext">
					<div class="content">
						<div class=" container">
							<ul class="list">
								<li class="item">Back End Developer.</li>
								<li class="item">Junior Programmer.</li>
								<li class="item">Newbie Gamer.</li>
							</ul>
						</div>
					</div>
				</div>
				<br>
				<span>{{ $item->konten }}</span>
			</h2>

			<!-- Contact-1 (Email) -->
			<h3 class="intro_contact">
				<span>Get in touch</span>
				<span class="emoji pointer"></span>
				<span id="emailme">
					<a href="mailto:{{ $item->email }}" target="_blank" class="highlight-link">{{ $item->email }}</a>
				</span>
			</h3>
			@endforeach
		</header>

		<!-- About ME -->
		<section class = "section background" id="aboutme">
			<div class="section_title">About ME</div>
			<div class="section_content">
				@foreach ($dataAboutme as $item)
				<p>
					{{ $item->konten }}
				</p>

				<!-- Contact-2 (WA) -->
				<a class="status" href="{{ $item->link }}" target="_blank">
					<div class="status_light">
						<div class="status_light_ring"></div>
						<div class="status_light_led"></div>
					</div>
					<div class="status_message">
						Interested in working together? Reach out!
					</div>
				</a>
				@endforeach
			</div>
		</section>

		<!-- Skills -->
		<section class="section skills" id="skills">
			<div class="section_title">skills</div>
			<div class="section_content">
				<div class="skillz">
					<div class="skillz_category">
						<div class="skillz_category_label">
							Languages
						</div>
						<ul>
							@foreach ($dataFramework as $item)
							<li class="skillz_category_item">{{ $item->skill_frameworks }}</li>
							@endforeach
						</ul>
					</div>

					<div class="skillz_category">
						<div class="skillz_category_label">
							frameworks
						</div>
						<ul>
							@foreach ($dataLanguage as $item)
							<li class="skillz_category_item">{{ $item->skill_languages }}</li>
							@endforeach
						</ul>
					</div>

					<div class="skillz_category">
						<div class="skillz_category_label">
							Tools
						</div>
						<ul>
							@foreach ($dataTools as $item)
							<li class="skillz_category_item">{{ $item->skill_tools }}</li>
							@endforeach
						</ul>
					</div>
		</section>

		<!-- Recent Project -->
		<section class="section featured-projects" id="project">
			<div class="section_title">Recent Projects</div>
				<div class="section_content">
					<div class="project">
						<figure class="project_pic">
							<a href="#link" target="_blank">
								<img src="{{ asset('pub/images/TEST-API.png') }}" alt="image">
							</a>
						</figure>
					</div><br>
					@foreach($dataRecentproject as $item)
					<details>
						<summary>{{ $item->judul }}</summary>
						<div class = "featured-projects-content">
							<br>
							<p>{{ $item->konten }}</p>
						</div>
						<div class="project_name">
								<br>
								<a href="{{ $item->link }}" target="_blank">View Project</a>
						</div>
					</details>
					@endforeach
				</div>
		</section>

		<!-- Other Project -->
		<section class="section other-projects">
			<div class="section_title">Other Projects</div>
				<div class="section_content">

					@foreach($dataOtherproject as $item)
					<details>
						<summary>{{ $item->judul }}</summary>
						<div class="project">
							<br>
							<p>{{ $item->konten }}</p>
							<div class="project_links">
								<br>
								<a href="{{ $item->link }}" target="_blank">View Project</a>
							</div>
						</div>
					</details>
					@endforeach

				</div>
		</section>

		<!-- Footer Website -->
		<footer class="footer">
		 	<div class="footer_copyright">
		 		<div class="top">
		 			<span>
		 				Developed by
					</span>
				</div>
				<div class="bottom">
					<span>
						Dimas Syauqi Syafa
					</span>
					<span>
						@<script>document.write(new Date().getFullYear())</script>
					</span>
				</div>
			</div>

			<div class="footer_links" id="contact">
				@foreach ($dataContact as $item)
				<a href="mailto:{{ $item->email }}" target="_blank" title="0xd1m5@gmail.com">
					<span class="text">
						email
					</span>
				</a>
				<a href="{{ $item->instagram }}" target="_blank" title="Syaauqqii">
					<span class="text">
						instagram
					</span>
				</a>

				<a href="{{ $item->facebook }}" target="_blank" title="Dimas S">
					<span class="text">
						facebook
					</span>
				</a>
				<a href="{{ $item->github }}" target="_blank" title="Dimas S">
					<span class="text">
						github
					</span>
				</a>
				@endforeach
			</div>
	 	</footer>

	 	<!-- Icon UP -->
		<button id="top-button" style="display: inline-block;">
			<img src="{{ asset('pub/images/up-icon.png') }}" alt="">
		</button>

		<!-- Load JS Script -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="{{ asset('pub/main.js') }}"></script>
	</body>
</html>
