$(function() {   

  load_form(); // Loading form values from local storage

  chart_label_check(); // Function checks chart labels according to loaded checkbox state from local storage

  $('input, textarea, select').change(save_form); // Every change in form input makes form save into local storage
  $('input, textarea, select').keyup(save_form); // Every press of key makes form save form into local storage

  $('.toggle-checkbox').click(toggle_checkbox); // Click on chart legend makes change in hidden checkboxes

  $('#chart input, #demo input').keyup(elextern_chart); // CHART: every key up redraws chart
  $('#chart input, #demo input').change(elextern_chart); // CHART: every change of input redraws chart
  $('#chart #legend span').click(save_form); // CHART: every click on legend saves form state
  

  $('#table-wrap input').keyup(ajax_table);  // TABLE: every key up redraws table
  $('#table-wrap input').change(ajax_table); // TABLE: every change of input redraws table
  
  $('.energy-item').click(toggle_energy_item); // Toggle enable/disable energy technology

  $('#signup-form input').change(ajax_signup_check); // SIGNUP: every change of input checks signup status
  $('#signup-form input').keyup(ajax_signup_check); // SIGNUP: every keyup checks signup status
  $('#signup-form').ready(ajax_signup_check); // SIGNUP: initializing check signup status

  reinitialize(); // Initializing rest of things which need to be initialized with every AJAX
  initialize_touchspin(); // Initializing touchspin UI from jQuery plug-in
  
  demo_limitation(); // Execution of all demo limitations
});











/**
 * @description Initializing another things which need to be initialized after every AJAX request.
 * @returns {undefined}
 */

function reinitialize(){
  $('#table tr, #legend span').popover({ // Initializing popovers for every related elements
    trigger: 'hover' // Shows popover on hover (not click by default)
  });
}






/**
 * @description AJAX request for rendering new table view.
 * @returns {undefined}
 */

function ajax_table(){
  ajax_co2(); // AJAX for getting CO2 costs
  
  $.ajax({
    type: 'POST',
    url: 'ajax.php?action=table',
    data: $('#elextern-form').serialize(), // Sending whole form through POST field
    success: function(data, textStatus, xhr) {
      $('#table-content').html(data); // Returned data is set as content of #table-content
      reinitialize(); // Re-initializing some stuff
    }
  });
}






function ajax_co2(){
  $.ajax({
    type: "POST",
    url: 'ajax.php?action=co2',
    data: $('#elextern-form').serialize(),
    success: function(data, textStatus, xhr) {
      $('#ajax-co2').html(data);
    }
  });
}



function ajax_signup_check(){
  $.ajax({
    type: "POST",
    url: 'ajax.php?action=signup_check',
    data: {
      'email': $('#signup-form #email').val(),
      'name': $('#signup-form #name').val(),
      'password': $('#signup-form #password').val()
    },
    success: function(data, textStatus, xhr) {
      $('#signup-button').html(data);
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



function demo_limitation(){  
  $('.demo-only').hide(); // Hides all elements with demo-only class everywhere

  if($('#demo').length > 0){ // On demo page...
  $('.registered-only').hide();
    
    $('.demo-only').show(); // Shows up all demo-only elements
    $('#demo .nav-tabs').html(''); // Deleting tabs from demo form
  }
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


function form_default_value(){
  $('.elextern-storage').each(function(){
    if($(this).attr('type') == 'text'){
      $(this).val($(this).data('default'));
    }
  });  
  
  $('#elextern-form input:first').trigger('change');
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

  if(cookie == 'disabled'){
    setCookie(name, 'enabled', '/', 20);
  }else{  
    setCookie(name, 'disabled', '/', 20);
  }
  
  if($('#table').length > 0){
    setTimeout(ajax_table, 250);
  }
  
  if($('#chart').length > 0){
    setTimeout(elextern_chart, 250);
  }
}

function logout(){
  setCookie('email', '', '/', 20);
  setCookie('password', '', '/', 20);
  
  setCookie('email', '', '/elextern/', 20);
  setCookie('password', '', '/elextern/', 20);
  
  self.location= 'index.php';
}