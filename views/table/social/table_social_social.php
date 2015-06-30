<tr class="impact-social parent" id="social">
  <td class="attribute" <?php $_ITEM->html('impact_social'); ?>><i class="fa fa-users"></i> Social Impact</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocial', true); ?>
    <?php echo $this->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>

<tr class="social-sick child child-social">
  <td class="attribute" <?php $_ITEM->html('impact_social_sick_leaves'); ?>><i class="fa fa-level-up"></i> Sick leaves</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocialSickLeave', true); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="social-respiratory child child-social">
  <td class="attribute" <?php $_ITEM->html('impact_social_respiratory'); ?>><i class="fa fa-level-up"></i> Respiratory Diseases</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocialRespiratoryDisease', true); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="social-cancer child child-social">
  <td class="attribute" <?php $_ITEM->html('impact_social_cancer'); ?>><i class="fa fa-level-up"></i> Cancers</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocialCancer', true); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="social-mortality child child-social">
  <td class="attribute" <?php $_ITEM->html('impact_social_mortality'); ?>><i class="fa fa-level-up"></i> Mortality</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactSocialMortality', true); ?>
  </td>
  <?php } ?>
</tr> 