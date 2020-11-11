<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6">
             <h1>Posts</h1>
        </div>
        <div class="col-md-6">
            <a href="<?= URLROOT; ?>/posts/add" class="btn btn-primary pull-right"><i class="fa fa-pencil"></i> Add post</a>
        </div>
    </div>
    <?php foreach($data['posts'] as $post): ?>
        <div class="card card-body mb-3">
            <h4 class="card-title"><?= $post->title; ?></h4>
            <div class="bg-light p-2 mb-3">
                Written by <?= $post->name ?> on <?= $post->created_at ?>
            </div>
            <p class="card-text"><?= $post->body ?></p>
        </div>
    <?php endforeach; ?>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>