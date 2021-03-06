<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="generator" content="Google Web Designer 5.0.4.0226">
  <link href="gwdpage_style.css" rel="stylesheet" data-version="12" data-exports-type="gwd-page">
  <link href="gwdimage_style.css" rel="stylesheet" data-version="12" data-exports-type="gwd-image">
  <style type="text/css" id="gwd-text-style">
    p {
      margin: 0px;
    }
    h1 {
      margin: 0px;
    }
    h2 {
      margin: 0px;
    }
    h3 {
      margin: 0px;
    }
  </style>
  <style type="text/css">
    html, body {
      width: 100%;
      height: 100%;
      margin: 0px;
    }
    body {
      background-color: transparent;
      transform: perspective(1400px) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
      transform-style: preserve-3d;
    }
    .gwd-label-enpy {
      position: absolute;
      text-align: center;
      transform-origin: 152px 17.5px 0px;
      font-size: 28px;
      height: 5.2%;
      width: 100%;
      left: 0%;
      top: 8.45%;
    }
    .gwd-input-fm9l {
      position: absolute;
      width: 40%;
      left: 30%;
      height: 6%;
      top: 23.2%;
    }
    .gwd-input-15cq {
      position: absolute;
      width: 40%;
      left: 29.84%;
      visibility: visible;
      border-style: inset;
      height: 6%;
      top: 37.2%;
    }
    .gwd-button-cwdr {
      position: absolute;
      width: 30%;
      height: 11%;
      left: 35.03%;
      background-image: none;
      background-color: rgb(27, 153, 139);
      font-family: "Times New Roman";
      font-weight: bold;
      font-size: 18px;
      color: rgb(248, 241, 255);
      top: 46.65%;
    }
    .gwd-label-1wph {
      position: absolute;
      width: 10.18%;
      height: 2.97%;
      text-align: center;
      left: 44.91%;
      top: 59.65%;
    }
    .gwd-imagebutton-emkn {
      position: absolute;
      height: 8%;
      width: 100%;
      left: 0%;
      top: 64.65%;
    }
    .gwd-label-n6z8 {
      position: absolute;
      height: 2.97%;
      left: 30%;
      width: 40%;
      top: 19.2%;
    }
    .gwd-label-13i9 {
      position: absolute;
      left: 30%;
      height: 2.97%;
      width: 40%;
      top: 33.2%;
    }
    .gwd-label-1qmg {
      position: absolute;
      height: 2.97%;
      width: 100%;
      left: 0%;
      text-align: center;
      top: 77.16%;
    }
  </style>
  <script data-source="googbase_min.js" data-version="4" data-exports-type="googbase" src="googbase_min.js"></script>
  <script data-source="gwd_webcomponents_min.js" data-version="6" data-exports-type="gwd_webcomponents" src="gwd_webcomponents_min.js"></script>
  <script data-source="gwdpage_min.js" data-version="12" data-exports-type="gwd-page" src="gwdpage_min.js"></script>
  <script data-source="gwdimage_min.js" data-version="12" data-exports-type="gwd-image" src="gwdimage_min.js"></script>
  <script data-source="gwdimagebutton_min.js" data-version="11" data-exports-type="gwd-imagebutton" src="gwdimagebutton_min.js"></script>
</head>

<body class="htmlNoPages">
  <label id="label_1" class="gwd-label-enpy text-tool-feedback">Σύνδεση με την εφαρμογή</label>
  <form  name="" action="login_elderly.php" method="POST">
    <input type="text" name="user" id="username_text" class="gwd-input-fm9l" required>
    <input type="password" name="pass" id="password_text" class="gwd-input-15cq text-tool-feedback" required>
    <input type="submit" name="log_user" value="Είσοδος" class="gwd-button-cwdr text-tool-feedback"/>
</form>
  <label id="label_2" class="gwd-label-1wph text-tool-feedback">ή</label>
  <gwd-imagebutton id="facebook_imagebutton" up-image="http://axiotidis.com:8085/pictures/facebook_login.png" over-image="http://axiotidis.com:8085/pictures/facebook_login.png" down-image="http://axiotidis.com:8085/pictures/facebook_login.png" scaling="auto" class="gwd-imagebutton-emkn" data-gwd-name="facebook"></gwd-imagebutton>
  <label id="label_3" class="gwd-label-n6z8 text-tool-feedback">Όνομα χρήστη</label>
  <label id="label_4" class="gwd-label-13i9 text-tool-feedback">Κωδικός</label>
  <label id="label_5" class="gwd-label-1qmg text-tool-feedback">Ξέχασα τον κωδικό μου</label>
</body>

</html>