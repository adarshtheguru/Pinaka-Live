<?php
//test
if ($_POST) {
    require_once('wp-config.php');
    // require_once('wp-load.php');
    // require_once( dirname(__FILE__) . '/wp-load.php' );

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
            // Prepare email details
            $to = "pragneshlimbasiya@gmail.com"; // 👈 your personal email
            $subject = "New Form Submission From Contact us Page";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\nWebsite: $website\Service: $service\nMessage: $message";
            $headers = array('Content-Type: text/plain; charset=UTF-8');

            // Send email using WordPress function
            wp_mail($to, $subject, $body, $headers);

        echo "success";
        } else {
            echo "error from send to personal";
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