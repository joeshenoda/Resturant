function check_all() {
  $('input[class="item_checkbox"]:checkbox').each(function () {
      if ( $('input[class="check_all"]:checkbox:checked').length == 0  ){
        $(this).prop('checked', false)
      }
      else{
        $(this).prop('checked', true)
      }

    }
  )
}


function delete_all() {

  $(document).on('click','.btn_summit',function () {
    $('#form_data').submit();
  });
  $(document).on('click','.delBtn',function () {
   let item_check= $('input[class="item_checkbox"]:checkbox').filter(":checked").length;
   console.log(item_check)
    $('#countn').text(item_check);
    //alert("youssef");
    $('#multi_delete').modal('show');
  });

}
