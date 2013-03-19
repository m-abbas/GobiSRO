<?php
 /*
  * Template Name: login
  *
  */

 // Login Preocess

 if ( is_user_logged_in () )
 {
     wp_redirect ( home_url () ) ;
 }


 if ( $_POST )
 {
     $creds = $_POST ;
     $user  = wp_signon ( $creds, TRUE ) ;
     if ( is_wp_error ( $user ) )
         $Error = $user->get_error_message () ;
     else
         wp_redirect ( get_option ( 'siteurl' ) ) ;
 }
?>

<?php get_header () ; ?>

<div id="stage">
    <div id="stage-data">      

        <div id="content-wrap">          

            <div id="content">
                <div id="content-data">

                    <div class="page type-page status-publish hentry">

                        <h1 class="entry-title"><?php echo get_post ()->post_title; ?></h1> 

                        <div class="entry-content">

                            <div class="form">
                                <form id="loginform" action="" method="post">
                                    <p class="contact"><label for="user_login">Username</label></p><br />
                                    <input id="user_login" value="<?php echo ($_POST['user_login']) ? $_POST['user_login'] : "" ; ?>" tabindex="2" type="text" name="user_login" placeholder="username" required="" /><br />
                                    <p class="contact"><label for="user_password">Password</label></p><br />
                                    <input id="user_password" value="<?php echo ($_POST['user_password']) ? $_POST['user_password'] : "" ; ?>"  type="password" name="user_password" placeholder="password" required="" /> <br />
                                    <p class="contact"><input id="remember-me" type="checkbox" name="remember" />
                                        <label for="remember-me">remember me</label></p>
                                    <?php
                                     if ( isset ( $Error ) )
                                     {
                                         ?>
                                         <div id="error-page">
                                             <?php
                                             echo( $Error ) ;
                                             ?>
                                         </div><br />
                                         <?php
                                     }
                                    ?>
                                    <input class="buttom" id="submit" tabindex="5" type="submit" name="submit" value="login" />
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
        <?php get_sidebar ( "left-sidebar" ) ; ?>


        <div class="clear"></div>
    </div> <!-- end #stage-data -->  
</div> <!-- end #stage --> 
<?php get_footer () ; ?>
