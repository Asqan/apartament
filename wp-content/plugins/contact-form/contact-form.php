<?php
/* Plugin name: Contact form
   description: My contact form
   Version:0.1
   Plugin URI: http://example.com
   Author: Łukasz
   */
   function my_enqueued_styles() {
    wp_enqueue_style( 'my-style', plugin_dir_url( __FILE__ ) . 'style.css', null, '1.0' );
  }
  add_action( 'wp_enqueue_scripts', 'my_enqueued_styles' );
  function form_code(){
 
  echo '<form action ="' . esc_url($_SERVER['REQUEST_URI']) . '" method="post">';
  echo '<h2 class="form__title">Formularz kontaktowy</h2>';
  echo '<section class="form__wrapper">';
  echo'<input type="text" name="form_name" minlength="3"  pattern="[a-zA-Z0-9 ]+" value="'. (isset($_POST["form_name"]) ? esc_attr($_POST["form_name"]) : '') .'"  placeholder="Podaj imię"/>';
  echo'<input type="text" name="form_surname" minlength="3"  pattern="[a-zA-Z0-9 ]+" value="'. (isset($_POST["form_surname"]) ? esc_attr($_POST["form_surname"]):'').'" placeholder="Podaj Nazwisko" required />';
  echo'<input type="email" name="form_email" value="'. (isset($_POST["form_email"]) ? esc_attr($_POST["form_email"]):'').'"  placeholder="Podaj adres e-mail" minlength="3" required/>';
  echo '</section>';
  echo'<div class="textarea">';
  echo '<textarea name="form_message" minlength="10"  required>' . ( isset( $_POST["form_message"] ) ? esc_attr($_POST["form_message"] ) : '' ) . '</textarea>';
  echo'</div>';
  echo'<input type="submit" name="form_submit" value="Wyślij"/>';
echo'</form>';
  }
  //sanitize and send mail
  function sanitize_and_send (){
    if ( isset( $_POST['form_submit'] ) ) {
    $name    = sanitize_text_field($_POST["form_name"]);
    $surname = sanitize_text_field($_POST["form_surname"]);
    $email   = sanitize_email( $_POST["form_email"] );
    $message = esc_textarea( $_POST["form_message"] );
    $to = get_option( 'admin_email' );  //email will be send to
    $headers = "From: $name <$email>" . "\r\n"; 
    if ( wp_mail( $to, $name , $email , $message , $headers ) ) {
      echo '<div class="success">';
      echo '<p>Dziękujemy. Twoja wiadomość została wysłana.</p>';
      echo '</div>';
  } else {
    echo '<div class="error">';
    echo '<p>Wystąpił błąd podczas wysyłania formularza</p>';
    echo '</div>';
  }
}
}
function form_shortcode() {
  ob_start();
  sanitize_and_send();
  form_code();
 
 
  return ob_get_clean();
}
add_shortcode( 'formularz_kontaktowy', 'form_shortcode' );
?>
