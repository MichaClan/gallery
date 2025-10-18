<?php include('../includes/header.php'); ?>
<?php include('../includes/db_connection.php'); ?>

<?php
$sql = "SELECT id, title, description FROM chapters ORDER BY publish_date DESC LIMIT 5";
$result = $conn->query($sql);
?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <img src="../images/finalfantasy6wallpaper.jpg" alt="No official art yet sadly">
        <div class="hero-text">
            <h1>The Intertwined Archives</h1>
            <p>Where myth, memory, and madness intertwine...</p>
        </div>
    </section>

    <section class="recent-chapters">
        <h2>Recent Chapters</h2>
        <ul>
            <?php while($row = $result->fetch_assoc()): ?>
                <li>
                    <a href="chapter.php?id=<?= $row['id'] ?>">
                        <h3><?= $row['title'] ?></h3>
                        <p><?= $row['description'] ?></p>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
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

<?php include('../includes/footer.php'); ?>
