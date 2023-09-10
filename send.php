<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "bdvetee@gmail.com"; // Замените на свой адрес электронной почты

    $subject = "Запрос на получение файлов";

    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $message = "E-mail: " . $email . "\n";
    $message .= "Телефон: " . $phone;

    $headers = "From: " . $email;

    if (mail($to_email, $subject, $message, $headers)) {
        echo "Письмо успешно отправлено.";
    } else {
        echo "Ошибка при отправке письма.";
    }
}
?>
