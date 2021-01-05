var musicList = [ "fukkit.mp3", "guessedit.mp3", "hardindapaint.mp3", "lasttime.mp3", "reallyreally.mp3", "realniggahours.mp3", "slob.mp3" ];
var music = musicList[Math.floor(Math.random()*musicList.length)];

var fft = new Tone.Analyser("fft", 16).toMaster();
var player = new Tone.Player("../audio/" + music).fan(fft).toMaster();
player.autostart = true;

var swagFactor;
var hadRedeye = false;

function convertRange( value, r1, r2 ) {
    return ( value - r1[ 0 ] ) * ( r2[ 1 ] - r2[ 0 ] ) / ( r1[ 1 ] - r1[ 0 ] ) + r2[ 0 ];
}
// Continuously loop and update chart with frequency data.
async function renderChart() {
    requestAnimationFrame(renderChart);

    // Copy frequency data to frequencyData array.
    //analyser.getByteFrequencyData(frequencyData);
    var frequencyData = fft.getValue();
    frequencyData[0] = convertRange( frequencyData[0], [-100, 0], [0, 1] );
    frequencyData[1] = convertRange( frequencyData[1], [-100, 0], [0, 1] );
    frequencyData[2] = convertRange( frequencyData[2], [-100, 0], [0, 1] );
    frequencyData[3] = convertRange( frequencyData[3], [-100, 0], [0, 1] );
    /*Values go from 0 -> 1 */
    swagFactor = ((frequencyData[0] - 0.6) * 10.5)
        + ((frequencyData[1] - 0.6) * 12)
        + ((frequencyData[2] - 0.6) * 11)
        + (frequencyData[3] * 1); // Mids, reverb n' shieett

    if( swagFactor > 8.25 ){
        document.getElementsByTagName("BODY")[0].style="background-color:red; opacity:0.8;";
        hadRedeye = true;
    } else if( hadRedeye ){
        document.getElementsByTagName("BODY")[0].style=" ";
        hadRedeye = false;
    }

    swagFactor = Math.round( swagFactor );

    var all = document.getElementsByTagName("*");
    for (var i=0, max=all.length; i < max; i++) {
        all[i].className = "shake-constant shake-level" + swagFactor;
    }
}

// Run the loop
renderChart();
