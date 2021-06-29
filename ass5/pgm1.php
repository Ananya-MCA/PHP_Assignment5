<?php
  $file = fopen("data.txt", "r");  
  $cont=readfile("data.txt");
  echo "<br>";
  $str=file_get_contents("data.txt");
  $v=0;
  $c=0;
  $d=0;
  $s=0;
$str=strtolower($str);
for($i=0; $i<strlen($str); $i++)
{
  if($str[$i]=='a' || $str[$i]=='e' || $str[$i]=='i' || $str[$i]=='o' || $str[$i]=='u')
{
  $v++;
  }
  else if (
    $str[$i]>='a' && $str[$i]<='z')
    {
  $c++;
}
    else if (
      $str[$i]>='0' && $str[$i]<='9')
      {
  $d++;
}
else
{
  $s++;
}
}
$line=count(file("data.txt"));
echo "number of lines:",$line;
echo "<br>";
echo "number of words:",str_word_count($str);
echo "<br>";
echo "number of characters:",mb_strlen($str);
echo "<br>";
echo "number of vowels:".$v;
echo "<br>";
echo "number of consonant:".$c;
echo "<br>";
echo "number of digits:".$d;
echo "<br>";
echo "number of special characters:",$s-$d-1;
echo "<br>";
$data=filesize("data.txt");
echo "size of the file is:".$data;
fclose($file);
?>