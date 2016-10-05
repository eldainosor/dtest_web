$(function(){
$("#upload_file").on('click', function(e){
    e.preventDefault();
    $("#upload:hidden").trigger('click');
});
$("#upload_pic").on('click', function(e){
    e.preventDefault();
    $("#uploadpic:hidden").trigger('click');
});
$("#upload_au").on('click', function(e){
    e.preventDefault();
    $("#uploadau:hidden").trigger('click');
});
});

function loadPDF() {
  $('#reload').attr('src', "https://androidpolice.com");
  // Attempt to reload iframe
  $('#iFramePdf').load("https://androidpolice.com");
  sendPrint('iFramePdf')
}