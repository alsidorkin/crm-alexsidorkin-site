<?php 
$title ='Create user';
ob_start();
?>
<h1>Create user</h1>

<form action="index.php?page=users&action=store" method="post">
    <div class="mb-3">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
        <label for="email">Email address</label>
        <input type="text" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="mb-3">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>


<?php $content=ob_get_clean();
include 'app/views/layout.php'; ?>