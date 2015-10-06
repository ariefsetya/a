<!DOCTYPE html>
<html lang="en" class="no-js demo-4">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Arief Setya</title>
		<meta name="description" content="Arief Setya - Web Developer" />
		<meta name="keywords" content="javascript, jquery, plugin, css3, flip, page, 3d, booklet, book, perspective" />
		<meta name="author" content="Arief Setya" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/bookblock.css" />
		<!-- custom demo style -->
		<link rel="stylesheet" type="text/css" href="css/demo4.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container" style="border:21px solid #333;">
			<div class="bb-custom-wrapper">
				
				<div id="bb-bookblock" class="bb-bookblock">
					<div class="bb-item">
						<div class="bb-custom-firstpage">
							<img style="max-width:200px;" src="images/img.jpg">
							<h1>Arief Setya <span style="color:black !important;">Web Developer</span></h1>	
						</div>
						<div class="bb-custom-side">
							<div>
								<div><a href="https://fb.me/ariefsetya13">Facebook</a></div>
								<div><a href="https://twitter.com/_ariefsetya_">Twitter</a></div>
								<div><a href="https://plus.google.com/+MineRepository">Google Plus</a></div>
								<div><a href="https://github.com/ariefsetya">GitHub</a></div>
							</div>
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side">
							<p>
								<strong>Work Experiences</strong><br><br>
								2013 - Internship at PT. Artivisi Intermedia<br>
								2014 - Work at Tunas Data Kreasi<br>
								2015 - Work at PT. Pojok Celebes Mandiri a.k.a Pointer by Telkom Indonesia
								<br><br>
								<strong>Skills</strong><br><br>
								C++, Visual Basic, Native PHP5, Laravel, CodeIgniter, Native CSS3, MetroUI, Bootstrap, Responsive Web Design, HTML5, Native JS3, jQuery, MySQL, Java Android, Linux Env, Apache WebServer
							</p>
						</div>
						<div class="bb-custom-side">
							<p>
								Visit my blog at <a target="_blank" href="http://setya.me">http://setya.me</a>
								<iframe style="border:1px solid lightgray;width:90%;height:350px;" src="http://setya.me"></iframe>
							</p>
						</div>
					</div>
				</div>

				<!--nav>
					<a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
					<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
					<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
					<a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
				</nav-->

			</div>

		</div><!-- /container -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquerypp.custom.js"></script>
		<script src="js/jquery.bookblock.js"></script>
		<script>
			var Page = (function() {
				
				var config = {
						$bookBlock : $( '#bb-bookblock' ),
						$navNext : $( '#bb-nav-next' ),
						$navPrev : $( '#bb-nav-prev' ),
						$navFirst : $( '#bb-nav-first' ),
						$navLast : $( '#bb-nav-last' )
					},
					init = function() {
						config.$bookBlock.bookblock( {
							speed : 1000,
							shadowSides : 0.8,
							shadowFlip : 0.4
						} );
						initEvents();
					},
					initEvents = function() {
						
						var $slides = config.$bookBlock.children();

						// add navigation events
						config.$navNext.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'next' );
							return false;
						} );

						config.$navPrev.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'prev' );
							return false;
						} );

						config.$navFirst.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'first' );
							return false;
						} );

						config.$navLast.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'last' );
							return false;
						} );
						
						// add swipe events
						$slides.on( {
							'swipeleft' : function( event ) {
								config.$bookBlock.bookblock( 'next' );
								return false;
							},
							'swiperight' : function( event ) {
								config.$bookBlock.bookblock( 'prev' );
								return false;
							}
						} );

						// add keyboard events
						$( document ).keydown( function(e) {
							var keyCode = e.keyCode || e.which,
								arrow = {
									left : 37,
									up : 38,
									right : 39,
									down : 40
								};

							switch (keyCode) {
								case arrow.left:
									config.$bookBlock.bookblock( 'prev' );
									break;
								case arrow.right:
									config.$bookBlock.bookblock( 'next' );
									break;
							}
						} );
					};

					return { init : init };

			})();
		</script>
		<script>
				Page.init();
		</script>
	</body>
</html>