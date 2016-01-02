<?php /* Smarty version 2.6.19, created on 2009-01-16 14:01:16
         compiled from xml_galeria.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="iso-8859-1"<?php echo '?>'; ?>

<fotos>
    <?php $_from = $this->_tpl_vars['galeria']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        <foto id ="<?php echo $this->_tpl_vars['key']; ?>
" foto="images/seccion/<?php echo $this->_tpl_vars['seccion']; ?>
/<?php echo $this->_tpl_vars['item']; ?>
"></foto>
    <?php endforeach; endif; unset($_from); ?>
</fotos>