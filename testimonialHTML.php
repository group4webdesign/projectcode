<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Testimonials</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='testimonials.css'>
    <script src='main.js'></script>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var icon = document.getElementById('icon');
            var ul = document.querySelector('ul');

            icon.addEventListener('click', function() {
            ul.classList.toggle('show');
            });
        });
    </script>
</head>
<body>
<nav>
        <label class = "logo">Chucks Picante</label>
        <ul>
            <li><a href = "homePage.html">Home</a></li>
            <li><a href = "about.html">About</a></li>
            <li><a href = "news.html">News</a></li>
            <li><a href = "faq.html">FAQ</a></li>
            <li><a href = "careers.html">Jobs</a></li>
            <li><a href = "environment.html">Environment</a></li>
            <li><a href = "learn.html">Learn</a></li>
            <li><a href = "recipe.html">Recipes</a></li>
            <li><a href = "contact.html">Contact</a></li>
        </ul>
        <label id = "icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testimonials";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// get four random testimonials from the database
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

mysqli_close($conn);
?>
        </div>

</main> 

<section class="footer">
        <div class="social">
            <a href="https://instagram.com/charlie_.miller?igshid=NTc4MTIwNjQ2YQ=="><i class="fab fa-instagram"></i></a>
            <a href="https://t.snapchat.com/X9Lv35rz"><i class="fab fa-snapchat"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100027169909640"><i class="fab fa-facebook-f"></i></a>
        </div>
        
        <ul class="list">
            <li>
                <a href="homePage.html">Home</a>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
            <li>
                <a href="faq.html">FAQ</a>
            </li>
        </ul>
    </section>
</body>
</html>