<?php
$title = 'Food Selection';
include('comman/header.php'); 
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['cuisine'])) {
    $selectedCuisine = $_POST['cuisine'];

    include('shared/db.php');

    $sql = "SELECT name FROM foods WHERE cuisine = :cuisine ORDER BY name ASC";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(':cuisine', $selectedCuisine, PDO::PARAM_STR);
    $cmd->execute();
    $foods = $cmd->fetchAll();

    if (!empty($foods)) {
        echo "<h2>Foods in " . htmlspecialchars($selectedCuisine) . " Cuisine</h2><ul>";
        foreach ($foods as $food) {
            echo "<li>" . htmlspecialchars($food['name']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No foods found for " . htmlspecialchars($selectedCuisine) . " cuisine.</p>";
    }

    $db = null;
} else {
    echo "<p>No cuisine selected. Please go back and select a cuisine.</p>";
    echo '<p><a href="select-cuisine.php">Select a Cuisine</a></p>';
}
?>
</main>
</body>
</html>