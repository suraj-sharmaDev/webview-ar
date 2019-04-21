<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WebView Ar</title>
    <style>
    #container {
        margin: 0px auto;
        width: 500px;
        height: 375px;
        border: 10px #333 solid;
    }
    #videoElement1 {
        width: 500px;
        height: 375px;
        background-color: #666;
    }
    #videoElement2 {
        width: 500px;
        height: 375px;
        background-color: #666;
    }        
    </style>    
</head>
<body>
<div id="container">
	<video autoplay="true" id="videoElement1">
	
	</video>
</div>    
<div id="container">
	<video autoplay="true" id="videoElement2">
	
	</video>
</div>        
<div class="box">
    <p id="subtitle"></p>
</div>
</body>
<script>
var video1 = document.querySelector("#videoElement1");
var video2 = document.querySelector("#videoElement2");
if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
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

let p=document.getElementById("subtitle");
let msg="";
recognition.addEventListener('result', e => {
    var last = e.results.length - 1;
    var final = e.results[last][0].transcript;
    p.innerText = final;
    
});
recognition.addEventListener('end', recognition.start);
recognition.start();
</script>
</html>