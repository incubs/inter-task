<?php


include 'vendor/autoload.php';
$users = (new Classes\User())->getAll();

?>

<html>
<head>
    <title>User Crud</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>User List</h1>
        <table class="table table-bordered table-striped">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Message</th>
                <th><a href="index.php" class="btn btn-primary">Add user</a></th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->getFirstName(); ?></td>
                    <td><?php echo $user->getLastName(); ?></td>
                    <td><?php echo $user->getEmail(); ?></td>
                    <td><?php echo $user->getmessage(); ?></td>
                    <td><a href="update.php?id=<?php echo  $user->getid();?>" class="btn btn-warning">update</a></td>
                    <td><a href="delete.php?id=<?php echo  $user->getid();?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
</body>
</html>
