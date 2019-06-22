<?php
session_start();
echo isset($_SERVER['Username']);
if(isset($_SERVER['Username'])){
    header('location:login.html');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
    <style>
        input{
            border: none;
            background: none;
        }
    </style>
</head>
<body>
<div class="progress" style="position: fixed;top: 0;left: 0;width: 100%;height: 10px;z-index: 999">
    <div class="progress-bar" role="progressbar" aria-valuenow="60"  style="width: 0%;transition: .5s">
        <span class="sr-only">60% Complete</span>
    </div>
</div>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" name="names" class="form-control" placeholder="names">
                </div>
                <div class="form-group">
                    <input type="text" name="sex" class="form-control" placeholder="sex">
                </div>
                <div class="form-group">
                    <input type="text" name="age" class="form-control" placeholder="age">
                </div>
                <div class="form-group">
                    <input type="text"  name="major" class="form-control" placeholder="mojor">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">
                <?php
//                session_start();
                echo $_SESSION['name'];
                ?>

                </a></li
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!--<li><a href="#">

                    </a></li>-->

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="row">
        <table class="table table-striped col-lg-8">
            <tr>
                <th>姓名</th>
                <th>性别</th>
                <th>年龄</th>
                <th>专业</th>
                <th>操作</th>
            </tr>

        </table>
    </div>
</div>
<script src="jquery-3.4.1.min.js"></script>
<script src='student.js'></script>
</body>
</html>
