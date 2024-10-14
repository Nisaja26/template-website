<?php include("head.php"); ?>

<body class="main-body app sidebar-mini ltr">

    <!-- Loader -->
    <div id="global-loader">
        <img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- page -->
    <div class="page custom-index">

    <?php include("news.php"); ?>  
      
        <!-- main header -->
        <?php include("main-header.php"); ?>

        <!-- main sidebar -->
        <?php include("main-sidebar.php"); ?>

        <!-- main content -->
        <?php include("main-content.php"); ?>

        <!-- sidebar right -->
        <?php include("sidebar-right.php"); ?>

        <!-- footer semua -->
        <?php include("footer.php"); ?>

    </div>
</body>
