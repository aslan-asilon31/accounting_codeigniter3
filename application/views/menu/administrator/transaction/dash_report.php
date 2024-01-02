<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard Report Transaction</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-print fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>Anggaran</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                    <a href="<?php echo base_url('administrator/Transaction/print_anggaran')?>">
                                        <span class="pull-left">Cetak Anggaran</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </a>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-print fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>Laporan Anggaran</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                    <a href="<?php echo base_url('administrator/Transaction/print_anggaran_proyek_detail')?>">
                                        <span class="pull-left">Per Proyek Detail</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </a>
                                    <a href="<?php echo base_url('administrator/Transaction/print_anggaran_proyek_summary')?>">
                                        <span class="pull-left">Per Proyek Summary</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </a>
                                    <a href="<?php echo base_url('administrator/Transaction/print_anggaran_lokasi_detail')?>">
                                        <span class="pull-left">Per Lokasi Detail</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </a>
                                    <a href="<?php echo base_url('administrator/Transaction/print_anggaran_lokasi_summary')?>">
                                        <span class="pull-left">Per Lokasi Summary</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </a>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/metisMenu/metisMenu.min.js')?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/js/sb-admin-2.js')?>"></script>
</body>
</html>