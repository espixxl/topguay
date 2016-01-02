<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
	$idioma = "ca";
    if(isset($_GET['idioma'])) {
        $idioma = $_GET['idioma'];
    }
	
	$nid = 0;
    if(isset($_GET['nid'])) {
        $nid = $_GET['nid'];
    }
	
	include('head.php'); 
?>
<body>
<div id="fb-root"></div>

		
        <table width="980" cellpadding="0" cellspacing="0" align="center">
        <tr>
        	<td colspan="2" class="pagina" valign="top" height="330">
            
            	<table width="100%"  height="330" cellpadding="0" cellspacing="0">
                <tr>
                	
                	<td valign="top">
                        <table width="100%" cellpadding="0" cellspacing="0">
                           <tr>
                            <td align="center">
                            
                                <table width="928" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="layoutTopLeftFar" height="15" width="14"><img src="images/spacer.gif" width="14" height="1" /></td>
                                    <td class="layoutTopLeft" width="9"><img src="images/spacer.gif" width="1" height="15" /></td>
                                    <td class="layoutTop" width="850"><img src="images/spacer.gif" width="1" height="15" /></td>
                                    <td class="layoutTopRight" width="16"><img src="images/spacer.gif" width="1" height="15" /></td>
                                    <td class="layoutTopRightFar" width="12"><img src="images/spacer.gif" width="12" height="1" /></td>
                                </tr>
                                <tr>
                                    <td class="layoutLeftTop"><img src="images/spacer.gif" width="1" height="1"  /></td>
                                    <td><img src="images/layoutRedondeoLeft-trans.png" /></td>
                                    <td bgcolor="#FFFFFF" height="10"></td>
                                    <td><img src="images/layoutRedondeoRight-trans.png" /></td>
                                    <td class="layoutRightTop"><img src="images/spacer.gif" width="1" height="1"  /></td>
                                </tr>
                                <tr>
                                    <td class="layoutLeft"><img src="images/spacer.gif" width="1" height="1" /></td>
                                    <td bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1"  /></td>
                                    <td height="10" bgcolor="#FFFFFF">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="272" bgcolor="#f96b15" >
                                            
											
			<?php 
				include('flash_servei.php');
			 ?>	
                                                                                        
                                            
                                            
                                                                                                                                    
                                        </td>
                                        </tr>
                                       <tr> 
                                            <td height="5" bgcolor="#FFFFFF" class="idioma">
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td >
                                                <table width="100%" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="238" valign="top">													
			<?php
				if ($idioma === "ca") {
					include('menu.php');
				} else {					
					include('menu_es.php');
				}			
			?>	
<td valign="top" class="contenido" style="padding-right:20px;padding-left:10px;">
	
<!-- CONTENT -->
			<?php
				// ENVIO DE EMAIL
				@require_once("inc/mail.php");
				@require_once("inc/Smarty/Smarty.inc.php");
				
				if (isset($_POST["nombre"])) {
					if (!isset($_POST["informacion"]) || empty($_POST["informacion"]) ) { 
						$_POST["informacion"] = "no"; 
					}
					$smarty->assign("FORM", $_POST);
					
					$body = $smarty->fetch("contacteunos_email.tpl");
					$smarty->assign("INFORMACIONOK", "1");
					// $r = sendMail(MAIL_SUBJECT_CONTACTO, $body, "info@topguay.com");
					$r = sendMail(MAIL_SUBJECT_CONTACTO, $body, "topguay@topguay.com");					
				}
	
				if ($idioma === "ca") {
					include('coneixeunos_contacteunos_content.php');
				} else {
					include('coneixeunos_contacteunos_content_es.php');
				}			
			?>

<!-- CONTENT end -->
</td>
	</tr>
	
	</table>
	 <table width="100%" cellpadding="0" cellspacing="0">
<tr>
		<td colspan="3">
         <script language="javascript">
			if (AC_FL_RunContent == 0) {
				alert("Esta página requiere el archivo AC_RunActiveContent.js.");
			} else {
				AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0','width','883','height','175','id','cabezal','align','middle','src','cabezal','quality','high','bgcolor','#ffffff','name','cabezal','allowscriptaccess','sameDomain','allowfullscreen','false','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','bottom' ); //end AC code
			}
        </script>
		  <noscript>
		  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="883" height="175" id="prova_cap" align="middle">
			<param name="allowScriptAccess" value="sameDomain" />
			<param name="allowFullScreen" value="false" />
			<param name="movie" value="bottom.swf" />
			<param name="quality" value="high" />
			<param name="bgcolor" value="#ffffff" />
			<embed src="cabezal.swf" quality="high" bgcolor="#ffffff" width="883" height="175" name="cabezal" align="middle" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />                                              
			</object>
         </noscript>

         </noscript>

		</td>
			</tr>                                                
			</table>
		  </td>
	</tr>
<tr><td>

<br><br>											 
<div class="area-serveis">

</div>											 
											 
											 
											 </td></tr> 

                                        </table>
                                    
                                  </td>
                                    <td bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1" /></td>
                                    <td class="layoutRight"><img src="images/spacer.gif" width="1" height="1" /></td>
                                </tr>
                                <tr>
                                    <td class="layoutLeftBottom"><img src="images/spacer.gif" width="1" height="1"  /></td>
                                    <td><img src="images/layoutRedondeoBottomLeft-trans.png" /></td>
                                    <td bgcolor="#FFFFFF" height="10"></td>
                                    <td><img src="images/layoutRedondeoBottomRight-trans.png" /></td>
                                    <td class="layoutRightBottom"><img src="images/spacer.gif" width="1" height="1"  /></td>
                                </tr>
                                <tr>
                                    <td class="layoutBottomLeftFar" height="15" width="14"><img src="images/spacer.gif" width="14" height="1" /></td>
                                    <td class="layoutBottomLeft" width="9"><img src="images/spacer.gif" width="1" height="15" /></td>
                                    <td class="layoutBottom" width="850"><img src="images/spacer.gif" width="1" height="15" /></td>
                                    <td class="layoutBottomRight" width="16"><img src="images/spacer.gif" width="1" height="15" /></td>
                                    <td class="layoutBottomRightFar" width="12"><img src="images/spacer.gif" width="12" height="1" /></td>
                                </tr>
                                </table>
                                
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        </table>                    
                    
                    
						
                    </td>
                    
                </tr>
                </table>
            
            </td>
        </tr>
        </table>

<!-- AddThis Button END -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-4035154-8");
pageTracker._trackPageview();
</script>
</body>

</html>


