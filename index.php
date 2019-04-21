<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WebView Ar</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        html,body {
            padding: 0;
            margin: 0;
        }
    .subtitlebox {
        width: 100%;
        height: 50px;
        background-color: black;
        color: white;
        position: absolute;
        z-index: 1000;
        margin-top: -40px;
        
    }
    #videoElement1 {
        width: 100%;
        height: 100%;
        background-color: #666;
    }
    #videoElement2 {
        width: 100%;
        height: 100%;
        background-color: #666;
    }        
    </style>    
</head>
<body>
<div class="row" style="height:100%;">
    <div class="col">
        <video autoplay="true" id="videoElement1">
        </video>
        <p id="subtitle1" class="subtitlebox"></p>
    </div>
    <div class="col">
        <video autoplay="true" id="videoElement2">	
        </video>
        <p id="subtitle2" class="subtitlebox"></p>
    </div>
</div>        
</body>
<script>
var video1 = document.querySelector("#videoElement1");
var video2 = document.querySelector("#videoElement2");
if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: { facingMode: { exact: "environment" } } })
    .then(function (stream) {
      video1.srcObject = stream;
      video2.srcObject = stream;
    })
    .catch(function (error) {
      console.log("Something went wrong!");
    });
}
    
var recognition = new webkitSpeechRecognition();
recognition.continuous = true;
recognition.interimResults = false;

let p1=document.getElementById("subtitle1");
let p2=document.getElementById("subtitle2");
recognition.addEventListener('result', e => {
    var last = e.results.length - 1;
    var final = e.results[last][0].transcript;
    p1.innerText = final;
    p2.innerText = final;    
    
});
recognition.addEventListener('end', recognition.start);
recognition.start();
</script>
<script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
</html>