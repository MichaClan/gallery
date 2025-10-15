<?php include('includes/header.php'); ?>
<?php
//$servername = "localhost";
//$username = "root";
//$password = ""; // your phpMyAdmin password if any
//$dbname = "gallery";
//
//$conn = new mysqli($servername, $username, $password, $dbname);
//
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "SELECT id, title, short_description FROM chapters ORDER BY created_at DESC LIMIT 5";
//$result = $conn->query($sql);
//?>
<!---->
<!--<section class="recent-chapters">-->
<!--    <h2>Recent Chapters</h2>-->
<!--    <ul>-->
<!--        --><?php //while($row = $result->fetch_assoc()): ?>
<!--            <li>-->
<!--                <a href="chapter.php?id=--><?php //= $row['id'] ?><!--">-->
<!--                    <h3>--><?php //= $row['title'] ?><!--</h3>-->
<!--                    <p>--><?php //= $row['short_description'] ?><!--</p>-->
<!--                </a>-->
<!--            </li>-->
<!--        --><?php //endwhile; ?>
<!--    </ul>-->
<!--</section>-->

<main>
    <!-- Hero Section -->
    <section class="hero">
        <img src="images/hero-placeholder.jpg" alt="The Intertwined Archives">
        <div class="hero-text">
            <h1>The Intertwined Archives</h1>
            <p>Where myth, memory, and madness intertwine...</p>
        </div>
    </section>

    <!-- Latest Chapters Section -->
    <section class="latest-chapters">
        <h2>Latest Chapters</h2>
        <div class="chapters-list">
            <article>
                <h3>Chapter 32: The Laughing Silence</h3>
                <p>When Larjuro’s divine speech got interrupted by an angry goat...</p>
            </article>
            <article>
                <h3>Chapter 31: Tea of the Thousand Lies</h3>
                <p>Kioljit learns that not every tea ceremony is sacred.</p>
            </article>
            <!-- You can later fetch these dynamically from a database -->
        </div>
    </section>

    <!-- About the Story -->
    <section class="about-story">
        <h2>About the Jittleyang Chronicles</h2>
        <p>
            Long ago, in an age when beliefs shaped worlds, two clans stood divided —
            the Jittleyang, who sought order in chaos, and the Fuhulatoogan, who
            worshipped chaos as divine order. This is their story... or something
            close to it.
        </p>
    </section>
</main>

<?php include('includes/footer.php'); ?>
