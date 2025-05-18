<!DOCTYPE html>
<html>
<head>
    <title>
        My Projects
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
    <section>
        <header>
        <div class="content-title">
	    <h1>
		    My Projects
	    </h1>
	    </div>
        </header>
		
	    <div class="content-text">
        <p>
            I have multiple diffrent project wether in C,
            C++,
            or even Fortran.
            I hope to describe some of them here.
	    </p>
        </div>
    </section>
    </div>
    
    <div class="content-box">
    <section>
        <div class="content-heading">
        <h3>
            <a href="https://github.com/Dotz0cat/walld">Walld</a>
        </h3>
        </div>

        <div class="content-text">
            <p>
                Walld is a wallpaper daemon.
                Walld automatically changes the wallpaper.
                It sets the wallpaper through feh.
                It changes the wallpaper by default every 30 minutes.
            </p>
        </div>

        <div class="content-text">
            <p>
                I created walld to fill a need of my own.
                I wanted to have multiple wallpapers changed automaticly.
                This is very easy in a Windows enviroment.
                However,
                it is slightly more difficult in a Linux enviroment.
                There are ways to do it,
                and it may be even easier if you use a desktop enviroment,
                but none of them are that great.
                I also wanted to have colors from the wallpaper generated automaticly.
                So after much time trying to convice myself not to make it,
                I ended up making walld.
            </p>
            <p>
                There are still some issue with it.
                It adds a non negliegable amount of time to my inital X server startup.
                It does not currently get exitted when my X server exits.
                It doesn't currently support the XDG base directories.
                There is a recursive function that I need to optimize.
            </p>
        </div>
    </section>
    </div>

    <div class="content-box">
    <section>
        <div class="content-heading">
            <h3>
                <a href="https://github.com/Dotz0cat/plot">Plot</a>
            </h3>
        </div>

        <div class="content-text">
            <p>
                Plot is a complex plotting program made in Fortran.
            </p>
        </div>

        <div class="content-text">
            <div class="content-center">
                <div class="content-figure">
                    <figure>
                        <img src="include/images/my-projects/taubin_heart_example.jpg" />
                        <figcaption>Taubin heart graphed with Plot</figcaption>    
                    </figure>
                </div>
            </div>
            <p>
                This is one of my favorite projects that I have made.
                I for some reason after watching
                <em>Science fell in love, so I tried to prove it</em>
                have been obsessed with the taubin heart.
                That is the heart formed by
                <math>(X^2 + Y^2 - 1)^3 = X^2Y^3</math>.
                The taubin heart is one of the main reasons I made this program.
                I wanted to graph out the taubin heart in a diffrent way.
            </p>

            <p>
                Plot really pushed my programing skills.
                I had to rewrite some funimental algorithums that most people would use a library for.
                One of these is the LogLUV adaptive run length compression.
                It was not fun and all ended up being a off by one error.
                I also have to do a lot of color conversion for plot.
                I had to go from CIELCH(uv) to gamma SRGB or from CIELCH(uv) to LogLUV.
                LogLUV is not based on CIELUV and one would expect.
                As already mentioned it has a
                <em>fun</em>
                compression algroithum to go along with it.
                I also had to build tiff files by hand.
                This is not an easy task,
                but it is easier then others.
                It really is just byte blasting a file.
                It does come with caveuts,
                tiff tags must be in order,
                and if you use strips you must list their locations.
            </p>

            <p>
                I chose to use the tiff file format due to its flexablity,
                and wide range of format support.
                It supported compression which was a big thing for me as the files I was producing
                could be over 40MBs in size.
                I initally chose to use standard 32-bit floating point tiff,
                and compress it with a Zlib wrapper.
                This improved the size of the files,
                but they were still too big.
                I later chose to use the LogLUV format
                as it had great HDR support and compressed well.
            </p>

            <p>
                Plot nativly supports HDR output.
                This was included from the start.
                It was originally like that as I did not want to write the conversion from HSV to RGB.
                So I decided to work from CIELAB and CIELUV.
                Well,
                CIELCH since complex numbers have a convient polar repersentation.
                I did use CIELAB at the begining,
                but after a while I found CIELUV to be the better repersentation.
            </p>
        </div>
    </section>
    </div>
     
    <div>
        <?php include 'include/php/comments.php'; ?>
    </div>
    
</body>
</html>

