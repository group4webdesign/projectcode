<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Testimonials</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='testimonials.css'>
    <script src='main.js'></script>
</head>
<body>
<div class="topnav">
        <a href="homepage.html">Home</a>
        <a href="news.html">News</a>
        <a href="contact.html">Contact</a>
        <a href="about.html">About</a>
        <a href="learn.html">Learn</a>
    </div>
<header>
    <h1>Testimonials</h1>
    <p>See what other happy people are saying about Chucks's Picante:</p>
    </header>
    <main>
    <article>
    <h3>Welcome to Chuck's Picante! If you're a fan of spicy and flavorful salsas, then you've come to the right place. At Chuck's Picante, we pride ourselves on making the most delicious and authentic salsas around. Our recipes have been passed down from generation to generation, and we use only the freshest ingredients to ensure that every jar is bursting with flavor.

But don't just take our word for it. Our loyal customers have been raving about our salsas, and we're excited to share some of their testimonials with you. From the bold and spicy Kickin' Jalapeño to the sweet and tangy Mango Tango, our salsas have something for everyone. Whether you're using them as a dip for chips, a topping for tacos, or a marinade for meats, you're sure to love the taste and quality of Chuck's Picante.

So why not give us a try? We're confident that once you taste our salsas, you'll be hooked. And if you're already a fan, we'd love to hear from you. Send us your own testimonial or review and let us know what you think. We're always looking for ways to improve and make our salsas even better. Thank you for choosing Chuck's Picante, and we hope you enjoy every last bite!
</h3>
</article>
       <?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testimonials";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select four random testimonials from the database
$sql = "SELECT * FROM testimonials ORDER BY RAND() LIMIT 5";
$result = mysqli_query($conn, $sql);

// Display the testimonials
if (mysqli_num_rows($result) > 0) {
    echo "<div class='container'>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card'>";
        echo "<h3>" . $row["name"] . "</h3>";
        echo "<p>" . $row["message"] . "</p>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "No testimonials found.";
}

// Close the database connection
mysqli_close($conn);
?>
        </div>
        <!--<div>
        <h2>Add Your Testimonial</h2>
        <p>Share your own experience with Chucks's Picante:</p>
    <form method="post" action="submit-testimonial.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>
        <button type="submit">Submit</button>
    </form>
</div>-->
</main> 
</body>
</html>