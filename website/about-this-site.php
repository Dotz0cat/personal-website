<!DOCTYPE html>
<html>
<head>
	<title>
		About This Site
	</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/page.css"/>
</head>
<body>
    <div id="banner-frame">
        <?php include "include/html/banner.htm"; ?>
    </div>
    
    <div class="content-box">
    <article>
        <header>
        <div class="content-title">
	    <h1>
		    About This Site
	    </h1>
	    </div>
        </header>
		
        <div>
            <p>
                This website has been a project a long time in the making.
            </p>
        </div>

        <div class="content-heading">
            <h3>
                The Stack
            </h3>
        </div>

        <div>
            <p>
                The website is made with html,
                css,
                PHP,
                and sqlite.
                One of the goals of making this site was to not use any JavaScript at all.
                Html and CSS form the front end of the site,
                and are used in their modern classical forms.
                PHP is what powers the backend of this site.
                I mainly started using it just for html includes,
                but then I wanted to add a comment system.
                Sqlite is used to store the comments for this site.
                I could have used a larger,
                and more
                <em>scaleable</em>
                solution like mariadb or postgres.
                However,
                I don't foresee that amount or kind of traffic ever visting this site.
            </p>
        </div>

        <div class="content-heading">
            <h4>
                Why PHP?
            </h4>
        </div>

        <div>
            <p>
                I chose to use PHP as I already knew it from taking a web techonlies course.
                It is admittly not the best language for this,
                but I knew it,
                and I needed html includes.
            </p>
        </div>
        
        <div class="content-heading">
            <h4>
                Why Not a Static Site Generator?
            </h4>
        </div>

        <div>
            <p>
                First and foremost,
                I fully acknolege there are some very good static site generators out there.
                I know my journey in making and maintaining this site,
                could be exponetionaly easier if I used one.
                I think the main drive to not use one would have to be the drive to make something
                of my own.
                I could have used a static site generator,
                or I could have got my hands dirty and learned how to do it all by hand.
                I just decided to do it all by hand.
                The best desision?
                Probolly not.
            </p>
        </div>

        <div class="content-heading">
            <h3>
                The Dev Tools
            </h3>
        </div>

        <div>
            <p>
                I have used many tools in the creation of this website.
                The most likely used tool has to be vim,
                the text editor I have wrote most of this site in.
                I have also used firefox and konquour for website testing as well.
                
            </p>
        </div>

        <div class="content-heading">
            <h3>
                The Server
            </h3>
        </div>

        <div>
            <p>
                I am fully making the mistake of writing this before I deploy the website.
                I use lighttpd
                (read as light-ly)
                to serve the website.
                I don't know if I plan to containerize it yet or not.
                I also use lighttpd as a reverse proxy.
                I do this for multiple reasons.
                One of these being general protection,
                and another being https wrapping.
                By using a reverse proxy,
                I can wrap the internal http server as https when viewed from the outside.
            </p>
        </div>
        
        <div class="content-heading">
            <h3>
                The hardware
            </h3>
        </div>

        <div>
            <p>
                It may be hard to belive this,
                but this website is served off of a repourposed PBX.
                A clearlyIP PBX Appliance 710 to be percise.
                For those of you who do not know what one is,
                it is a fancy computer box that acts like a phone system.
                I found the PBX in question at a yard sale and got it for $1.
                Nice and cheap!
                I had no intention of ever using it as a PBX,
                so I wiped it and put arch linux on it.
                (yes there are better distros for this,
                but arch is what I know)
            </p>
        </div>

        <div class="content-heading">
            <h3>
                The Styling and Asethetics
            </h3>
        </div>

        <div>
            <p>
                I had many diffrent styles I could choose from for this site.
                I really like the 90's style web,
                flat because it had to be.
                I also like the Japanese web,
                full of clutter widgets and packed with text.
                I finally decided on the late 2000's web.
                Or prehaps it could be better known as an aero styling,
                as was popular at the time.
                Frequently found in well know operating systems such as Windows Vista and Windows 7.
                The aero style makes use of lots of glass,
                transparentcy,
                and depth.
                It also has strong theming of nature,
                and humanism as well.
                Overall a very great styling choice.
                I can only hope to emulate a fraction of the style at that time.
            </p>
        </div>
    </article>
    </div>
    
    <div>
        <?php include 'include/php/comments.php'; ?>
    </div>
    
</body>
</html>

