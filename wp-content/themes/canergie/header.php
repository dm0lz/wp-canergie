
<!--<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">

        <?php wp_list_pages(array('title_li' => '')); ?>

      </ul>
    </div>
  </div>
</div>-->
<div id="header"></div>
<div id="menuHeader">
<?php //echo $this->I18n->flagSwitcher(array('class' => 'languages', 'id' => 'language-switcher-2')); ?>
  
  <div class="left">
    <a href="<?php echo get_option('home'); ?>"/><img src="<?php bloginfo('template_directory'); ?>/assets/img/canergie_logo.jpg" ></a>
  </div>


  <div class="right">
    <ul>
      <!--<li style="width:150px" <?php //echo (in_array($s,array('about',)) ? 'class="selected"' : '') ?> ><div class="borderTop"></div>
        <?php //echo $this->Html->link(__('A propos de canergie'), '/'.Configure::read('Config.language').'/',array('onclick'=>'return false;')); ?>
      </li>-->
      <!--<?php wp_list_pages( array( 'link_before' => '<div class="borderTop"></div>', 'title_li' => '') ); ?>-->
      <?php
        $args = array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order',
        'hierarchical' => 1,
        'exclude' => '',
        'child_of' => 0,
        'parent' => -1,
        'exclude_tree' => '',
        'number' => '',
        'offset' => 0,
        'post_type' => 'page',
        'post_status' => 'publish'
        );
        $pages = get_pages($args); 
        $current_id = get_the_ID();
        if($pages)
        {
          foreach($pages as $page){
            $link_page_id = ($page->ID);
            if ($current_id == $link_page_id){
              echo '<li class="current_page_item page_item"> <div class="borderTop"></div> <a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a> </li>';
            }else{
              echo '<li class="page_item"> <div class="borderTop"> </div> <a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a> </li>';
            }
          }
        }
      ?>
    </ul>  
  </div>

  <div class="languages">
    <?php qtrans_generateLanguageSelectCode( 'both' ); ?>
  </div>
  
  <div class="spacer"></div>
  <div class="separator"></div>
</div>
