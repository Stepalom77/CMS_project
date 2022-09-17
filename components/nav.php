<?php include "includes/db.php" ?>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php 
                        $select_titles = "SELECT category_title from categories WHERE category_title='Typescript' ";
                        $select_all_titles = mysqli_query($connection, $select_titles);
                        $titles = mysqli_fetch_row($select_all_titles);
                        $typescript = $titles[0];
                        $select_python = "SELECT category_title from categories WHERE category_title='Python' ";
                        $select_all_python = mysqli_query($connection, $select_python);
                        $titles_python = mysqli_fetch_row($select_all_python);
                        $python = $titles_python[0];
                        $select_rust = "SELECT category_title from categories WHERE category_title='Rust' ";
                        $select_all_rust = mysqli_query($connection, $select_rust);
                        $titles_rust = mysqli_fetch_row($select_all_rust);
                        $rust = $titles_rust[0];

                    ?>
                   <li>
                        <a href="#"><?php  echo $typescript  ?> </a>
                    </li>
                    <li>
                        <a href="#"><?php echo $python ?> </a>
                    </li>
                    <li>
                        <a href="#"><?php echo $rust ?></a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>