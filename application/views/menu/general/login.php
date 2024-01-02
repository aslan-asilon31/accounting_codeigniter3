<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Project Match Terpadu" content="Match Terpadu">
    <meta name="Author" content="Kaisha Satrio">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/sbadmin/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">
    <!-- sbadmin -->
    <link href="<?php echo base_url('assets/sbadmin/css/sb-admin-2.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.responsive.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.css') ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/addons/select2-bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/extra.css') ?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Match Terpadu</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <?php
                            if (isset($_SESSION['alert'])) {
                                echo $_SESSION['alert'];
                            }
                            ?>
                        </div>
                        <form id="form-login" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="password" name="password" type="password" value="" required>
                                </div>
                                <button onclick="loginsys()" class="btn btn-block btn-success btn-default">
                                    LOGIN
                                </button>
                            </fieldset>
                        </form>
                        <br>
                        <center>
                            <p>Repost by <a href='https://code.candilkuya.com/' title='code.candilkuya.com' target='_blank'>code.candilkuya.com</a></p>
                        </center>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js') ?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/metisMenu/metisMenu.min.js') ?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/js/sb-admin-2.js') ?>"></script>
    <!-- Datetime -->
    <script src="<?php echo base_url('assets/addons/moment.js') ?>"></script>
    <script src="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.js') ?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.responsive.js') ?>"></script>
    <!-- Number to Money -->
    <script src="<?php echo base_url('assets/addons/jquery.number.js') ?>"></script>
    <!-- Addon -->
    <script src="<?php echo base_url('assets/addons/extra.js') ?>"></script>
    <script>
        function loginsys() {
            $('#form-login').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "<?php echo site_url('Dashboard/loginauth') ?>",
                    type: "POST",
                    data: $('#form-login').serialize(),
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status) {
                            var url = "<?php echo site_url('administrator/Dashboard') ?>";
                            window.location = url;
                        } else {
                            location.reload(false);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error adding / update data');
                    }
                });
            });
        }
    </script>
</body>

</html>