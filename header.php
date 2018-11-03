<?php
	if (stripos($_SERVER['REQUEST_URI'], 'index.php')) {
    echo '<header class="header">
		<nav class="navbar navbar-custom" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><h3>Saud Rehman</h3></a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#skills">Skills</a></li>
						<li><a href="#blog">Blog</a></li>
            			<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div><!-- .container -->
		</nav>
	</header><!-- End Navigation -->';
	}
	if (stripos($_SERVER['REQUEST_URI'], 'search.php')) {
    echo '<header class="header">
		<nav class="navbar navbar-custom" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><h3>Saud Rehman</h3></a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php">Home</a></li>
								<li><a href="index.php#about">About</a></li>
								<li><a href="index.php#skills">Skills</a></li>
								<li><a href="index.php#blog">Blog</a></li>
		            			<li><a href="index.php#contact">Contact</a></li>
					</ul>
				</div>
			</div><!-- .container -->
		</nav>
	</header><!-- End Navigation -->';
	} else if (stripos($_SERVER['REQUEST_URI'], 'blog.php')) {
	    echo '<header class="header">
				<nav class="navbar navbar-custom" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.php"><h1></h1></a>
						</div>

						<div class="collapse navbar-collapse" id="custom-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php">Home</a></li>
								<li><a href="index.php#about">About</a></li>
								<li><a href="index.php#skills">Skills</a></li>
								<li><a href="index.php#blog">Blog</a></li>
		            			<li><a href="index.php#contact">Contact</a></li>
							</ul>
						</div>
					</div><!-- .container -->
				</nav>
			</header><!-- End Navigation -->';
	}
?>
	<!-- Navigation -->
	