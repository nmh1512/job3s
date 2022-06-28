$('.img_add_hmcv').click(function() {
    $.post( "../render/bang_hmcv.php", function( data ) {
        $( ".add_hmcv" ).before( data );
      });
})
$('.img_add_ycbl').click(function() {
    $.post( "../render/bang_ycbl.php", function( data ) {
        $( ".add_ycbl" ).before( data );
      });
})
$('.img_add_khtt').click(function() {
    $.post( "../render/bang_khtt.php", function( data ) {
        $( ".add_khtt" ).before( data );
      });
})
$('.bg_popup, .closetable').click(function() {
  $('.khoi_popup').addClass('display_none');

})
$('.btn_tao_hd').click(function() {
  $('.khoi_popup').removeClass('display_none')
})

// ----
$('.checkPer').on('input', (event)=>{
  let value = $(event.target).val();

  if(value > 100) {
      let txt = $(event.target).parents('.khoi_input.w_50pt').children('h4').text();
      txt = txt.replace(' *', '')
      alert(`${txt} không vượt quá 100%`);
      $(event.target).val('')
  }
})