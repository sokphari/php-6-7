<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
</head>
    <style>
        form{
            margin-top: 50px;
            width: 500px;
            height: auto;
        }
    </style>
<body>
    <div class="container d-flex justify-content-center px-5">
        <form action="" class="shadow rounded-lg py-3 px-5" method="post">
            <h1 class="text-center">Register</h1>
            <div class="my-3 form-group">
                <label for="">Name</label>
                <input class="form-control" type="text" name="name" id="">
            </div>
            <div class="my-3 form-group">
                <label for="">Email</label>
                <input class="form-control" type="email" name="email" id="">
            </div>
            <div class="my-3 form-group">
                <label for="">Password</label>
                <input class="form-control" type="password" name="password" id="">
            </div>
            <div class="my-3 form-group">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <div>
        <table class="table">
            <thead class="">
                <tr>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
              <?php
              $array = [];
              if(isset($_POST['submit'])){
                  $name = $_GET['name'];
                  $email = $_GET['email'];
                  $password = $_GET['password'];
                  $array[] = [
                        'name' => $name,
                        'email' => $email,
                        'password' => $password
                  ];
                  foreach($array as $value){
                      echo "
                        <tr>
                          <td>{$array['name']}</td>
                          <td>{$array['email']}</td>
                          <td>{$array['password']}</td>
                          <td>
                          <div>
                            <a class='btn btn-warning' href=''>Edit</a>
                            <a class='btn btn-danger' href=''>Delete</a>
                          </div>
                          </td>
                      </tr>
                      ";
                  }
              }
              ?>
            </tbody>
        </table>
    </div>
</body>
</html>
