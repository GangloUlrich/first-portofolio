<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>My Portofolio | Ulrich GANGLO </title>
		<meta name="description" content="UX/UI designer,Web developper portofolio" />
		<meta property="og:type" content="website"/>
		<meta property="og:title" content="My Portofolio | Ulrich GANGLO "/>
		<meta property="og:url" content=""/>
		<meta property="og:description" content="UX/UI designer,Web developper portofolio"/>
		<meta name="viewport" content="width=device-width initial-scale=1.0"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="js/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="web.css" />
<script>
	// Set a variable for our button element.
const scrollToTopButton = document.getElementById('js-top');

// Let's set up a function that shows our scroll-to-top button if we scroll beyond the height of the initial window.
const scrollFunc = () => {
  // Get the current scroll value
  let y = window.scrollY;
  
  // If the scroll value is greater than the window height, let's add a class to the scroll-to-top button to show it!
  if (y > 0) {
    scrollToTopButton.className = "top-link show";
  } else {
    scrollToTopButton.className = "top-link hide";
  }
};

window.addEventListener("scroll", scrollFunc);

const scrollToTop = () => {
  // Let's set a variable for the number of pixels we are from the top of the document.
  const c = document.documentElement.scrollTop || document.body.scrollTop;
  
  // If that number is greater than 0, we'll scroll back to 0, or the top of the document.
  // We'll also animate that scroll with requestAnimationFrame:
  // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
  if (c > 0) {
    window.requestAnimationFrame(scrollToTop);
    // ScrollTo takes an x and a y coordinate.
    // Increase the '10' value to get a smoother/slower scroll!
    window.scrollTo(0, c - c / 10);
  }
};

