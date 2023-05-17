<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the email address from the form
    $email = $_POST['email'];

    // Validate and sanitize the email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "testimonials";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepare and execute the database query
            $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (:email)");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $conn = null;
            echo "<script>alert('Thank you for subscribing!');</script>";
        } catch (PDOException $e) {
            //errors
            echo "<script>alert('Connection failed: " . $e->getMessage() . "');</script>";
        }
    } else {
        //invalid email address with an alert pop-up
        echo "<script>alert('Invalid email address!');</script>";
    }

    //reload the page back to news.html
    echo "<script>window.location.href = 'news.html';</script>";
}
?>