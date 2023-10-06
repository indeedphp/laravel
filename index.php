<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Автоэ</title>
    <style>
img {
  margin-top: 36%;
  animation-duration: 10s;
  animation-name: slidein;
  margin-left: 10%;
}


body {
  background-image: url('3.jpg');
}

@keyframes slidein {
  from {
    margin-left: 150%;

  }

  to {
    margin-left: 10%;

  }
}


#raz {
  position: relative;
  display: inline-block;
}
#raz a {
  position: absolute;
  border: 1px solid rgba(255,255,255,.5);
}
#raz a:nth-of-type(1) {
  left: 10%;
  top: 17%;
  width: 22%;
  height: 20%;
}
#raz a:nth-of-type(2) {
  left: 37%;
  top: 26%;
  width: 22%;
  height: 20%;
  border-radius: 100px / 20px 20px 60px 60px;
  transform: rotate(-12deg);
}
#raz a:nth-of-type(3) {
  left: 58%;
  top: 18%;
  width: 25%;
  height: 18%;
  border-radius: 100%;
}
#raz a:hover {
  background: rgba(255,255,255,.3);
}
</style>

</head>
<body>

<img src="1.png"   alt="lorem"><br>




<!-- <span id="raz">
  <img src="333.png" alt="медвежата у реки"> -->

</span>
</body>
</html>

