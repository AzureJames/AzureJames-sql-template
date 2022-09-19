<?php 
include ('../inc/connect.php');


if(isset($_POST['submit'])) {
    echo '<pre>';
    var_dump($_POST);
    echo "</pre>";
    
    extract($_POST);   

    // old way
    // $insert_sql = "INSERT INTO table (column_names) VALUES ($variables)";
    // echo $insert_sql;
    // $insert_res = $conn->query($insert_sql);
    // if($conn->insert_id)
    // {
    //     $validation = "Inserted";
    //     }
    //     else {
    //         $validation = $conn->error;
    //     }
    // }
    
    // prepared statement way
    // $stmt_insert = $conn->prepare("INSERT INTO table (column_names) VALUES (?, ?, ?, ?, ?)");
    // $stmt_insert->bind_param("sdiss", $variables);
    
    // $stmt_insert->execute();        

    // if($stmt_insert->error) { 
    //         $validation = "Error: " . $stmt_insert->error;
    // } 
    // else { 
    //     $validation = "Expense Inserted";
    //     $date = $amount = $category = $store = $comment = "";             
    // }
    // $stmt_insert->close();    
}
        
?>


<?php 
include ('../inc/header.php');
?>

<form action="" method="post">
    <?php if (isset($validation)): ?>
        <div class="validation"><?php echo $validation; ?></div>
    <?php endif; ?>
    
    <input type="submit" value="submit" name="submit">
</form>

<?php 
include ('../inc/footer.php');
?>
