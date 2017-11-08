jQuery(document).ready(function(){

alert("Funciona JQuery");
$('#boton-colombia').click(function(){
  $('#datos-colombia').hide('slow');
  $('#datos-panama').show('fast');
})
$('#boton-panama').click(function(){
  $('#datos-panama').hide('slow');
  $('#datos-colombia').show('fast');
})

});
