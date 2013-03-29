<div id="page" class="container-16 clearfix">


    <div id="header" >
    <?php if ($linked_logo_img): ?>
      <div id="topbanner"><?php print $linked_logo_img; ?></div>
    <?php endif; ?>
     
	 <?php if ($page['topnavigatie']): ?>
    	<div id="topnavigatie" class="<?php print 'grid-5 prefix-11'; ?>"><?php print render($page['topnavigatie']); ?></div>
 	 <?php endif; ?>
     
	
  <?php if ($page['header']): ?>
    <div id="header-region" class="region <?php print ns('grid-14', $page['highlighted'], 7); ?> clearfix">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>          
    </div>

 <?php if ($page['navigatie']): ?>
    	<div id="navigatie" class="<?php print 'grid-12 prefix-4'; ?>"><?php print render($page['navigatie']); ?></div>
 	 <?php endif; ?>

  <div id="main" class="column grid-11">
  
  <?php if (!$is_front && $breadcrumb != ""): ?>

    <?php print $breadcrumb ?>

  <?php endif; ?>
  
    <?php if ($is_front && $breadcrumb != ""): ?>

    <?php print '<div id="breadcrumb">&nbsp;</div>'; ?>

  <?php endif; ?>
    
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>      
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div id="main-content" class="region clearfix">
      <?php print render($page['content']); ?>
    </div>

    <?php print $feed_icons; ?>
  </div>



<?php if ($page['sidebar_second']): ?>
  <div id="sidebar-right" class="column sidebar region grid-5">
    <?php print render($page['sidebar_second']); ?>
  </div>
<?php endif; ?>


  <div id="footer" class="">
    <?php if ($page['footer']): ?>
      <div id="footer-region" class="region grid-16 clearfix">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
   
  </div>

</div>
