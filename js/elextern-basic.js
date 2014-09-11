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
  
  $('#climate-horizon').TouchSpin({
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
  
});