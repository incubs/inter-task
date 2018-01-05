<?php
include 'vendor/autoload.php';

$id=$_GET['id'];
$user = new \Classes\User();
$user->setid($id);
$row=$user->getSingleUser();

//$mysql=mysqli_connect('localhost','root','','pagevamp_task');
//$query="select * from users where id=".$id;
//$result=mysqli_query($mysql,$query);
//$row = mysqli_fetch_assoc($result);
if (!empty($row)){
?>
    <html>
    <head>
        <title>User Crud</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <h1>Update User</h1>
            <form action="confirmUpdate.php" class="form" role="form" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $row->getEmail(); ?>">
                </div>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $row->getFirstName(); ?>" >
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"value="<?php echo $row->getLastName(); ?>" >
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"><?php echo $row->getmessage(); ?></textarea>
                </div>
                <div class="form-group">
                    <input name="id" type="hidden" value="<?php echo $row->getid(); ?>"/>
                    <button class="btn btn-success" name="update" >Update</button>
                </div>
            </form>
        </div>
    </div>
    </body>
    </html>
<?php } ?>