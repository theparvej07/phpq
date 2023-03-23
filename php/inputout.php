<?php
print "enter lenth:";
fscanf(STDIN,"%d",$a);
echo "enter breadth:";
fscanf(STDIN, "%d",$b);
$c=$a*$b;
fprintf(STDOUT,"area=%d",$c);
?>