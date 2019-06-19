<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<button id="play" onclick="playVid()" type="button">Play Video</button>
<button id="pause" onclick="pauseVid()" type="button"  style="display: none;">Pause Video</button>

<select name="stationlist" id="stationlist" onchange="matikan_semua()">
	<option value="makasar">MAKASAR</option>
	<option value="medan">MEDAN</option>
	<option value="bandung">BANDUNG</option>
</select> -->

<!-- <br>  -->

<video id="makassar" width="1" height="1">
  <source src="http://112.78.191.28:8000/dmks" type="video/mp4">
</video>

<video id="medan" width="1" height="1">
  <source src="http://112.78.191.28:8000/dmdn" type="video/mp4">
</video>

<video id="bandung" width="1" height="1">
  <source src="http://112.78.191.28:8000/dbdg" type="video/mp4">
</video>

<video id="semarang" width="1" height="1">
  <source src="http://112.78.191.28:8000/dsmg" type="video/mp4">
</video>

<video id="jogja" width="1" height="1">
  <source src="http://112.78.191.28:8000/djog" type="video/mp4">
</video>

<video id="surabaya" width="1" height="1">
  <source src="http://112.78.191.28:8000/dsby" type="video/mp4">
</video>


<video id="jakarta" width="1" height="1">
  <source src="http://masima.rastream.com/masima-pramborsjakarta?awparams=companionads%3Afalse%3Btags%3Aradioactive%3Bstationid%3Amasima-pramborsjakarta&playerid=Prambors_web&authtoken=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJvaWQiOiJsYXlsaW8iLCJpYXQiOjE1MjIwNDczODgsImV4cCI6MTUyMjEzMzc4OH0.9eLBuJ6hA5AuYDs2vXvgyo00AATPn7JGIAvnlZpVEdw&lan=%5B%22en%22%5D&setLanguage=true" type="video/mp4">
</video>



<script> 
	// function alert_function(){
		
	// 	vid.pause(); 
	// 	// alert(strstationlist);
	// }

function matikan_semua(){
	var vid1 = document.getElementById("makassar"); 
    vid1.pause();
    
	var vid2 = document.getElementById("medan"); 
    vid2.pause();
	
	var vid3 = document.getElementById("bandung"); 
    vid3.pause();
	
	var vid4 = document.getElementById("semarang"); 
    vid4.pause();
    
	var vid5 = document.getElementById("jogja"); 
    vid5.pause();

	var vid6 = document.getElementById("surabaya"); 
    vid6.pause();

    document.getElementById("buttonPlay").style.display="inline";
    document.getElementById("stationlist").style.display="inline";
    document.getElementById("buttonPause").style.display="none";

}


// function ganti(){
// 	document.getElementById("pause").click();
// 	var e = document.getElementById("stationlist");
// 	var strstationlist = e.options[e.selectedIndex].value;
// 	var vid = document.getElementById(strstationlist); 
//     vid.pause(); 
//     pauseVid();
// }

function playVid() { 
	var e = document.getElementById("stationlist");
	var strstationlist = e.options[e.selectedIndex].value;
	var vid = document.getElementById(strstationlist); 
    vid.play(); 
    document.getElementById('buttonPause').style.display="inline";
    document.getElementById('buttonPlay').style.display="none";
    // alert("Radionya : "+strstationlist);
} 

function pauseVid() { 
	var e = document.getElementById("stationlist");
	var strstationlist = e.options[e.selectedIndex].value;
	var vid = document.getElementById(strstationlist); 
    vid.pause(); 
    document.getElementById('buttonPause').style.display="none";
    document.getElementById('buttonPlay').style.display="inline";
} 
</script> 
