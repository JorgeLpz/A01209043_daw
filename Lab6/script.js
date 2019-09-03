
let esconder = function(){
	document.getElementById("Video").style.visibility = "hidden";
}

let mostrar = function(){
	document.getElementById("Video").style.visibility = "visible";
}

let mtrimg = function(){
	document.getElementById("Halo").style.visibility = "hidden";	
}

let welcome = function(){
	alert("¡ Bienvenido !");
}


let allowDrop = function(ev) {
  ev.preventDefault();
}

let drag = function(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

let drop = function(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}

let ayudaN = function(){
	alert("Escribe Tu Nombre");
}

let ayudaA = function(){
	alert("Escribe Tu Apellido");
}

