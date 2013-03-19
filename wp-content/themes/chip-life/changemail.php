<?php
 /*
  * Template Name: changemail
  *
  */
?>

<?php get_header (); ?>

<div id="stage">
    <div id="stage-data">      

        <div id="content-wrap">          


            <div id="content">
                <div id="content-data">

                    <div class="page type-page status-publish hentry">

                        <h1 class="entry-title">change your mail</h1> 
                        <div class="post-info"><span class="post-edit"><a class="post-edit-link" href="http://localhost/wordpress/wp-admin/post.php?post=43&amp;action=edit" title="Edit Page">(Edit)</a></span></div>        
                        <div class="entry-content">
                            
                            <div class="form">
                                <form id="registerform">
                                    <p class="contact"><label for="email">Old Email</label></p></br>
									<input id="email" type="email" name="email" placeholder="example@domain.com" required="" /></br>
									<p class="contact"><label for="email">New Email</label></p></br>
									<input id="email" type="email" name="email" placeholder="example@domain.com" required="" /></br>
                                    <p><input class="buttom" id="submit" tabindex="5" type="submit" name="submit" value="Confirm" /></p>
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
