<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style bootstrap -->
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group my-3">
                <label for="">username</label>
                <input type="text" name="username" id="">
            </div>
            <div class="form-group my-3">
                <label for="">password</label>
                <input type="password" name="password" id="">
            </div>
            <div class="form-group my-3">
                <label for="">Role</label>
                <select name="role" id="">
                    <option value="Admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="form-group my-3">
                <label for="">Active</label>
                <select name="" id="">
                    <option value="true">true</option>
                    <option value="false">false</option>
                </select>
            </div>
        </form>
    </div>
</body>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $active = $_POST['active'];
        if($active == 'false'){
            echo "account not found >>> ";
        }
        if(($name == 'admin' && $password == '12345' && $role=='admin') 
            ||
           ($name == 'manager' && $password == '12345' && $role=='manager')){
            if($role=='admin'){
                echo "Welcome Admin — Full Access";
            }elseif($role=='manager'){
                echo "Welcome Manager — Limited Access";
            }
        }
    }
    ?>
</html>