<?php
error_reporting(E_ALL^E_NOTICE);

error_reporting(0);

session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

?>

<?php

if($username && $userid){
		echo "<font color='#3399FF'><b>$username</b></font>, <font color='white'>Click <a href='./logout.php'>Logout   </a>to Logout</font>";
		
	}



?>


<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>News-Movie Mania</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
	<style>
		#links{
		position:relative;
		padding-left:48%;
		bottom:400px;
		
		}
		
		#check{
		position:relative;
		right:180px;
		
		}
	</style>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="moviesmain.php">Movies</a>
					
					<ul>
					<li>
							<a href="./moviesbangla.php">Bangla</a>
						</li>
						<li>
							<a href="./action.php">Action</a>
						</li>
						<li>
							<a href="./horror.php">Horror</a>
						</li>
						<li>
							<a href="./romantic.php">Romantic</a>
						</li>
						<li>
							<a href="./documentary.php">Documentary</a>
						</li>
						<li>
							<a href="./comedy.php">Comedy</a>
						</li>
						<li>
							<a href="./drama.php">Drama</a>
						</li>
						<li>
							<a href="./animation.php">Animation</a>
						</li>
						<li>
							<a href="./all.php">All in One</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="member.php">Celebs</a>
				</li>
				<li  class="selected">
					<a href="rentals.php">News</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="memberchat.php">Chat</a>
				</li>
				
				<li>
					<a href="#">Member Panel</a>
					<ul>
						<li>
							<a href="./login.php">Login</a>
							
						</li>
						<li>
							<a href="./register.php">Registration</a>
						</li>
						<li>
							<a href="./resetpass.php">Reset Password</a>
						</li>
						
						<li>
							<a href="./activate.php">Activatation</a>
						</li>
						
					</ul>
				</li>
				
				
			
				
				
			</ul>
		</div>
	</div>
	<div id="body" class="rentals">
		<h2>News</h2>
		<ul>
			<li>
				<a href="#"><img src="images/image1.jpg" alt=""></a>
				<p></br><b>
				A new personal injury case has been filed in the wake of the “Midnight Rider” 
				train accident which killed Sarah Jones and injured seven others on Feb. 20. 
				In a suit obtained by The Wrap, injured makeup artist Antonyia Vera seeks compensation for serious physical 
				injuries, post traumatic stress, lost income, physical pain, necessary expenses and mental anguish. Verna adds
				her suit to previous cases brought by the parents of Sarah Jones and injured hairstylist Joyce Gillard. All suits seek 
				damages from producer/singer Gregg Allman, Open Road Films, Unclaimed Freight Productions, 
				Meddin Studios as well as writer/producer Jody Savin and other.</b>
			</p>
			</li>
			<li>
				<a href="#"><img src="images/image2.jpg" alt=""></a>
				<p></br><b>
				“Ted” actress Jessica Barth has closed a deal to reprise her role as the titular teddy bear's 
				girlfriend/co-worker Tami-Lynn in Universal and Mrc's sequel “Ted 2,” TheWrap has learned. Amanda 
				Seyfried is joining original “Ted” star Mark Wahlberg, while Seth MacFarlane will also return to voice 
				everyone's favorite foul-mouthed stuffed animal. Also read: Amanda Seyfried to Star in ‘Ted 2' Alongside
				Mark Wahlberg In the first film, Barth played a cashier who falls for Ted's unique charms and later 
				clashes with Wahlberg's girlfriend, played by Mila Kunis. She also pulled off a convincing Boston accent,
				which can be difficult for some actors.</b>
			</li>
			<li>
				<a href="#"><img src="images/image3.jpg" alt=""></a>
				<p></br><b>
				Kevin Costner isn’t done showing off his edgier side, as he is in negotiations to star in 
				Millennium Entertainment and Nu Image Films’ “Criminal,” which “The Iceman” helmer Ariel Vromen is 
				on board to direct.

				Jc Spink, Chris Bender Jake Weiner and Kevin King are producing. Christa Campbell, 
				Lati Grobman, Jason Bloom, Avi Lerner, Trevor Short, Boaz Davidson and Mark Gill are exec produce.
				Douglas Cook and David Weisberg are writing the script, which revolves around a ruthless killer who,
				rather than spend the rest of his life in jail, chooses to be used in a medical experiment in which the 
				brain of a recently murdered field operative is implanted in his head.</b>
			</li>
			<li>
				<a href="#"><img src="images/ballet-dancer3.jpg" alt=""></a>
				<p></br><b>
				I haven't seen a Resident Evil movie since the third one in 2007, which means I never saw the franchise's
				turn to 3D with Resident Evil: Afterlife and Resident Evil: Retribution, but I didn't avoid the sequels 
				out of some dislike for the franchise. In fact, the Resident Evil movies aren't too bad, at least for 
				movies you never expect to be good in the first place. Now the original plan was to have Resident Evil 6
				in theaters on September 12 of this year, that clearly isn't going to happen, but writer/director Paul W.S
				. Anderson has confirmed with Collider the sixth film is coming and that it will most likely be the 
				last. I'm right in the middle of the first draft. - Emma Stone </b>
			</li>
			
			
	
			
		</ul>
		
	</div>
	
	<div id="links">
							
							<p id="check" style="color:lightblue" >Check out the following sections to learn to about more news<br/><br/></p>
							<a href="http://www.imdb.com/news/celebrity" style="color:yellow"><b>IMDB</b><br/><br/></a>
	<a href="http://www.usmagazine.com/celebrity-news" style="color:yellow"><b>US Magazine</b><br/><br/></a>
	<a href="http://www.huffingtonpost.com/celebrity/" style="color:yellow"><b>Huffing Spot</b><br/><br/></a>
	<a href="http://www.mirror.co.uk/3am/celebrity-news/" style="color:yellow"><b>Mirror</b><br/><br/></a>
						</div>
	
	
	<div id="footer">
		<div>
			<div>
				<span>Quick Links</span>
				<ul>
					<li>
						<a href="./index.php">Home</a>
					</li>
					<li>
						<a href="./moviesmain.php">Movies</a>
					</li>
					<li>
						<a href="./member.php">Celebs</a>
					</li>
					<li>
						<a href="./rentals.php">News</a>
					</li>
					<li>
						<a href="./about.php">About</a>
					</li>
					<li>
						<a href="./register.php">Registration</a>
					</li>
					
					
				</ul>
			</div>
			<div class="section">
				<span>Movie Quotes</span>
				<ul>
					<li>
						<p>
							<b> "At my signal, unleash hell." 
							</br>	
							 Gladiator (2000)
							</b>
						
						</p>
						
					</li>
					<li>
						<p>
						<b>
							I'm king of the world!</br>	Titanic	1997
							</b>
						</p>
						
					</li>
				</ul>
			</div>
			<div>
				<span>We are on Social Networks too!!!</span>
				<p>
					It's an age of social networking. We know you use your valuable (!) time on facebook, twitter and Google+ , so
					why not visit us on those sites, stays with us, always.
				</p>
				
			</div>
			<p>
				&#169; Copyright protected by Movie Mania @2014
			</p>
			<div class="connect">
				<span>Stay Connected:</span> <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a> <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a> <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">google+</a>
			</div>
		</div>
	</div>
</body>
</html>