<?php
				require_once("resources/config.php");
				require_once("resources/library/db_functions.php");

				if(isset($_GET['nid'])) {
					$id = $_GET['nid'];
				}
?>
<td align="left" class="texto_contenido">
	<table cellspacing="0" cellpadding="0" width="540" align="left">
		<tr>
			<?php
				$nodeImages = getNodeImagesFileNames($config['db'],$id);
				$counter = 1;
				while ($rowImages = mysql_fetch_array($nodeImages)) {
					$imageName = $rowImages{'filename'};		
					$thumbnailUrl = $config['paths']['images']['real'].$imageName;
				
					echo "<td height='140'><img src='".$thumbnailUrl."' width='163'/></td><td width='13'></td>";
					if ($counter % 3 === 0) {
						echo "</tr><tr>";
					}
					$counter = $counter+1;
				}
			?>				
		</tr>
	</table>
</td>