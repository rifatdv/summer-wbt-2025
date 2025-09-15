<?php
// Define variables and set to empty values
$nameErr = $buyingPriceErr = $sellingPriceErr = "";
$name = $buying_price = $selling_price = "";
$display = false;
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
    } else {
        $name = trim($_POST["name"]);
    }

    // Validate Buying Price
    if (empty($_POST["buying_price"])) {
        $buyingPriceErr = "Buying price is required.";
    } elseif (!is_numeric($_POST["buying_price"]) || $_POST["buying_price"] < 0) {
        $buyingPriceErr = "Buying price must be a non-negative number.";
    } else {
        $buying_price = trim($_POST["buying_price"]);
    }

    // Validate Selling Price
    if (empty($_POST["selling_price"])) {
        $sellingPriceErr = "Selling price is required.";
    } elseif (!is_numeric($_POST["selling_price"]) || $_POST["selling_price"] < 0) {
        $sellingPriceErr = "Selling price must be a non-negative number.";
    } else {
        $selling_price = trim($_POST["selling_price"]);
    }

    // Checkbox
    $display = isset($_POST["display"]);

    // If no errors, process the data (e.g., save to DB)
    if (empty($nameErr) && empty($buyingPriceErr) && empty($sellingPriceErr)) {
        $success = true;
        // Here you can add code to insert into database
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <h1>Add Product</h1>
    <?php if ($success): ?>
        <p class="success">Product added successfully!</p>
    <?php endif; ?>
    <form action="insert.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
        <span class="error"> <?php echo $nameErr; ?></span><br><br>

        <label for="buying">Buying Price:</label>
        <input type="number" id="buying_price" name="buying_price" value="<?php echo htmlspecialchars($buying_price); ?>">
        <span class="error"> <?php echo $buyingPriceErr; ?></span><br><br>

        <label for="selling">Selling Price:</label>
        <input type="number" id="selling_price" name="selling_price" value="<?php echo htmlspecialchars($selling_price); ?>">
        <span class="error"> <?php echo $sellingPriceErr; ?></span><br><br><hr>

        <input type="checkbox" id="display" name="display" <?php if($display) echo 'checked'; ?>> Display<br><br><hr>

        <input type="submit" value="Save">
    </form>
</body>
</html>
