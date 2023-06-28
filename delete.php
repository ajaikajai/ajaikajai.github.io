<?php
require("connection.php");

// Check if the product ID is provided

    $productId = $_GET['id'];
        $selectQuery = "SELECT `image` FROM `product_id` WHERE `id` = $productId";
        $selectResult = $con->query($selectQuery);
     
            $row = $selectResult->fetch_assoc();
            $imagePath = "prd/" . $row['image'];
     
                unlink($imagePath);
    // Delete the product from the database
    $deleteQuery = "DELETE FROM `product_id` WHERE `id` = $productId";
    $deleteResult = $con->query($deleteQuery);

    // Check if deletion was successful

        // Delete the associated image file

            
if ($deleteResult) {

        // Show JavaScript alert for successful deletion
        echo "<script>alert('Conform the file have to delete.');</script>";

        // Redirect to the view product page
        echo "<script>window.location.href = 'view product.php';</script>";
}else {
        // Show JavaScript alert for deletion failure
        echo "<script>alert('Failed to delete the product with ID $productId.');</script>";
    }

?>
