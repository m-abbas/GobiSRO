<?php
 /*
  * Template Name: FreeSilk
  */
?>

<?php get_header (); ?>

<div id="stage">
    <div id="stage-data">      

        <div id="content-wrap">          


            <div id="content">
                <div id="content-data">

                    <div class="page type-page status-publish hentry">

                        <h1 class="entry-title"><?php echo get_post ()->post_title; ?></h1> 
                        <div class="entry-content">
                            <iframe src="https://wallapi.com/api/ps/?key=6f204fd6c90814bbd648eaa17847f5a0&amp;uid=<?php echo ($User->JID) ? $User->JID : "[USER_ID]"; ?>&amp;widget=p3_1" height="1400" width="600" frameborder="0"></iframe>
                            <div class="clear"></div>
                        </div><!-- end .entry-content -->

                        <div class="clear"></div>
                    </div> <!-- end .postclass -->

                    <div class="clear"></div>
                </div> <!-- end #content-data --> 
            </div> <!-- end #content -->	              


        </div> <!-- end #content-wrap -->
        <?php get_sidebar ( "left-sidebar" ); ?>


        <div class="clear"></div>
    </div> <!-- end #stage-data -->  
</div> <!-- end #stage --> 
<?php get_footer (); ?>
<?php ?>