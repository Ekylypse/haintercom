<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Home Assistant Intercom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">
    
  </head>
  <body>
	<?php include("players.php"); ?>

    <div id="controls">
  	 <button id="recordButton"></button>
  	 <!-- <button id="pauseButton" disabled>Pause</button>
  	 <button id="stopButton" disabled>Stop</button> -->
    </div>
    <div id="formats">Format: start recording to see sample rate</div>
  	<p><strong>Recordings:</strong></p>
  	<ol id="recordingsList"></ol> 
    <!-- inserting these scripts at the end to be able to use all the elements in the DOM -->
  	<script src="js/recorder.js"></script>
  	<script src="js/app.js"></script>
  </body>
</html>
