$(function() {
  $('.bootstrap-switch').bootstrapSwitch();

  $('#table-sources tr').popover({ trigger: "hover" });

  $('tr.parent')
          .css("cursor","pointer")
          .attr("title","Click to expand/collapse")
          .click(function(){
                  $(this).siblings('.child-'+this.id).toggle();
          });
  $('tr[class=child-]').hide().children('td');
        
        
        
  $('#discount-rate').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 100,
    step: 0.1,
    decimals: 2,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '%'
  });
  
  $('#time-horizon').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 1000,
    step: 1,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: 'years'
  });
  
  $('#table #form-basic').click(function(){
    $('#form-basic').submit();    
  });
  
  $('#chart #form-basic').keyup(function(){
    elextern_chart();
  });
  
  $('#chart #form-basic').change(function(){
    elextern_chart();
  });
  
  $('#chart #form-basic .bootstrap-switch').click(function(){
    elextern_chart();
  });
  
  $('#chart .btn-submit').hide();
  
  
  
  
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