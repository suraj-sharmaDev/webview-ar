<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WebView Ar</title>
</head>
<body>
	<div class="words">
	</div>
</body>
<script>
var recognition = new webkitSpeechRecognition();
recognition.continuous = true;
recognition.interimResults = true;

let p=document.createElement("p");
const words = document.querySelector('.words');
words.appendChild(p);

recognition.addEventListener('result', e => {
	console.log(e);
});
recognition.start();
</script>
</html>
