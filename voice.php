<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web Voice</title>
</head>
<body>
	<div id="box">
		<p id="message"></p>
	</div>
</body>
<script type="text/javascript">
	
	var msg = document.getElementById('message');
	window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

	var recognition = new SpeechRecognition();
	recognition.interimResults = true;
	recognition.lang = 'en-Us';

	recognition.addEventListeners('result', e => [console.log(e)]);

</script>
</html>