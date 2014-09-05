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
        
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="index.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"> </script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        
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
        ───▐▀▒▀▄▄▄▄▄▄▀▀▀▒▒▒▒▒▄▄▀
        ──▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▀▀

        -->
        
        <!-- Carousel functionality -->
        <script type="text/javascript">
            $(document).ready( function() {
                $('#myCarousel').carousel({
                    interval:   6000
                });

                var clickEvent = false;
                $('#myCarousel').on('click', '.nav a', function() {
                        clickEvent = true;
                        $('.nav li').removeClass('active');
                        $(this).parent().addClass('active');		
                }).on('slid.bs.carousel', function(e) {
                    if(!clickEvent) {
                        var count = $('.nav').children().length -1;
                        var current = $('.nav li.active');
                        current.removeClass('active').next().addClass('active');
                        var id = parseInt(current.data('slide-to'));
                        if(count == id) {
                            $('.nav li').first().addClass('active');	
                        }
                    }
                    clickEvent = false;
                });
            });
        </script>
        
        <!-- Makes sure to hide the past calender events on page load-->
        <script type="text/javascript">
            $(document).ready( function() {
                $('#pastcalender').toggle();
                $('#hidepastcalenderbtn').toggle();
            });
        </script>
        
        <!-- Smooth scrolling -->
        <script type="text/javascript">
            $(function() {
                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
                        && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    var scrollSpeed = 500;
                    var navOffset = 80;
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: (($(target).offset().top) - navOffset)
                        }, scrollSpeed);
                            return false;
                        }
                    }
                });
            });
        </script>
        
        <script type="text/javascript">
        var offset = 800;

        $('.navbar li a').click(function(event) {
            event.preventDefault();
            $($(this).attr('href'))[0].scrollIntoView();
            scrollBy(0, -offset);
        });
        </script>
        
        <!-- Close the nav after clicking on an attribute, used for mobile nav -->
        <script type="text/javascript">
            $(function() {
                $('#nav a').on('click', function(){ 
                    if($('.navbar-toggle').css('display') !='none'){
                        $(".navbar-toggle").trigger( "click" );
                    }
                });
            });
        </script>
        
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-50164031-1', 'washington.edu');
            ga('require', 'displayfeatures');
            ga('send', 'pageview');
        </script>
        
    </head>
    
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top shadow" role="navigation" id="nav">
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
                            <p>
                                <a href="https://mailman.cs.washington.edu/mailman/listinfo/gamedev"
                                   target="_blank" class="label label-default">
                                    <img src="_images/mail_logo.png" width="35px" />
                                    Join Our Mailing List!
                                    <img src="_images/mail_logo.png" width="35px" />
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
                        <a href="#">Welcome<small>Join Our Mailing List And FB Group!</small></a></li>
                    <li data-target="#myCarousel" data-slide-to="1">
                        <a href="#">Come To A Meeting!<small>Thursdays 4PM, EEB 303</small></a></li>
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
                        <h3>Join The Facebook Group And Mailing List!</h3>
                        <p>
                            <a href="https://www.facebook.com/groups/uwgamedevc/">
                                <img src="_images/fb_logo.png" width="35px" />
                                Join Our Facebook Group!
                                <img src="_images/fb_logo.png" width="35px" />
                            </a>
                        </p>
                        <p>
                            <a href="https://mailman.cs.washington.edu/mailman/listinfo/gamedev">
                                <img src="_images/mail_logo.png" width="35" />
                                Join Our Mailing List!
                                <img src="_images/mail_logo.png" width="35px" />
                            </a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <h3>When And Where?</h3>
                        <p>
                            We meet every every Thursday at EEB 303 starting at 4PM, meetings 
                            usually last and hour or so.
                        </p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <h3>Useful Links!</h3>
                        <p>
        		          <a href="http://compohub.net/">Compohub, a calendar of all upcoming game jams.</a>
                            <br />
        		          <a href="http://www.meetup.com/SeattleGames/">Seattle Indie Game Devs meetups schedule</a>
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

                <?php date_start(FALSE, "Guest Speaker - Ronnie Ashlock", "6/5/2014")?>
                <p>
                    Last meeting of the quarter/school year!
		    <br />
		    <br/ >
		    We’ll be having a guest speaker that’s had over a decade of industry experience with being a 3D artist, including working at SOE (EverQuest). Ronnie will be talking about his workflow and advanced tips in Blender and Unity.
					<hr/>
					<a href="http://surlybird.com/">Ronnie’s Website</a>
                </p>
                <?php date_end()?>

                <?php date_start(TRUE, "Workshop - Flixel", "5/29/2014")?>
                <p>
                    We’ll be talking about what Flixel is and how to use it. Some of our members have used this tool in previous game jams,
			it’s definitely worth checking out!
                    
					<hr/>
					<a href="slides/EpicPon_Slides.pdf">Slides</a><br/>
					<a href="http://flixel.org/">Download Flixel</a><br/>
                </p>
                <?php date_end()?>

                <?php date_start(FALSE, "CodeDay!", "5/24/2014")?>
                <p>
                    Two presentations, <a href="slides/codeday.html">Shiny's</a> and <a href="slides/intro_unity.pptx">Wenjie's</a>.
                    <br/>
					<hr/>
					<a href="http://gamedev.cs.washington.edu/games/codeday/kek.html">Demo Game</a><br/>
					<a href="https://github.com/BluBambu/GameDevDemo">Source</a><br/>
                </p>
                <?php date_end()?>

                <?php date_start(TRUE, "Workshop - Kinect", "5/22/2014")?>
                <p>
                	We'll be looking at the Microsoft Kinect and how to integrate it into the Unity Game Engine
                </p>
                <?php date_end()?>

                <?php date_start(FALSE, "Workshop - Visual Scripting", "5/14/2014")?>
                <p>
                    We'll be making a simple FPS game in Unreal Engine 4 using the built-in visual scripting
                    solution called Blueprint.
                    <br/>
                    <br/>If you want to follow along with the steps, you can get full access to the engine for
                    $20. Register here for access: <a href="https://www.unrealengine.com/register">Download UE4</a>.
                    <br/>
                    <br/>
                </p>
                <?php date_end()?>

            	<?php date_start(TRUE, "Workshop - Fun Activity", "5/8/2014")?>
                    <p>
						Meeting tomorrow (normal room EE303). We'll be doing a quick workshop on a 3D modeling program called Blender. See you there!<br/>
						<br/><a href="http://www.blender.org/Download">Download Blender!</a><br/><br/>
                    </p>
                    <p>
                        Bring you laptop (and a mouse for the optimal experience). We'll be doing a collab game activity!
                    </p>
                    <hr />
                    <a href="/slides/5-8-14.pdf">Slides</a><br/>
                    <a href="/games/collabshootergame/collabshootergame.html">Collab Game</a>
                <?php date_end()?>
            
            
            	<?php date_start(FALSE, "Workshop - Fun Activity", "5/1/2014")?>
                            <p>
                            	We're temporary meeting this week at EEB 031, we'll be back in EEB 303 next week.
                            </p>
                            <p>
                               	Bring you laptop to this meeting! We'll be doing a fun creative activity.
                            </p>
                            <hr />
                            <a href="/slides/5-1-14.html">Links!</a>
                <?php date_end()?>

                <?php date_start(TRUE, "Workshop - Graphical, Audio, and Social Tools", "4/24/2014")?>
                    <p>
						We'll be talking about some useful tools for making games quickly (graphics, sound, audio) and the upcoming Ludum Dare 48 (this weekend).
						<br/><br/>
						Never done a game before, but interested in participating?
						Ludum Dare is a great way to get started - try the 48 hour solo contest, or 72 hour jam with a friend or two (<a href="http://www.ludumdare.com/compo/ld29-theme-voting-round-5-of-5/">with a theme being voted on right now!</a>)
						<br/><br/>
						See you there!
						<br/><br/>
						Site:
						<a href="http://www.ludumdare.com/compo/">http://www.ludumdare.com/compo/</a>
						<br/><br/>	
						Twitter (‪#‎LD48‬)
						<a href="https://twitter.com/search?q=%23ld48">https://twitter.com/search?q=%23ld48</a>
                    </p>
                    <hr />
                    <a href="slides/4-24-14.pdf">Slides</a>
                <?php date_end()?>

            	<?php date_start(FALSE, "Guest Speaker - Nat Guy", "4/17/2014")?>
                            <p>
                                A UW CSE graduate is coming in to talk about his work in the industry.
                                He's worked several years at Nintendo. If you've ever wondered what it 
                                was like to develop for the Nintendo DS or Wii U, make sure to come to this 
                                meeting!
                            </p>
                            <hr />
                            <a href="slides/4-17-14.pdf">Slides</a>
                <?php date_end()?>

                <?php date_start(TRUE, "Workshop - Haxe", "4/10/2014")?>
                            <p>
                                We'll be learning how to make a simply flappy bird game with in a language called
                                <a href="http://haxe.org">Haxe</a> and a new library called 
                                <a href="http://openfl.org">OpenFL</a>.
                            </p>
                            <hr />
                            <a href="slides/4-10-14.pdf">Slides</a>
                <?php date_end()?>

                <?php date_start(FALSE, "Guest Speaker - Seth", "4/03/2014")?>
                            <p>
                                Seth, our official advisor, is coming to talk about his GDC experience.
                            </p>
                <?php date_end()?>
            </ul>
            
            <div id="pastcalender">
                <ul class="timeline">
                <?php date_start(TRUE, "Guest Speaker - Seth", "3/14/2014")?>
                    <p>
                    	Our Guest speaker Seth Cooper will talk about 8 Weird Tricks to
                        Improve Your Game Development Prototyping Life
                        (as previously featured on BuzzFeed).
                    </p>
                <?php date_end()?>

         	    <?php date_start(FALSE, "Workshop - Unity", "3/6/2014")?>
                    <p>
                        We'll be talking about a very popular game development engine called Unity3d
                        (which some of you out there may or may not have used before). 
                    </p>
                    <hr />
                    <a href="slides/3-6-14.pdf">Slides</a> |
                    <a href="https://github.com/spotco/Unity3D_Demo_Game">Game Source</a>
                <?php date_end()?>

                <?php date_start(TRUE, "Guest Speaker - DigiPen", "2/27/2014")?>
                    <p>
                        Guest speaker from DigiPen is coming in today.
                    </p>
                <?php date_end()?>

              	<?php date_start(FALSE, "Logistics - Cyberpunk Game Jam", "1/20/2014")?>
                    <p>
                        A few updates to everyone that couldn't make it. There's lots of interest
                        in the cyberpunk game jam, 
                        we'll be splitting into two teams: <br />
                        One team will just be meeting/working weekends (so on 4 of 10 total days). <br />
                        The other team will be working the full 10 days. <br />
                        Both of these will be pretty big time commitments 
                        (several hours every working day), so if you're
                        interested choose the team that fits your schedule. <br />
                        Lastly: we'll be talking logistics (game design, meetup schedule) next time, 
                        so do your best to make it!
                    </p>
                <?php date_end()?>

                <?php date_start(TRUE, "Talk - Object Oriented Design", "2/20/2014")?>
                    <p>
                        Two small talks today, one about object-oriented design in games, and 
                        another about design in current popular mobile games. Also, we've got a team for the
                        cyberpunk game jam. Interested in joining, see you there!
                    </p>
                    <hr />
                    <a href="materials/mobile_games.html">Slides</a>
                <?php date_end()?>

                <?php date_start(FALSE, "Guest Speaker - Pat Kemp", "2/13/2014")?>
                    <p>
                        Pat Kemp will, from SpryFox games, will talk about his experience as a game developer
                    </p>
                    <hr />
                    <a href="materials/patkemp_links.html">Useful Links</a>
                <?php date_end()?>

                <?php date_start(TRUE, "Workshop - HTML% Canvas", "2/6/2014")?>
                    <p>
                        We'll be making on cool platformer using JavaScript.
                    </p>
                    <hr />
                    <a href="slides/2-6-14.pdf">Slides</a> |
                    <a href="http://gamedev.cs.washington.edu/games/platformergame.html">Game Source</a>
                <?php date_end()?>

              	<?php date_start(FALSE, "Workshop - HTML5 Canvas", "1/30/2014")?>
                    <p>
                        We'll be showing you around cameras and levels in HTML5 Canvas!
                    </p>
                    <hr />
                    <a href="slides/1-30-14.pdf">Slides</a> |
                    <a href="http://gamedev.cs.washington.edu/games/cameragame.html">Game Source</a>
                <?php date_end()?>

                <?php date_start(TRUE, "Workshop - HTML5 Canvas", "1/23/2014")?>
                    <p>
                        Bring your laptop! We'll be using JavaScript to make games.
                    </p>
                    <hr />
                    <a href="slides/1-23-14.pdf">Slides</a> |
                    <a href="http://gamedev.cs.washington.edu/games/canvas_test.html">Game Source</a>
                <?php date_end()?>

                <?php date_start(FALSE, "Workshop - Game Design", "1/26/2014")?>
                    <p>
                        We're be doing a game design activity today, so bring your laptops.
                    </p>
                    <hr />
                    <a href="slides/1-16-14.pdf">Slides</a> |
                    <a href="https://gist.github.com/spotco/8452705">Game Source</a>
                <?php date_end()?>

                <?php date_start(TRUE, "Workshop - GamePanel", "3/9/2014")?>
                    <p>
                        First meeting! Bring your laptops, cause we'll be using Java to make a simple game.
                    </p>
                    <hr />
                    <a href="slides/1-9-14.pdf">Slides</a> |
                    <a href="https://github.com/spotco/GamePanel">GamePanel Source</a>
                <?php date_end()?>

                </ul>
            </div>
            
            <!-- I should clean this up... -->
            <div class="row" id="showpastcalenderbtn">
                <button type="button" onclick="$('#pastcalender').slideToggle(800); $('#showpastcalenderbtn').hide('slow');
                                               $('#hidepastcalenderbtn').show('slow');" 
                        class="btn btn-inverse btn-small darkbutton col-md-2 col-md-offset-5">
                    Show Past Quarters
                </button>    
            </div>
            
            <div class="row" id="hidepastcalenderbtn">
                <button type="button" onclick="$('html, body').animate({scrollTop: $('#calender').offset().top}, 1000);
                                               $('#pastcalender').slideToggle(800); $('#hidepastcalenderbtn').hide('fast');
                                               $('#showpastcalenderbtn').show('slow');" 
                        class="btn btn-inverse btn-small darkbutton col-md-2 col-md-offset-5">
                    Hide Past Quarters
                </button>    
            </div>
            
            <hr />
        </div>
    
        <div class="container" id="projects">
            <h2 class="text-center">Member Projects</h2>
            <hr />
            <div class="row">

                <?php proj_start()?>
                        <a href="http://laserswords.net/ghost/"><img src="_images/projects/ghostgirlkitten.png" class="img-responsive" alt="Window Cleaner"/></a>
                        <span class="post-title"><b>Ghost Girl + Kitten</b></span>
                    </div>
                    <div class="content">
                        <div class="author">
                            By <b>Benjamin</b>
                        </div>
                        <div>
                            A heartwarming tale of a ghost girl, a kitten, and a laser pointer.
                        </div>
                <?php proj_end()?>

                <?php proj_start()?>
                        <a href="http://gamedev.cs.washington.edu/games/MoreEpicPon.swf"><img src="_images/projects/moreepicpon.png" class="img-responsive" alt="Window Cleaner"/></a>
                        <span class="post-title"><b>MoreEpicPon</b></span>
                    </div>
                    <div class="content">
                        <div class="author">
                            By <b>Wenrui</b>
                        </div>
                        <div>
                            Pretty epic pong in Flixel (wasd + arrow keys)<br/><br/><a href="https://github.com/DonovanWu/EpicPon.git">source</a>
                        </div>
                <?php proj_end()?>

                <?php proj_start()?>
                        <a href="http://spotcos.com/penguin/"><img src="_images/projects/peng_simulator.png" class="img-responsive" alt="Window Cleaner"/></a>
                        <span class="post-title"><b>Maniac Pengmaku!!</b></span>
                    </div>
                    <div class="content">
                        <div class="author">
                            By <b>Shiny</b>
                        </div>
                        <div>
                            Realistic penguin life simulation danmaku (bullet-hell shooter) game. Made in 48hrs for LD48.
                        </div>
                <?php proj_end()?>

                <?php proj_start()?>
                        <a href="http://donovanwu.github.io/showcase/FishingOnTheIce.swf"><img src="_images/projects/fishing_on_the_ice.png" class="img-responsive" alt="Window Cleaner"/></a>
                        <span class="post-title"><b>Fishing On The Ice</b></span>
                    </div>
                    <div class="content">
                        <div class="author">
                            By <b>Wenrui</b>
                        </div>
                        <div>
                            Every wonder how dangerous fishing on the ice is? Made in 48hrs for LD48.
                        </div>
                <?php proj_end()?>
	            
            </div>
            <div class="row">

	            <?php proj_start()?>
	                    <a href="http://johngs.itch.io/invasion"><img src="_images/projects/invasion.png" class="img-responsive" alt="Invasion"/></a>
	                    <span class="post-title"><b>Invasion</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>Jonathan, Justin, Taylor, and Thomas</b>
	                    </div>
	                    <div>
	                        Cyberpunk Jam 2014 Entry.
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
	                    <div>
	                        Cyberpunk Jam 2014 Entry.
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
	                    <div>
	                        A colorful breakout game that contains a chain reaction after a while.
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
	                    <div>
	                        Explore!
	                    </div>
	            <?php proj_end()?>

            </div>
            <div class="row">

	            <?php proj_start()?>
	                    <a href="games/dotual_on.html"><img src="_images/projects/dotual_on.png" class="img-responsive" alt="Dotual On"/></a>
	                    <span class="post-title"><b>Dotual On</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>Wil</b> 
	                    </div>
	                    <div>
	                        Dodge those dots!
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
	                    <div>
	                        A test for a visual novel game.
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
	                    <div>
	                        A spacecraft docking simulator.
	                    </div>
	            <?php proj_end()?>

	            <?php proj_start()?>
	                    <a href="games/quidditch/index.html"><img src="_images/projects/quidditch.png" class="img-responsive" alt="Quidditch"/></a>
	                    <span class="post-title"><b>Quidditch</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>___</b> 
	                    </div>
	                    <div>
	                        A basic game of quidditch
	                    </div>
	            <?php proj_end()?>

            </div>
            <div class="row">

	            <?php proj_start()?>
	                    <a href="games/realistic_space_fighter.html"><img src="_images/projects/space_fighter.png" class="img-responsive" alt="Space Fighter"/></a>
	                    <span class="post-title"><b>Space Fighter</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>___</b> 
	                    </div>
	                    <div>
	                        A realistic space fighter with life like physics.
	                    </div>
	            <?php proj_end()?>

	            <?php proj_start()?>
	                    <a href="games/physics-simulator.html"><img src="_images/projects/physics_sim.png" class="img-responsive" alt="Physics Sim"/></a>
	                    <span class="post-title"><b>Physics Simulator</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>___</b> 
	                    </div>
	                    <div>
	                        A physics simulation test
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
	                    <div>
	                        An Invaders style game with squares.
	                        <a href="https://github.com/Bredgren/SquareInvaders">Source</a>
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
	                    <div>
	                        A networking demo in java.
	                    </div>
	            <?php proj_end()?>

            </div>
            <div class="row">
                <?php proj_start()?>
                        <a href="http://yoonj4.itch.io/dancing-robot-party/"><img src="_images/projects/dancing_robot_party.png" class="img-responsive" alt="Window Cleaner"/></a>
                        <span class="post-title"><b>Robot Dancing Party</b></span>
                    </div>
                    <div class="content">
                        <div class="author">
                            By <b>Taylor and Justin Yoon</b>
                        </div>
                        <div>
                            Robots that dance, what more could a person want?
                        </div>
                <?php proj_end()?>

	            <?php proj_start()?>
			            <a href="http://spotco.itch.io/window-cleaner"><img src="http://spotcos.com/content/projectsimg/banner/windowcleaner_banner.png" class="img-responsive" alt="Window Cleaner"/></a>
			            <span class="post-title"><b>Window Cleaner: A Tale of Two Gangs</b></span>
		            </div>
		            <div class="content">
		                <div class="author">
		                    By <b>Shiny, Donovan, Ciera, Yasu, Joshua</b>
		                </div>
		                <div>
		                    CyberPunk 2014 Jam Entry. A pair of star-crossed lovers, one from each side, take their life. How well could this possibly end?
		                </div>
	            <?php proj_end()?>              
	            <?php proj_start()?>
	                    <a href="games/flappy_ducks.swf"><img src="_images/projects/flappy_duck.png" class="img-responsive" alt="Flappy Duck"/></a>
	                    <span class="post-title"><b>Flappy Duck</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>Shiny</b>
	                    </div>
	                    <div>
	                        A Flappy Bird clone made to show off Haxe.
	                        <a href="https://github.com/spotco/flappyducks">Source</a>
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
	                    <div>
	                        A Flappy Bird clone made to show off Art, Sound and Font tools.
	                        <a href="https://github.com/spotco/FlappyObamas">Source</a>
	                    </div>
	            <?php proj_end()?>
	            
            </div>
            <div class="row">
	            <?php proj_start()?>
	                    <a href="games/tic_tac_toe.jar"><img src="_images/projects/tic_tac_toe.png" class="img-responsive" alt="Tic Tac Toe"/></a>
	                    <span class="post-title"><b>Tic Tac Toe</b></span>
	                </div>
	                <div class="content">
	                    <div class="author">
	                        By <b>Shiny</b> 
	                    </div>
	                    <div>
	                        A simple Tic Tac Toe game. 
	                        <a href="https://github.com/spotco/GamePanel/blob/a1cbfa02fa62fdacc7696570dc8542920387460b/TicTacToeGame.java">Source</a>
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
	                    <div>
	                        A sudoku game make in Java!
	                        <a href="https://github.com/spotco/GamePanel/blob/a1cbfa02fa62fdacc7696570dc8542920387460b/SudokuPanel.java">Source</a>
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
	                    <div>
	                        Got a game that you want to display here? Send it to 
	                        <a href="mailto:shinyy@cs.washington.edu">us</a>
	                        with a short description and photo!
	                    </div>
	            <?php proj_end()?>

            </div>
        </div>
        
        <div class="container text-center" id="contact">
            <h2>Contact Us</h2>
            <div class="text-center">
                <hr />
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <h3>Facebook Group</h3>
                        <p>
                            Join our <a href="https://www.facebook.com/groups/uwgamedevc/">Facebook group</a>
                            for the lastest updates and news!
                        </p>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <h3>Mailing List</h3>
                        <p>
                            Join our <a href="https://mailman.cs.washington.edu/mailman/listinfo/gamedev">mailing list</a>!
                            <br />
                            Don't have a UW email? Send us a <a href="mailto:shinyy@cs.washington.edu">message</a> 
                            and we'll get you added.
                        </p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <h3>Need More Info?</h3>
                        <p>
                            Contact <a href="mailto:shinyy@cs.washington.edu">Shiny</a> for club stuff.
                            <br />
                            Contact <a href="mailto:wenjie1@uw.edu">Wenjie</a> for website problems.
                        </p>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <h3>Our Advisers</h3>
                        <p>
			                <a href="mailto:scooper@cs.washington.edu">Seth</a> (Official advisor)<br/>
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