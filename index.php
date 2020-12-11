<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="pl">
  <meta name="author" content="original:design:and:valid:code::kya::2004::hahaha">
  <meta name="copyright" content="Kaja 'kya' Mikoszewska">
  <meta name="generator" content="vim">
  <meta name="Description" content="rot13">
  <meta name="Keywords" content="rot13 rot-13 online decode code">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>rot13</title>
</head>
<body>
<pre>
`---.-------.
    | ROT13 |
    '-----.-'------.----------------------------------------------.
          |        | to prosty szyfr przesuwający litery          |
          |        | alfabetu łacińskiego o 13 znaków do przodu.  |
          |        `----------------------------------------------'
          |
.---------^--------------------------.
| Daj, ać ja pobruszę, a ty poczywaj |
`------------------------------------'
</pre>
<? $tresc = @$_POST[tresc]; $tresc = preg_replace("/[\n\r]*$/","", $tresc); ?>
<form method="post" action="index.php">
<div><textarea cols="62" rows="3" name="tresc"></textarea>
<br>
<input type="submit" value="brusz"></div>
</form>
<pre>
<? if (strlen($tresc)>0): ?>
---^-------
<span class="d"><? echo htmlspecialchars($tresc); ?></span>
---.-------
   |
---^-------
<span class="m"><? echo htmlspecialchars(str_rot13($tresc)); ?></span>
.----------
|
<? endif; ?>
`---.-------------------------------.------------------------------
    | &copy; <a href="http://evil.pl/kya/">Kaja 'kya' Mikoszewska</a> 2004 |
    `-------------------------------'
</pre>
</body>
</html>
