jQuery(document).ready(function(){

alert("Funciona JQuery");
$('#boton-colombia').click(function(){
  $('#datos-colombia').hide();
  $('#datos-panama').show();
})
$('#boton-panama').click(function(){
  $('#datos-panama').hide();
  $('#datos-colombia').show();
})

});
