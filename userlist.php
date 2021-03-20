<?php
require_once "includes/header.php";
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
//session_start();
$db_select = "SELECT  id,name, email, address, gender FROM users";
$db_connect = mysqli_connect("localhost", "root", "", "student");
$db_query = mysqli_query($db_connect, $db_select);
$count = 1;

?>

<div class="card text-white mb-3"">
    <div class=" card-header bg-dark ">Header</div>
    <div class=" card-body">
    <table class="table table-striped">
        <div class="alert alert-dark" role="alert">
            Total user: <?= $db_query->num_rows ?>
        </div>

        <?php if (isset($_SESSION['update'])) : ?>
            <script>
                swal({
                    title: "Good job!",
                    text: "<?= $_SESSION['old_name'] ?> updated successfully",
                    icon: "success",
                    button: "Aww yiss!",
                });
            </script>
        <?php endif;
        unset($_SESSION['update']);
        unset($_SESSION['old_name']); ?>

        <?php if(isset($_SESSION['alert_message'])): ?>
        <script>
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        </script>
        <?php endif; unset($_SESSION['alert_message']); ?>

        <thead>
            <tr>
                <th scope="col">serial</th>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">address</th>
                <th scope="col">gender</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($db_query as $temp) : ?>
                <tr>
                    <td><?= $count ?></td>
                    <td><?= $temp['id']  ?></td>
                    <td><?= $temp['name']  ?></td>
                    <td><?= $temp['email']  ?></td>
                    <td><?= $temp['address']  ?></td>
                    <td><?= $temp['gender']  ?></td>
                    <td>
                        <a href="update.php?id=<?= $temp['id'] ?>" class="btn btn-outline-warning" name="edit">Edit</a>
                        <a href="delete_reg.php?id=<?= $temp['id'] ?>" name="delete" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
            <?php $count++;
            endforeach; ?>
        </tbody>
    </table>
</div>
</div>


<?php
require_once "includes/footer.php";
?>