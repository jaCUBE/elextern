$(function() {
  $('.bootstrap-switch').bootstrapSwitch();
    
  $('#chart .btn-submit').hide();
  
  $('.jquery-chosen').chosen();
  

  show_another_input();
  $('#another-input-select').change(show_another_input);

  if($('#chart').length > 0){
    elextern_chart();
    $('#chart input').keyup(elextern_chart);
    $('#chart input').change(elextern_chart);
    $('.bootstrap-switch').click(elextern_chart);
  }
  
  if($('#table').length > 0){
    ajax_table();
    $('#table input').keyup(ajax_table);
    $('#table input').change(ajax_table);
    $('.bootstrap-switch').click(ajax_table);
  }
  
  
  reinitialize();
});


function filter_table(selector){
  $('#table-sources td, #table-sources th').hide();
  
  $('#table-sources .legend').show();
  
  if(selector == 'all'){
   $('#table-sources td, #table-sources th').show(); 
  }
  
  $(selector).each(function (){
    var index = $(this).index() + 1;
    
    $("#table-sources td:nth-child("+ index +"), th:nth-child("+ index +")").show();
    $("#table-sources td:nth-child(1), th:nth-child(1)").show();
  });  
}




function show_another_input(){
  var selector = $('#another-input-select').val();
  
  $('.another-input').hide();
  $(selector).show();
}




function ajax_table(){

  $.ajax({
    type: "POST",
    url: 'ajax_table.php',
    data: $('#form-basic').serialize(),
    success: function(data, textStatus, xhr) {
      $('#table-content').html(data);
      reinitialize();
    }
  });
}




function reinitialize(){
  $('#table-sources tr, #legend span').popover({ trigger: "hover" });

  $('tr.parent')
          .css("cursor","pointer")
          .attr("title","Click to expand/collapse")
          .click(function(){
                  $(this).siblings('.child-'+this.id).toggle();
          });
  $('tr[class=child-]').hide().children('td');
}