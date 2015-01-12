$(function() {   

  load_form(); // Loading form values from local storage

  chart_label_check(); // Function checks chart labels according to loaded checkbox state from local storage

  $('.jquery-chosen').chosen(); // Initializing jQuery Chosen plug-in
  
  $('#another-input-select').ready(show_another_input); // First run of function for showing tune impact inputs
  $('#another-input-select').change(show_another_input); // With every change of select tune up impact values, it shows different input

  $('input, textarea, select').change(save_form); // Every change in form input makes form save into local storage
  $('input, textarea, select').keyup(save_form); // Every press of key makes form save form into local storage

  $('.toggle-checkbox').click(toggle_checkbox); // Click on chart legend makes change in hidden checkboxes

  $('#chart input').keyup(elextern_chart); // CHART: every key up redraws chart
  $('#chart input').change(elextern_chart); // CHART: every change of input redraws chart
  $('#chart #legend span').click(save_form); // CHART: every click on legend saves form state

  $('#table input').keyup(ajax_table);  // TABLE: every key up redraws table
  $('#table input').change(ajax_table); // TABLE: every change of input redraws table
  
  $('#energy .energy-item').click(toggle_energy_item);
  
  reinitialize(); // Initializing rest of things which need to be initialized with every AJAX
  initialize_touchspin(); // Initializing touchspin UI from jQuery plug-in
});











/**
 * @description Initializing another things which need to be initialized after every AJAX request.
 * @returns {undefined}
 */


function reinitialize(){
  $('#table-sources tr, #legend span').popover({ // Initializing popovers for every related elements
    trigger: 'hover' // Shows popover on hover (not click by default)
  });
}




/**
 * @description Show tune up impact input from chosen one from select.
 * @returns {undefined}
 */

function show_another_input(){
  var selector = $('#another-input-select').val(); // Selector is value of selected option
  
  $('.another-input').hide(); // Hide all tune up impact values first
  $(selector).show(); // Then show the chosen one
}





/**
 * @description AJAX request for rendering new table view.
 * @returns {undefined}
 */

function ajax_table(){
  ajax_co2(); // AJAX for getting CO2 costs
  
  $.ajax({
    type: 'POST',
    url: 'ajax_table.php',
    data: $('#form-basic').serialize(), // Sending whole form through POST field
    success: function(data, textStatus, xhr) {
      $('#table-content').html(data); // Returned data is set as content of #table-content
      reinitialize(); // Re-initializing some stuff
    }
  });
}






function ajax_co2(){
  $.ajax({
    type: "POST",
    url: 'ajax_co2.php',
    data: $('#form-basic').serialize(),
    success: function(data, textStatus, xhr) {
      $('.ajax-co2').html(data);
    }
  });
}






function toggle_checkbox(){
  var checkbox_selector = $(this).data('checkbox');
  var checkbox = $(checkbox_selector);
  
  checkbox.trigger('click');
  
  if(checkbox.attr('checked')){
    checkbox.removeAttr('checked'); // Unchecks it
  }else{
    checkbox.attr('checked', true); // Checks it
  }
  
  $(this).toggleClass('disabled-legend');
  
  $(this).find('.fa').toggleClass('fa-eye-slash');
  $(this).find('.fa').toggleClass('fa-eye');
}




function save_form(){
  var data = {
    text: {},
    select: {},
    checkbox: {}    
  };
  
  $('.elextern-storage').each(function(){
    var type = get_storage_type($(this));
    
    switch(type){
      case 'text':
        var value = $(this).val();
        break;
        
      case 'checkbox':
        if($(this).attr('checked')){
          var value = 'checked';
        }else{
          var value = 'unchecked';
        }
        
        break;
        
      case 'select':
        var value = $(this).find(':selected').val();
        break;
    }
    
    data[type][$(this).attr('id')] = value;
  });
  
  localStorage.setItem('elextern', JSON.stringify(data));
}



function get_storage_type(element){
  if(element.attr('type') == 'text' || element.attr('type') == 'number'){
    return 'text';
  }
  
  if(element.is('textarea')){
    return 'text';
  }

  if(element.is('select')){
   return 'select';
  }

  if(element.attr('type') == 'checkbox'){
    return 'checkbox';
  } 
}




function load_form(){
  if(localStorage['elextern'] == null){
    return false;
  }
  
  var data = JSON.parse(localStorage['elextern']);
  
  $.each(data, function(type, form_group){    
    switch(type){
      case 'text': load_form_text(form_group); break;
      case 'checkbox': load_form_checkbox(form_group); break; 
      case 'select': load_form_text(form_group); break; 
    }
  });
}


function load_form_text(form_text){
  $.each(form_text, function(id, value){
    $('#'+id).val(value);    
  });
}

function load_form_checkbox(form_checkbox){
  $.each(form_checkbox, function(id, value){
    if(value == 'checked'){
      $('#'+id).attr('checked', true);   
    }else{
      $('#'+id).removeAttr('checked');
    }
  });
}


function default_form(){
  $('.elextern-storage').each(function(){
    if($(this).attr('type') == 'text'){
      $(this).val($(this).data('default'));
    }
  });  
  
  $('#form-basic input:first').trigger('change');
}





function chart_label_check(){
  $('.toggle-checkbox').each(function(){
    var checkbox_selector = $(this).data('checkbox');
    var checkbox = $(checkbox_selector);
    
    if(checkbox.attr('checked') == null){
      $(this).toggleClass('disabled-legend');

      $(this).find('.fa').toggleClass('fa-eye-slash');
      $(this).find('.fa').toggleClass('fa-eye');
    }
  });  
}


function toggle_energy_item(){
  var name = $(this).data('energy');
  
  $(this).toggleClass('btn-success');
  $(this).toggleClass('btn-danger');
  
  var cookie = getCookie(name);
  
  console.log(cookie);
  
  if(cookie == 'disabled'){
    setCookie(name, 'enabled', '/', 20);
  }else{
  
  setCookie(name, 'disabled', '/', 20);
  }
}