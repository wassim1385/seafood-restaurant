<?php
    function restaurant_options(){
        add_menu_page('Restaurant', 'Restaurant Options', 'administrator', 'restaurant_options', 'restaurant_adjustments', 'dashicons-admin-generic', 20);
        add_submenu_page('restaurant_options', 'Reservations', 'Reservations', 'administrator', 'restaurant_reservations', 'restaurant_reservations');
    }

    function restaurant_settings(){
        register_setting('restaurant_infos', 'restaurant_infos_first_mobile');
        register_setting('restaurant_infos', 'restaurant_infos_second_mobile');
        register_setting('restaurant_infos', 'restaurant_infos_first_email');
        register_setting('restaurant_infos', 'restaurant_infos_second_email');
    }
    add_action('init', 'restaurant_settings');

    function restaurant_adjustments(){ ?>
        <div class="wrap">
            <h1>Restaurant Infos</h1>
            <form action="options.php" method="post">
                <?php
                    settings_fields('restaurant_infos');
                    do_settings_sections('restaurant_infos');
                ?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">First mobile number:</th>
                        <td>
                            <input type="text" name="restaurant_infos_first_mobile" value="<?php echo esc_attr(get_option('restaurant_infos_first_mobile')); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Second mobile number:</th>
                        <td>
                            <input type="text" name="restaurant_infos_second_mobile" value="<?php echo esc_attr(get_option('restaurant_infos_second_mobile')); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">First email address:</th>
                        <td>
                            <input type="text" name="restaurant_infos_first_email" value="<?php echo esc_attr(get_option('restaurant_infos_first_email')); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">First email address:</th>
                        <td>
                            <input type="text" name="restaurant_infos_second_email" value="<?php echo esc_attr(get_option('restaurant_infos_second_email')); ?>">
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
    <?php }

    function restaurant_reservations(){ ?>
        <div class="wrap">
            <h1>List of reservations</h1>
            <table class="wp-list-table widefat striped">
                <thead>
                    <tr>
                    <th class="manage-column">Number</th>
                        <th class="manage-column">Client's Name</th>
                        <th class="manage-column">Date of reservation</th>
                        <th class="manage-column">Email</th>
                        <th class="manage-column">Mobile Number</th>
                        <th class="manage-column">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        global $wpdb;
                        $table = $wpdb->prefix .'reservation';
                        $reservations = $wpdb->get_results("SELECT * from $table", ARRAY_A);
                        $i = 1;
                        foreach($reservations as $reservation): ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $reservation['name']; ?></td>
                                <td><?php echo $reservation['date']; ?></td>
                                <td><?php echo $reservation['email']; ?></td>
                                <td><?php echo $reservation['phone']; ?></td>
                                <td><?php echo $reservation['message']; ?></td>
                            </tr>
                        <?php $i++; endforeach ; ?>
                </tbody>
            </table>
        </div>
    <?php }


add_action('admin_menu', 'restaurant_options');
?>