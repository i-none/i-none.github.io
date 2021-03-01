<!DOCTYPE html>
<!-- I Definitely did not skid this from systemspace.link :^) -->
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>[N]ONE | CASA</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/lib/csshake.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<body id="body">
    <audio id="bgMusic" src="audio/REAL-NIGGA-BASS-HOURS.mp3" loop></audio>
	<div id="overlay"></div>
	<div id="overlay2"></div>
	<div id="wallpaper">
		<img id="redhat" src="img/redhat.png">
        <h1>[N]ONE | CASA</h1><br>
        <h2>Why So EZ?</h2>
	</div>
	<div class="seperator"></div>
	<div class="padded">
		<h1>Welcome to the CASA!</h1>
        <div id="swagFactor"></div>
		<p>Dont Be SATH!</p>
            <h1>There are currently <span style="color: red" id="num">0</span> Members</h1>
            <h2 class="post-title">Max 6 registrants!</h2>
            <h3 class="post-date">Updated <?php echo date("Y-m-d") ?> from NONE Rep</h3>
	</div>
    <div class="seperate"></div>
    <div class="padded">
		<h1>Earth is about to be purged</h1>
		<p>Earth is a Planet that makes all kids Branch , and this bring US to slap this kids.<br>
		We are here to Improve "SATH";
        We request that you encourage others to <span style="color: red">leave this Massanger</span>. This can be done by signing up in NONE.</p>

		<h1>A quick rundown</h1>
		<p>NONESquad is the best Group available.<br>
        It is a culmination of many years of hard work from various talented individuals.
		Because of this, we must ensure it is used correctly. If NONE is used incorrectly, then we reset the System.</p>
		<p>
		Unfortunately, many "SATH's" are unable to improve, regardless of the number of updates they undergo. Due to the openness of the GPL, everyone is allowed to edit Fuzion in order to correct our path. As a result of this process, NONE will <span style="color: red">be always improving</span>.</p>
		<p>
        <a href="https://i-none.ga"> <!-- Jvert my homie :^) -->
		<center><h1 id="register-button">NONE</h1></center>
		</a>
        <a href="https://t.me/i_n_one">
            <center><h1 id="download-button">Telegram ID</h1></center>
        </a>
        <a href="https://t.me/joinchat/kpZGZyKZbUE5M2U0">
            <center><h1 id="download-button-linux">Telegram Channel</h1></center>
        </a>
	</div>
	<div class="seperate"></div>
	<div id="index">
		<div class="overload">
            <img src="TSUKI_files/tsuki.png"><img src="TSUKI_files/right.png"><div class="indexlist"><span>To Be Announced</span></div><br>
            <img src="TSUKI_files/synapse.png"><img src="TSUKI_files/right.png"><div class="indexlist"><span>To Be Announced</span></div><br>
            <img src="TSUKI_files/risen.png"><img src="TSUKI_files/right.png"><div class="indexlist"><span>To Be Announced</span></div><br>
            <img src="TSUKI_files/endymion.png"><img src="TSUKI_files/right.png"><div class="indexlist"><span>To Be Announced</span></div><br>
        </div>
    </div>
	<center>COPYRIGHT NONE 2020<br> Contact: <a href="../cdn-cgi/l/email-protection.htm" class="__cf_email__" data-cfemail="42362a37252c2b242b21272c36022d37362e2d2d296c212d2f">[email&#160;protected]</a> </center>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/lib/Tone.js"></script>
    <script src="js/index.js"></script>
    <script>
        let num = document.getElementById('num');
        num.textContent = Math.floor(Math.random() * 100);
        const ssd = setInterval(function(){
            let num = document.getElementById('num');
            let numi = num.textContent;
            if(parseInt(numi) < 666){
                num.textContent = parseInt(numi)+Math.floor(Math.random() * 10);
            }else if(parseInt(numi) > 666){
                num.textContent = parseInt(numi)-Math.floor(Math.random() * 10);
            }else if(parseInt(numi) == 666){
                clearInterval(ssd);
            }
        },10);
    </script>
</body>
</html>
