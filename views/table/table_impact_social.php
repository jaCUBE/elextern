<tr class="impact-social parent" id="social" data-placement="left" data-original-title="Social Impact" data-content="Computes all kind of health impacts (diseases and deaths) induced by air-pollution or radiations. As these problems are managed by health insurance systems and not by the first polluer, these costs must appear clearly">
  <td class="attribute">
    Social Impact
    <?php echo $_EX->htmlUnit('Click to expand'); ?>
  </td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocial', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>

<tr class="social-sick child child-social" data-placement="left" data-original-title="Sick leaves" data-content="Lost working days">
  <td class="attribute">Sick leaves</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocialSickLeave', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="social-respiratory child child-social" data-placement="left" data-original-title="Respiratory Diseases" data-content="Respiratory diseases due to air pollution from burning fuels">
  <td class="attribute">Respiratory Diseases</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocialRespiratoryDisease', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="social-cancer child child-social" data-placement="left" data-original-title="Cancers" data-content="Cancers due to irradiation from nuclear materials manipulation incidents">
  <td class="attribute">Cancers</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocialCancer', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="social-mortality child child-social" data-placement="left" data-original-title="Mortality" data-content="Average deaths per use of Technology (any cause)">
  <td class="attribute">Mortality</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocialMortality', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr> 