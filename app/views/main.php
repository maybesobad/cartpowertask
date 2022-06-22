<div class="container">
    <div class="row">
        <div class="nav pull-right">
            <span>Sort by:</span>
            <a href="/?sort=name">Name</a> |
            <a href="/?sort=email">Email</a> |
            <a href="/?sort=status">Status</a> |
        </div>
        <hr>
    </div>
    <div class="row">
        <?php foreach($data['task_list'] as $item):?>
        <div class="col-md-4">
            <div class="thumbnail task">
                <img src="/uploads/images/<?=$item['image']?>" alt="">
                <div class="caption">
                    <?php if(isset($_SESSION['user'])):?>
                        <p class="checkbox">
                            <label>
                                <input type="checkbox" data-task-id="<?=$item['id']?>" <?=$item['status'] == 1 ? 'checked' : '';?>> Task complete
                            </label>
                        </p>
                        <hr>
                    <?php endif;?>
                    <h4><span class="label label-success pull-right"><?=$item['status'] > 0 ? 'Success' : ''?></span></h4>
                    <div class="task__user-info">
                        <strong><?=$item['name']?></strong><br>
                        <a href="mailto:#"><?=$item['email']?></a>
                    </div>
                    <br>
                    <p class="task__text"><?=$item['task']?></p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>


