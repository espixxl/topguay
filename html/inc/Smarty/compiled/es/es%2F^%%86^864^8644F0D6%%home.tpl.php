<?php /* Smarty version 2.6.19, created on 2015-02-14 18:40:45
         compiled from home.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabecera.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body>
		
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
                                            
                                            <?php if ($this->_tpl_vars['HOME'] == '1'): ?>
                                            
                                            <?php echo '
                                              <script language="javascript">
	if (AC_FL_RunContent == 0) {
		alert("Esta página requiere el archivo AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent( \'codebase\',\'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0\',\'name\',\'cabezal\',\'width\',\'885\',\'height\',\'272\',\'align\',\'middle\',\'id\',\'cabezal\',\'flashvars\',\'seccion='; ?>
<?php echo $this->_tpl_vars['seccion']; ?>
<?php echo '&idioma=2\',\'src\',\'intro\',\'quality\',\'high\',\'bgcolor\',\'#ffffff\',\'allowscriptaccess\',\'sameDomain\',\'allowfullscreen\',\'false\',\'pluginspage\',\'http://www.macromedia.com/go/getflashplayer\',\'movie\',\'intro\' ); //end AC code
	}
                                              </script>
                                              <noscript>
                                              <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" name="cabezal" width="885" height="272" align="middle" id="cabezal">
                                                <param name="allowScriptAccess" value="sameDomain" />
                                                <param name="allowFullScreen" value="false" />
                                                <param name="movie" value="intro.swf" />
                                                <param name="quality" value="high" />
                                                <param name="bgcolor" value="#ffffff" /
                                                <param name="FlashVars" value="seccion='; ?>
<?php echo $this->_tpl_vars['seccion']; ?>
<?php echo '&idioma=2" />
                                                <embed FlashVars="seccion='; ?>
<?php echo $this->_tpl_vars['seccion']; ?>
<?php echo '" src="intro.swf" quality="high" bgcolor="#ffffff" width="885" height="272" name="cabezal" align="middle" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" FlashVars="idioma=2" />                                              
</object>
                                              </noscript>
                                            '; ?>

                                            <?php else: ?>
                                            
                                            <?php echo '
                                              <script language="javascript">
	if (AC_FL_RunContent == 0) {
		alert("Esta página requiere el archivo AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent( \'codebase\',\'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0\',\'width\',\'885\',\'height\',\'272\',\'id\',\'cabezal\',\'align\',\'middle\',\'src\',\'cabezal\',\'quality\',\'high\',\'bgcolor\',\'#ffffff\',\'name\',\'cabezal\',\'allowscriptaccess\',\'sameDomain\',\'allowfullscreen\',\'false\',\'pluginspage\',\'http://www.macromedia.com/go/getflashplayer\',\'movie\',\'cabezal\', \'FlashVars\', \'seccion='; ?>
<?php echo $this->_tpl_vars['seccionFlash'][$this->_tpl_vars['seccion']]; ?>
<?php echo '&idioma=2\' ); //end AC code
	}
                                              </script>
                                              <noscript>
                                              <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="885" height="272" id="cabezal" align="middle">
                                                <param name="allowScriptAccess" value="sameDomain" />
                                                <param name="allowFullScreen" value="false" />
                                                <param name="movie" value="cabezal.swf" />
                                                <param name="quality" value="high" />
                                                <param name="bgcolor" value="#ffffff" />
                                                <param name="FlashVars" value="seccion='; ?>
<?php echo $this->_tpl_vars['seccionFlash'][$this->_tpl_vars['seccion']]; ?>
<?php echo '" />
                                                <embed FlashVars="seccion='; ?>
<?php echo $this->_tpl_vars['SECCIONFLASH'][$this->_tpl_vars['seccion']]; ?>
<?php echo '" src="cabezal.swf" quality="high" bgcolor="#ffffff" width="885" height="272" name="cabezal" align="middle" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />                                              
</object>
                                              </noscript>
                                            '; ?>
    
                                            
                                                                                        <?php endif; ?>
                                                                                        
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
                                                        
                                                        <!-- MENU IZQUIERDA -->
                                                        <table width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                        	<td height="2"></td>
                                                        </tr>
                                                        <tr>
                                                        	<td>
                                                            	<table width="100%" cellpadding="0" cellspacing="0">
                                                                <?php if ($this->_tpl_vars['HOME'] != '1'): ?>
                                                                <tr>
                                                                	<td class="pastillaInicio"><a href="index.php?idioma=es">INICIO</a></td>
                                                                	<td width="8"><img src="images/pastillaSeccionCierre.gif" width="8" height="32" /></td>
                                                                </tr>
                                                                <tr>
                                                                	<td height="10"><img src="images/spacer.gif" width="1" height="10"  /></td>
                                                                </tr>
                                                                <?php endif; ?>
                                                                <tr>
                                                                    <td class="pastilla">CONOCEDNOS</td>
                                                                    <td width="8"><img src="images/pastillaNaranjaCierre.gif" width="8" height="33" /></td>
                                                                </tr>
                                                                </table>
                                                                <table width="100%" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td class="pastillaInterior">
                                                                    
                                                                        <table width="100%" cellpadding="0" cellspacing="0">
                                                                        <tr>
                                                                            <td class="<?php if ($this->_tpl_vars['menu'] == '1'): ?>opcionhover<?php else: ?>opcion<?php endif; ?>" id="" height="32"><a href="coneixeunos_topguay.php?idioma=es">TopGuay</a></td>
                                                                        </tr>
<tr><td class="<?php if ($this->_tpl_vars['menu'] == '2'): ?>opcionhover<?php else: ?>opcion<?php endif; ?>" id="" height="32"><a href="coneixeunos_projecte_social.php?idioma=es">Proyecto Social</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="<?php if ($this->_tpl_vars['menu'] == '3'): ?>opcionhover<?php else: ?>opcion<?php endif; ?>" id="" height="32"><a href="coneixeunos_contacteunos.php?idioma=es">Contactar</a></td>
                                                                        </tr>
<!--                                                                        
                                                                        <tr>
<td class="<?php if ($this->_tpl_vars['menu'] == '4'): ?>opcionhover<?php else: ?>opcion<?php endif; ?>" id="" height="32"><a href="http://www.myspace.com/topguay">Blog / Noticias</a></td>
                                                                        </tr>
-->                                                                        
                                                                        
                                                                        </table>                                                                    </td>
                                                                </tr>
                                                                </table>
                                                                <table width="100%" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td class="pastillaBottom"><img src="images/spacer.gif" width="1" height="1" /></td>
                                                                    <td width="7"><img src="images/pastillaNaranjaBottomCierre.gif" width="7" height="7" /></td>
                                                                </tr>
                                                                </table>                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        	<td height="10"><img src="images/spacer.gif" width="1" height="10"  /></td>
                                                        </tr>
                                                        <tr>
                                                        	<td valign="top">
                                                            
                                                           <table width="100%" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td class="pastilla">SERVICIOS TOPGUAY</td>
                                                                  <td width="8"><img src="images/pastillaNaranjaCierre.gif" width="8" height="33" /></td>
                                                                </tr>
                                                                </table>
                                                                <table width="100%" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td class="pastillaInterior">
                                                                    
                                                                        <table width="100%" cellpadding="0" cellspacing="0">
                                                                        <tr>
                                                                            <td class="opcion" id="opcion1" height="32"><a id="opcion1" href="javascript:;">Espectaculos de animación</a></td>
                                                                        </tr>
                                                                        <tr id="ei" <?php if ($this->_tpl_vars['submenu'] != '1'): ?>class="opcion1" style="display:none;" <?php endif; ?>>
                                                                        	<td>
                                                                            	
                                                                                	<table width="234" cellpadding="0" cellspacing="0">
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '1' && $this->_tpl_vars['subsubmenu'] == '1'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_la_peca.php?idioma=es">La Peca</a></td>
                                                                                    </tr>
                                                                                  <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '1' && $this->_tpl_vars['subsubmenu'] == '2'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_catarsis.php?idioma=es">Catarsis</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '1' && $this->_tpl_vars['subsubmenu'] == '3'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_marrameu.php?idioma=es">Marrameu</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '1' && $this->_tpl_vars['subsubmenu'] == '4'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_avi_tio.php?idioma=es">El abuelo Tió, Caga mejor!</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '1' && $this->_tpl_vars['subsubmenu'] == '5'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_agenda_stjordi.php?idioma=es">La Agenda de Sant Jordi la aut&eacute;ntica...</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '1' && $this->_tpl_vars['subsubmenu'] == '6'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_gags_clown.php?idioma=es">Gags de Clown adultos</a></td>
                                                                                    </tr>
                                                                                    </table>
                                                                            
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="opcion" id="opcion2" height="32"><a id="opcion2" href="javascript:;">Teatro de calle</a></td>
                                                                        </tr>
                                                                        <tr id="ei" <?php if ($this->_tpl_vars['submenu'] != '2'): ?>class="opcion2" style="display:none;" <?php endif; ?>>
                                                                        	<td>
                                                                            	
                                                                                	<table width="234" cellpadding="0" cellspacing="0">
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '2' && $this->_tpl_vars['subsubmenu'] == '1'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_cercaviles.php?idioma=es">Pasacalles</a></td>
                                                                                    </tr>
                                                                                  <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '2' && $this->_tpl_vars['subsubmenu'] == '2'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_personatges_populars.php?idioma=es">Personajes Populares</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '2' && $this->_tpl_vars['subsubmenu'] == '3'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_accions.php?idioma=es">Acciones a la carta</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '2' && $this->_tpl_vars['subsubmenu'] == '4'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_speek_comic.php?idioma=es">Speek comic</a></td>
                                                                                    </tr>
                                                                                    </table>
                                                                            
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td class="opcion" id="opcion3" height="32"><a id="opcion3" href="javascript:;">Actividades l&uacute;dico-educativas</a></td>
                                                                        </tr>
<tr id="ei" <?php if ($this->_tpl_vars['submenu'] != '3'): ?>class="opcion3" style="display:none;" <?php endif; ?>>
                                                                        	<td>
                                                                            	
                                                                                	<table width="234" cellpadding="0" cellspacing="0">
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '3' && $this->_tpl_vars['subsubmenu'] == '1'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_diver_tallers.php?idioma=es">Diver Talleres</a></td>
                                                                                    </tr>
                                                                                  <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '3' && $this->_tpl_vars['subsubmenu'] == '2'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_taller_circ.php?idioma=es">Taller de Circo</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '3' && $this->_tpl_vars['subsubmenu'] == '3'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_taller_nadalenc.php?idioma=es">Taller Navide&ntilde;o</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '3' && $this->_tpl_vars['subsubmenu'] == '4'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_taller_carnestoltes.php?idioma=es">Taller de Carnaval</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '3' && $this->_tpl_vars['subsubmenu'] == '5'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_taller_medievals.php?idioma=es">Talleres Medievales</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '3' && $this->_tpl_vars['subsubmenu'] == '6'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_festes_tematiques.php?idioma=es">Fiestas Tem&aacute;ticas</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '3' && $this->_tpl_vars['subsubmenu'] == '7'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_puzzlequeria.php?idioma=es">Puzzlequeria Rompecabezas</a></td>
                                                                                    </tr>
                                                                                    </table>
                                                                            
                                                                            </td>
                                                                        </tr>                                                                        
                                                                        <tr>
                                                                            <td class="opcion" id="opcion4" height="32"><a id="opcion4" href="javascript:;">Espect&aacute;culos de intercambio cultural</a></td>
                                                                        </tr>
<tr id="ei" <?php if ($this->_tpl_vars['submenu'] != '4'): ?>class="opcion4" style="display:none;" <?php endif; ?>>
                                                                        	<td>
                                                                            	
                                                                                	<table width="234" cellpadding="0" cellspacing="0">
                                                                                    <tr>
                                                                                    	<td height="1" class="separador"><img src="images/spacer.gif" width="1" height="1"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    	<td class="<?php if ($this->_tpl_vars['submenu'] == '4' && $this->_tpl_vars['subsubmenu'] == '1'): ?>subopcionhover<?php else: ?>subopcion<?php endif; ?>" height="32"><a href="serveis_namaskar.php?idioma=es">Namaskar</a></td>
                                                                                    </tr>
                                                                                    </table>
                                                                             </td>
                                                                        </tr>
                                                                        
                                                                      <!--  <tr>
                                                                        	<td class="noopcion" height="36"><img src="images/spacer.gif" width="1" height="36"  /></td>
                                                                        </tr>-->
                                                                        <tr>
                                                                            <td class="<?php if ($this->_tpl_vars['submenu'] == '5'): ?>opcionhover<?php else: ?>opcion<?php endif; ?>" id="opcion5" height="32"><a id="opcion5" href="enllacos.php?idioma=es">Enlaces relacionados</a></td>
                                                                        </tr>
                                                                        </table>
                                                                   </td>
                                                                </tr>
                                                                </table>
                                                                <table width="100%" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td class="pastillaBottom"><img src="images/spacer.gif" width="1" height="1" /></td>
                                                                    <td width="7"><img src="images/pastillaNaranjaBottomCierre.gif" width="7" height="7" /></td>
                                                                </tr>
                                                                </table> 
																


<br><br>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td class="pastilla">CONTACTO</td>
<td width="8"><img src="images/pastillaNaranjaCierre.gif" width="8" height="33" /></td>
</tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td class="pastillaInterior">
<div class="area-contacte">
<b>TopGuay</b><br>Sant Pol de Mar <br>Maresme - Barcelona
<br>Tel: 937601430, 678846429 
<a href="mailto:topguay@topguay.com">topguay@topguay.com</a>
</div>
</td>
</tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td class="pastillaBottom"><img src="images/spacer.gif" width="1" height="1" /></td>
<td width="7"><img src="images/pastillaNaranjaBottomCierre.gif" width="7" height="7" /></td>
</tr>
</table>

<br/>

<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FPECA%2F333474486703453&amp;width=150&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;border_color=%23ccc&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:100px;" allowTransparency="true"></iframe>


<!--
<br><br>
<div align="center">
<img src="/images/oferta-es.png">                                                            														
</div>-->	
																
																
																
																                                                           </td>
                                                        </tr>
                                                        </table>                                                    </td>
                                                    <td width="20"></td>
                                                    <td valign="top" class="contenido" style="padding-right:20px;padding-left:10px;">
                                                        <!-- CONTENIDO -->
                                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['frameContenido']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                                                    </td>
                                                </tr>
                                                </table>
                                                 <table width="100%" cellpadding="0" cellspacing="0">
<tr>
                                                	<td colspan="3">
<?php echo '
                                              <script language="javascript">
	if (AC_FL_RunContent == 0) {
		alert("Esta página requiere el archivo AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent( \'codebase\',\'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0\',\'width\',\'883\',\'height\',\'175\',\'id\',\'cabezal\',\'align\',\'middle\',\'src\',\'cabezal\',\'quality\',\'high\',\'bgcolor\',\'#ffffff\',\'name\',\'cabezal\',\'allowscriptaccess\',\'sameDomain\',\'allowfullscreen\',\'false\',\'pluginspage\',\'http://www.macromedia.com/go/getflashplayer\',\'movie\',\'bottom\' ); //end AC code
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
                                            '; ?>
                                                    
                                                    </td>
                                                </tr>                                                
                                                </table>
                                              </td>
											 <tr><td>
											 
											 
<br><br>											 
<div class="area-serveis">
<!--
TopGuay @2009. TopGuay ofrece sus servicios de animación infantil y payasos en toda el área de Barcelona y especialmente en el Maresme. Entre otras poblaciones en : Barcelona, Mataró, Calella, Badalona, Arenys de Munt, Sant Pol de Mar, Santa Susana, Malgrat, Palafolls, Tordera, Alella, Montgat, El Masnou, Tiana, Dosrrius, Òrrius, Sant Vicenç, Sant Andreu, Arenys de mar, Vilassar de Mar, Premià, El Masnou, Pineda, Malgrat, Canet de Mar, Argentona. TopGuay ofrece sus servicios en los siguientes ámbitos: espectáculos infantiles, payasos, teatro de calle, carnaval, fiestas de cumpleaños, clown, actividades educativas, pasacalles infantiles, pregones, sant jordi, malabares, zancos, despedidas, banquetes, fiestes populares, castañada, carnestoltas, ruas, speekears, payasos,parques de navidad, aniversarios y cumpleaños para niños, proyectos sociales, cooperación, maquillaje de fantasia.
-->
</div>											 

											 
											 
											 
											 </td></tr> 
                                        </tr>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pie.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


