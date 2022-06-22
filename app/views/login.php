<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Login</li>
        </ol>
        <div class="col-md-offset-4 col-md-4">
            <div class="panel panel-default panel-primary">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <?= isset($data['message']) ? '<div class="alert alert-danger" role="alert">'. $data['message'].'</div>' : ''?>

                    <form action="/user/login/" method="POST" id="loginForm">
                        <div class="form-group">
                            <label for="login">Login</label>
                            <input type="text" name="login" class="form-control" id="login" placeholder="Login">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
