<?php 
//this code block inserts a record in the custom table after the reservation send button is cliced

function lapizzeria_save_reservation(){
    global $wpdb;
    if(isset($_POST['form-send'])){
    
        $table = $wpdb->prefix . 'reservations';
        
        //collect data from the received form
        $name = sanitize_text_field($_POST['form-name']);
        $date = sanitize_text_field($_POST['form-date']);
        $email = sanitize_email($_POST['form-email']);
        $phone = sanitize_text_field($_POST['form-phone']);
        $message = sanitize_textarea_field($_POST['form-message']);
        
        //store the collected data into an array as wordpress requirement
        //in storing data
        $record = array(
            'name' => $name,
            'date' => $date,
            'email' => $email,
            'phone' => $phone,
            'message' => $message
        );
        
        //specify the format of the data in the array above respectively
        
        $data_format = array(
            '%s',
            '%s',
            '%s',
            '%s',
            '%s'
        );
        
        //insert the record into the table using $wpdb->insert function
        $wpdb->insert($table, $record, $data_format);

    }
    
}

    add_action('init','lapizzeria_save_reservation');
?>