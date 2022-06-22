<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Register</li>
        </ol>
        <div class="col-md-offset-4 col-md-4">
            <div class="panel panel-default panel-primary">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form action="/user/register/" method="POST" id="registerForm">
                        <div class="form-group">
                            <label for="login">Login</label>
                            <input type="text" name="login" class="form-control" id="login" placeholder="Login">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirm">Password confirm</label>
                            <input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="Password confirm">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
