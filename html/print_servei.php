<?php
	require_once("resources/config.php");
	require_once("resources/library/db_functions.php");

	if(isset($_GET['nid'])) {
		$id = $_GET['nid'];
	}
	
	$nodeInfo = getNode($config['db'],$id);
	while ($row = mysql_fetch_array($nodeInfo)) {
?>
			
	
	<table width="95%" cellpadding="0" cellspacing="0">
    	<tr>
            <td>
            	<table width="100%" cellpadding="0" cellspacing="0">
                <tr>
        		    <td width="15"></td>
        	      	<td width="75" valign="top">
						<img src="images/new_logo.jpg" width="100"/> 
					</td>
					<td style="padding-top:5px;">
						<h2>
							<?php echo $row{'title'};?>
						</h2>
					</td> 
					
					<!--
                	<td valign="top" style="padding-top:20px;">
						<div style="font-size:30;color:#f66d15;text-align:left;line-height:1;font-weight:bold;">
							<?php //echo $row{'title'};?>
						</div>
					</td>
					-->
                    <td width="1" bgcolor="#ffdcb9"></td>
                    <td width="10"></td>
                    <td width="130" class="fichaTipo">
                    	<table cellpadding="0" cellspacing="0">
                        <tr>
							<?php 
								$tipus_espectacle = getTipusDeEspectacle($config['db'],$id,$idioma);
								if (!is_null($tipus_espectacle)) {
									echo "<td><img src='images/icos/tipus_espectacle.gif'/></td><td width='15'></td><td>".$tipus_espectacle."</td>";
								}
							?>						
                        </tr>
                        <tr>
                        	<td height="5"></td>
                        </tr>
                        <tr>
							<?php 
								$tipus_public = getTipusDePublic($config['db'],$id,$idioma);
								if (!is_null($tipus_public)) {
									echo "<td><img src='images/icos/public_recomanat.gif'/></td><td width='15'></td><td>".$tipus_public."</td>";
								}
							?>	
                        </tr>
                        <tr>
                        	<td height="5"></td>
                        </tr>
                        <tr>
							<?php 
								$duracio = getDuracio($config['db'],$id);
								if (!is_null($duracio)) {
									echo "<td><img src='images/icos/duracio.gif'/></td><td width='15'></td><td>".$duracio."</td>";
								}
							?>							
                        </tr>
                        </table>                    
					</td>
                </tr>
                <tr>
                	<td height="10" colspan="2"></td>
                </tr>
                </table>
          </td>
    	</tr>
        <tr>
			<!-- CONTENT -->
			<td class="texto_contenido">
			<br/>
				<p align="justify">				
					<?php 
						echo $row{'body_value'};
					?>
			</td>
    	</tr>
		
		
        <tr>
			<?php include('print_node_images.php'); ?>           	  
        </tr>
        <tr>
        	<td height="10"></td>
        </tr>
		<?php 
			$fitxa_tecnica = getFitxaTecnica($config['db'],$id); 
			$url = getVideoYoutube($config['db'],$id);
			$message_tecnica = "Fitxa tècnica";
			if ($idioma==="es") {
				$message_tecnica = "Ficha técnica";
			}
			if (!is_null($fitxa_tecnica) OR !is_null($url)) {
				echo "<tr><td  style='padding:0px;'><div class='tecnica'><ol><li><strong>".$message_tecnica.":</strong></li>".$fitxa_tecnica."</ol><div style='padding-left:95px;'><br>"; 
				if (!is_null($url)) {
					echo "<iframe width='380' height='275' src='//www.youtube.com/embed/".$url."' frameborder='0' allowfullscreen></iframe>";
				}
				echo "</div><div class='cerrar_tecnica'></div></div></td></tr>";
			}
		?>

        <tr>
        	<td height="20"></td>
        </tr>
		
			<tr>
			<td class="texto_contenido">
			<div class='tecnica'>
		
			</div>
			</td>
		</tr>
		
		<tr>
			<td class="texto_contenido">
			<?php include('social.php'); ?>
			</td>
		</tr>

        </table>
	</td>

<?php
}
?>