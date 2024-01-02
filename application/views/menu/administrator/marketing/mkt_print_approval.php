<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cetak Approval</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form id="form_printbapp" method="post" action="#" class="form-horizontal">
                            <div class="form-group">                              
                                <label class="col-sm-3 control-label">Nomor Approval</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="apprcode" readonly>
                                    <input type="hidden" name="appr_id">
                                    <input type="hidden" name="supp_id">
                                    <input type="hidden" name="podet_id">
                                    <input type="hidden" name="gd_id">
                                    <input type="hidden" name="pajak">
                                </div>
                                <div class="col-sm-1">
                                    <a href="javascript:void(0)" onclick="srch_appr()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <hr style="border: solid 2px; color: black;"">
                    <div class="pull-right">
                        <h3><strong>A P P R O V A L</strong></h3>
                    </div>
                </div>
                <div class="row approw">
                    <label class="col-sm-3 control-label">CLIENT</label>
                    <div class="col-sm-4">
                        <span name="cli_name">Nama Client</span>
                    </div>
                </div>
                <div class="row approw-top">
                    <label class="col-sm-3 control-label">                        
                            NO APPROVAL                        
                    </label>
                    <div class="col-sm-4">
                        <span name="appr_code">No Approval</span>
                    </div>
                    <label class="col-sm-2 control-label" style="border-left: solid 1px blue">
                        DATE                        
                    </label>
                    <div class="col-sm-3">
                        <span name="appr_date">Tangga Approval</span>
                    </div>
                </div>
                <div class="row approw-top" style="padding-bottom: 50px;">
                    <label class="col-sm-3 control-label">                        
                            JOB DESCRIPTION
                    </label>
                    <div class="col-sm-4">
                        <span name="appr_job">Deskripsi Pekerjaan</span>
                    </div>
                </div>
                <div class="row approw-top">
                    <div class="row" style="margin-left: 3px;">
                        <label class="col-sm-3 control-label">                        
                                COST                        
                        </label>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-3">Ukuran</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-8">
                            <span name="appr_size"></span>
                        </div>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-3">Lokasi</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-8">
                            <span name="appr_loc"></span>
                        </div>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-3">Tanggal</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-8">
                            <span name="appr_ctr"></span>
                        </div>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-3">Materi</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-8">
                            <span name="appr_visual"></span>
                        </div>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-3">Media Placement Sebelum Discount</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-2 text-right">
                            <span name="appr_dpp"></span>
                        </div>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-1">Disc. 1</div>
                        <div class="col-sm-2"><span name="appr_dscp1"></span> %</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-2 text-right" style="color: red;">
                            <span name="appr_dscn1"></span>
                        </div>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-1">Disc. 2</div>
                        <div class="col-sm-2"><span name="appr_dscp2"></span> %</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-2 text-right" style="color: red; border-bottom: solid 1px black;">
                            <span name="appr_dscn2"></span>
                        </div>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-3">Media Placement Sesudah Discount</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-2 text-right">
                            <span name="appr_sub1"></span>
                        </div>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-1">PPN</div>
                        <div class="col-sm-2"><span name="appr_ppnp"></span> %</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-2 text-right">
                            <span name="appr_ppnn"></span>
                        </div>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-3">Pajak Reklame</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-2 text-right" style="border-bottom: solid 1px black;">
                            <span name="appr_pajak"></span>
                        </div>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-3">Media Placement Setelah Pajak</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-2 text-right">
                            <span name="appr_sub2"></span>
                        </div>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-1">PPH</div>
                        <div class="col-sm-2"><span name="appr_pphp"></span> %</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-2 text-right" style="color: red; border-bottom: solid 1px black;">
                            <span name="appr_pphn"></span>
                        </div>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-3">Total</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-2 text-right">
                            <span name="appr_sub3"></span>
                        </div>
                    </div>
                    <div class="row approw-side">
                        <div class="col-sm-3">Terbilang</div>
                        <div class="col-sm-1 text-right">:</div>
                        <div class="col-sm-8">
                            <span name="appr_spell"></span>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 3px; margin-right: 3px;">
                        <div class="col-sm-12 col-xs-12">
                            <table id="dtb_app" class="table table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="col-sm-1 text-center">No</th>
                                        <th class="col-sm-8 text-center">Description</th>
                                        <th class="col-sm-3 text-center">Amount<br> (Before Discount)</th>
                                    </tr>
                                </thead>
                                <tbody id="tb_content">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row approw-top">
                    <div class="row" style="margin-left: 3px;">
                        <label class="col-sm-3 control-label">PAYMENT</label>
                        <div class="col-sm-4 col-sm-offset-5" style="border-left: solid 1px blue">
                            <span>CLIENT APPROVAL:</span>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 3px;">
                        <div class="col-sm-8" style="padding-bottom: 50px;">
                            <span>Free Recovering: </span><span name="appr_reco"></span><br>
                            <p id="pcontent">
                                
                            </p>
                        </div>
                        <div class="col-sm-4" style="border-left: solid 1px blue; padding-bottom: 50px;">
                            <span>DATE:</span>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 3px; font-size: 12px;">
                        <div class="col-sm-2 text-center" style="border: solid 1px blue; border-left: none;">
                            Director
                        </div>
                        <div class="col-sm-2 text-center" style="border: solid 1px blue; border-left: none;">
                            Account SPV / Manager
                        </div>
                        <div class="col-sm-2 text-center" style="border: solid 1px blue; border-left: none;">
                            Corp. Secretary
                        </div>
                        <div class="col-sm-2 text-center" style="border: solid 1px blue; border-right: none; border-left: none;">
                            Finance Dept.
                        </div>
                        <div class="col-sm-4" style="border-left: solid 1px blue; padding-bottom: 15px;">
                            
                        </div>
                    </div>
                    <div class="row" style="margin-left: 3px; font-size: 12px;">
                        <div class="col-sm-2" style="padding-bottom: 150px; border-right: solid 1px blue;">
                            
                        </div>
                        <div class="col-sm-2" style="padding-bottom: 150px; border-right: solid 1px blue;">
                            
                        </div>
                        <div class="col-sm-2" style="padding-bottom: 150px; border-right: solid 1px blue;">
                            
                        </div>
                        <div class="col-sm-2" style="padding-bottom: 150px;">
                            
                        </div>
                        <div class="col-sm-4" style="padding-bottom: 133px; border-left: solid 1px blue;">
                            <span>Remarks:</span>        
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-3 col-xs-offset-9 text-right">
                        <a href="javascript:void(0)" type="button" class="btn btn-default" onclick="printPre()"><span class="glyphicon glyphicon-print"></span> Print</a>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <!-- Modal Search -->
    <div class="modal fade" id="modal_appr" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_appr" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Approval</th>
                                        <th>PO</th>
                                        <th>Tanggal</th>
                                        <th>Customer</th>
                                        <th>Lokasi</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_bapp" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_bapp" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No.BAPP</th>
                                        <th>Approval</th>
                                        <th>Tgl.Approval</th>
                                        <th>Client</th>
                                        <th>Tgl.BAPP</th>                                        
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
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
        var id; var suppid; var prc; var qty; var sub;
        $(document).ready(function()
        {
            $('#dtp1').datetimepicker({                
                format: 'YYYY-MM-DD'
            });
            id=$('[name="po_id"]').val();            
            prc = 0; qty = 0; sub = 0;

            $('[name=po_qty]').on('input', function() {                
            });
        });

        function printPre()
        {
            var ids = $('[name=appr_id]').val();
            window.open ( "<?php echo site_url('administrator/Marketing/pageprint_approval/')?>"+ids,'_blank');
        }

        function printDiv(divName)
        {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
    <script>
        function srch_appr()
        {            
            $('#modal_appr').modal('show');
            $('.modal-title').text('Cari Approval');
            table = $('#dtb_appr').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_appr')?>",
                    "type": "POST",                
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function pick_appr(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_appr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="appr_id"]').val(data.APPR_ID);
                    pick_cust(data.CUST_ID);
                    $('[name="appr_code"]').text(data.APPR_CODE);
                    $('[name="appr_date"]').text(data.APPR_DATE);
                    $('[name="appr_job"]').text(data.APPR_JOBDESC);
                    var size = 'Lebar: ' + data.APPR_WIDTH + 'm, Panjang: ' + data.APPR_LENGTH + 'm, Sisi: ' + data.APPR_SIDE + 'mk';
                    $('[name="appr_size"]').text(size);
                    pick_loc(data.LOC_ID);
                    var ctr = data.APPR_CONTRACT_START + ' s/d ' + data.APPR_CONTRACT_END;
                    $('[name="appr_ctr"]').text(ctr);
                    $('[name="appr_visual"]').text(data.APPR_VISUAL);
                    $('[name="appr_dpp"]').text(data.APPR_DPP_INCOME);
                    $('[name="appr_dscp1"]').text(data.APPR_DISC_PERC1);
                    $('[name="appr_dscn1"]').text(data.APPR_DISC_SUM1);
                    $('[name="appr_dscp2"]').text(data.APPR_DISC_PERC2);
                    $('[name="appr_dscn2"]').text(data.APPR_DISC_SUM2);
                    // var sub1 = (data.APPR_DPP_INCOME*1) - (data.APPR_DISC_SUM1*1) - (data.APPR_DISC_SUM2*1);
                    $('[name="appr_sub1"]').text(data.APPR_SUB_DISC);
                    $('[name="appr_ppnp"]').text(data.APPR_PPN_PERC);
                    $('[name="appr_ppnn"]').text(data.APPR_PPN_SUM);                    
                    // var pajak = $('[name="pajak"]').val();
                    $('[name="appr_pajak"]').text(data.APPR_BBTAX);
                    // var sub2 = (sub1*1) + (data.APPR_PPN_SUM*1) + (data.APPR_SUB_INCOME);
                    $('[name="appr_sub2"]').text(data.APPR_SUB_PPN);
                    $('[name="appr_pphp"]').text(data.APPR_PPH_PERC);
                    $('[name="appr_pphn"]').text(data.APPR_PPH_SUM);
                    // var sub3 = (sub2*1) - (data.APPR_PPH_SUM*1);
                    $('[name="appr_sub3"]').text(data.APPR_TOT_INCOME);
                    $('[name="appr_reco"]').text(data.APPR_RECOV);
                    pick_getappcost(id);
                    pick_getappterm(id);
                    $('#modal_appr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_cust(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/ajax_pick_cust/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="cli_name"]').text(data.CUST_NAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_loc(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/ajax_pick_loc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="appr_loc"]').text(data.LOC_NAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_getappcost(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/get_appcost/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    for (var i = 0; i < data.length; i++)
                    {
                        var $tr = $('<tr>').append(
                            $('<td>').text(i+1),                            
                            $('<td>').css('text-align','center').text(data[i]["CSTDT_CODE"]),
                            $('<td>').css('text-align','right').text(data[i]["CSTDT_AMOUNT"])
                            ).appendTo('#tb_content');
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_getappterm(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/get_appterm/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    var all='';
                    for (var i = 0; i < data.length; i++)
                    {
                        var $ctn = data[i]["TERMSDET_CODE"]+' :'+data[i]["TERMSDET_PERC"]+'% '+data[i]["TERMSDET_INFO"];                        
                        if(i==0)
                        {
                            all = all + $ctn;
                        }
                        else
                        {
                            all = all +', '+ $ctn;
                        }
                    }
                    $('<span>').text(all).appendTo('#pcontent');
                    alert(all);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
</body>
</html>