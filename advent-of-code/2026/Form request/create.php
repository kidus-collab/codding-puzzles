<?php
declare(strict_types=1);

$email = '';
$title = '';
$ingredients = '';
$errors = ['email' => '', 'title' => '', 'ingredients' => ''];

if (isset($_POST['submit'])) {
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email field cannot be empty <br />';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['title'])) {
        $errors['title'] = 'Title field cannot be empty <br />';
    } else {
        $title = $_POST['title'];
    }

    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'At least one ingredient required <br />';
    } else {
        $ingredients = $_POST['ingredients'];
    }
}

require 'header.php';
?>

<section class="container grey-text">
    <h4 class="center">Add Pizza</h4>

    <form class="white" action="create.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <div class="red-text">
            <?php echo $errors['email']; ?>
        </div>

        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
        <div class="red-text">
            <?php echo $errors['title']; ?>
        </div>

        <label>Ingredients:</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
        <div class="red-text">
            <?php echo $errors['ingredients']; ?>
        </div>

        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
</section>

</body>
</html>
