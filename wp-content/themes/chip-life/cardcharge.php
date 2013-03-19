<?php
 /*
  * Template Name: CardCharge
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
                            <div class="form">
                                <form id="cardserialform" method="post" >
                                    <p class="contact"><label for="cardserial">card serial :</label></p>
                                    <p><input id="cardserial" type="text" name="cardserial" placeholder="card serial" required=""  tabindex="1"/></p>
                                    <p class="contact"><label for="cardpassword">card password :</label></p>
                                    <p><input id="cardpassword" type="text" name="cardpassword" placeholder="card password" required=""  tabindex="1"/></p>

                                    <input class="buttom" id="submit" type="submit" name="sendme" value="Send Mail!"  tabindex="4"/>

                                </form>
                            </div>
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