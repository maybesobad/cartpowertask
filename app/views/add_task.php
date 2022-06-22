<!-- Modal -->
<div class="modal fade" id="taskModal" tabindex="-1" role="dialog" aria-labelledby="taskPreview">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="thumbnail task">
                <img src="/assets/images/no-image-320.png" alt="" id="imagePreview">
                <div class="caption">
                    <div class="task__user-info">
                        <span id="namePreview"></span>
                        <br>
                        <a href="mailto:#" id="emailPreview"></a>
                    </div>
                    <br>
                    <p id="taskPreview"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Add new task</li>
        </ol>
        <div class="col-md-offset-2 col-md-8">
            <div class="panel panel-default panel-primary">
                <div class="panel-heading">New task</div>
                <div class="panel-body">
                    <form action="/task/add/" method="post" enctype="multipart/form-data" id="addTaskForm">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="task">Task</label>
                            <textarea class="form-control" rows="3" id="task" name="task" placeholder="Task" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <img id="imageThumb" src="#" />
                            <input type="file" id="image" name="image" accept="image/jpg,image/jpeg,image/png,image/gif" required>
                            <p class="help-block">jpg, gif, png</p>
                        </div>
                        <hr>
                        <button type="button" class="btn btn-default " data-toggle="modal" data-target="#taskModal">Preview</button>
                        <button type="submit" class="btn btn-primary pull-right">Add task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>