<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?
$str="";
$stan="";

readfile("hviezdicky.script"); 

//  $fp = fopen ("data/aktualne/.ht-udaje-aktual.csv","r"); while ($data = fgetcsv ($fp, 1000, ";")) $str.="$data[0]=$data[1]&"; parse_str($str); fclose($fp);      

    function heure(){return strftime("%d. %m. %Y -  %X");}
    function den_do($param) {return round((strtotime($param)+86400-time())/86400,2);}
    function mv_lastmod () {return date("D j-M-Y", getlastmod()); }

//  setcookie ("skms_last", strftime("%d. %m."),strtotime("8/31/2010")); 

//    $xx=fopen("data/diskusia/.ht-count","r");
//    $num=fread($xx, filesize ("data/diskusia/.ht-count"));
//    fclose($xx);

  //$nove= ($num != $skms_num);
  //setcookie ("skms_num", $num,strtotime("8/31/2002")); 



       $firstline="<!-- <div align=\"left\"> <a href=\"prihlaska.php\">  <font color=\"#FF33333\"><u><b> stanovacka </b></u> </font> od 15. 7. 2002 ... <a href=\"stanovacka.php\">viac info</a> " //"<a href=\"prihlaska.php\"><font color=\"#FF33333\"><u>prihlás sa!</u></font></a> - "

       ."prídu: $stan...</div>--><br><br>"
       .heure()."  "
//       ." <!--<a href=\"zadania.php\">kravièka</a> - -->este <b>"
//       .den_do($terser)
//       ."</b> dòa do termínu <a href=\"zadania.php\"> $akt_s. série</a> - "
//       ."$num príspevkov<BR> ";

//  if  ($nove) $firstline.= "<a href=\"diskusia.php\">nové</A>";
//  gethostbyaddr(getenv ("REMOTE_ADDR")); 
//  if ($skms_last!="") $firstline.= " - bolo si tu ".$skms_last."</td><td>&nbsp;";
//    if ($skms_zvyrazni!="") $firstline.= " - kde je <a href=\"poradie.php?r1=2001&r2=2002&sem=zimny&seria=1&zvyrazni=$skms_zvyrazni#kotva\">$skms_zvyrazni</a> ?</td> ";
?>

<html>
<head>
<title>Stredoslovensky korespondencny matematicky seminar</title>
<meta name="author" content="miso valko">
<meta name="keywords" content="skms, ska, tykoxo, kms, matematika, maths, seminar, school, skola, stredna skola, science, vzdelavanie, valko">
<meta name="description" content="skms, informacie, zadania, poradie, sustredenia, seminar, matematika">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<link rel="stylesheet" type="text/css" href="skms.css">
<!-- <script language=JavaScript src="sneh.js"></script> -->
<script language="JavaScript">
<!--


