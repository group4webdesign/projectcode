<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //the form field values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testimonials";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        $stmt->execute();

        $conn = null;

        echo "<script>alert('Thank you for your message! We will get back to you soon.');</script>";
    } catch (PDOException $e) {
        //connection errors
        echo "<script>alert('Connection failed: " . $e->getMessage() . "');</script>";
    }

    // re direct to the page
    echo "<script>window.location.href = 'contact.html';</script>";
}
?>
