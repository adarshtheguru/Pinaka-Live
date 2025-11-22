<?php
// Load WP first
require_once( dirname(__FILE__) . '/wp-load.php' );

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php';
require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';
//test

/**
 * Send HTML email using a table template (Gmail friendly)
 */
function send_smtp_mail($to, $subject, $data = []) {

    $mail = new PHPMailer(true);

    try {
        // SMTP config (your Gmail SMTP constants)
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->Port       = SMTP_PORT;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_PASS;
        $mail->SMTPSecure = SMTP_SECURE;

        // From:
        $mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);

        // To:
        $mail->addAddress($to);

        // Subject
        $mail->Subject = $subject;

        // Build table email body
        $rows = "";
        foreach ($data as $key => $value) {
            $rows .= "
                <tr>
                    <td style='padding:8px;border:1px solid #ddd;font-weight:600;'>$key</td>
                    <td style='padding:8px;border:1px solid #ddd;'>$value</td>
                </tr>";
        }

        $body = "
        <table width='600' style='font-family:Arial;border:1px solid #ddd;margin:auto;border-collapse:collapse;'>
            <tr>
                <td style='background:#1f2937;color:#fff;padding:15px;font-size:18px;font-weight:bold;'>
                    New Contact Form Submission
                </td>
            </tr>
            <tr>
                <td>
                    <table width='100%' cellpadding='0' cellspacing='0' style='border-collapse:collapse;'>
                        $rows
                    </table>
                </td>
            </tr>
            <tr>
                <td style='background:#f9f9f9;padding:10px;font-size:12px;color:#666;text-align:center;'>
                    Auto-generated email from your website.
                </td>
            </tr>
        </table>";

        $mail->isHTML(true);
        $mail->Body = $body;

        return $mail->send(); // TRUE or FALSE

    } catch (Exception $e) {
        error_log("SMTP Mail Error: " . $mail->ErrorInfo);
        return false;
    }
}

if ($_POST) {
    require_once('wp-config.php');

    // Establish connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $formType = isset($_POST['formType']) ? $_POST['formType'] : '';

    if ($formType === 'mainForm' || $formType === 'contactUsForm' || $formType === 'popUpForm') {
        // Create main_form table if not exists
        $createTableSql = "CREATE TABLE IF NOT EXISTS contact_form (
            id INT AUTO_INCREMENT PRIMARY KEY,
            full_name VARCHAR(255),
            email VARCHAR(255),
            phone VARCHAR(255),
            company_name VARCHAR(255),
            company_website VARCHAR(255),
            service VARCHAR(255),
            message TEXT,
            submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
        mysqli_query($conn, $createTableSql);

        // Sanitize input
        $name = mysqli_real_escape_string($conn, $_POST['name'] ?? '');
        $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
        $phone = mysqli_real_escape_string($conn, $_POST['phone'] ?? '');
        $company = mysqli_real_escape_string($conn, $_POST['company'] ?? '');
        $website = mysqli_real_escape_string($conn, $_POST['website'] ?? '');
        $service = mysqli_real_escape_string($conn, $_POST['service'] ?? '');
        $message = mysqli_real_escape_string($conn, $_POST['message'] ?? '');

        // Insert into main_form
        $insertSql = "INSERT INTO contact_form (full_name, email, phone, company_name, company_website, service, message) 
                      VALUES ('$name', '$email','$phone', '$company', '$website', '$service', '$message')";
        if (mysqli_query($conn, $insertSql)) {

            // Build data array for email template
            $emailData = [
                "Full Name"        => $name,
                "Email"            => $email,
                "Phone"            => $phone,
                "Company"          => $company,
                "Website"          => $website,
                "Service"          => $service,
                "Message"          => nl2br($message),
                "Submitted At"     => date("Y-m-d H:i:s")
            ];

            // Send email
            $emailSent = send_smtp_mail(
                "adarshji1999@gmail.com",
                "New Form Submission From Contact Us",
                [
                    "Full Name"    => $name,
                    "Email"        => $email,
                    "Phone"        => $phone,
                    "Company"      => $company,
                    "Website"      => $website,
                    "Service"      => $service,
                    "Message"      => nl2br($message),
                    "Submitted At" => date("Y-m-d H:i:s")
                ]
            );

            if ($emailSent) {
                echo "success mail";
            } else {
                echo "error_sending_mail";
            }

        } else {
            echo "error_from_db_insert";
        }


    } elseif ($formType === 'subscribeMailForm') {
        // Create subscribe_mail table if not exists
        $createTableSql = "CREATE TABLE IF NOT EXISTS subscribe_mail (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255),
            submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
        mysqli_query($conn, $createTableSql);

        // Sanitize input
        $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');

        // Insert into subscribe_mail
        $insertSql = "INSERT INTO subscribe_mail (email) VALUES ('$email')";
        if (mysqli_query($conn, $insertSql)) {
            echo "success";
        } else {
            echo "error from main";
        }
    } else {
        echo "invalid_form";
    }

    mysqli_close($conn);
}
?>