<?php

if (isset($roles)){
  $roleString = "";
  foreach ($roles as $role) { $roleString .= $role->getSlug().","; }
  $roleString = substr($roleString, 0, -1);
}

?>

<div class="projRow projRow--visible" <?php if(isset($roles)) : ?>data-js='<?= $roleString; ?>'<?php endif; ?>>
  <div class="projPanel <?php if ($inDevelopment) echo "inDevelopment" ?>">
    <a href="<?= $slug; ?>" title="<?= $name; ?>">
      <img src="assets/img/lqip/<?= $slug; ?>.jpg" loading="lazy" alt="<?= $name; ?>" <?php if ($inDevelopment) echo "class='inDevelopment'" ?>>
      <?php if ($inDevelopment) echo "<div class='inDevelopmentText'>In Development</div>" ?>
      <div class="projJScontainer">
        <h2 class="projLabel"> <?= $name; ?> </h2>
        <h3 class="projMeta"> <?= $type; ?> </h3>
      </div>
    </a>
  </div>
</div>






