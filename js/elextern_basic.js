$(function() {
  $('.bootstrap-switch').bootstrapSwitch();
    
      
  if(localStorage.getItem('discount-rate') != null){
    load_form();
  }
      
  $('#chart .btn-submit').hide();
  
  $('.jquery-chosen').chosen();

  show_another_input();
  $('#another-input-select').change(show_another_input);

  if($('#chart').length > 0){
    elextern_chart();
    $('#chart input').keyup(elextern_chart);
    $('#chart input').change(elextern_chart);
    $('#chart input[type=checkbox]').click(elextern_chart);
    $('#chart input').change(save_form);
  }
  
  if($('#table').length > 0){
    ajax_table();
    $('#table input').keyup(ajax_table);
    $('#table input').change(ajax_table);
    $('#table .bootstrap-switch').click(ajax_table);
    $('#table input').change(save_form);
  }
  
  $('#chart .table-impact').hide();
  
  $('.toggle-checkbox').click(toggle_checkbox);

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


function toggle_checkbox(){
  var checkbox_selector = '#' + $(this).data('checkbox');
  
  $(checkbox_selector).trigger('click');
  
  $(this).toggleClass('disabled-legend');
  
  $(this).find('.fa').toggleClass('fa-eye-slash');
  $(this).find('.fa').toggleClass('fa-eye');
}


function save_form(){
  $('.elextern-storage').each(function(){
    localStorage[$(this).attr('id')] = $(this).val();
  });
}

function load_form(){
  $('.elextern-storage').each(function(){
    $(this).val(localStorage[$(this).attr('id')]);
  });
}

function default_form(){
  $('.elextern-storage').each(function(){
    $(this).val($(this).data('default'));
  });  
  
  $('#form-basic input:first').trigger('change');
}