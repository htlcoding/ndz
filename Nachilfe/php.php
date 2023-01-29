<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "husseinalhakeem2008@icloud.com";
  $subject = "Bewerbung Tutor: $subject";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  $body = "<html><body>";
  $body .= "<h3>Name: $name</h3>";
  $body .= "<h3>Email: $email</h3>";
  $body .= "<h3>Subject: $subject</h3>";
  $body .= "<p>$message</p>";
  $body .= "</body></html>";

  mail($to, $subject, $body, $headers);
  header("Location: /teacher-apply-success");
}
?>
