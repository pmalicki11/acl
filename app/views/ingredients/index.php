<?php
  $this->setSiteTitle('Ingredients');
  $this->start('body');
?>

<h1>Ingredients</h1>
<a href="<?= PROOT; ?>ingredients/add">Add</a>
<p1>
  In this page a list of base ingredients with some info about them will be displayed.
</p1>

<?php $this->end(); ?>