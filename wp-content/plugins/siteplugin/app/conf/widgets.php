<?php

class UserInfoWidget extends WP_Widget {

    function UserInfoWidget() {
        $widget_ops = array('classname' => 'UserInfoWidget', 'description' => 'Contain Basic User Info');
        $this->WP_Widget(FALSE, $name = 'User Basic Info Widget', $widget_ops);
    }

    function form($instance) {
        echo "No Options Yet";
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        return $instance;
    }

    function widget($args, $instance) {
        global $current_user;
        get_currentuserinfo();
        if (is_user_logged_in()) {
            extract($args, EXTR_SKIP);

            echo $before_widget;
            $title = apply_filters('widget_title', "Welcome Back {$current_user->display_name}");

            if (!empty($title))
                echo $before_title . $title . $after_title;;

            // WIDGET CODE GOES HERE
            ?>
            <p>

                <a href="<?php echo site_url("/userprofile") ?>">Profile</a>  /  <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
                <br />
                You Have (' <?php echo __($user->ISP) ?> ') ISP! <a href="<?php echo site_url("/cradcharge") ?>">purchase more</a>
                <br />
                Your Current Mail (' <?php echo __($user->Mail) ?> ') <a href="<?php echo site_url("/userprofile?do=changemail") ?>">change</a>
                <br />
                Your password rank (' <?php echo __($user->PassRank) ?> ') <a href="<?php echo site_url("/userprofile?do=changepassword") ?>">strengthen</a>
                <br />
                Online Shop Is  (' <?php echo __(get_option('site_webshop') ? "Open" : "Closed" ) ?> ') <?php echo __(get_option('site_webshop') ? " <a href='" . site_url("/webshop") . "'>visit</a>" : "" ) ?>

            </p>
            <?php
            echo $after_widget;
        }
    }

}

class ServerInfoWidget extends WP_Widget {

    function ServerInfoWidget() {
        $widget_ops = array('classname' => 'ServerInfoWidget', 'description' => 'Contain Basic Server Rates');
        $this->WP_Widget(FALSE, $name = 'Server Rates', $widget_ops);
    }

    function form($instance) {
        ?>
        Rates Will Be Placed Over HERE!!
        (Separate Rates By New Line)
        <br />
        <textarea name="site_serverrates" style="height: 225px; width: 225px;"><?php echo get_option("site_ServerRates") ?></textarea>
        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        update_option("site_ServerRates", $_POST['site_serverrates']);
        return $instance;
    }

    function widget($args, $instance) {
        global $current_user;
        get_currentuserinfo();
        if (is_user_logged_in()) {
            extract($args, EXTR_SKIP);

            echo $before_widget;
            $title = apply_filters('widget_title', "Server Info.");

            if (!empty($title))
                echo $before_title . $title . $after_title;;

            // WIDGET CODE GOES HERE
            ?>
            <p>
            <u>Server Rates!</u>
            </p>

            <?php
            $Info = explode("\n", get_option("site_ServerRates"));
            ?>
            <p>
                <?php
                foreach ($Info as $data)
                    echo $data . "<br />";
                ?>
            </p>
            <?php
            echo $after_widget;
        }
    }

}

class GobiSROTeam extends WP_Widget {

    function GobiSROTeam() {
        $widget_ops = array('classname' => 'GobiSROTeam', 'description' => 'Contain Game Team Members');
        $this->WP_Widget(FALSE, $name = 'GobiSRO Team Members', $widget_ops);
    }

    function form($instance) {
        ?>
        Team Members Will Be Placed Over HERE!!
        (Separate Members By New Line)
        <br />
        <textarea name="teammembers" style="height: 150px; width: 225px;"><?php echo get_option("site_TeamMembers") ?></textarea>
        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        update_option("site_TeamMembers", $_POST['teammembers']);
        return $instance;
    }

    function widget($args, $instance) {
        global $current_user;
        get_currentuserinfo();
        if (is_user_logged_in()) {
            extract($args, EXTR_SKIP);

            echo $before_widget;
            $title = apply_filters('widget_title', "Gobi-SRO Team");

            if (!empty($title))
                echo $before_title . $title . $after_title;;

            // WIDGET CODE GOES HERE
            ?>
            <p>
            <u>Team Members!</u>
            </p>
            <?php
            $members = explode("\n", get_option("site_TeamMembers"));
            ?>
            <p>
                <?php
                foreach ($members as $member)
                    echo $member . "<br />";
                ?>
            </p>
            <?php
            echo $after_widget;
        }
    }

}
?>
