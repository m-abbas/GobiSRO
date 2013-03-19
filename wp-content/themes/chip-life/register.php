<?php

 /*
  * Template Name: register
  *
  */
 if ( $_POST )
 {
     $handler = Site_Functions::Dispatcher ( 'Registration', 'temp_reg', $_POST );
     if ( $handler->Has_Errors )
     {
         $RegErrors = $handler->ErrorMessage;
     }
     else
     {
         wp_redirect ( site_url ( '/registration/?Done=TRUE' ) );
     }
 }

?>
<?php get_header (); ?>
<script id="demo" type="text/javascript">
    //    $(document).ready(function() {
    //        // validate signup form on keyup and submit
    //        var validator = $("#registerform").validate({
    //            rules: {
    //                user_name: {
    //                    required: true,
    //                    minlength: 5
    //                },
    //                user_password: {
    //                    password: "#user_name"
    //                },
    //                user_repassword: {
    //                    required: true,
    //                    equalTo: "#user_password"
    //                }
    //            },
    //            messages: {
    //                user_name: {
    //                    required: "Enter a username",
    //                    minlength: jQuery.format("Enter at least {0} characters")
    //                },
    //                user_repassword: {
    //                    required: "Repeat your password",
    //                    minlength: jQuery.format("Enter at least {0} characters"),
    //                    equalTo: "Enter the same password as above"
    //                }
    //            },
    //            // the errorPlacement has to take the table layout into account
    //            errorPlacement: function(error, element) {
    //                error.prependTo( element.parent().next() );
    //            },
    //            // specifying a submitHandler prevents the default submit, good for the demo
    //            submitHandler: function() {
    //                alert("submitted!");
    //            },
    //            // set this class to error-labels to indicate valid fields
    //            success: function(label) {
    //                // set &nbsp; as text for IE
    //                label.html("&nbsp;").addClass("checked");
    //            }
    //        });
    //
    //	
    //    });
</script>

<div id="stage">
    <div id="stage-data">      

        <div id="content-wrap">          

            <div id="content">
                <div id="content-data">

                    <div class="page type-page status-publish hentry">

                        <h1 class="entry-title"><?php echo get_post ()->post_title; ?></h1> 
                        <?php if ( isset ( $RegErrors ) && is_array ( $RegErrors ) ): ?>
                             <div class="error">
                                 <strong style="color: red;">Registration Errors: </strong>
                                 <span>The Following Errors Need Fixing</span>
                                 <br />
                                 <?php foreach ( $RegErrors as $k => $v ): ?>
                                     <strong><?php echo "The {$k} : "; ?></strong>
                                     <br />
                                     <?php foreach ( $v as $mes ): ?>
                                         <?php echo $mes ?>
                                         <br />
                                     <?php endforeach; ?>
                                     <br />
                                 <?php endforeach; ?>
                             </div>
                         <?php endif; ?>

                        <div class="entry-content">
                            <div class="form">
                                <form id="registerform" method="post" action="">
                                    <?php if ( isset ( $_GET['Done'] ) && $_GET['Done'] === "TRUE" ): ?>
                                         Registration Process Completed Successfully.
                                         <br />
                                         Check Your E-Mail Account For Activation Procedures.
                                     <?php else: ?>
                                         <p class="contact"><label for="user_full_name"> Full Name</label></p>
                                         <input id="user_full_name" value="<?php echo ($_POST['user_full_name']) ? $_POST['user_full_name'] : ""; ?>" tabindex="1" type="text" name="user_full_name" placeholder="First and last name" required="" />
                                         <p class="contact"><label for="user_email">Email</label></p>
                                         <input id="user_email" value="<?php echo ($_POST['user_email']) ? $_POST['user_email'] : ""; ?>" type="email" name="user_email" placeholder="example@domain.com" required="" />
                                         <p class="contact"><label for="user_name">Create a username</label></p>
                                         <input id="user_name" value="<?php echo ($_POST['user_name']) ? $_POST['user_name'] : ""; ?>" tabindex="2" type="text" name="user_name" placeholder="username" required="" />
                                         <p class="contact"> <label for="user_password">Create a password</label></p>
                                         <!--                                    <div class="password-meter contact">
                                         
                                                                                 <div class="password-meter-message">&nbsp;</div>
                                                                                 <div class="password-meter-bg">
                                                                                     <div class="password-meter-bar"></div>
                                                                                 </div>
                                                                             </div>-->
                                         <input id="user_password" type="password" name="user_password" required="" />
                                         <p class="contact"><label for="user_repassword">Confirm your password</label></p>
                                         <input id="user_repassword" type="password" name="user_repassword" required="" />
                                         <select class="select-style gender" name="gender">
                                             <option value="select">i am..</option>
                                             <option value="m">Male</option>
                                             <option value="f">Female</option>
                                         </select>
                                         <br />
                                         <p><input class="buttom" id="submit" tabindex="5" type="submit" name="submit" value="Sign me up!" /></p>
                                    <?php endif; ?>
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
