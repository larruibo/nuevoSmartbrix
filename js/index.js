jQuery(document).ready(function(){

$('#boton-colombia').click(function(){
  $('#datos-colombia').hide();
  $('#datos-panama').show();
})
$('#boton-panama').click(function(){
  $('#datos-panama').hide();
  $('#datos-colombia').show();
})
$('#contacto').click(function(){
  $('#formulario').slideToggle();
})

});
