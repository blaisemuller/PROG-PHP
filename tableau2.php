<!DOCTYPE HTML>
<HTML>
<HEAD>
      <TITLE>Utilisation des tableaux-1</TITLE>
</HEAD>
 <BODY>
 	<UL>
          <?php
          	$links=file("tableau-06.txt");

          	for ($i=0;$i<count($links);$i++) {
            	echo "<LI><A HREF=\"".$liens[$i]."\">".$links[$i]."</A>\n";
          	}
          ?>
    </UL>
</BODY>
</HTML>