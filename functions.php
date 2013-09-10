<?php

function sql($req){

		$q=mysql_query($req); // envoi de la requête
		$res="";
		if (mysql_num_rows( $q) ==0) $res = "0";
		else
		{
		while ($r = mysql_fetch_array($q)) 
		{
		$cl="na";
		if ( filter_var($r[5], FILTER_VALIDATE_INT) and strlen($r[5])==8 ) {$cl="tel";}
		if ( filter_var($r[5], FILTER_VALIDATE_EMAIL) ) {$cl="email";}
		if ( filter_var($r[5], FILTER_VALIDATE_URL) and strrpos($r[5], "facebook.com/")>0 ) {
		$cl="fb";
		$r[5]= "<a href='$r[5]' target='_tab'>$r[1] $r[2]</a>";
		}	

		$res.="<tr>";
		$res.="<td>$r[1]</td>";
		$res.="<td>$r[2]</td>";
		$res.="<td>$r[3]</td>";
		$res.="<td>$r[4]</td>";
		$res.="<td class=\"".$cl."\">".$r[5]."</td>";
		$res.="</tr>";
		
		}
		}	
		echo $res;	

		}

function sec($in){

			$in = mysql_real_escape_string($in);
			$in = addcslashes($in, '%_');
			$in=trim($in);
			$in=strip_tags($in);	
			return $in;
}


?>
