function confirmarBorrar(nombre,id){
  if (confirm("¿Quieres eliminar ("+nombre+")?"))
  {
    document.location.href="?orden=Borrar&id="+id;
  }
}
  
function confirmarEditar(nombre,id){
  if (confirm("¿Quieres modificar ("+nombre+")?"))
  {
    document.location.href="?orden=Editar&id="+id;
  }
}

$(document).ready(function(){
  // var altura_nav = $('.nav').
});