function initialize_touchspin(){
  
  
  
  // Input for discount rate
  $('#discount-rate').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 100,
    step: 0.5,
    decimals: 1,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '%'
  });
  
  
  
  // Input from time horizon
  $('#time-horizon').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 1000,
    step: 50,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: 'years'
  });
  
  
  
  
  
  
  
  

  
  
  // IMPACT, ENVIRONMENTAL: input for expulsions
  $('#env-compensation').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 1000000,
    step: 20000,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '€/people'
  });
  
  
  
  
  
  
  
  
  
  
  
  // IMPACT, SOCIAL: input for cost of lost working days (sickleaves)
  $('#soc-sick-leave').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 1000,
    step: 5,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '€/day'
  });
  
  
  
  // IMPACT, SOCIAL: input for respiratory diseases from air pollution
  $('#soc-respiratory').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 10000,
    step: 20,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '€/disease'
  });
  
  
  
  // IMPACT, SOCIAL: input for respiratory diseases from air pollution
  $('#soc-cancer').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 1000000,
    step: 10000,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '€/cancer'
  });
  
  
  // IMPACT, SOCIAL: input for statistical price of life
  $('#soc-mortality').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 30000000,
    step: 200000,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '€/death'
  });
  
  
  
  
  
  
  
  
  
  
  
  // IMPACT, LONG-TERM: input for climate changes adaptation costs
  $('#lt-climate-cost').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 100,
    step: 0.5,
    decimals: 1,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '%GDP/year'
  });
  
  
  
  // IMPACT, LONG-TERM: input for start of climate changes
  $('#lt-climate-start').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 100,
    step: 5,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: 'year'
  });

  
  
  // IMPACT, LONG-TERM: input for nuclear waste post-treatment costs
  $('#lt-nuclear-waste-treatment').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 100,
    step: 0.5,
    decimals: 0,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '%/year pre-treatment'
  });

  
  
  
  
  
  
  
  
  
  
  // FUEL PRICES: input for price of oil
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
  
  
  
  // FUEL PRICES: input for price of gas
  $('#gas-price').TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus',
    min: 0,
    max: 10000,
    step: 0.5,
    decimals: 1,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '€/million Btu'
  });
  
  
  
  // FUEL PRICES: input for price of coal and lignite (they have same parameters for input button)
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
  
  
  };