<?php
	session_start();
	$language = isset($_GET['set_lang']) && in_array($_GET['set_lang'], array('en')) ? $_GET['set_lang'] : 'ru';
	include("strings_$language.php");
?>
<?php include("header.php"); ?>
	<body>
		<?php include("top.php"); ?>

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container 75%">
					<header><a href="/"></a>

<!--Header Cоgnitiorerum-->
						<h2><?=$_CONFIGLANG['TEXTBLOCK_5']?></h2>
					</header>
					<p align="justify">
<!--Homepage (text)-->
<?=$_CONFIGLANG['TEXTBLOCK_6']?> 


</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
					
	<!--About me (header)-->				
						<h2><?=$_CONFIGLANG['TEXTBLOCK_7']?> </h2>
					</header>
					<p align="justify">
<!--About me (text)-->
<?=$_CONFIGLANG['TEXTBLOCK_8']?> 
</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>


		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2><?=$_CONFIGLANG['TEXTBLOCK_9']?> </h2>
						<p align="justify"></p>
						<?=$_CONFIGLANG['TEXTBLOCK_10']?> 
					</header>

					<!-- Lightbox Gallery  -->
						<div class="container 75% gallery">
							<div class="row 0% images">
								<div class="6u 12u(mobile)"><a href="/images/fulls/01.jpg" class="image fit from-left"><img src="/images/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a></div>
								<div class="6u 12u(mobile)"><a href="/images/fulls/02.jpg" class="image fit from-right"><img src="/images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a></div>
							</div>
<p></p>
							<div class="row 0% images">
								<div class="6u 12u(mobile)"><a href="/images/fulls/03.jpg" class="image fit from-left"><img src="/images/thumbs/03.jpg" title="Air Lounge" alt="" /></a></div>
								<div class="6u 12u(mobile)"><a href="/images/fulls/04.jpg" class="image fit from-right"><img src="/images/thumbs/04.jpg" title="Carry on" alt="" /></a></div>
							</div>
<p></p>
							<div class="row 0% images">
								<div class="6u 12u(mobile)"><a href="/images/fulls/05.jpg" class="image fit from-left"><img src="/images/thumbs/05.jpg" title="The sparkling shell" alt="" /></a></div>
								<div class="6u 12u(mobile)"><a href="/images/fulls/06.jpg" class="image fit from-right"><img src="/images/thumbs/06.jpg" title="Bent IX" alt="" /></a></div>
							</div>
<p></p>
	<div class="row 0% images">
								<div class="6u 12u(mobile)"><a href="/images/fulls/07.jpg" class="image fit from-left"><img src="/images/thumbs/07.jpg" title="The sparkling shell" alt="" /></a></div>
								<div class="6u 12u(mobile)"><a href="/images/fulls/08.jpg" class="image fit from-right"><img src="/images/thumbs/08.jpg" title="Bent IX" alt="" /></a></div>
							</div>
<p></p>	
<div class="row 0% images">
								<div class="6u 12u(mobile)"><a href="/images/fulls/09.jpg" class="image fit from-left"><img src="/images/thumbs/09.jpg" title="The sparkling shell" alt="" /></a></div>
								<div class="6u 12u(mobile)"><a href="/images/fulls/10.jpg" class="image fit from-right"><img src="/images/thumbs/10.jpg" title="Bent IX" alt="" /></a></div>
							</div>
<p></p>
	<div class="row 0% images">
								<div class="6u 12u(mobile)"><a href="/images/fulls/11.jpg" class="image fit from-left"><img src="/images/thumbs/11.jpg" title="The sparkling shell" alt="" /></a></div>
								<div class="6u 12u(mobile)"><a href="/images/fulls/12.jpg" class="image fit from-right"><img src="/images/thumbs/12.jpg" title="Bent IX" alt="" /></a></div>
							</div>
<p></p>
	<div class="row 0% images">
								<div class="6u 12u(mobile)"><a href="/images/fulls/13.jpg" class="image fit from-left"><img src="/images/thumbs/13.jpg" title="The sparkling shell" alt="" /></a></div>
								<div class="6u 12u(mobile)"><a href="/images/fulls/14.jpg" class="image fit from-right"><img src="/images/thumbs/14.jpg" title="Bent IX" alt="" /></a></div>
							</div>
<p></p>
	<div class="row 0% images">
								<div class="6u 12u(mobile)"><a href="/images/fulls/15.jpg" class="image fit from-left"><img src="/images/thumbs/15.jpg" title="The sparkling shell" alt="" /></a></div>
								<div class="6u 12u(mobile)"><a href="/images/fulls/16.jpg" class="image fit from-right"><img src="/images/thumbs/16.jpg" title="Bent IX" alt="" /></a></div>
							</div>
						</div>

				</div>
			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2><?=$_CONFIGLANG['TEXTBLOCK_11']?> </h2>
						<p><?=$_CONFIGLANG['TEXTBLOCK_12']?> </p>
					</header>
					<div class="box container 75%">
					
					<?php
						include('send.php');
					?>

					<!-- Contact Form -->
							<form method="post" action="#contact">
								<input type="hidden" name="action" value="send_contactform" />
								<div class="row 50%">
									<div class="6u 12u(mobile)"><input type="text" name="name" placeholder="Name" value="<?=htmlspecialchars($name)?>" /></div>
									<div class="6u 12u(mobile)"><input type="email" name="email" placeholder="Email" value="<?=htmlspecialchars($email)?>" /></div>
								</div>
								<div class="row 50%">
									<div class="12u"><textarea name="message" placeholder="Message" rows="6"><?=htmlspecialchars($message)?></textarea></div>
								</div>
								<div class="row 50%">
									<div class="6u 12u(mobile)">Captcha: <img src="/captcha/rand.php" /></div>
									<div class="6u 12u(mobile)"><input type="text" name="captcha" placeholder="captcha" value="" /></div>
								</div>
								<div class="row">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" value="Send Message" /></li>
										</ul>
									</div>
								</div>
							</form>

					</div>
				</div>
			</section>

		<?php include("footer.php"); ?>

	</body>
</html>
