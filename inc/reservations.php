<?php
    function restaurant_save_reservations() {
        global $wpdb;
        if(isset($_POST['submit'])) {
            $name = sanitize_text_field($_POST['name']);
            $email = sanitize_email($_POST['email']);
            $phone = sanitize_text_field($_POST['phone']);
            $guests = sanitize_text_field($_POST['guests']);
            $date = sanitize_text_field($_POST['date']);
            $message = sanitize_text_field($_POST['message']);

            $table = $wpdb->prefix . 'reservation';
            $data = array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'guests' => $guests,
                'date' => $date,
                'message' => $message
            );
            $format = array(
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s'
            );
            $wpdb->insert($table, $data, $format);
            $url = get_page_by_title('Home');
            wp_redirect(get_permalink($url->ID));
            exit();
        }
    }

    add_action('init', 'restaurant_save_reservations');
?>