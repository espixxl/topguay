<table width="100%" cellpadding="0" cellspacing="0">
<tr>
	<td>
    <table width="95%" cellpadding="0" cellspacing="0" style="padding-left: 20px;">
    	<tr>
            <td class="fil"></td>
            <td width="8"></td>
    	</tr>
        <tr>
        	<td height="10"></td> 
        </tr>
        
    </table>
    <table width="95%" cellpadding="0" cellspacing="0">
    	<tr>
   		    <td width="15"></td>
      	      	<td width="75" valign="top">        	
					<img src="images/new_logo.jpg" width="100"/> 
			</td>            
		  <td><h2>Contactar</h2></td>
		  <!-- <td><div style="font-size:30;color:#f66d15;text-align:left;line-height:1;font-weight:bold;">Top Guay</div></td> -->
    	</tr>
        </table>
        <table width="95%" cellpadding="0" cellspacing="0" class="tabla_contenido">
        <tr>
        	<td colspan="3" class="texto_contenido">
            <p>Teléfono <strong>937601430</strong><br> 
              Móvil&nbsp;&nbsp;&nbsp;&nbsp; <strong>678846429 </strong><br />
                E-mail: &nbsp;<a href="mailto:topguay@topguay.com">topguay@topguay.com</a><span class="Titles"><br>
              </span></p>
            <p><strong>Solicitud de información:</strong></p>
            
			<?php if (!isset($_POST["nombre"])) {
			?>
				<form name="contactoFrm" id="contactoFrm" method="post" onsubmit="return validateFormContact();">
				<table border="0" class="Texto">
				  <tr>
					<td width="108">Nombre</td>
					<td><label>
					  <input name="nombre" type="text" size="50">
					</label></td>
				  </tr>
				  <tr>
					<td>Teléfono</td>
					<td><input name="telefono" type="text" size="50"></td>
				  </tr>
				  <tr>
					<td>Email</td>
					<td><input name="email" type="text" size="50"></td>
				  </tr>
				  <tr>
					<td valign="top">Mensaje</td>
					<td><label>
					  <textarea name="mensaje" cols="52" rows="8"></textarea>
					</label></td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td><label>
					  
						<div align="right">
						  <input type="submit" name="Submit" value="Enviar">
						</div>
					</label></td>
				  </tr>
				</table>            
				</form>
			<?php } ?>
            <p class="Texto"><span class="Titles"><br>
            </span></p>          
			
			<?php
				if (isset($_POST["nombre"])) {
					echo "<div style='color:red;' id='sentmessage'><strong>Tu mensaje ha sido enviado</strong></div>";
				}
			?>
			</td>
    	</tr>
        <tr>
        	<td height="20" colspan="2"></td>
        </tr>
		<tr>
        	<td height="20" colspan="2"><img src="images/img_contactar.jpg"/></td>
        </tr>		
    </table>
   	<tr>
       <td height="20"></td>
	</tr>
</table>	
