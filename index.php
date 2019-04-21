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
recognition.interimResults = true;

let p=document.getElementById("subtitle");
let msg="";
recognition.addEventListener('result', e => {
	const transcript = Array.from(e.results)
		.map(result => result[0])
		.map(result => result.transcript)
		.join('');
    p.innerText = transcript;
	console.log(e.results);
});
recognition.addEventListener('end', recognition.start);
recognition.start();
</script>
</html>