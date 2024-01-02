<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laporan Return Pembelian</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <div class="row">
                    <div class="col-sm-2 col-sm-offset-1"> 
                        <h4>No. Pembelian :</h4>
                    </div>

                    <div class="col-lg-6 text-center">
                        <input class="form-control" type="text" name="isi" value="">
                    </div>                  
                </div>

                <div class="row">
                    <div class="col-sm-2 col-sm-offset-1"> 
                        <h4>Pilih Tanggal :</h4>
                    </div>

                    <div class="col-lg-3 text-center">
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1' style="color: black">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                <input style="background-color: white" type='text' class="form-control input-group-addon" name="tglstart" placeholder="Start" />
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 text-center">
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker2' style="color: black;">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                <input style="background-color: white" type='text' class="form-control input-group-addon" name="tglend" placeholder="End" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 col-md-offset-3 text-center" style="padding-bottom: 15px" > 
                        <button id="filter" type="button" name="input"  class="btn btn-danger col-sm-12"><span style="color: white" class="glyphicon glyphicon-zoom-in"></span> Tampilkan</button>
                    </div>
                    <div class="col-sm-2 text-center" style="padding-bottom: 15px" >
                        <a href="<?php echo base_url(); ?>administrator/Genaff/lap_pembelian"><button id="filter" type="button" name="input"  class="btn btn-primary col-sm-12"><span style="color: white" class="glyphicon glyphicon-refresh"></span> Reset</button></a>
                    </div>
                </div>

                <div id="ygdiprint">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_po" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Pembelian</th>
                                        <th>PO</th>
                                        <!-- <th>Approval</th>
                                        <th>Nama Klien</th> -->
                                        <th>Tanggal</th>                                        
                                        <th class="hilang">Print</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>  
                </div>

                <button type="button" id="print" class="btn btn-primary col-md-2" data-toggle="modal" onclick="ayo(); printContent('ygdiprint'); window.location.reload();return false;"><span style="color: white" class="glyphicon glyphicon-print"></span> Print / Save</button>


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
    <!-- Datetime -->
    <script src="<?php echo base_url('assets/addons/moment.js')?>"></script>
    <script src="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.js')?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.responsive.js')?>"></script>

    <script>
    $(document).ready(function(){
        ambildata();
    
        $('#filter').click(function(){
            $('#dtb_po').DataTable().ajax.reload(null,false);
        })
    });

    function ambildata(){
        table = $('#dtb_po').DataTable({
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            // "bFilter": false,
            "info": false,
            "destroy": true,
            "responsive": true,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('administrator/Genaff/ajax_filter_retprc')?>",
                "type": "POST",      
                "data": function(data){
                    data.nopem = $('[name="isi"]').val();
                    data.tgl1 = $('[name="tglstart"]').val();
                    data.tgl2 = $('[name="tglend"]').val();
                },

            },
            //Set column definition initialisation properties.
            "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],
        });
    }
    </script>

    <!-- UNTUK DATETIMEPICKER -->
    <script>
        $(function() {
          $('input[id^=MyDate]').datetimepicker({ format: 'YYYY-MM-DD' });
        }); 

        $(function () {
                    $('#datetimepicker1').datetimepicker({
                        format: 'YYYY-MM-DD'
                    });         
                });
        $(function () {
                    $('#datetimepicker2').datetimepicker({
                        //format: 'DD/MM/YYYY'
                        format: 'YYYY-MM-DD'
                    });         
                });
    </script>


    <!-- untuk print area -->
    <script type="text/javascript">
    function printContent(printpage){
        var headstr = "<html><head><title></title></head><body>";
        var footstr = "</body>";
        var newstr = document.all.item(printpage).innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr+newstr+footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }

    function ayo(){
        $(".hilang").css({'display':'none'});
        $("#dtb_po td:nth-child(7)").css({'display':'none'});
        $("#dtb_po td:nth-child(7)").css({'display':'none'});
    }
    </script>

    <script type="text/javascript">
        function pick_po(id)
        {
            window.open ( "<?php echo site_url('administrator/Genaff/pageprint_prc/')?>"+id,'_blank');
        }
    </script>
</body>
</html>