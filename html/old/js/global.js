// JavaScript Document
function over(e) {
	var child = Event.element(e).up('.opcion');
	if (child==null) {
		child=Event.element(e).up('.opcionhover'); 
		if (child==null) {
			child=Event.element(e); 
		}
		// $('chivato').innerHTML = "B:" + child + " class:" + child.className;
	}
	else {
		// $('chivato').innerHTML = "A:" + child + " class:" + child.className;
	}

	if (child.className=='opcion') {
		child.className = 'opcionhover';
	}
	else {
		child.className = 'opcion';
	}
	
	
}

function overSub(e) {
	var child = Event.element(e).up('.subopcion');
	if (child==null) {
		child=Event.element(e).up('.subopcionhover'); 
		if (child==null) {
			child=Event.element(e); 
		}
		// $('chivato').innerHTML = "B:" + child + " class:" + child.className;
	}
	else {
		// $('chivato').innerHTML = "A:" + child + " class:" + child.className;
	}

	if (child.className=='subopcion') {
		child.className = 'subopcionhover';
	}
	else {
		child.className = 'subopcion';
	}
	
}

function clickDesplega(e) {
	var child = Event.element(e);

	if(child.id!="") {
		var option = $$("."+child.id);
		option.each(function(obj){
			obj.style.display = obj.style.display == "none"?'block':'none';
		});
	}
}

function click(e) {
	var child = Event.element(e);
	if (child.href!=undefined) {
		var url = child.href;
	}
	else {
		var url = child.childNodes[0].href;
	}
	
	window.location = url;
}


window.onload = function() {
	// over de las pestañas
	var option = $$('.opcion');
	option.each(function(obj){
		if (obj.id=="") {
			Event.observe(obj, 'click', click, true);
		}
		else {
			Event.observe(obj, 'click', clickDesplega, true);
		}

		Event.observe(obj, 'mouseout', over, true);
		Event.observe(obj, 'mouseover', over, true);
	});
	/*
	var option = $$('.opcion a');
	option.each(function(obj){
		Event.observe(obj, 'mouseout', overParent, true);
		Event.observe(obj, 'mouseover', overParent, true);
	});
	*/

	
	var option = $$('.pastillaInicio');
	option.each(function(obj){
		Event.observe(obj, 'click', click, true);
	});

	var option = $$('.subopcion');
	option.each(function(obj){
		Event.observe(obj, 'click', click, true);
		Event.observe(obj, 'mouseout', overSub, true);
		Event.observe(obj, 'mouseover', overSub, true);
	});

}



// JavaScript Document
function validateFormContact(i) {
	var f = document.getElementById("contactoFrm");
	// alert(f);
	
	if (f.nombre.value=="" || f.telefono.value=="" || f.email.value=="" || f.mensaje.value=="") {
		
		if (i=='es') {
			alert("Todos los campos son obligatorios.");
		}
		else {
			alert("Tots els camps son obligatoris.");
		}
		
		
		return false;
	}
	
	return true;
}