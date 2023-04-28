<?php
// Connect to database
$pdo = new PDO('mysql:host=localhost;dbname=notes', 'root', 'root');

// Retrieve all notes from the database
$statement = $pdo->prepare('SELECT * FROM notes');
$statement->execute();
$notes = $statement->fetchAll(PDO::FETCH_ASSOC);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Insert new note into the database
    $statement = $pdo->prepare('INSERT INTO notes (title, content, created_at) VALUES (:title, :content, NOW())');
    $statement->bindParam(':title', $title);
    $statement->bindParam(':content', $content);
    $statement->execute();

    // Redirect to home page
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Note Taking App</title>
    <style>
        form{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100vw;
        }
        .contain{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <h1>Note Taking App</h1>

    <h2>Add New Note</h2>

    <form method="post">
        <div class="contain">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>

        <label for="content">Content:</label><br>
        <textarea id="content" name="content"></textarea><br>

        <input type="submit" value="Save">
        </div>
    </form>

    <h2>My Notes</h2>

    <ul>
        <?php foreach ($notes as $note): ?>
            <li>
                <h3><?php echo $note['title']; ?></h3>
                <p><?php echo $note['content']; ?></p>
                <small>Created at <?php echo $note['created_at']; ?></small>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
