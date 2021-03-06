<!DOCTYPE HTML>
<html>
	<head>
	 	<title>Dang Tran Phu Loc's profile</title>
	 	<link rel="stylesheet" href="css/style.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
	  	<div class="grid-outer">
		  <header id="header">
		     <div id="logo-wrap" >
		       <h1 class="content-title">Phu Loc</h1>
		     </div>
		     <div id="navbar">
		      <nav>
		        <ul>
		          <li><a class="nav-btn" href="resume/res_computer_en.pdf">Resume</a></li>
		          <li><a class="nav-btn" href="#demo-intro">Project</a></li>
		          <li><a class="nav-btn" href="index_ja.php">Japanese</a></li>
		          <li><a class="nav-btn" href="index.php">Vietnamese</a></li>
		        </ul>
		      </nav>
		     </div>
		  </header>

		 <main id="main">
		 <!--Key visual-->
		  <div id="key-visual" >
		    <div class="bg-image"></div>
		    <div class="content-wrap">
		      <h2 class="content-title">Welcome to my repository</h2>
		      <p>Coding is hard but satisfying</p>
		      <a class="btn" href="#demo-intro">Project showcase</a>
		    </div>
		  </div>
		 <!--Project-->
		  <section id="demo-intro">
		   <div class="content-wrap">
		    <h2 class="content-title">Project</h2>
		    <p>Front page for a fictional web development company, this project aims to practice front end with html and css using grid layout.</p>
		   </div>

		  </section>
		  <section id="acme">
		    <div class="bg-image"></div>
		    <div class="content-wrap">
		      <h2 class="content-title">Acme Web Solutions</h2>
		      <a class="btn" href="project/acme.html">Showcase</a>
		    </div>
		  </section>
		 </main>
		<!--Footer-->
		 <footer id="footer">
		   <div class="content-wrap">
		    <div>Written by <a>Phu Loc</a></div>
		    <div>Copyright &copy; <?php echo date("Y")?></div>
		    <div>FAMP stack with PHP version : <?php echo phpversion()?></div>
		   </div>
		 </footer>
		 
		</div> <!--Grid for the entire place-->
	</body>
</html>
