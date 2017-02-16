<?php include_once("header.php");
?>
<link rel="stylesheet" href="lib/plyr/dist/plyr.css">
<section>
    <div id="call-to-action">
        <div class="container">
            <div class="row text-center">
                <h2>Videos</h2>
                <hr>
            </div>
            <div class="row">
                <div class="player">
                    <video src="mp4/highlights.mp4" controls poster="img/highlights.jpg">
                    <track kind="subtitles" label="Portugues (Brasil)" src="vtt/legendas.vtt" srclang="pt-br" default>
                    </video>
                </div>
                <input type="range" id="volume" min="0" max="1" step="0.01" value="1">
                <button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button>
                <!--<audio  src="mp3/audio.mp3" style="display: none"></audio>-->
            </div>
        </div>
    </div>
    <div id="news" class="container" style="top:0px">
        <div class="row text-center">
            <h2>Latest News</h2>
            <hr>
        </div>
        <div class="row thumbnails">
            <div class="item" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Notícia">
                    <h3>Highlights</h3>
                </div>
            </div>
            <div class="item" data-video="Orlando_City_foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_foundation_2015.jpg" alt="Notícia">
                    <h3>Orlando City Foundation 2015</h3>
                </div>
            </div>
            <div class="item" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Notícia">
                    <h3>Highlights</h3>
                </div>
            </div>
            <div class="item" data-video="Orlando_City_foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_foundation_2015.jpg" alt="Notícia">
                    <h3>Orlando City Foundation 2015</h3>
                </div>
            </div>
            <div class="item" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Notícia">
                    <h3>Highlights</h3>
                </div>
            </div>
            <div class="item" data-video="Orlando_City_foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_foundation_2015.jpg" alt="Notícia">
                    <h3>Orlando City Foundation 2015</h3>
                </div>
            </div>
            <div class="item" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Notícia">
                    <h3>Highlights</h3>
                </div>
            </div>
            <div class="item" data-video="Orlando_City_foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_foundation_2015.jpg" alt="Notícia">
                    <h3>Orlando City Foundation 2015</h3>
                </div>
            </div>
            <div class="item" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Notícia">
                    <h3>Highlights</h3>
                </div>
            </div>
            <div class="item" data-video="Orlando_City_foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_foundation_2015.jpg" alt="Notícia">
                    <h3>Orlando City Foundation 2015</h3>
                </div>
            </div>
            <div class="item" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Notícia">
                    <h3>Highlights</h3>
                </div>
            </div>
            <div class="item" data-video="Orlando_City_foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_foundation_2015.jpg" alt="Notícia">
                    <h3>Orlando City Foundation 2015</h3>
                </div>
            </div>
            <div class="item" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Notícia">
                    <h3>Highlights</h3>
                </div>
            </div>
            <div class="item" data-video="Orlando_City_foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_foundation_2015.jpg" alt="Notícia">
                    <h3>Orlando City Foundation 2015</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once("footer.php");
?>

<script src="lib/plyr/dist/plyr.js"></script>
    