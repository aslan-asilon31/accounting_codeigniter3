<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cetak BAPP</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form id="form_printbapp" method="post" action="#" class="form-horizontal">
                            <div class="form-group">                              
                                <label class="col-sm-3 control-label">Nomor BAPP</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="bapp_code" readonly>
                                    <input type="hidden" name="bapp_id" value="1">
                                    <input type="hidden" name="appr_id">
                                    <input type="hidden" name="supp_id">
                                    <input type="hidden" name="podet_id">
                                    <input type="hidden" name="gd_id">
                                </div>
                                <div class="col-sm-1">
                                    <a href="javascript:void(0)" onclick="srch_bapp()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#data" data-toggle="tab">BAPP</a>
                            </li>
                            <li>
                                <a href="#pict" data-toggle="tab">Gambar</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="data">
                                <div id="printArea">
                                    <div class="row">
                                        <hr style="border: solid 2px; color: black;"">
                                        <div class="text-center">
                                            <h3><strong>Berita Acara Penyerahan Pekerjaan</strong></h3>
                                            <hr style="border: solid 1.5px; color: black;"">
                                            <h4><strong>No. : <span name="bapp_code"></span></strong></h4>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <h4>1. Yang Mengerjakan</h4>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Nama</label>
                                        <div class="col-sm-9 bapp-border">
                                            <strong>Rudy Wijaya</strong>
                                        </div>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Perusahaan</label>
                                        <div class="col-sm-9 bapp-border">
                                            <strong>PT. Multi Artistikacithra (Match Ad.)</strong>
                                        </div>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Perusahaan</label>
                                        <div class="col-sm-9 bapp-border">
                                            <strong>Jl. Lesti No.42</strong><br>
                                            <strong>Surabaya - 60241</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h4>2. Dokumen</h4>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Dokumen</label>
                                        <div class="col-sm-9 bapp-border">
                                            <span name="bapp_doc">Isinya Dokumen</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h4>3. Deskripsi Pekerjaan</h4>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Client</label>
                                        <div class="col-sm-9 bapp-border">
                                            <span name="bapp_client">Nama Client</span>
                                        </div>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Jenis</label>
                                        <div class="col-sm-9 bapp-border">
                                            <span name="bapp_bboard">Keterangan Reklame</span>
                                        </div>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Ukuran</label>
                                        <div class="col-sm-9 bapp-border">
                                            <span name="bapp_size">Ukuran Reklame</span>
                                        </div>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Teks Lama</label>
                                        <div class="col-sm-9 bapp-border">
                                            <span name="bapp_oldtxt">Teks Reklame Lama</span>
                                        </div>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Teks Baru</label>
                                        <div class="col-sm-9 bapp-border">
                                            <span name="bapp_newtxt">Teks Reklame Baru</span>
                                        </div>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Lokasi</label>
                                        <div class="col-sm-9 bapp-border">
                                            <span name="bapp_loc">Lokasi Reklame</span>
                                        </div>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Nomor AB</label>
                                        <div class="col-sm-9 bapp-border">
                                            <span name="bapp_appr">No Approval</span>
                                        </div>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Tanggal Penyeleseian</label>
                                        <div class="col-sm-9 bapp-border">
                                            <span name="bapp_findate">Tanggal Penyelesaian BAPP</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h4>4. Pemeriksaan</h4>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Hari/Tanggal</label>
                                        <div class="col-sm-7 bapp-border-empty">
                                        </div>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Jam</label>
                                        <div class="col-sm-5 bapp-border-empty">
                                        </div>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Kondisi Fisik</label>
                                        <div class="col-sm-1 bapp-border-empty">
                                        </div>
                                        <label class="col-sm-2 control-label">Layak</label>
                                        <div class="col-sm-1 bapp-border-empty">
                                        </div>
                                        <label class="col-sm-2 control-label">Tidak Layak</label>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Penerangan</label>
                                        <div class="col-sm-1 bapp-border-empty">
                                        </div>
                                        <label class="col-sm-2 control-label">Menyala Optimal</label>
                                        <div class="col-sm-1 bapp-border-empty">
                                        </div>
                                        <label class="col-sm-2 control-label">Mati Sebagian</label>
                                        <div class="col-sm-1 bapp-border-empty">
                                        </div>
                                        <label class="col-sm-2 control-label">Mati Total</label>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Produk</label>
                                        <div class="col-sm-9 bapp-border-empty">
                                        </div>
                                    </div>
                                    <div class="row bapp-row">
                                        <label class="col-sm-2 col-sm-offset-1 control-label">Keterangan</label>
                                        <div class="col-sm-9 bapp-border-empty">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h4>5. Penyerahan Pekerjaan</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-3 col-sm-9 bapp-border" style="padding-top: 88px;">
                                        </div>
                                    </div>
                                    <div class="row bapp-row">
                                        <p>
                                            Demikian beria acara ini dibuat untuk dapat dipergunakan sebagaimana mestinya.
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 text-center">
                                            <span>Yang Menyerahkan</span>
                                            <br><br><br><br><br><br>
                                            <strong><span>( Rudy Wijaya )</span></strong><br>
                                            <i>Director</i>
                                        </div>
                                        <div class="col-sm-offset-4 col-sm-4 text-center">
                                            <span>Yang Menerima</span>
                                            <br><br><br><br><br><br>
                                            <strong>
                                                <span>
                                                    ( 
                                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                    )
                                                </span>
                                            </strong><br>
                                            <i>Area Office</i>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-3 col-xs-offset-9 text-right">
                                        <!-- <a href="javascript:void(0)" type="button" class="btn btn-default" onclick="printDiv('printArea')" ><span class="glyphicon glyphicon-print"></span> Print</a> -->
                                        <a href="javascript:void(0)" type="button" class="btn btn-default" onclick="printPre()"><span class="glyphicon glyphicon-print"></span> Print</a>
                                            <br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pict">
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-3 text-center">
                                        <h2>Data Gambar</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="panel panel-default">
                                        <div id="foo" class="panel-body">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr style="border: solid 2px; color: black;"">
                                </div>
                                <div class="row">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="col-sm-12">
                                                <img id="img_siang" class="img-responsive" src="">
                                            </div>
                                            <div class="col-sm-1" style="margin-top: 5px;">
                                                <button class="btn btn-block btn-danger" type="button" onclick="remImgSiang()">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="col-sm-12">
                                                <img id="img_malam" class="img-responsive" src="">
                                            </div>
                                            <div class="col-sm-1" style="margin-top: 5px;">
                                                <button class="btn btn-block btn-danger" type="button" onclick="remImgMalam()">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <form id="form-cetakimg" method="post">
                                        <input type="hidden" name="img_siang" value="">
                                        <input type="hidden" name="img_malam" value="">
                                    </form>
                                    <div class="col-xs-3 col-xs-offset-9 text-right">
                                        <a href="javascript:void(0)" type="button" class="btn btn-default" onclick="printPreImg()"><span class="glyphicon glyphicon-print"></span> Print</a>
                                            <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>        
    </div>
    <!-- Modal Search -->
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
            var ids = $('[name=bapp_id]').val();
            window.open ( "<?php echo site_url('administrator/Marketing/pageprint_bapp/')?>"+ids,'_blank');
        }

        function printPreImg()
        {
            var ids = $('[name="img_siang"]').val();
            var idm = $('[name="img_malam"]').val();
            window.open ( "<?php echo site_url('administrator/Marketing/pageprint_bappimg/')?>"+ids+"/"+idm,'_blank');
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
        function srch_bapp()
        {            
            $('#modal_bapp').modal('show');
            $('.modal-title').text('Cari BAPP');
            table = $('#dtb_bapp').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Marketing/ajax_srch_bapp')?>",
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

        function pick_bapp(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/ajax_pick_bapp/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bapp_id"]').val(data.BAPP_ID);
                    $('[name="bapp_code"]').text(data.BAPP_CODE);
                    $('[name="bapp_doc"]').text(data.BAPP_DOC);
                    $('[name="bapp_oldtxt"]').text(data.BAPP_OLDTXT);
                    $('[name="bapp_newtxt"]').text(data.BAPP_NEWTXT);
                    $('[name="bapp_findate"]').text(data.BAPP_FINDATE);
                    pick_appr(data.APPR_ID);
                    $('#modal_bapp').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
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
                    pick_cust(data.CUST_ID);
                    var jenis = data.APPR_INFO + ' ( ' + data.APPR_CONTRACT_START + ' - ' + data.APPR_CONTRACT_END + ' )';
                    $('[name="bapp_bboard"]').text(jenis);
                    var size = 'Lebar: ' + data.APPR_WIDTH + 'm, Panjang: ' + data.APPR_LENGTH + 'm, Sisi: ' + data.APPR_SIDE + 'mk';
                    $('[name="bapp_size"]').text(size);
                    $('[name="bapp_appr"]').text(data.APPR_CODE);
                    pick_loc(data.LOC_ID);
                    reload();
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
                    $('[name="bapp_client"]').text(data.CUST_NAME);
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
                    var loca = data.LOC_NAME+', '+data.LOC_ADDRESS+'-'+data.LOC_CITY;
                    $('[name="bapp_loc"]').text(loca);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function reload()
        {
            $("#foo").empty();
            var id = $('[name="bapp_id"]').val();
            get_images(id);
        }

        function get_images(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/temp_gallery/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    for (var i = 0; i < data.length; i++)
                    {
                        var div = $('<div>').attr({'class':'col-sm-3 col-xs-6 text-center'}).append(
                            $('<a>').attr({
                                'href':'<?php echo base_url()?>'+data[i]["DETBAPP_IMGPATH"],
                                'target':'_blank'
                            }).append(
                                $('<img />').attr({
                                'src':'<?php echo base_url()?>'+data[i]["DETBAPP_THUMBS"],
                                'class':'img-responsive img-thumbnail',
                                'title': data[i]["DETBAPP_IMGNAME"]
                                }).css({'margin-top':'10px'})
                            )
                            ).appendTo('#foo')
                        var rem = $('<a>').attr({
                            'href':'javascript:void(0)',
                            'class':'btn btn-sm btn-info btn-responsive',
                            'onclick':'pick_img('+data[i]["DETBAPP_ID"]+')',
                            'title':data[i]["DETBAPP_IMGPATH"]
                        }).css({'margin-top':'5px'}).append(
                            $('<span>').attr({
                                'class':'glyphicon glyphicon-ok'
                            })
                        )
                        .appendTo(div)
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function remImgSiang()
        {
            $('#img_siang').attr('src', '');
            $('[name="img_siang"]').val('');
        }

        function remImgMalam()
        {
            $('#img_malam').attr('src', '');
            $('[name="img_malam"]').val('');
        }
    </script>
    <script>
        function pick_img(id)
        {            
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/getimgbapp/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    if($('#img_siang').attr('src') == '')
                    {
                        var newSrc = "<?php echo base_url()?>"+data.DETBAPP_IMGPATH;
                        $('#img_siang').attr('src', newSrc);
                        $('[name="img_siang"]').val(data.DETBAPP_ID);
                    }
                    else if($('#img_malam').attr('src') == '')
                    {
                        var newSrc = "<?php echo base_url()?>"+data.DETBAPP_IMGPATH;
                        $('#img_malam').attr('src', newSrc);
                        $('[name="img_malam"]').val(data.DETBAPP_ID);
                    }
                    else
                    {
                        alert('Foto Sudah Terisi, Hapus Terlebih Dahulu');
                    }
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