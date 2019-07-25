<?php
 /**
  * Mit dieser Datei können übermittelte Formulardaten abgefangen werden.  Bei Verwendung einer Nichtkonfiguration
  * Um Formulardaten zu speichern, denken Sie daran, ein Identifikationsfeld in Ihrem Formular zu verwenden.
  */
if (!empty($_POST)) {  
    $number = ( isset( $_POST['number'] ) ) ? stripslashes( $_POST['number'] ) : '';
    self::update_dashboard_widget_options(
            self::wid,                                  //The  widget id
            array(                                      //Associative array of options & default values
                'oswp_example_number' => $number,
            )
    );
}

?>
<p>Dies ist ein oswp Beispiel Dashboard Widget!</p>
<p>Dies ist der Konfigurationsteil des Widgets und kann hier gefunden und bearbeitet werden <tt><?php echo __FILE__ ?></tt></p>
<input type="text" name="number" value="<?php echo self::get_dashboard_widget_option(self::wid, 'oswp_example_number'); ?>" /><br />