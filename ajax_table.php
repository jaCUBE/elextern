<?php require 'bootstrap.php'; ?>

<div class="alert alert-info">
  Implicit CO<sub>2</sub> price is <strong><?php echo round(LT_CO2_EMISSION, 2); ?> &euro;/tCO<sub>2</sub></strong>.
</div>

<?php require 'views/table/table.php'; ?>
