
hello

<?
require_once('magpierss/rss_fetch.inc');
// https://www.facebook.com/pages/Marketplace-Optimization/222212764502232
// http://www.facebook.com/feeds/page.php?id=222212764502232&format=rss20
$rss = fetch_rss("http://www.facebook.com/feeds/page.php?id=222212764502232&format=rss20");
?>

<html
<body LINK="#999999" VLINK="#000000">

<form>
<input type="text" name="rss_url" size="40" value="<?php echo $url ?>"><input type="Submit">
</form>

<?php

echo slashbox($rss);

//echo "<pre>";
//print_r($rss);
//echo "</pre>";
?>

</body>
</html>

<?php

# just some quick and ugly php to generate html
#
#
function slashbox ($rss) {
   echo "<table cellpadding=2 cellspacing=0><tr>";
   echo "<td bgcolor=#006666>";

   # get the channel title and link properties off of the rss object
   #
   $title = $rss->channel['title'];
   $link = $rss->channel['link'];

   echo "<a href=$link><font color=#FFFFFF><b>$title</b></font></a>";
   echo "</td></tr>";

   # foreach over each item in the array.
   # displaying simple links
   #
   # we could be doing all sorts of neat things with the dublin core
   # info, or the event info, or what not, but keeping it simple for now.
   #
   foreach ($rss->items as $item ) {
      echo "<tr><td bgcolor=#cccccc>";
      echo "<a href=$item[link]>";
      echo $item['title'];
      echo "</a></td></tr>";
   }

   echo "</table>";
}

?>


goodbye