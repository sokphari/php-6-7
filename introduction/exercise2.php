<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
    <style>
        form{
            width: 500px;
            margin: 80px auto;
        }
    </style>
<body>
        <div class="container">
                <form action="" class="shadow py-3 px-3" method="post">
                    <h3 class="text-center">List</h3>
                    <div class="my-3 form-group">
                        <label class="form-label" for="">code</label>
                        <input type="text" name="code" class="form-control" id="">
                    </div>
                    <div class="my-3 form-group">
                        <label class="form-label" for="">name</label>
                        <input type="text" name="name" class="form-control" id="">
                    </div>
                    <div class="my-3 form-group">
                        <label class="form-label" for="">qty</label>
                        <input type="number" name="qty" class="form-control" id="">
                    </div>
                    <div class="my-3 form-group">
                        <label class="form-label" for="">price</label>
                        <input type="number" name="price" class="form-control" id="">
                    </div>
                    <div class="my-3">
                        <button type="submit" class="btn btn-primary" name="Btnsubmit">
                            save
                        </button>
                    </div>
                </form>

                <table class="table text-center text-middle">
                    <thead>
                        <tr>
                            <th>CODE</th>
                            <th>NAME</th>
                            <th>QTY</th>
                            <th>PRICE</th>
                            <th>TOTAL</th>
                            <th>PAYMENT</th>
                            <th>DISCOUNT</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
               
                    

                <?php
                if(isset($_POST['Btnsubmit'])){
                    $code = $_POST['code'];
                    $name = $_POST['name'];
                    $qty = $_POST['qty'];
                    $price = $_POST['price'];
                    $total = $qty*$price;
                    // $discount = 0;
                    if($total>=1 && $total<=10){
                         $discount = 10;
                    }else if($total>=10 && $total<=20){
                        $discount = 20;
                    }
                    else if($total>=20 && $total<=30){
                        $discount = 30;
                    }
                    else if($total>=30 && $total<=40){
                        $discount = 40;
                    }
                    else if($total>=40 && $total<=50){
                        $discount = 50;
                    }elseif($total>=50 && $total<=60){
                        $discount = 60;
                    }
                    else {
                        $discount = 70;
                    }
                    $payment = $total - (($total*($discount/100))); 
                    echo '  
                        <tr>
                            <td>'.$code.'</td>
                            <td>'.$name.'</td>
                            <td>'.$qty.'</td>
                            <td>'.$price.'</td>
                            <td>'.$total.'</td>
                            <td>'.$payment.'</td>
                            <td>'.$discount.'</td>
                        </tr>';
                }
                ?>
                 </table>
        </div>
</body>
</html>