<?php

/**
 * @file
 * Ideallogic block template.
 */
?>
<div class="program-wrapper">
  <?php
  foreach ($variables['items'] as $item) :?>
      <h3 class="program-title"> <?php print render($item['name']); ?></h3>
      <p class="program-count"><?php print render($item['count']) . ' ' . $text = $item['count'] > 1 ? ' Courses' : ' Course' ?></p>
    <?php print render($item['link']) ?>
  <?php endforeach ?>
</div>
