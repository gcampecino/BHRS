<?php $this->load->view(BACKEND.'/include/head.php',$header);?>

<body>
    <div id="wrapper">
        <?php $this->load->view(BACKEND.'/include/navigation.php');?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- put data here -->

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<!-- jQuery Version 1.11.0 -->
<?php $this->load->view(BACKEND.'/include/js.php');?>

</body>

<?php $this->load->view(BACKEND.'/include/footer.php');?>