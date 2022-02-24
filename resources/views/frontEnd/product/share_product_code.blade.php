<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Share Product</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: rgb(219, 219, 219);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    h1 {
      font-size: 2.7vw;
    }

    h2 {
      font-size: 1.7vw;
      margin-top: 15px;
    }

    a {
      margin-top: 15px;
      font-size: 25px;
      text-decoration: none;
      color:#323669;
    }
    a:hover{
        color:black;
        text-decoration: underline;
    }

  </style>
</head>

<body>
  <h1>Share the code below</h1>
  <h2 id="gen_url" onclick="copyToClipboard()">{{ $gen_url }}</h2>
  <a href="{{ URL::previous() }}">Go Back</a>
</body>
	<script>
	function copyToClipboard(text) {
var inputc = document.body.appendChild(document.createElement("input"));
inputc.value = document.getElementById("gen_url").innerText;
inputc.focus();
inputc.select();
document.execCommand('copy');
inputc.parentNode.removeChild(inputc);
alert("Copied to Clipboard);
}
	</script>
</html>
