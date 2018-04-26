<?php 

    function lapizzeria_options(){
        add_menu_page('La Pizzeria','La Pizzeria Options', 'manage_options','lapizzeria-option-top-menu','lapizzeria_adjustments','',20);
        add_submenu_page('lapizzeria-option-top-menu','Reservations', 'Reservations', 'manage_options','lapizzeria-submenu-reservations','lapizzeria_show_reservations');
    }

    add_action('admin_menu','lapizzeria_options');

        function lapizzeria_adjustments(){
            //Main page can have no code to execute
            echo "Code executed by the main menu page option";
        }
        
        function lapizzeria_show_reservations(){ ?>
            <div class="wrap">
                <h1>Reservations</h1>
                <table class="table-reservation wp-list-table widefat striped">
                    <thead>
                        <tr>
                            <th class="managed-column">ID</th>
                            <th class="managed-column">Name</th>
                            <th class="managed-column">Date of Reservation</th>
                            <th class="managed-column">Email</th>
                            <th class="managed-column">Phone Number</th>
                            <th class="managed-column">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            global $wpdb;
                            
                            $table = $wpdb->prefix . 'reservations';
                                                
                            //perform query using get_results function of $wpdb
                            //2nd parameter is the expected format of the query result : ARRAY_A:associative array
                            $reservations = $wpdb->get_results("SELECT * FROM $table", ARRAY_A);
                                                
                            //loop through each record and display in a table
                            foreach($reservations as $reservation): ?>
                                <tr>
                                    <td><?php echo $reservation['id']; ?></td>
                                    <td><?php echo $reservation['name']; ?></td>
                                    <td><?php echo $reservation['date']; ?></td>
                                    <td><?php echo $reservation['email']; ?></td>
                                    <td><?php echo $reservation['phone']; ?></td>
                                    <td><?php echo $reservation['message']; ?></td>
                                </tr>
                            <?php endforeach; ?>      
                    </tbody>
                </table>
            </div>
        
        <?php }
?>
