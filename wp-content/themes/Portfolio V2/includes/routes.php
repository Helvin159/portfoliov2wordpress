<?php 

// *****************************************
// ************ Initiate Routes ************
// *****************************************

//  New Message With Sec8 Contact Form 
add_action('rest_api_init', 'registerNewMessage');

// ********************************
// ************ Routes ************
// ********************************

//  New Message With Sec8 Contact Form 
function registerNewMessage(){
  register_rest_route('mrrymer/v1/', 'new-message', array(
    'methods' => 'POST',
    'callback' => 'message',
  ));
}
// ***************************************
// ************ Route Actions ************
// ***************************************

// New Message includes/Sec8.php Contact Form
function message($data){
  $title = sanitize_text_field($data['title']);
  $email = sanitize_text_field($data['email']);
  $organization = sanitize_text_field($data['org']);
  $commentOne = sanitize_text_field($data['comment']);


  $contentMessage = "
  Here are the details: 
  Name: $title 
  Email: $email
  Organization: $organization
  Comment: $commentOne
  
  Message
  $commentOne";

  wp_insert_post(array(
      'post_type' => 'messages',
      'post_status' => 'private',
      'post_title' => $data['title'],
      'post_content' => $contentMessage
  ));

    // Email
      $to = "Helvin@HelvinRymer.com"; // this is your Email address
      $from = $email; // this is the sender's Email address
      $subject = "New Email From HelvinRymer.com!";
      $subject2 = "Thank you!";

      $message = "
      $title

      $contentMessage" ;  

      $message2 = "Thank you for your email. I'll be in touch as soon as possible."
      ."\n"."
      Helvin Rymer
      HelvinRymer.com
      Helvin@HelvinRymer.com";

      $headers = "From:" . $from;
      $headers2 = "From:" . $to;

      mail($to,$subject,$message,$headers);
      mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender 
}
