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

<<<<<<< HEAD
=======

>>>>>>> c96052019e275e87e5f023a667bd2e99f461494b

let p=document.getElementById("subtitle");
let msg="";
recognition.addEventListener('result', e => {
	const transcript = Array.from(e.results)
		.map(result => result[0])

<<<<<<< HEAD
		.map(result => result.transcript)
		.join('');
	p.innerHTML = transcript;	
});
recognition.addEventListener('end', recognition.start);
recognition.start();
</script>
</html>
=======
		.map(result => result.transcript);
	msg.concat(" ",transcript);
	p.innerHTML = msg;	
});

recognition.addEventListener('end', recognition.start);

recognition.start();
</script>
</html>
>>>>>>> c96052019e275e87e5f023a667bd2e99f461494b
