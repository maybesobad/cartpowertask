<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Task manager</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css?ver=<?=uniqid()?>">
</head>
<body>

<?php $uri = str_replace('/', '', $_SERVER['REQUEST_URI']);?>
<nav class="navbar navbar-default navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                Task manager
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?= $uri == 'taskadd' ? 'class="active"': '';?>><a href="/task/add/">Add new task</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['user'])):?>
                    <li><a href="/user/logout/">Logout</a></li>
                <?php else:?>
                    <li><a href="/user/login/">Login</a></li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>