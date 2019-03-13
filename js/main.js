$('.model').hide();

$('#car').on('change',function(){
  $('.model').hide()
  $('#'+this.value).show()
});
