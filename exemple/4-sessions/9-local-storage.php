<html>
<head>
  <link href="style.css" rel="stylesheet" media="all">
  <meta name="author" content="Stephane Brunet" />
  <link rel="icon" type="image/svg+xml" href="php.svg">
  <meta charset="utf-8">
  <title>PHP-4-sessions</title>
</head>
<body>
<header>
    <div><h1>PHP-4-Session</h1></div>
    <nav>
        <a href="8-rendu.php">8 rendu </a>
        <a href="9-local-storage.php">9 local </a>
        <a href="10-token.php">10 token </a>
      
    </nav>

</header>
<article>

Local stockage<br />
  <input type="text" id="in" /><br />
  <button onclick="storage()">Local/session Storage</button>
  <br />
  Session :
  <div id="out"></div>
  Local :
  <div id="out2"></div>
</article>
<script>

 //<![CDATA[
function storage() {
  let key ="key";
  let valeur = document.querySelector("#in").value
  sessionStorage.setItem(key,valeur)
  localStorage.setItem(key,`${valeur} locale`)
  // restitution
  document.querySelector("#out").innerHTML = sessionStorage.getItem("key")
  document.querySelector("#out2").innerHTML = localStorage.getItem("key")
  valeur = document.querySelector("#in").value=""
}
</script>
</body>
</html>
