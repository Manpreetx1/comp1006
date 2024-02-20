<?php 
$title = 'select-cuisine';
include('comman/header.php'); ?>

<h2>selcet-cuisine</h2>
<form method="post" action="foods.php">
        <label for="cuisine">cuisine: *</label>
        <select name="cuisine" id="cuisine" required>
            <?php
            include('comman/db.php');

            $sql = "SELECT name FROM foods ORDER BY name ABC";
            $cmd = $db->prepare($sql);
            $cmd->execute();
            $cuisines = $cmd->fetchAll();

            foreach ($foods as $foods) {
                echo '<option value="' . htmlspecialchars($foods['name']) . '">' . htmlspecialchars($foods['name']) . '</option>';
            }
            $db = null;
            ?>
        </select>
    </fieldset>
    <button type="Get Foods">Get Foods</button>
</form>
</main>
</body>
</html>