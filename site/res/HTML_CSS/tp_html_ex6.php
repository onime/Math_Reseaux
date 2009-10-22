<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php
include("../../head.html");
include("../../menu.php");
?>

<body>
<div id="content">
<p>Le but de l'exercice est d'observer le protocole HTTP</p>

<div class="bloc">
<div class="code">
<code>
GET /index.html HTTP


</code>
 
</div>
<div class="apercu">

<code>
GET /index.html
&lt;html&gt;&lt;body&gt;&lt;h1&gt;It works!&lt;/h1&gt;&lt;/body&gt;&lt;/html&gt;
</code>

</div>
</div>
<br>
<p>On remarque que la commande renvoie la source du fichier HTML</p>

<div class="bloc">
<div class="code">
<code>
HEAD /index.html HTTP


</code>
 
</div>
<div class="apercu">

<code>

HTTP/1.1 200 OK<br>
Date: Tue, 20 Oct 2009 23:18:29 GMT<br>
Server: Apache/2.2.12 (Win32) DAV/2 mod_ssl/2.2.12 OpenSSL/0.9.8k mod_autoindex_color PHP/5.3.0 mod_perl/2.0.4 Perl/v5.10.0
<br>Last-Modified: Wed, 05 Aug 2009 22:00:00 GMT
ETag: "18000000029332-2c-4706c1fd9f800"<br>
Accept-Ranges: bytes<br>
Content-Length: 44<br>
Connection: close<br>
Content-Type: text/html<br>

</code>

</div>
</div>
<p>La commande renvoi une liste d'information sur le serveur et sur la connexion. </p>
<p>Voyons voir ce qui se passe si l'on demande une ressource inexistante sur le serveur</p>

<div class="bloc">
<div class="code">
<code>
HEAD /toto.html HTTP


</code>
 
</div>
<div class="apercu">

<code>

HTTP/1.1 404 Not Found<br>
Date: Tue, 20 Oct 2009 23:25:49 GMT<br>
Server: Apache/2.2.12 (Win32) DAV/2 mod_ssl/2.2.12 OpenSSL/0.9.8k mod_autoindex_color PHP/5.3.0 mod_perl/2.0.4 Perl/v5.10.0
<br>Vary: accept-language,accept-charset<br>
Accept-Ranges: bytes<br>
Connection: close<br>
Content-Type: text/html; charset=iso-8859-1<br>
Content-Language: en<br>
Expires: Tue, 20 Oct 2009 23:25:49 GMT<br>


</code>

</div>
</div>
<p>On remarque que la commande renvoie un code d'erreur 404, qui signifie que la ressource n'a pas été trouvé.</p>
</div>

</body>
