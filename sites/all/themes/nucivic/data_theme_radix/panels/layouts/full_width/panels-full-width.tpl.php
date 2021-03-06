<?php
/**
 * @file
 * Template for a 4 row panel layout.
 */
$fid = theme_get_setting('hero_file');
$file = !empty($fid) ? file_load($fid) : FALSE;
if($file):
  $uri = $file->uri;
  $tint = 'tint';
  $bg_color = 'transparent';
  $path = file_create_url($uri);
else :
  $background_option = theme_get_setting('background_option');
  if(empty($background_option)):
    $uri = 'sites/all/themes/nucivic/data_theme_radix/assets/images/hero.jpg';
    $tint = 'tint';
    $bg_color = 'transparent';
    $path = file_create_url($uri);
  else :
    $uri = '';
    $tint = 'no-tint';
    $bg_color = '#' . ltrim($background_option, '#');
    $path = '';
  endif;
endif;
?>
<div class="panel-display panel-full-width clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if($content['top-first'] || $content['top-second']): ?>
    <div class="panel-top panel-row" <?php print 'style="background-image:url(' . $path . ');background-color:' . $bg_color . '"'; ?>>
      <div class="<?php print $tint; ?>"></div>
      <div class="container">
        <div class="panel-col-first">
          <div class="inside"><?php print $content['top-first']; ?></div>
        </div>
        <div class="panel-col-second">
          <div class="inside"><?php print $content['top-second']; ?></div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if($content['middle']): ?>
    <div class="panel-middle panel-row">
      <div class="container">
        <div class="inside"><?php print $content['middle']; ?></div>
      </div>
    </div>
  <?php endif; ?>

  <?php if($content['bottom-first'] || $content['bottom-second'] || $content['bottom-third']): ?>
    <div class="panel-bottom panel-row">
      <div class="container">
        <div class="panel-col-first">
          <div class="inside"><?php print $content['bottom-first']; ?></div>
        </div>
        <div class="panel-col-second">
          <div class="inside"><?php print $content['bottom-second']; ?></div>
        </div>
        <div class="panel-col-third">
          <div class="inside"><?php print $content['bottom-third']; ?></div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if($content['footer']): ?>
    <div class="panel-bottom-full panel-row">
      <div class="container">
        <div class="inside"><?php print $content['footer']; ?></div>
      </div>
    </div>
  <?php endif; ?>

</div>
