<?php
function hex_encode ($str)
{
$encoded = bin2hex($str);
$encoded = chunk_split($encoded, 2, '%');
$encoded = '%'.substr($encoded, 0, strlen($encoded) - 1);
return $encoded;
}
?>

<a href="mailto:
<?php
echo hex_encode("sbrunet@leserveur.com"); ?>">
<span style="unicode-bidi:bidi-override; direction: rtl;">
    <?php echo strrev('sbrunet@leserveur.com') ;?>
</span>
</a>
