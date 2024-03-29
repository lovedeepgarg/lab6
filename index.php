<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Home | COMP1002 HTML, CSS, and JS Fundamentals</title>
		<meta name="author" content="Lovedeep Garg" />
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body id="section1">
		<!-- Page-level header -->
		<header>
 			<img src="images/html-logo.svg" height="75" width="75" alt="HTML" />
			<h1>HTML, CSS, and JS Fundamentals</h1>
			<h2>Building Blocks for Web Developers</h2>
			<!-- Global site navigation -->
			<nav>
				<ul>
					<li><a href="index.php" title="Go to the Home page">Home</a></li>
					<li><a href="red.php" title="Learn about red blocks">Red Blocks</a></li>
					<li><a href="blue.php" title="Learn about blue blocks">Blue Blocks</a></li>
					<li><a href="yellow.php" title="Learn about yellow blocks">Yellow Blocks</a></li>
					<li><a href="green.php" title="Learn about green blocks">Green Blocks</a></li>
					<li><a href="about.php" title="About Us">About</a></li>
				</ul>
			</nav>
		</header>
		<!-- Page-level main content -->
		<main>
			<!-- News Section -->
			<section>
				<h3>Building Blocks In The News</h3>
				<!-- First Article -->
				<article>
					<h4>Latest Research Reveals Building Blocks are Cool</h4>
					<p>by Blocky Blockhead<br /><time datetime="2018-03-29">March 29, 2018</time></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing. Platea dictumst vestibulum rhoncus est pellentesque. Read more…</p>
				</article>
				<!-- Second Article -->
				<article>
					<h4>Building Blocks Aren’t Just For Kids</h4>
					<p>by Rectangle Square<br /><time datetime="2017-06-17">June 17, 2017</time></p>
					<p>Amet risus nullam eget felis eget nunc lobortis. Eget arcu dictum varius duis at consectetur lorem donec. Arcu felis bibendum ut tristique et egestas quis. Turpis tincidunt id aliquet risus feugiat in ante metus. Read more…</p>
				</article>
				<!-- Third Article -->
				<article>
					<h4>Investors Bet Big on Building Block Products</h4>
					<p>by Right Angle<br /><time datetime="2018-02-15">February 15, 2018</time></p>
					<p>At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Arcu cursus euismod quis viverra nibh cras. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Aenean sed adipiscing diam donec adipiscing. Read more…</p>
				</article>
			</section>
			<!-- Side Notes / Related Information -->
			<aside>
				<!-- Newsletter Subscribe Form -->
				<h3>Subscribe to Newsletter</h3>
				<form action="subscribe.php" method="get">
					<label for="emailAddress">Email</label>
					<input type="email" name="emailAddress" id="emailAddress" required />
					<button type="submit">Subscribe</button>
				</form>
				<figure>
					<img src="images/mini-figure.png" width="176" height="285" alt="Mini figure">
					<figcaption><a href="https://www.lego.com/" rel="external" title="Visit the offical LEGO® Web site">LEGO®</a> mini figure by Vanja (Public Domain)</figcaption>
				</figure>
				<h3>Did You Know…?</h3>
				<p>One of the most important components of effective life-long learning is <em>play</em>. Learning a new skill (like Web development) should include a certain amount of play. Renowned children’s programming entertainer Mr. Rogers certainly knew about the value that play represented:</p>
				<!-- Quotation -->
				<blockquote cite="https://www.brainyquote.com/quotes/fred_rogers_193081">
					<p>Play is often talked about as if it were a relief from serious learning. But for children, play <em>is</em> serious learning. Play is really the work of childhood. –Fred Rogers</p>
				</blockquote>
				<p>Take a little time every day to just <strong>play</strong> with technology – you’ll be surprised how much you learn.</p>
			</aside>
		</main>
		<!-- Page-level footer -->
		<footer>
			<nav>
				<a href="about/privacy-policy.php" title="Read our Privacy Policy">Privacy Policy</a> | <a href="about/privacy-policy.php#personal-information" title="Learn about how we treat your personal information">Use of Personal Information</a>
				<a href="about.php" title="About Us">About</a> | <a href="about/terms-of-use.php" title="Read our Terms of Use">Terms of Use</a> | <a href="about/terms-of-use.php#limitation-liability" title="Limitation of Liability">Limitation of Liability</a>
			</nav>
			<p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
		</footer>
	</body>
</html>
