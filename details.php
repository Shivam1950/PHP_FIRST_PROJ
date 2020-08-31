<?php 

    include('config\db_connect.php');

    if(ISSET($_POST['delete']))
    {
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
        $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

        if(mysqli_query($conn, $sql))
        {
            header('Location : main.php');
        } {
            echo 'query error' . mysqli_error($conn);
        }
    }

    //check GET request id param
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        //make sql
        $sql= "SELECT * FROM pizzas WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

        //print_r($pizza);
    }

?>

<!DOCTYPE html>
<html>
    <?php include('temphlates\header.php'); ?>

    <div class="container center">
    <?php if($pizza) : ?>
        <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
        <p>Created by : <?php echo htmlspecialchars($pizza['email']); ?></p>
        <p><?php echo date($pizza['created_at']); ?></p>
        <h5>Ingredients</h5>
        <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>
    
    <form action="details.php" method="post">
        <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
        <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
    </form>

    <?php else : ?>
     <h5>No such pizza exist</h5>
    <?php endif; ?>
    </div>
    
    <?php include('temphlates\footer.php'); ?>
</html>