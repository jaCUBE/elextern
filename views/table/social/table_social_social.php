<tr class="impact-social parent" id="social" data-placement="bottom" data-original-title="Social Impact" data-content="Computes all kind of health impacts (diseases and deaths) induced by air-pollution or radiations. As these problems are managed by health insurance systems and not by the primary polluter, these costs must appear clearly">
  <td class="attribute">
    Social Impact
  </td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocial', true); ?>
    <?php echo $this->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>

<tr class="social-sick child child-social" data-placement="bottom" data-original-title="Sick leaves" data-content="Lost working days">
  <td class="attribute"><i class="fa fa-level-up"></i> Sick leaves</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocialSickLeave', true); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="social-respiratory child child-social" data-placement="bottom" data-original-title="Respiratory Diseases" data-content="Respiratory diseases due to air pollution from burning fuels">
  <td class="attribute"><i class="fa fa-level-up"></i> Respiratory Diseases</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocialRespiratoryDisease', true); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="social-cancer child child-social" data-placement="bottom" data-original-title="Cancers" data-content="Cancers due to irradiation from nuclear materials manipulation incidents">
  <td class="attribute"><i class="fa fa-level-up"></i> Cancers</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocialCancer', true); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="social-mortality child child-social" data-placement="bottom" data-original-title="Mortality" data-content="Average deaths per use of Technology (any cause)">
  <td class="attribute"><i class="fa fa-level-up"></i> Mortality</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocialMortality', true); ?>
  </td>
  <?php } ?>
</tr> 