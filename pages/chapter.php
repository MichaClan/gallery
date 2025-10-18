<?php
include('includes/header.php');
include('includes/db_connection.php'); // make sure $conn is available

// Get the chapter ID from the URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "No chapter selected.";
    exit;
}

$chapter_id = $_GET['id'];

// Prepare and execute the query
$stmt = $conn->prepare("SELECT title, description, content FROM chapters WHERE id = ?");
$stmt->bind_param("i", $chapter_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Chapter not found.";
    exit;
}

$chapter = $result->fetch_assoc();
?>

<main>
    <section class="chapter">
        <h1><?= htmlspecialchars($chapter['title']) ?></h1>
        <p><em><?= htmlspecialchars($chapter['description']) ?></em></p>
        <div><?= nl2br(htmlspecialchars($chapter['content'])) ?></div>
    </section>
</main>

<?php
$stmt->close();
include('includes/footer.php');
?>