function MM_findObj(n, d) { //v3.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
   var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
   if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
-->
</script>

</head>
<body class="index" topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" bgcolor="#ffffff" onLoad="MM_preloadImages('slices/index_r1_c2_f2.gif','slices/index_r3_c1_f2.gif','slices/index_r5_c1_f2.gif','slices/index_r6_c1_f2.gif','slices/index_r7_c1_f2.gif','slices/index_r9_c1_f2.gif','slices/index_r10_c1_f2.gif','slices/index_r11_c1_f2.gif','slices/index_r13_c1_f2.gif','slices/index_r13_c4_f2.gif','slices/index_r13_c5_f2.gif');"> 
<div align="center"><span class="male"><? echo $firstline;?></span></div>
<center>
<!-- ------------------------ BEGIN COPYING THE HTML HERE ------------------------- --> 
<!-- Image with table -->
<table border="0" cellpadding="0" cellspacing="0" width="550">
<!-- fwtable fwsrc="skms.png" fwbase="index.gif" fwstyle="Dreamweaver" fwdocid = "988432936" fwnested="0"-->
  <tr>
   <td><img src="slices/spacer.gif" width="35" height="1" border="0" alt=""></td>
   <td><img src="slices/spacer.gif" width="98" height="1" border="0" alt=""></td>
   <td><img src="slices/spacer.gif" width="242" height="1" border="0" alt=""></td>
   <td><img src="slices/spacer.gif" width="89" height="1" border="0" alt=""></td>
   <td><img src="slices/spacer.gif" width="86" height="1" border="0" alt=""></td>
   <td><img src="slices/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>

  <tr>
   <td rowspan="2"><img name="index_r1_c1" src="slices/index_r1_c1.gif" width="35" height="117" border="0" alt=""></td>
   <td rowspan="2"><a href="#" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r1_c2','','slices/index_r1_c2_f2.gif',1);"><img name="index_r1_c2" src="slices/index_r1_c2.gif" width="98" height="117" border="0" alt=""></a></td>
   <td rowspan="12" colspan="3"><img name="index_r1_c3" src="slices/index_r1_c3.gif" width="417" height="270" border="0" usemap="#m_index_r1_c3" alt=""></td>
   <td><img src="slices/spacer.gif" width="1" height="106" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img src="slices/spacer.gif" width="1" height="11" border="0" alt=""></td>
  </tr>
  <tr>
   <td rowspan="2" colspan="2"><a href="http://kms.sk/skmsinformacie.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r3_c1','','slices/index_r3_c1_f2.gif',1);"><img name="index_r3_c1" src="slices/index_r3_c1.gif" width="133" height="20" border="0" alt="informacie"></a></td>
   <td><img src="slices/spacer.gif" width="1" height="10" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img src="slices/spacer.gif" width="1" height="10" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="2"><a href="http://kms.sk/skmsveduci.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r5_c1','','slices/index_r5_c1_f2.gif',1);"><img name="index_r5_c1" src="slices/index_r5_c1.gif" width="133" height="14" border="0" alt="veduci"></a></td>
   <td><img src="slices/spacer.gif" width="1" height="14" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="2"><a href="http://kms.sk/sustr_skms.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r6_c1','','slices/index_r6_c1_f2.gif',1);"><img name="index_r6_c1" src="slices/index_r6_c1.gif" width="133" height="17" border="0" alt="sustredenia"></a></td>
   <td><img src="slices/spacer.gif" width="1" height="17" border="0" alt=""></td>
  </tr>
  <tr>
   <td rowspan="2" colspan="2"><a href="http://kms.sk/skmsarchiv.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r7_c1','','slices/index_r7_c1_f2.gif',1);"><img name="index_r7_c1" src="slices/index_r7_c1.gif" width="133" height="20" border="0" alt="archiv"></a></td>
   <td><img src="slices/spacer.gif" width="1" height="12" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img src="slices/spacer.gif" width="1" height="8" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="2"><a href="http://kms.sk/portal.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r9_c1','','slices/index_r9_c1_f2.gif',1);"><img name="index_r9_c1" src="slices/index_r9_c1.gif" width="133" height="18" border="0" alt="portal"></a></td>
   <td><img src="slices/spacer.gif" width="1" height="18" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="2"><a href="http://kms.sk/stanovacka.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r10_c1','','slices/index_r10_c1_f2.gif',1);"><img name="index_r10_c1" src="slices/index_r10_c1.gif" width="133" height="17" border="0" alt="stanovacka"></a></td>
   <td><img src="slices/spacer.gif" width="1" height="17" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="2"><a href="http://kms.sk/skmsdiskusia.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r11_c1','','slices/index_r11_c1_f2.gif',1);"><img name="index_r11_c1" src="slices/index_r11_c1.gif" width="133" height="16" border="0" alt="diskusia"></a></td>
   <td><img src="slices/spacer.gif" width="1" height="16" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="2"><img name="index_r12_c1" src="slices/index_r12_c1.gif" width="133" height="31" border="0" alt=""></td>
   <td><img src="slices/spacer.gif" width="1" height="31" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="2"><a href="http://kms.sk" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r13_c1','','slices/index_r13_c1_f2.gif',1);"><img name="index_r13_c1" src="slices/index_r13_c1.gif" width="133" height="60" border="0" alt="kms"></a></td>
   <td><img name="index_r13_c3" src="slices/index_r13_c3.gif" width="242" height="60" border="0" alt=""></td>
   <td><a href="#" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r13_c4','','slices/index_r13_c4_f2.gif',1);"><img name="index_r13_c4" src="slices/index_r13_c4.gif" width="89" height="60" border="0" alt=""></a></td>
   <td><a href="#" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r13_c5','','slices/index_r13_c5_f2.gif',1);"><img name="index_r13_c5" src="slices/index_r13_c5.gif" width="86" height="60" border="0" alt=""></a></td>
   <td><img src="slices/spacer.gif" width="1" height="60" border="0" alt=""></td>
  </tr>
<map name="m_index_r1_c3">
<area shape="rect" coords="388,7,417,16" href="http://misiak.host.sk" title="miso valko" alt="miso valko" >
<area shape="rect" coords="400,24,417,106" href="http://seminar.host.sk" title="seminar.host.sk" alt="seminar.host.sk" >
</map>
</table>
  <span class="male"><!--------------------------- STOP COPYING THE HTML HERE ---------------------------> 
  </span>
</center>
<div align="center"><span class="male"> <a href="http://counters.dataintech.com/"><img align="right" src="http://counters.dataintech.com/counter.php?id=1398&login=skms" border="0"></a> 
<!--
  <font color="#339900">sponzori:</font>  <a href="http://www.nds.sk">NDS</a> - Hodina deom,-->
<!--  <a href="http://www.vnjh.sk.">VNJH</a>  - Hesp  - , <a href="http://www.science.upjs.sk/jsmf/">JSMF</a> 
  Žilina, <a href="http://www.uniba.sk/~kzdm/">KzDM</a> FMFI UK  <a href="http://www.osf.sk">OSF</a>  
   <font color="#339900"> novinky:</font>  <a href="http://skms.sk/sustredko.php?r=2001&t=let"><b>fotky</b></a><br> -->
  <!-- <a href="http://kms.sk"><font color="#ff3333">KMS</font></a> 
  ready for <a href="informacie.php">new term</a>? --> <? echo mv_lastmod(); ?> 
  <a href="mailto:valko...sturak.sk">webmaster</a></span></div>

<br /><br /><br /><br />

<center>
<script type="text/javascript"><!--
google_ad_client = "pub-6046067362701897";
google_ad_width = 728;
google_ad_height = 90;
google_ad_format = "728x90_as";
google_ad_type = "text_image";
google_ad_channel = "";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>


</center>

</body>
</html>
