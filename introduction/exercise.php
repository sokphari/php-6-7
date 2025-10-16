<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
    <style>
        
    </style>
<body>
    <div class="container px-5 shadow py-5 ">
        <form action="" method="post" class="mt-5">
            <div class="d-flex justify-content-center">
                <img width="150px" height="150px" style="border-radius: 50%;" src="dog.jpg" alt="">
            </div>
            <h3 class="text-center my-3">Form Information</h3>
            <div class="my-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="">
            </div>
            <div class="my-3">
                <label for="" class="form-label">Gender</label>
                <input type="text" name="gender" class="form-control" id="">
            </div>
            <div>
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="">
            </div>
            <div class="my-3">
                <button type="submit" class="btn btn-primary" name="BtnSave">Save</button>
            </div>
        </form>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        
                        <th>NAME</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($_POST['BtnSave'])){
                            $name = $_POST['name'];
                            $gender = $_POST['gender'];
                            $email = $_POST['email'];
                            echo "
                            <tr>
                                <td>$name</td>
                                <td>$gender</td>
                                <td>$email</td>
                            </tr>

                            &&&
                            ";
                           
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