// When the button is clicked, run our ScrolltoTop function above!
scrollToTopButton.onclick = function(e) {
  e.preventDefault();
  scrollToTop();
}
</script>
</head>
<body>
		<div class="container-fluid ctn-a  col-12">
			<div class=" d-md-flex justify-content-end">

						<nav class="navbar navbar-expand-lg ">
								
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu"  aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation" ><i class="fa fa-align-justify ic-c"></i></button>

							<div class="collapse navbar-collapse" id="menu">
									<ul class="navbar-nav mt-3">
										<li class="nav-item"><a class="nav-link text-white" href="#about" >A PROPOS</a></li>
										<li class="nav-item"><a class="nav-link text-white" href="#skills" >COMPETENCES</a></li>
										<li class="nav-item"><a class="nav-link text-white" href="#galerie" >GALERIE</a></li>
										<li class="nav-item"><a class="nav-link text-white" href="#contact" >CONTACT</a></li>
										
									</ul>
							</div>
							

						
						</nav>
			</div>


			
			<div class="d-flex align-items-center justify-content-center flex-column ctn-u">
						<div class="container-fluid d-flex justify-content-center ctn-b"></div>
						<h2 class="text-light ">Ulrich Luc GANGLO</h2>
						<h3 class="text-yellow text-center">UX/UI Designer | Web developper</h3>
						<div class="d-flex flex-row">
							<a class="text-white" href="https://web.facebook.com/ulrich.grc/" target="_blank"><i class="fa fa-facebook-official ic-c"></i></a>
							<a class="text-white" href="https://www.linkedin.com/in/ulrichganglo/" target="_blank"><i class="fa fa-linkedin-square ic-c"></i></a>
							<a class="text-white" href="https://twitter.com/GangloUlrich" target="_blank"><i class="fa fa-twitter-square ic-c"></i></a>
						</div>
			</div>
		</div>


		<div class="container-fluid p-4" id="about">
			
			<h2 class="text-left">A PROPOS</h2>
			<div class="des mb-3"></div>
			<p class="cl-p text-justified">Actuellement étudiant en troisième année de Genie Logiciel à l'IFRI et passionné par la technologie et le numérique, je passe mon temps  entre le code et le design. Très tôt, je me suis intéressé au developpement d'application et à la suite adobe ( Photoshop, illustrator, xd) . Tout ceci fait de moi un développeur web que le mobile en outre, interresse. Fasciné par l'amélioration de l'expérience utilisateur, je me suis initié au design d'interface et je travaille sur des maquettes tout en recherchant le meilleur moyen de faire apprécier le produit à l'internaute. Je fais des recherches liées à l'utilisation des NTICS en vue des ameliorations dans les domaines de la santé, de l'education, des transports et du travail. Je voudrais pousser ma curiosité plus tard autour de la domotique et de la robotique.Je suis une personne curieuse,sociable capable de travailler en equipe.</p>

			<p class="text-right">Ulrich Luc GANGLO</p>
		</div>



		<div class="container-fluid pt-4 ctn-c mb-3">
					<div class="container mb-2 pt-4 bg-white ctc">

					

						<div id="movecarousel" class="carousel slide" data-ride="carousel">
								 <ol class="carousel-indicators">
									    <li data-target="#movecarousel" data-slide-to="0" class="active"></li>
									    <li data-target="#movecarousel" data-slide-to="1"></li>
									    <li data-target="#movecarousel" data-slide-to="2"></li>
		  						</ol>


							  <div class="carousel-inner">
							    <div class="carousel-item active">
									      <h2 class="text-left">EDUCATION</h2>
										  <div class="des mb-3"></div>
										  <div class="d-flex flex-column flex-md-row justify-content-around">
										  
												  	<div class="text-justified p-md-4">
												  		<h5>Institut de Formation et de Recherche en Informatique,UAC</h5>
												  		<h6 class="text-yellow">2018-present,Abomey-calavi,Bénin</h6>
												  		<p>Licence professionnelle Génie Logiciel</p>
												  	</div>

												  	<div class="text-justified p-md-4">
												  		<h5>College d'Enseignement Général "Le NOKOUE"</h5>
												  		<h6 class="text-yellow ">2018,Cotonou,Bénin</h6>
												  		<p>Baccalauréat,série D,Mention Bien</p>
												  	</div>

												  		<div class="text-justified p-md-4">
												  		<h5>College d'Enseignement Général "Le NOKOUE"</h5>
												  		<h6 class="text-yellow">2015,Cotonou,Bénin</h6>
												  		<p>Brevet d'Etudes du Premier Cycle</p>
												  	</div>



										  </div>

							    </div>
							    <div class="carousel-item">
							    			  <h3 class="text-left">EXPERIENCES EXTRA-ACADEMIQUES</h3>
										  <div class="des mb-3"></div>
										  <div class="d-flex flex-column flex-md-row justify-content-around">
										  
												  	<div class="text-justified p-md-4">
												  		<h5>JTEK SOLUTIONS SARL </h5>
												  		<h6 class="text-yellow">Aout-Septembre 2020,Cotonou,Bénin</h6>
												  		<p>Stagiaire ,UX/UI Designer ,Dev web </p>
												  	</div>

												  	<div class="text-justified p-md-4">
												  		<h5>Formations MCFSP-UAC</h5>
												  		<h6 class="text-yellow">2018-present,Abomey-calavi,Bénin</h6>
												  		<p>Confiance en soi,pensée critique,leadership transformationnel</p>
												  	</div>

												  		<div class="text-justified p-md-4">
												  		<h5>Formations linkedin</h5>
												  		<h6 class="text-yellow">2020,Abomey-calavi,Bénin</h6>
												  		<p>le réferencement,gestion des équipes,gestion des conflits</p>
												  	</div>



										  </div>



							    
							    </div>
							    <div class="carousel-item">

							    	<h3 class="text-left">LOISIRS</h3>
										  <div class="des mb-3"></div>
										  <div class="d-flex flex-column flex-md-row justify-content-around align-items-center">
										  
												  	<div class="align-items-center">
												  			<img src="img/sp.png" />
												  		<h6 class="text-center">Musique</h6>
												  	</div>

												  	<div class="align-items-center">
												  			<img src="img/jv.png" />
												  		<h6 class="text-center">Jeux</h6>
												  	</div>

												  	<div class="align-items-center">
												  			<img src="img/voy.png" />
												  		<h6 class="text-center">Voyage</h6>
												  	</div>


												  	<div class="align-items-center">
												  			<img src="img/mu.png" />
												  		<h6 class="text-center">Sport</h6>
												  	</div>
												 

												  


										  </div>


							     
							    </div>
							  </div>


							  <a class="carousel-control-prev" href="#movecarousel" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#movecarousel" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
						</div>

					
					</div>

			
		</div>


	<div class="container-fluid p-4 mt-5" id="skills">

				<h2 class="text-left">COMPETENCES</h2>
				<div class="des mb-3"></div>

				<div class="row mt-4 ">
							<div class="col-md-6 col-sm-12 ">
										<h4 class="text-center">Langages de programmation</h4>

												<div class="d-flex flex-md-row justify-content-around py-3">

									 				<div class=" "><img class="img-fluid" src="img/html.png"/></div>
													<div class=""><img class="img-fluid" src="img/css.png"/></div>
													<div class=""><img class="img-fluid" src="img/js.png"/></div>
													<div class=""><img class="img-fluid" src="img/php.png"/></div>
													<div class=" "><img class="img-fluid" src="img/my.png"/></div>
													<div class=""><img class="img-fluid" src="img/cplus.png"/></div>
													<div class=""><img class="img-fluid" src="img/j.png"/></div>
													
										
												</div>

												
							</div>
					

					

						<div class="col-md-6">
										<h4 class="text-center">Suite Adobe</h4>

													<div class="d-flex flex-md-row  justify-content-around py-3">

															<div class=" "><img class="img-fluid" src="img/xd.png"/></div>
															<div class=""><img class="img-fluid" src="img/ail.png"/></div>
															<div class=""><img class="img-fluid" src="img/ps.png"/></div>
															<div class=""><img class="img-fluid" src="img/dw.png"/></div>

													</div>
							</div>
			</div>


				<div class="row mt-4 ">
							<div class="col-md-6 col-sm-12">
										<h4 class="text-center">Frameworks et CMS</h4>

												<div class="d-flex flex-md-row  justify-content-around">

									 				<div class=" "><img class="img-fluid" src="img/wp.png"/></div>
													<div class=""><img class="img-fluid" src="img/bt.png"/></div>
													<div class=""><img class="img-fluid" src="img/lr.png"/></div>
												
												</div>
							</div>

							<div class="col-md-6 col-sm-12 ">
										<h4 class="text-center">Chatbot Builder</h4>

												<div class="d-flex flex-md-row justify-content-center ">

									 				<div class="text-gray"><img class="img-fluid" src="img/chatbot.png"/></div>
									 				
													
												
												</div>
							</div>
				</div>


	</div>

		<div class="container-fluid p-4 " id="galerie">


			<h2 class="text-left">GALERIE</h2>
			<div class="des mb-3"></div>


			<div class="row my-4 ">
							<div class="col-md-6 col-6">

								<div class="d-flex flex-column flex-md-row justify-content-around">
									
									<div class="p-2 "><img class="img-fluid" src="img/ux.png"/></div>
									<div class="p-2"><img class="img-fluid" src="img/menthe.png"/></div>
									<div class="p-2"><img class="img-fluid" src="img/logo.png"/></div>
									<div class="p-2"><img class="img-fluid" src="img/bao.png"/></div>

									
								</div>
							</div>
					

					<div class="col-md-6 col-6">

								<div class="d-flex flex-column flex-md-row justify-content-around">
									
									<div class="p-2 "><img class="img-fluid" src="img/cv.png"/></div>
									<div class="p-2"><img class="img-fluid" src="img/lk.png"/></div>
									<div class="p-2"><img class="img-fluid" src="img/ts.png"/></div>
									<div class="p-2"><img class="img-fluid" src="img/al.png"/></div>
									
									
								</div>
							</div>
					
					
			</div>
			
		</div>

		<div class="container-fluid" id="contact">

			<div class="row">

						<div class="col-md-6 col-sm-12 bg-n p-3">
							
								<h3 class="text-yellow text-center"> INFORMATIONS UTILES</h3>
								
									
									<div class=" col-sm-12 d-flex flex-row justify-content-end mt-5 align-items-center p-md-5 p-sm-3 if-c">

										<div class="font-weight-bold ">
											<p class="text-white">Telephone</p>
											<p class="text-white">Email</p>
											<p class="text-white">Adresse</p>
											<p class="text-white">Whatsapp</p>
										</div>

										<div class="pl-3" >
											<p class="text-white text-left">(+229) 98432641/61177339</p>
										<p class="text-white"><a href="mailto:gangloulrichluc@gmail.com" class="text-white">gangloulrichluc@gmail.com</a></p>
									<p class="text-white">Abomey-calavi,Bénin</p>
									<p class="text-white">(+229) 98432641</p>

											
										</div>
										</div>

										

									
						</div>


						<div class="col-md-6 col-sm-12 p-3 ctn-mc">
								<h3 class="text-center font-weight-bold">ME CONTACTER</h3>


							<form class="row mx-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="form"  data-toggle="validator" novalidate="novalidate">
								<!--<div class="d-flex flex-md-row flex-column">-->
									

								<div class="col-12 col-md-6 form-group  w-100">
									<label for="nomUser">Nom et prenoms</label> 
									<input type="text" class="form-control" name="nom" id="nomUser" minlength="6" required="required"/>
									
									

								</div>


								<div class="col-12 col-md-6 form-group w-100">
									<label for="telUser">Téléphone</label>
									<input type="tel" class="form-control" name="tel" id="telUser" required/>
									

								</div>


								<!--</div>-->

								<div class="col-12 form-group ">
									
									<label for="email">Email</label>
									<input type="email" class="form-control" name="email" id="email" required />
								
								</div>


								<div class="col-12 form-group">
									
									<label for="contact">Message</label>
									<input type="textarea" class="form-control  " name="text" id="contact" required  />
									
								</div>


								<div class="form-group col-12">
									<button type="submit" class="btn btn-yellow btn-block" >ENVOYER</button>

								</div>
									
								
							</form>
						</div>
			</div>

			<p class="text-right mt-3">Suivez-moi sur les réseaux sociaux</p>
			<div class="d-flex flex-row justify-content-end">
							<a class="text-white" href="https://web.facebook.com/ulrich.grc/" target="_blank"><i class="fa fa-facebook-official ic-c2"></i></a>
							<a class="text-white" href="https://www.linkedin.com/in/ulrichganglo/" target="_blank"><i class="fa fa-linkedin-square ic-c2"></i></a>
							<a class="text-white" href="https://twitter.com/GangloUlrich" target="_blank"><i class="fa fa-twitter-square ic-c2"></i></a></div>

		
<a class="top-link hide" href="" id="js-top">click me
  
  <span class="screen-reader-text">Back to top</span>
</a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

						
	</body>
</html>