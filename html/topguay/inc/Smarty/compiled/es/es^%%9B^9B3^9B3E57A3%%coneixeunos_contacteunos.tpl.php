<?php /* Smarty version 2.6.19, created on 2014-01-05 10:22:38
         compiled from coneixeunos_contacteunos.tpl */ ?>
<!-- CONTENIDO -->
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
	<td>
    <table width="95%" cellpadding="0" cellspacing="0" style="padding-left: 20px;">
    	<tr>
            <td class="fil">Conocednos > Contactar</td>
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
        	
                  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0','name','mini_logo','width','66','height','66','align','middle','id','mini_logo','src','mini_logo','quality','high','bgcolor','#ffffff','allowscriptaccess','sameDomain','allowfullscreen','false','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','mini_logo' ); //end AC code
</script><noscript><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" name="mini_logo" width="66" height="66" align="middle" id="mini_logo">
                    <param name="allowScriptAccess" value="sameDomain" />
                    <param name="allowFullScreen" value="false" />
                    <param name="movie" value="mini_logo.swf" />
                    <param name="quality" value="high" />
                    <param name="bgcolor" value="#ffffff" />
                    <embed src="mini_logo.swf" quality="high" bgcolor="#ffffff" width="66" height="66" name="mini_logo" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
              </object></noscript>
          </td>
            <td><h2>Contactar</h2></td>
    	</tr>
        </table>
        <table width="95%" cellpadding="0" cellspacing="0" class="tabla_contenido">
        <tr>
        	<td colspan="3" class="texto_contenido">
            <p>Tel&eacute;fono: <strong>937601430</strong><br> 
              M&oacute;vil:&nbsp;&nbsp;&nbsp;&nbsp; <strong>678846429 </strong><br />
                E-mail: &nbsp;<a href="mailto:topguay@topguay.com">topguay@topguay.com</a><span class="Titles"><br>
              </span></p>
            <p><strong>Solicitud de informaci&oacute;n:</strong></p>
            
            	<?php if ($this->_tpl_vars['INFORMACIONOK'] == '1'): ?>
                <p style="color:#FF0000;"><strong style="color:#FF0000;">El mensaje se ha enviado correctamente.</strong></p>
                <?php else: ?>
            
            <form name="contactoFrm" id="contactoFrm" method="post" onsubmit="return validateFormContact('es');">
            <table border="0" class="Texto">
              <tr>
                <td width="108">Nombre</td>
                <td><label>
                  <input name="nombre" type="text" size="50">
                </label></td>
              </tr>
              <tr>
                <td>Tel&eacute;fono</td>
                <td><input name="telefono" type="text" size="50"></td>
              </tr>
              <tr>
                <td>E-mail</td>
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
            <?php endif; ?>
            <p class="Texto"><span class="Titles"><br>
          </span></p>          </td>
    	</tr>
        <tr>
        	<td height="20" colspan="2"></td>
        </tr>
    </table>
   	<tr>
        	<td height="20"></td>
        </tr>
        </table>