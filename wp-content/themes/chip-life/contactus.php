<?php
 /*
  * Template Name: ContactUs
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
                                <form id="mailsenderform" method="post" >
                                    <?php
                                     if ( isset ( $_POST['sendme'] ) ):
                                         $State = Functions::SendMail ( $_POST['name'], $_POST['from'], $_POST['subject'], $_POST['message'] );
                                         ?>
                                         <?php if ( $State ): ?>
                                             <p>Your Message Has Been Sent Successfully Our Tech Team Will Process it ASAP</p>
                                             <p>
                                                 <span>
                                                     You Will be Redirected automatically please Hold
                                                 </span>
                                             </p>
                                             <script type="text/javascript">
                                             function redir(){
                                                 window.location = "<?php echo home_url (); ?>";
                                             }
                                             setTimeout('redir()', 5000);                                             
                                         </script>
                                         <?php else: ?>
                                             <p>Message Sending Error Please Try Again Latter</p>
                                         <?php endif; ?>
                                         
                                     <?php else: ?>
                                         <p class="contact"><label for="displayname">Name :</label></p>
                                         <p><input id="displayname" type="text" name="displayname" placeholder="Your Name" required=""  tabindex="1"/></p>
                                         <p class="contact"><label for="from">Sender E-Mail :</label></p>
                                         <p><input id="from" type="text" name="from" placeholder="You E-Mail Address" required=""  tabindex="2"/></p>
                                         <p class="contact"><label for="subject">subject</label></p>
                                         <p><input id="subject" type="text" name="subject" placeholder="Mail Us About" required=""  tabindex="3"/></p>
                                         <p class="contact"><label for="message">Email</label></p>
                                         <textarea name='message' id='message' placeholder='Your Message' required=""  tabindex="4"></textarea>


                                         <input class="buttom" id="submit" type="submit" name="sendme" value="Send Mail!"  tabindex="4"/>

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
<?php ?>