<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['نام'];
  $email = $_POST['ایمیل'];
  $message = $_POST['پیام'];

  $to = "navidshahidi1387417@gmail.com";
  $subject = "فرم ارسال جدید";
  $body = "نام: $name\nایمیل: $email\nپیام: $message";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "پیام شما با موفقیت ارسال شد.";
  } else {
    echo "متاسفانه در ارسال پیام مشکلی رخ داده است.";
  }
}

?>