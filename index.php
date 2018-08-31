<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo '<body style="font-size: 12px; font-family: Apple Chancery; text-align: center;">';
$i = 0;
while ($i < 150) {
  $return = file_get_contents('https://api.forismatic.com/api/1.0/?method=getQuote&lang=en&format=jsonp&jsonp=?');
  $return = trim($return, '?');
  $return = trim($return, ')');
  $return = trim($return, '(');
  $return = json_decode($return);
  $quote = $return->quoteText;
  $author = $return->quoteAuthor;
  echo '<p style="page-break-before: always">Date: ___/___/20___</p>';
  echo "<p>".$quote."<br><strong>".$author."</strong></p>";
  echo '<p>I am grateful for...</p>';
  echo '<p>1. _____________________________________________________________</p>';
  echo '<p>2. _____________________________________________________________</p>';
  echo '<p>3. _____________________________________________________________</p>';
  echo '<p>What would make today great?</p>';
  echo '<p>1. _____________________________________________________________</p>';
  echo '<p>2. _____________________________________________________________</p>';
  echo '<p>3. _____________________________________________________________</p>';
  echo '<p>Daily affirmations. I am...</p>';
  echo '<p>________________________________________________________________</p>';
  echo '<p>________________________________________________________________</p>';
  echo '<hr>';
  echo '<p>3 Amazing things that happened today...</p>';
  echo '<p>1. _____________________________________________________________</p>';
  echo '<p>2. _____________________________________________________________</p>';
  echo '<p>3. _____________________________________________________________</p>';
  echo '<p>How could I have made today better?</p>';
  echo '<p>________________________________________________________________</p>';
  echo '<p>________________________________________________________________</p>';
  sleep(3);
  $i++;
}
echo "</body>";
echo "</html>";
?>