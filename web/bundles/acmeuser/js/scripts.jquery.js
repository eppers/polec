$(document).ready(function(){

    $(document.body).on('click','#msg-response',function(e) {
       e.preventDefault();
      $("#msg-details-form").find('input').attr("readonly", false);
      $("#msg-details-form").find('textarea').each(function() {
          var area = $(this).html();
          $(this).html("\n\n"+area);
      }).attr("readonly", false);
      
      $('#msg-title').val('Re: '+$('#msg-title').val());
      $('#msg-content').focus();
      
      $(this).attr('id','msg-send').html('Wyślij');
      
    });
    
    $(document.body).on('click','#msg-send',function(e) {
        
    });
    
});

function messageDetails(path) {
    var jqxhr = $.post( path, {id : '1'},function(data) {
        $('#message-details').html(data);
    })
    .done(function(data) {
    })
    .fail(function() {

    })
    .always(function() {

    });

}

function messageReply(path, form) {
    var jqxhr = $.post( path, {form : form},function(data) {
        //alert( "success" );
        console.log(data);
        $('#message-details').html(data);
        
    })
    .done(function(data) {
    //    alert( "second success" );
    //    console.log(data);
    })
    .fail(function() {
   //     alert( "error" );
    })
    .always(function() {
   //     alert( "finished" );
    });

}