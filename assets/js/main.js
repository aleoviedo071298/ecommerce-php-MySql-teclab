var minombre= "alejandro";
var miapellido = "oviedo";
var miedad = 50;
var booleano = true;
var cadena = "189";
var arreglo=[1,"hola",12.25,true,"otra cadena"];
// alert(minombre);
// alert(miapellido);
// alert(minombre + " " + miapellido);
alert(arreglo[1]);
alert(arreglo.join(" - "));

$("#boton_agregar").on("click", function(){
    $("#boton_agregar") .html("Hiciste click");
});