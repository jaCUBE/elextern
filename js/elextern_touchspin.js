$(function(){
  
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
  
  
  
  
  $('#env-compensation').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 10000000,
    step: 1000,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: 'people'
  });
  
  
  
  
  
  
  
  
  
  $('#soc-sick-leave').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 10000,
    step: 5,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '€/day'
  });
  
  $('#soc-respiratory').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 10000,
    step: 10,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '€/disease'
  });
  
  
  $('#soc-cancer').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 1000000,
    step: 2000,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '€/cancer'
  });
  
  
  $('#soc-mortality').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 30000000,
    step: 100000,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '€/death'
  });
  
  
  
  
  
  
  
  
  
  $('#lt-nuclear-waste-treatment').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 100,
    step: 1,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: 'fuel/year%'
  });
  
  $('#lt-climate-start').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 1000,
    step: 1,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: 'year'
  });
  
  $('#lt-climate-cost').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 100,
    step: 1,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: 'GDP%'
  });
  
  
  
  
  
  
  
  
  $('#oil-price').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 10000,
    step: 1,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '€/barrel'
  });
  
  
  $('#gas-price').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 10000,
    step: 1,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '€/million Btu'
  });
  
  $('#coal-price, #lignite-price').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 10000,
    step: 1,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '€/ton'
  });
  
  
});