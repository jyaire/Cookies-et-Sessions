<?php require 'inc/head.php';
if (empty($_SESSION['loginName'])) {
header('Location: login.php');
} ?>
<section class="cookies container-fluid">
    <div class="row">
        <p>Nombre d'articles dans le panier : <? $_SESSION['nbArticles'] ?></p>
        <p>Liste des articles :
            <?php
            foreach ($_COOKIE as $cookie) {
                if($cookie != $_COOKIE['PHPSESSID']) {
                    echo '<li>Cookie n°';
                    echo $cookie;
                    echo '</li>';
                }
            }
            ?>
        </p>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
