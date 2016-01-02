<?php
				require_once("resources/config.php");
				require_once("resources/library/db_functions.php");

				if(isset($_GET['nid'])) {
					$id = $_GET['nid'];
				}
?>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>


<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

<td align="left" class="texto_contenido">
	<table cellspacing="0" cellpadding="0" width="540" align="left">
		<tr>
			<?php
				$nodeImages = getNodeImagesFileNames($config['db'],$id);
				$counter = 1;
				while ($rowImages = mysql_fetch_array($nodeImages)) {
					$imageName = $rowImages{'filename'};		
					$thumbnailUrl = $config['paths']['images']['thumbnail'].$imageName;
					$realUrl = $config['paths']['images']['real'].$imageName;

					echo "<td height='140'><a class='fancybox' rel='group' href='".$realUrl."'><img src='".$thumbnailUrl."' width='120' height='100' style='border:1px solid #f66d15'/></a></td><td width='13'></td>";
					if ($counter % 4 === 0) {
						echo "</tr><tr>";
					}
					$counter = $counter+1;
				}
			?>				
		</tr>
	</table>
</td>