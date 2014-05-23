<div id="floating_header">
	<div class="logo">
		<img src="/sites/all/themes/astoryofgrace/images/small_logo.jpg" /> &nbsp; <a href="#home"><img src="/sites/all/themes/astoryofgrace/images/up_arrow.png" /></a>
  </div>
</div>

<a href="#main" class="element-invisible element-focusable"><?php print t('Skip to content'); ?></a>
<?php if ($main_menu): ?>
<a href="#main-nav" class="element-invisible element-focusable" data-target=".nav-collapse" data-toggle="collapse"><?php print t('Skip to navigation'); ?></a>
<?php endif; ?>
<!-- /#skipnav -->
<?php if ((($user->uid) && ($page['admin_shortcuts'])) || (($user->uid) && ($secondary_nav))): ?>
<div id="admin-shortcuts" class="admin-shortcuts clearfix"> <?php print render($secondary_nav); ?> <?php print render($page['admin_shortcuts']); ?> </div>
<?php endif; ?>
<!-- /#admin-shortcuts -->
<section id="home">
    <div class="container">
      <div class="book_cvr">
        <img src="/sites/all/themes/astoryofgrace/images/astoryofgrace.png" />
      </div> 

      <div id="main-menu" class="clearfix site-main-menu">
        <div id="small-logo">
          <div id="triangle">
          <span class="logo"><img src="/sites/all/themes/astoryofgrace/images/small_logo.jpg" /></span>
          <svg id="badgeNav" class="svg replaced-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="130px" height="85px" viewBox="0 0 130 85" enable-background="new 0 0 130 85" xml:space="preserve">
            <defs>
            <pattern id="img1" patternUnits="userSpaceOnUse" width="130" height="85">
            </pattern>
            </defs>
            <polygon class="badgeFill" fill="#fff" points="0,60 0,0 130,0 130,60 65,80 " />
            <polygon fill="#f00" points="130,60 65,80 0,60 0,58 65,78 130,58 " />
          </svg>
          
          </div>
        </div>
        <div class="container">
          <div class="navbar">
            <div class="navbar-inner">
              <?php if ($main_menu): ?>
              <!--<button class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>-->
              <?php if ($primary_nav || !empty($page['navigation'])): ?>
              <div>
								<?php if (($primary_nav) && empty($page['navigation'])): ?>
                <?php print render($primary_nav); ?> 
                <!-- /#primary-menu -->
                <?php endif; ?>
                <?php if (!empty($page['navigation'])): ?>
                <?php print render($page['navigation']); ?>
                <?php endif; ?>
              </div>
              <?php endif; ?>
              <?php endif; ?>
              <?php if ($main_menu): ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <!-- /#main-menu -->
    </div>
    
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
        <div class="modal-body">
         <video width="100%" poster="/sites/all/themes/astoryofgrace/images/video_cover.png" controls>
          <source src="/sites/all/themes/astoryofgrace/vids/AStoryofGraceSummerTour.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
			</div>
    </div>
   </div><!-- / Modal -->
   
   <!-- mobile video -->
   <div class="mobile-vid" style="margin:50px 0;">
   		<h3>Promotional Video</h3>
	   <video width="100%" poster="/sites/all/themes/astoryofgrace/images/video_cover.png" controls>
      	<source src="/sites/all/themes/astoryofgrace/vids/AStoryofGraceSummerTour.mp4" type="video/mp4">
			    Your browser does not support the video tag.
			</video>
  	</div><!-- / mobile video -->
   
	</div>   
</section>


<?php
	$cNode = node_load(2);
	echo '<section id="'.drupal_get_path_alias('node/'.$cNode->nid).'"><div class="container">';
	echo '<div class="section_head">'.$cNode->title.'</div>';						
	print '';
	echo '</div></section>';
?>

<?php
	$name = 'tour_dates';
	$display_id = 'block_1';
	$view = views_get_view($name);
	
	$title = $view->get_title();
	$view_content = $view->preview($display_id);
	echo '<section id="tour-dates"><div class="container">';	
	echo '<div class="section_head">'.$title.'</div>';
	echo $view_content;
	echo '</div></section>';
?>

<?php
	$cNode = node_load(20);
	echo '<section id="'.drupal_get_path_alias('node/'.$cNode->nid).'"><div class="container">';
	echo '<div class="section_head">'.$cNode->title.'</div>';								
	print 'lksjdfldskjf';
	echo '</div></section>';
?>

<div id="footer" class="clearfix site-footer" role="contentinfo">
  <div class="container">
    <div id="footer-content" class="row-fluid footer-content">
    	<div id="connect-header">
      Connect with Us!
      </div>
      <div id="content-col2" class="row-fluid content-col2">
        <!-- include contact webform -->
        <div class="span6">
          <div id="content-col2-1">
          <h4>Reach Out</h4>
          <?php
            $wNode = node_load(1);
            webform_node_view($wNode,'full');
            print theme_webform_view($wNode->content);
    
          ?>
          </div>
        </div>
        <div class="span6">
          <div id="content-col2-2">
					<?php print render($page['footer_right']); ?>
          </div>
      	</div>
    	</div>
    </div>
  </div>
</div>
<!-- /#footer -->


