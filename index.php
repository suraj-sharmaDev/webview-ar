<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WebView Ar</title>
</head>
<body>
	<div class="box">
		<p id="subtitle"></p>
	</div>
</body>
<script>
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