<?php
include 'partials/header.php';

//fetch post from database if id is set
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);
} else {
    header('location: ' . ROOT_URL . 'blog.php');
    die();
}
?>

<section class="singlepost">
    <div class="container singlepost_container">
        <h2>
            <?= $post['title'] ?>
        </h2>
        <div class="post_author">

            <?php
            //fetch author
            $author_id = $post['author_id'];
            $author_query = "SELECT * FROM users WHERE id=$author_id";
            $author_result = mysqli_query($connection, $author_query);
            $author = mysqli_fetch_assoc($author_result);

            ?>
            <div class="post_author-avatar">
                <img src="./images/<?= $author['avatar'] ?>">
            </div>
            <div class="post_author-info">
                <h5>By: <?= "{$author['firstname']} {$author['lastname']}" ?></h5>
                <small> <?= date("M d, Y - H:i", strtotime($post['date_time'])) ?></small>
            </div>
        </div>
        <br>
        <div class="singlepost_thumbnail">
            <img src="./images/<?= $post['thumbnail'] ?>">
        </div>
        <p>
            <?= $post['body'] ?>
        </p>
    </div>
</section>
<!-- ==========end of single post ============== -->





<footer>
    <div class="footer_socials">
        <a href="https://youtube.com/HealthyGyan" target="_blank"><i class="uil uil-youtube"></i></a>
        <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook-f"></i></a>
        <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
        <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram-alt"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
    </div>
    <div class="container footer_container">
        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="">Wild Life</a></li>
                <li><a href="">Nature</a></li>
                <li><a href="">Yoga</a></li>
                <li><a href="">Meditation</a></li>
                <li><a href="">Food</a></li>
                <li><a href="">Plants</a></li>
                <li><a href="">Bhagavad Gita</a></li>
                <li><a href="">Science & Technology</a></li>

            </ul>
        </article>
        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="">Online Support</a></li>
                <li><a href="">Call Number</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Social Support</a></li>
                <li><a href="">Location</a></li>
            </ul>
        </article>
        <article>
            <h4>Blog</h4>
            <ul>
                <li><a href="">Safety</a></li>
                <li><a href="">Repair</a></li>
                <li><a href="">Recent</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">Categories</a></li>
            </ul>
        </article>
        <article>
            <h4>Permalinks</h4>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </article>
    </div>
    <div class="footer_copyright">
        <h3> Copyright &copy; 2023 HealthyGyan </h3>
    </div>
</footer>
<script src="./main.js"></script>
</body>

</html>