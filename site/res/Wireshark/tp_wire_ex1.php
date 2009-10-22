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

<p>Le but de l'exercice est d'observer ce qu'il se passe lorsqu'on se connecte à http://www.wireshark.fr</p>
<p>Une fois mis à l'écoute et une fois connecter à http://www.wireshark.fr, Wireshark affiche les trames que la
carte résaux à envoyé et recu. Pour écouter d'avoir trop de trame on filtre pour n'avoir que les trames tcp.</p>
<p>Pour obtenir l'adresse ip/mac source/destination, on clic sur la première trame, puis dans la zone en dessous
on apercoit les différents protocoles que le trame encapsule. Comme il n'y a que les trames tcp d'afficher
les protocoles sont Ethernet -> IP -> TCP. Chaque protocole est détaillé, grâce au protocole Ethernet on peut 
obtenir les adresses mac source/destination : <code>@mac source = 00:13:20:08:c5, @mac destination = 00:04:75:d6:b4:98
</code>. Dans le protocole IP on peut voir les adresse IP : <code>@ip source 192.0.3.115, ip destination = 67.228.110.120
</code>. Avec le protocole TCP on remarque que le port de destination est le port 80 (HTTP) et le port source 1554
(attribuer par le système d'éxploitation).</p>

<p>
Le 3 ways handshake de synchronisation apparait dans wireshark ce sont les premières trames qui sont analysée <br>
Ci-dessous le 3 ways handshake quand on se connecte à http://www.wireshark.fr.<br>
<code>	1	0.000000	192.168.1.3	67.228.110.120	TCP	1154 > http [SYN] Seq=0 Win=8192 Len=0 MSS=1460
	2	0.204754	67.228.110.120	192.168.1.3	TCP	http > 1154 [SYN, ACK] Seq=0 Ack=1 Win=5840 Len=0 MSS=1412
	3	0.204864	192.168.1.3	67.228.110.120	TCP	1554 > http [ACK] Seq=1 Ack=1 Win=64952 Len=0</code><br>
	Le numéro de séquence commence à, mais ce n'est pas le vrai numéro de séquence car étant le début de la
	connexion wireshark donne comme numéro de séquence 0.</p>

<p>
Nous venons de voir les trames de connections, voyons maintenant une capture de trame pendant un echange de donnée.<br>
<code>37	1.118515	67.228.110.120	192.168.1.3	TCP	http > 1154 [ACK] Seq=1 Ack=507 Win=6432 Len=0
39	1.126524	67.228.110.120	192.168.1.3	TCP	[TCP segment of a reassembled PDU]
40	1.127514	67.228.110.120	192.168.1.3	TCP	[TCP segment of a reassembled PDU]
41	1.127557	192.168.1.3	67.228.110.120	TCP	1154 > http [ACK] Seq=507 Ack=2825 Win=64952 Len=0</code><br>
On voit que le numéro d'acquittement diffère de 2824. Si on annalyse les trames 39 et 40 avec wireshark on remarque 
qu'elle font 1412 octets chacune. Ces 1412 octets sont des données si on regarde le segment de donnée de la trame 
39 on voit : </p>

<table width="100%">
<div class="bloc">
<div class="code">
<code>
0000   48 54 54 50 2f 31 2e 31 20 32 30 30 20 4f 4b 0d  HTTP/1.1 200 OK.
0010   0a 44 61 74 65 3a 20 54 68 75 2c 20 32 32 20 4f  .Date: Thu, 22 O
0020   63 74 20 32 30 30 39 20 31 37 3a 34 32 3a 32 30  ct 2009 17:42:20
0030   20 47 4d 54 0d 0a 53 65 72 76 65 72 3a 20 41 70   GMT..Server: Ap
0040   61 63 68 65 0d 0a 4c 61 73 74 2d 4d 6f 64 69 66  ache..Last-Modif
0050   69 65 64 3a 20 57 65 64 2c 20 32 31 20 4f 63 74  ied: Wed, 21 Oct
0060   20 32 30 30 39 20 31 35 3a 35 39 3a 33 32 20 47   2009 15:59:32 G
0070   4d 54 0d 0a 45 54 61 67 3a 20 22 34 62 36 32 30  MT..ETag: "4b620
0080   2d 64 64 65 35 2d 34 37 36 37 34 31 30 38 30 63  -dde5-476741080c
0090   31 30 30 22 2d 67 7a 69 70 0d 0a 41 63 63 65 70  100"-gzip..Accep
00a0   74 2d 52 61 6e 67 65 73 3a 20 62 79 74 65 73 0d  t-Ranges: bytes.
00b0   0a 43 61 63 68 65 2d 43 6f 6e 74 72 6f 6c 3a 20  .Cache-Control: 
00c0   6d 61 78 2d 61 67 65 3d 31 38 30 30 0d 0a 45 78  max-age=1800..Ex
00d0   70 69 72 65 73 3a 20 54 68 75 2c 20 32 32 20 4f  pires: Thu, 22 O
00e0   63 74 20 32 30 30 39 20 31 38 3a 31 32 3a 32 30  ct 2009 18:12:20
00f0   20 47 4d 54 0d 0a 56 61 72 79 3a 20 41 63 63 65   GMT..Vary: Acce
0100   70 74 2d 45 6e 63 6f 64 69 6e 67 0d 0a 43 6f 6e  pt-Encoding..Con
0110   74 65 6e 74 2d 45 6e 63 6f 64 69 6e 67 3a 20 67  tent-Encoding: g
0120   7a 69 70 0d 0a 58 2d 53 6c 6f 67 61 6e 3a 20 53  zip..X-Slogan: S
0130   6e 69 66 66 20 66 72 65 65 20 6f 72 20 64 69 65  niff free or die
0140   2e 0d 0a 43 6f 6e 74 65 6e 74 2d 4c 65 6e 67 74  ...Content-Lengt
0150   68 3a 20 31 39 34 37 39 0d 0a 4b 65 65 70 2d 41  h: 19479..Keep-A
0160   6c 69 76 65 3a 20 74 69 6d 65 6f 75 74 3d 31 35  live: timeout=15
0170   2c 20 6d 61 78 3d 31 30 30 0d 0a 43 6f 6e 6e 65  , max=100..Conne
0180   63 74 69 6f 6e 3a 20 4b 65 65 70 2d 41 6c 69 76  ction: Keep-Aliv
0190   65 0d 0a 43 6f 6e 74 65 6e 74 2d 54 79 70 65 3a  e..Content-Type:
01a0   20 61 70 70 6c 69 63 61 74 69 6f 6e 2f 78 2d 6a   application/x-j
01b0   61 76 61 73 63 72 69 70 74 0d 0a 0d 0a 1f 8b 08  avascript.......
01c0   00 00 00 00 00 00 03 e5 bd 6b 77 da c8 b6 28 fa  .........kw...(.
01d0   fd fe 0a 5b ab 37 2d 85 32 e0 f4 5a e7 9e 2d 45  ...[.7-.2..Z..-E
01e0   61 a4 13 de 7e 24 31 f8 85 c9 3a 32 c8 36 dd 18  a...~$1...:2.6..
01f0   b1 00 c7 49 03 fb b7 df f9 a8 2a 55 09 e1 64 ed  ...I......*U..d.
0200   71 ce 1d 77 8c 9b d1 6d a4 52 bd 6b d6 7c d7 ac  q..w...m.R.k.|..
0210   ff cb bd 7b 9a 0e 97 e3 64 ea 7a ab af d1 7c 6f  ...{....d.z...|o
0220   12 2e 1f c6 0b 71 2f be 87 93 d2 1f 9f 9e e2 f9  .....q/.........
0230   77 31 83 c7 5f 44 a2 13 f0 35 d4 e5 6a a2 ee ad  w1.._D...5..j...
0240   e6 f1 f2 69 3e dd 9b c6 cf 7b 49 e9 6e 5a 1a 4f  ...i>....{I.nZ.O
0250   c7 4b fa b2 11 1f c2 f2 97 fe 97 37 83 57 ee 1b  .K.........7.W..
0260   b7 b4 be 59 78 c5 b7 5e ff cb db c1 ab 5f d6 5f  ...Yx..^....._._
0270   fe e6 f6 6f 9e 0f 06 45 ef 97 b2 b8 83 7c a5 fe  ...o...E.....|..
0280   17 ff 6f 37 fd 9b 92 80 cf e5 00 ab 0a 93 d2 6c  ..o7...........l
0290   9e 2c 93 e5 f7 59 1c ae b0 5e df 68 ba e9 ad 6a  .,...Y...^.h...j
02a0   61 6d bd 1e 25 c3 a7 c7 78 ba 0c c6 77 6e ad 34  am..%...x...wn.4
02b0   4d 46 71 17 f2 7b 2b 1c 4c bf 32 08 6b 01 3e 95  MFq..{+.L.2.k.>.
02c0   26 f1 f4 7e f9 10 1e f2 db 30 99 2e e3 6f 4b f8  &..~.....0...oK.
02d0   28 bb 8f a9 1b a8 01 db 4a ee f6 6a 61 18 3a 8b  (.......J..ja.:.
02e0   e5 7c 3c bd 77 78 76 1a e1 87 52 fc 2d 1e ba 35  .|<.wxv...R.-..5
02f0   0f 5b 6a 14 0a 6e a3 7f 38 58 af f7 9b 9e b7 c2  .[j..n..8X......
0300   14 78 c3 2e 25 a5 e1 24 8e a6 6e 1f 13 06 d0 cd  .x..%..$..n.....
0310   4d 3c 59 c4 54 47 2b 54 9d 2d dd c7 cb da 24 c6  M<Y.TG+T.-....$.
0320   c7 df bf b7 46 50 f8 b7 01 d5 db 2a 14 5a a5 f1  ....FP.....*.Z..
0330   68 3f a4 14 35 b9 89 eb 95 ee c6 d3 11 34 be c1  h?..5........4..
0340   8a ea 61 e2 b6 d6 eb 3e 94 a9 eb b1 e8 89 a8 97  ..a....>........
0350   16 f1 24 1e 2e 93 79 3a be fa 86 bb a1 2b 6c a6  ..$...y:.....+l.
0360   35 f2 17 68 3c 29 8d 17 75 3d c3 9e d1 bc aa db  5..h<)..u=......
0370   2b cd e3 68 f4 9d 4a d1 7c ab 96 0a 85 9a ea 08  +..h..J.|.......
0380   4f bd d1 07 fd 98 99 7b f5 b4 31 d6 00 f2 2e df  O......{..1.....
0390   cd e7 d1 77 ea 0c 3f d5 bc 6a cd 4f 4a 8f d1 9f  ...w..?..j.OJ...
03a0   b1 4a 00 e0 52 95 fa 8e 23 fe f8 17 02 a7 ef 1c  .J..R...#.......
03b0   96 7e 2b bd 76 c4 62 fc 57 ec 1b d0 6d d6 cf 70  .~+.v.b.W...m..p
03c0   b0 11 b0 00 06 34 e9 3c b8 f0 f7 55 6a 26 05 be  .....4.<...Uj&..
03d0   d2 62 32 1e c6 a5 61 34 99 b8 58 89 e7 13 70 d5  .b2...a4..X...p.
03e0   06 1b 31 7b 5a 3c 9c 2d a3 e1 9f 69 65 75 d1 14  ..1{Z<.-...ieu..
03f0   35 05 34 89 5b f7 82 06 54 15 7f 3d bd fd 03 3a  5.4.[...T..=...:
0400   4c 9b 0c 52 d4 2c 98 53 82 00 d0 44 c8 c3 95 01  L..R.,.S...D....
0410   b8 6b a4 93 68 4d 69 d1 b5 5e ab ce 9e 03 b3 e0  .k..hMi..^......
0420   15 6b 7a 25 9b 2f 14 76 4a 4e b1 59 74 5c a7 58  .kz%./.vJN.Yt\.X
0430   2b 3a 9e b3 51 d3 df c0 39 e5 c9 b7 66 c6 dc 3e  +:..Q...9...f..>
0440   95 20 3b 35 38 01 a5 68 36 9b 7c a7 4e c1 c8 ad  . ;58..h6.|.N...
0450   2d 25 e2 68 f8 60 ce 4d 3a d5 49 09 bf 71 29 4c  -%.h.`.M:.I..q)L
0460   df 08 18 75 fc 2d 6f 55 00 16 a6 72 e9 11 d0 78  ...u.-oU...r...x
0470   b9 ab 35 d8 de 7e 4d d0 8a 6c 44 b4 5c ce ed 45  ..5..~M..lD.\..E
0480   68 f0 22 d4 c2 7a 90 ee ec ba b5 b3 e5 84 df 5b  h."..z.........[
0490   30 02 d5 16 0a 49 bf b1 5e 3b 58 a9 33 70 65 2a  0....I..^;X.3pe*
04a0   22 35 9a e1 5a b8 da 04 b5 7e 7d 10 36 37 16 f4  "5..Z....~}.67..
04b0   d2 88 74 27 5a de ea 2e 99 bb f5 bd 31 00 96 b7  ..t'Z.......1...
04c0   4a 4a 58 9d db a8 f2 7a 2c bf 4f 62 5f 8e 9e 30  JJX....z,.Ob_..0
04d0   dd 4c ce 20 d4 2b 1a a2 05 ad c1 2e 83 91 0d 17  .L. .+..........
04e0   0b df c6 b9 d0 6d 17 20 d5 79 1e 8f 96 0f ce 7a  .....m. .y.....z
04f0   8d cf 0f f1 f8 fe 61 e9 78 85 c2 2c 9a 2f e2 fa  ......a.x..,./..
0500   24 89 96 00 7c 6f 2a de aa 1e de 5b bd a4 6e 40  $...|o*....[..n@
0510   45 c2 19 3e cd df 9f 9d 39 d0 08 c2 9f 31 7d d4  E..>....9....1}.
0520   86 9a b2 7d a8 3e 21 e8 75 0a 05 78 9b 3e 4d 26  ...}.>!.u..x.>M&
0530   f6 ae 8a 1f 67 cb ef 80 a4 00 10 62 40 2a ae 9e  ....g......b@*..
0540   46 f9 50 4a 9e a7 f1 fc 83 c4 22 29 d2 f6 4a 43  F.PJ......")..JC
0550   40 28 cb b8 0b ad 9f 00 ea 76 71 cc bc 68 8e 13  @(.......vq..h..
0560   48 08 a9 af d7 34 31 c6 8e 36 60 a7 34 7c 18 4f  H....41..6`.4|.O
0570   46 58 d8 ca 81 dd c7 af 8a 20 ec 87 ff 13 b0 73  FX....... .....s
0580   31 cc 24 1e                                      1.$.
</code>

</div>
</div></table>

<p>Les premières données que l'on obtients sont le resultat d'une requète HTTP. Comme les trames que l'on récupère
sont celles d'une connection HTTP si l'on analyse une trame HTTP on y trouvera le code HTML de la page.</p>

<p>Voyons maintenant un échange de trames pour une fermeture : <br>
<code>
50	30.432588	67.228.110.120	192.168.1.3	TCP	http > 1154 [FIN, ACK] Seq=3318 Ack=411 Win=6432 Len=0
51	30.434705	192.168.1.3	67.228.110.120	TCP	1154 > http [ACK] Seq=411 Ack=3319 Win=64459 Len=0
52	30.435565	192.168.1.3	67.228.110.120	TCP	1154 > http [FIN, ACK] Seq=411 Ack=3319 Win=64459 Len=0
53	30.435582	67.228.110.120	192.168.1.3	TCP	http > 1154 [ACK] Seq=3319 Ack=412 Win=6432 Len=0
</code>

</p>

<p>En plus de la capture des trames Wireshark analyse en détail chaque trame et chaque protocole. Pour la trame 
<code>2	0.038966	213.186.33.4	192.168.1.3	TCP	http > 63110 [SYN, ACK] Seq=0 Ack=1 Win=5840 Len=0 MSS=1412
</code> on peut faire l'analyse suivante</p>

<div class="bloc">
<div class="code">
Code héxadécimal : <br>
<code>0000   00 1e 90 3c b5 45 00 1c a2 d6 c4 54 08 00 45 00  ...<.E.....T..E.
0010   00 30 00 00 40 00 39 06 89 5e d5 ba 21 04 c0 a8  .0..@.9..^..!...
0020   01 03 00 50 f6 86 52 47 81 ed ea 16 5f 87 70 12  ...P..RG...._.p.
0030   16 d0 9f 5b 00 00 02 04 05 84 01 01 04 02        ...[..........
</code>
</div>

<div class="apercu">
<code>Analyse détaillé : 

Transmission Control Protocol, Src Port: http (80), Dst Port: 63110 (63110), Seq: 0, Ack: 1, Len: 0
Source port: http (80)
Destination port: 63110 (63110)
Stream index: 0
Sequence number: 0    (relative sequence number)
Acknowledgement number: 1    (relative ack number)
Header length: 28 bytes
0... .... = Congestion Window Reduced (CWR): Not set
.0.. .... = ECN-Echo: Not set
..0. .... = Urgent: Not set
...1 .... = Acknowledgement: Set
.... 0... = Push: Not set
.... .0.. = Reset: Not set
.... ..1. = Syn: Set
.... ...0 = Fin: Not set
Window size: 5840
Checksum: 0x9f5b [validation disabled]
Options: (8 bytes)
SEQ/ACK analysis
</code>
</div></div>
 

</div>

</body>
