<?php
include "includes/header.php";
include "includes/navigation.php";

?>

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Admin
                    <small>author</small>
                </h1>
            </div>
            <div class="col-xs-12">
                <?php
                if (isset($_GET['source'])) {
                    $source = $_GET['source'];
                } else {
                    include "./includes/view_all_comments.php";
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php" ?>