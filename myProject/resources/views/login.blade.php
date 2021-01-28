<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
    <h2>Login</h2>
        <div class="row">
            <div class="col-xs-4 col-md-4  col-xs-offset-4 col-md-offset-4">

          
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Username :</label>
                        <input type="text" name="username" id="" class="form-control" placeholder="username"> 
                    </div>
                    <div class="form-group">
                        <label for="">password :</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="submit" name="submit" class="form-control btn btn-primary">
                    </div>


                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

</body>

</html>