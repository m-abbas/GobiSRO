<?php

 /*
  * Template Name: RegistrationActivation
  */

 if ( @isset ( $_GET['User'] ) && @isset ( $_GET['Token'] ) )
 {
     $Activate  = Site_Functions::Dispatcher ( 'registration', 'do_activate', $_GET );
     if ( $Activate->has_errors )
         $Activated = TRUE;
 }
 else
 {
     $Errors = array ( "Viloation" => "An Attempt to Vailoation Detected<br />Follow The Link In Your E-Mail" );
 }

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
                                <?php if ( ! $Errors && $Activated ): ?>
                                     <strong>Done</strong>
                                     <span>Your Account Activated Successfully.
                                         <br />
                                         Processed To <a href="<?php site_url ( '/Login/' ); ?>">Login</a>
                                     </span>
                                 <?php else: ?>
                                     <div class="error">
                                         <strong style="color: red;">Activation Errors: </strong>
                                         <span>The Following Errors Need Fixing</span>
                                         <br />
                                         <?php foreach ( $Errors as $Feild => $Message ): ?>
                                             <strong><?php echo $Feild; ?></strong>
                                             <span><?php echo $Message; ?></span>
                                         <?php endforeach; ?>
                                     </div>
                                <?php endif; ?>
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