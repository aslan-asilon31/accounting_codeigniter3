<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Master Customer : Tambah Customer</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <form>
                    <div class="row form-group">
                        <div class="col-lg-12 text-center">
                            <h2>Data Customer</h2>                            
                        </div>                        
                    </div>
                    <div class="row form-group">                    
                        <div class="col-lg-2">
                            <label>Kode Customer</label>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" name="code">
                        </div>
                        <div class="col-lg-2">
                            <label>Area</label>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" name="area">
                        </div>                  
                    </div>
                    <div class="row form-group">                    
                        <div class="col-lg-2">
                            <label>Nama Customer</label>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" name="nama">
                        </div> 
                        <div class="col-lg-2">
                            <label>No Telepon</label>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" name="notlp">
                        </div>                   
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-2">
                            <label>Kota</label>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" name="kota">
                        </div>
                        <div class="col-lg-2">
                            <label>Fax</label>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" name="fax">
                        </div> 
                    </div>
                    <div class="row form-group">                    
                        <div class="col-lg-2">
                            <label>Alamat</label>
                        </div>
                        <div class="col-lg-4">
                            <textarea name="alamat" class="form-control" rows="5" style="resize:vertical;"></textarea>
                        </div>
                        <div class="col-lg-2">
                            <label>Acc Piutang</label>
                        </div>
                        <div class="col-lg-4">
                            <textarea name="accpiutang" class="form-control" rows="5" style="resize:vertical;"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12 text-center">
                            <h2>Data NPWP</h2>                            
                        </div>                        
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-2">
                            <label>Nama</label>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" name="namanpwp">
                        </div>
                        <div class="col-lg-2">
                            <label>NPWP</label>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" name="nonpwp">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-2">
                            <label>Alamat</label>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" name="almtnpwp">
                        </div>
                        <div class="col-lg-2">
                            <label>NPKP</label>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" name="npkp">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-2 col-lg-offset-2">
                            <button type="submit" class="btn btn-block btn-primary btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                        </div>
                        <div class="col-lg-2">
                            <a href="<?php echo base_url()?>administrator/Master/add_cust" class="btn btn-block btn-primary btn-primary"><span class="glyphicon glyphicon-remove-circle"></span> Batal</a>
                        </div>
                    </div>
                </form>
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