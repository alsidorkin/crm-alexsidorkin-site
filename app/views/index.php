<?php 

if($_SERVER['REQUEST_URI'] == '/crm-alexsidorkin-site/index.php'){

    header('Location: /crm-alexsidorkin-site/');
    exit();
}
$title ='User list';
ob_start();
?>

<h1>Home page</h1>

<?php $content=ob_get_clean();
include 'app/views/layout.php';