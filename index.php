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
	console.log(e.results);
	const transcript = Array.from(e.results)
		.map(result => result[0])
		.map(result => result.transcript)
	console.log(transcript);
});

recognition.start();
</script>
</html>
