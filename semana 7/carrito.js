// JavaScript Document
  function agregar_productos(){
	  var selector = document.getElementById("productazo");
	  var seleccionado = selector.options[selector.selectedIndex].text;
	  var producto = seleccionado;
	  var precio = document.getElementById("productazo").value;
	  var cantidad = document.getElementById("cantidad_obt").value;
	  if(cantidad > 0 & cantidad <= 10){
		var total = precio*cantidad;
		
	  	document.getElementById("texto_almacenado").value =document.getElementById("texto_almacenado").value+"\n"+producto+"        $"+precio+"        "+cantidad+"        $"+total;
		document.getElementById("pagar").value = parseFloat(document.getElementById("pagar").value)+total;
	  }else{
		 alert("La cantidad tiene que ser mayor a o y menor a 10") 
	  }
	  
  }
	function borra_lista(){
	document.getElementById("texto_almacenado").value = "Producto     Precio($)    Cantidad     SubTotal($)";
	document.getElementById("pagar").value = "0.0";
	
	
	}