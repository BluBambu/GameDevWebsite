<?php
function date_start($is_inversed, $title, $date) {
	?>

    <li<?php if($is_inversed) print " class = timeline-inverted" ?>>
        <div class="timeline-badge"><i class="glyphicon glyphicon-user"></i>
        </div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title"><?php print $title;?></h4>

            </div>
            <div class="timeline-body">
	        	<p>
	        		<?php print $date;?>
	        	</p>
    <?php
}

function date_end() {
	?>
	        </div>
	    </div>
    </li>
    
    <?php
}

function proj_start() {
	?>

    <div class="col-sm-3 col-md-3">
        <div class="post">
            <div class="post-img-content">

    <?php
}

function proj_end() {
	?>
			</div>
		</div>
	</div>
	<?php
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Game Dev Club</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="index.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"> </script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="index.js" type="text/javascript"></script>

        <!--
        ─────────▄──────────────▄
        ────────▌▒█───────────▄▀▒▌      wow bootstrap
        ────────▌▒▒▀▄───────▄▀▒▒▒▐
        ───────▐▄▀▒▒▀▀▀▀▄▄▄▀▒▒▒▒▒▐ many projects      
        ─────▄▄▀▒▒▒▒▒▒▒▒▒▒▒█▒▒▄█▒▐
        ───▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▀██▀▒▌   so doge art
        ──▐▒▒▒▄▄▄▒▒▒▒▒▒▒▒▒▒▒▒▒▀▄▒▒▌
        ──▌▒▒▐▄█▀▒▒▒▒▄▀█▄▒▒▒▒▒▒▒█▒▐     
        ─▐▒▒▒▒▒▒▒▒▒▒▒▌██▀▒▒▒▒▒▒▒▒▀▄▌ much game dev
        ─▌▒▀▄██▄▒▒▒▒▒▒▒▒▒▒▒░░░░▒▒▒▒▌
        ─▌▀▐▄█▄█▌▄▒▀▒▒▒▒▒▒░░░░░░▒▒▒▐
        ▐▒▀▐▀▐▀▒▒▄▄▒▄▒▒▒▒▒░░░░░░▒▒▒▒▌
        ▐▒▒▒▀▀▄▄▒▒▒▄▒▒▒▒▒▒░░░░░░▒▒▒▐    such mobile ready
        ─▌▒▒▒▒▒▒▀▀▀▒▒▒▒▒▒▒▒░░░░▒▒▒▒▌
        ─▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▐ 
        ──▀▄▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▄▒▒▒▒▌ many lines
        ────▀▄▒▒▒▒▒▒▒▒▒▒▄▄▄▀▒▒▒▒▄▀  
        ───▐▀▒▀▄▄▄▄▄▄▀▀▀▒▒▒▒▒▄▄▀ wow easter egg
        ──▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▀▀

        -->
        
    </head>
    
    <body>
        <nav class="navbar navbar-fixed-top shadow" role="navigation" id="nav">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#myCarousel"><b>Game</b> Dev Club</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#info">Info</a></li>
                        <li><a href="#calender">Calendar</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
            </div>
            </div>
        </nav>
    
        <div class="container" id="home">
            <div id="myCarousel" class="carousel slide shadow" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="_images/slider/1.png" alt="Slider 1">
                        <div class="carousel-caption">
                            <h3>Welcome To The Game Dev Club</h3>
                            <p>
                                <a href="https://www.facebook.com/groups/uwgamedevc/"
                                   target="_blank" class="label label-default">
                                    <img src="_images/fb_logo.png" width="35px" />
                                    Join Our Facebook Group!
                                    <img src="_images/fb_logo.png" width="35px" />
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="_images/slider/2.png" alt="Slider 2">
                        <div class="carousel-caption">
                            <h3>Come To A Meeting!</h3>
                            <p>
                            </p>
                        </div>
                    </div>   

                    <div class="item">
                        <img src="_images/slider/3.png" alt="Slider 3">
                        <div class="carousel-caption">
                            <h3>Check Out Our Previous Projects!</h3>
                            <p>
                                <a href="#projects"
                                   target="_blank" class="label label-default">
                                    Click Here
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-pills nav-justified">
                    <li data-target="#myCarousel" data-slide-to="0" class="active">
                        <a href="#">Welcome<small>Join Our FB Group!</small></a></li>
                    <li data-target="#myCarousel" data-slide-to="1">
                        <a href="#">Come To A Meeting!<small>We'll work out where & when soon!</small></a></li>
                    <li data-target="#myCarousel" data-slide-to="2">
                        <a href="#">Our Projects<small>Take A Look At Our Past Prjects</small></a></li>
                </ul>
            </div>
        </div> <!-- End Carousel Div -->
    
        <div class="container text-center" id="info">
            <h2>Info</h2>
            <div class="text-center">
                <hr />
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <h3>Who Is This Club For?</h3>
                        <p>
                            Anyone who's interested in game development!
                            Programming or artistic skills aren't required at all.
                            Though they might be helpful, they certainly aren't
                            necessary for getting a general idea of how things work.
                        </p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <h3>What're We Doing This Fall?</h3>
                        <p>
                            This quarter we'll be learning how to use the Unity Game Engine by making a space shoot'em up game.
                            In this game, you'll control a space shape that'll shoot at enemy shapes which split up into
                            more primitive enemy shapes upon death. We'll be tackling a specific aspect of this game
                            at each meeting.
                        </p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <h3>When And Where?</h3>
                        <p>
                            We're still working out the details, check back soon!
                        </p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <h3>Join The Facebook Group!</h3>
                        <p>
                            <a href="https://www.facebook.com/groups/uwgamedevc/">
                                <img src="_images/fb_logo.png" width="35px" />
                                Join our Facebook group to stay up to date!
                                <img src="_images/fb_logo.png" width="35px" />
                            </a>
                        </p>
                    </div>
                </div>
                <hr />
            </div>
        </div>

        <div class="container" id="calender">
            <h2 class="text-center">Calendar</h2>
            <hr />
            <ul class="timeline">
                <li>
                    <div class="timeline-panel">
                        <div class="timeline-body">
                            <h3>Introduction - Date: TBD</h3>
                            <p>At our first meeting this fall, we'll be introducing the game that we'll be working on for
                            the entire quarter. We'll also be covering some basics about Unity so we can actually start on
                            our project next meeting.</p>
                        </div>
                    </div>
                </li>

                <li  class="timeline-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-body">
                            <h3>Making Our Ship - Date: TBD</h3>
                            <p>At our second meeting, we'll be learning how to make a 2D player controllable space ship.
                            This ship will be able to move according to the WASD keys, automatically face the direction
                            of the mouse, and have semi-realistic space physics</p>
                        </div>
                    </div>
                </li>

                <li  class="timeline">
                    <div class="timeline-panel">
                        <div class="timeline-body">
                            <h3>Making Our Enemies - Date: TBD</h3>
                            <p>At our third meeting, we'll be adding basic enemies to our game. These basic enemies
                            will be pretty simple in that they won't move or damage our player (yet!), but can take damage and die.
                            We'll also be adding some weapons to our player ship as well.</p>
                        </div>
                    </div>
                </li>

                <li  class="timeline-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-body">
                            <h3>Making Our Enemies Better - Date: TBD</h3>
                            <p>At our fourth meeting, we'll be adding onto the basic enemies from last meeting. This
                            involves adding weapons, movement, and its splitting shape behavior.</p>
                        </div>
                    </div>
                </li>

                <li  class="timeline">
                    <div class="timeline-panel">
                        <div class="timeline-body">
                            <h3>Adding a UI - Date: TBD</h3>
                            <p>At our fifth meeting, we'll be adding in a basic user interface to our game. This includes
                            displaying the player score on the screen, an exit menu, and a basic start screen.</p>
                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-body">
                            <h3>More Stuff Coming Soon!</h3>
                            <p>Please note that everything is tentative at this point!</p>
                        </div>
                    </div>
                </li>

                <li class="clearfix" style="float: none;"></li>
            </ul>
            <hr />
        </div>

        <div class="container" id="projects">
            <h2 class="text-center">Member Projects</h2>
            <hr />
                <div class="row">
                <?php proj_start()?>
                        <a href="http://laserswords.net/ghost/"><img src="_images/projects/ghostgirlkitten.png" class="img-responsive" alt="Ghost Girl"/></a>
                        <span class="post-title"><b>Ghost Girl + Kitten</b></span>
                    </div>
                    <div class="content">
                        <div class="author">
                            By <b>Benjamin</b>
                        </div>
                <?php proj_end()?>

                <?php proj_start()?>
                        <a href="http://gamedev.cs.washington.edu/games/MoreEpicPon.swf"><img src="_images/projects/moreepicpon.png" class="img-responsive" alt="MoreEpicPon"/></a>
                        <span class="post-title"><b>MoreEpicPon</b></span>
                    </div>
                    <div class="content">
                        <div class="author">
                            By <b>Wenrui</b>
                        </div>
                <?php proj_end()?>

                <?php proj_start()?>
                        <a href="http://spotcos.com/penguin/"><img src="_images/projects/peng_simulator.png" class="img-responsive" alt="Penguin Simulator"/></a>
                        <span class="post-title"><b>Maniac Pengmaku!!</b></span>
                    </div>
                    <div class="content">
                        <div class="author">
                            By <b>Shiny</b>
                        </div>
                <?php proj_end()?>

                <?php proj_start()?>
                        <a href="http://donovanwu.github.io/showcase/FishingOnTheIce.swf"><img src="_images/projects/fishing_on_the_ice.png" class="img-responsive" alt="Fishing On The Ice"/></a>
                        <span class="post-title"><b>Fishing On The Ice</b></span>
                    </div>
                    <div class="content">
                        <div class="author">
                            By <b>Wenrui</b>
                        </div>
                <?php proj_end()?>


	            <?php proj_start()?>
	                    <a href="http://johngs.itch.io/invasion"><img src="_images/projects/invasion.png" class="img-responsive" alt="Invasion"/></a>
	                    <span class="post-title"><b>Invasion</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>John, Justin, Taylor, and Thomas</b>
	                    </div>
	            <?php proj_end()?>

	            <?php proj_start()?>
	                    <a href="http://xkxx.github.io/cyberjam-game/"><img src="_images/projects/train_game.png" class="img-responsive" alt="Unnamed Cyberunk Entry"/></a>
	                    <span class="post-title"><b>Unnamed Cyberpunk Entry</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>Connor, Riley, and Kexiang</b>
	                    </div>
	            <?php proj_end()?>

	            <?php proj_start()?>
	                    <a href="games/rainbow_brickout.html"><img src="_images/projects/rainbow_brickout.png" class="img-responsive" alt="Rainbow Brickout"/></a>
	                    <span class="post-title"><b>Rainbow Brickout</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>Wenrui</b>
	                    </div>
	            <?php proj_end()?>


	            <?php proj_start()?>
	                    <a href="http://cdosborn.github.io/superrun/"><img src="_images/projects/super_run.png" class="img-responsive" alt="SuperRun"/></a>
	                    <span class="post-title"><b>SuperRun</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>Connor</b>
	                    </div>
	            <?php proj_end()?>


	            <?php proj_start()?>
	                    <a href="games/dotual_on.html"><img src="_images/projects/dotual_on.png" class="img-responsive" alt="Dotual On"/></a>
	                    <span class="post-title"><b>Dotual On</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>Wil</b>
	                    </div>
	            <?php proj_end()?>

	            <?php proj_start()?>
	                    <a href="games/visual_novel.zip"><img src="_images/projects/visual_novel_test.png" class="img-responsive" alt="Visual Novel"/></a>
	                    <span class="post-title"><b>Thomas' Visual Novel Test</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>Thomas</b>
	                    </div>
	            <?php proj_end()?>

	            <?php proj_start()?>
	                    <a href="games/spacecraft_docking_simulator.swf"><img src="_images/projects/spacecraft_docking_sim.png" class="img-responsive" alt="Docking Sim"/></a>
	                    <span class="post-title"><b>Spacecraft Docking Sim</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>Wenrui</b>
	                    </div>
	            <?php proj_end()?>

	            <?php proj_start()?>
	                    <a href="games/square_invaders.zip"><img src="_images/projects/square_invaders.png" class="img-responsive" alt="Square Invaders"/></a>
	                    <span class="post-title"><b>Square Invaders</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>Brandon</b>
	                    </div>
	            <?php proj_end()?>

	            <?php proj_start()?>
	                    <a href="games/networking_demo.zip"><img src="_images/projects/networking_demo.png" class="img-responsive" alt="Networking Demo"/></a>
	                    <span class="post-title"><b>Networking Demo</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>David</b>
	                    </div>
	            <?php proj_end()?>
                <?php proj_start()?>
                        <a href="http://yoonj4.itch.io/dancing-robot-party/"><img src="_images/projects/dancing_robot_party.png" class="img-responsive" alt="Dancing Robot Party"/></a>
                        <span class="post-title"><b>Robot Dancing Party</b></span>
                    </div>
                    <div class="content">
                        <div class="author">
                            By <b>Taylor and Justin Yoon</b>
                        </div>
                <?php proj_end()?>

	            <?php proj_start()?>
			            <a href="http://spotco.itch.io/window-cleaner"><img src="_images/projects/window_cleaner.png" class="img-responsive" alt="Window Cleaner"/></a>
			            <span class="post-title"><b>Window Cleaner: A Tale of Two Gangs</b></span>
		            </div>
		            <div class="content">
		                <div class="author">
		                    By <b>Shiny, Donovan, Ciera, Yasu, Joshua</b>
		                </div>
	            <?php proj_end()?>

	            <?php proj_start()?>
	                    <a href="games/FlappyObamas.swf"><img src="_images/projects/flappyobama.png" class="img-responsive" alt="Flappy Duck"/></a>
	                    <span class="post-title"><b>Flappy Obamas</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>Shiny</b>
	                    </div>
	            <?php proj_end()?>

	            <?php proj_start()?>
	                    <a href="games/sudoku.jar"><img src="_images/projects/sudoku.png" class="img-responsive" alt="Sudoku" /></a>
	                    <span class="post-title"><b>Sudoku</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>Shiny</b>
	                    </div>
	            <?php proj_end()?>

	            <?php proj_start()?>
	                    <img src="http://placehold.it/275x150/AAAAAA/888888" class="img-responsive" alt="You Game"/>
	                    <span class="post-title"><b>Submit Your Own Game!</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>You!</b>
	                    </div>
	            <?php proj_end()?>
                </div>
        </div>

        <div class="container text-center" id="contact">
            <h2>Contact</h2>
            <div class="text-center">
                <hr />
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <h3>Question or Inquiries?</h3>
                        <p>
                            Send an email to <a href="mailto:wenjieshi1@uw.edu">Wenjie</a>!
                        </p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <h3>Our Advisors</h3>
                        <p>
                            <a href="mailto:mburns@cs.washington.edu">Matthew</a> (Official advisor)
                            <br/>
                            <a href="mailto:melody@cs.washington.edu">Melody</a> (Unofficial advisor)
                        </p>
                    </div>
                </div>
                <hr />
            </div>
        </div>
        
        <div class="container text-center" id="footer">
            Game Development Club | University of Washington, Seattle | 2014    
        </div>
    </body>
</html>