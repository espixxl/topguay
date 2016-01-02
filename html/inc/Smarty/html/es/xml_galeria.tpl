<?xml version="1.0" encoding="iso-8859-1"?>
<fotos>
    {foreach key=key item=item from=$galeria}
        <foto id ="{$key}" foto="images/seccion/{$seccion}/{$item}"></foto>
    {/foreach}
</fotos>
