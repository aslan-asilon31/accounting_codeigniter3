		<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-header">Marketing - BAPP</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="print_bapp()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-print"> CetakForm</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="print_bappimg()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-print"> CetakGambar</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_bapp()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="check_bapp()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="apr_bapp()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-ok"> Approve</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_bapp()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                	<div class="col-sm-12 col-xs-12">
                		<ul class="nav nav-tabs">
                			<li class="active">
                				<a href="#1" data-toggle="tab">BAPP</a>
                			</li>
                			<li>
                				<a href="#2" data-toggle="tab">Gambar</a>
                			</li>
                		</ul>
                		<form class="form-horizontal" id="form_bapp" enctype="multipart/form-data">
                			<div class="tab-content">
                				<div class="tab-pane fade in active" id="1">
                                	<div class="form-group">
	                                    <div class="col-xs-4 col-xs-offset-3 text-center">
	                                        <h2>Data BAPP</h2>
	                                    </div>
	                                </div>	                                
	                                <div class="form-group">                      
	                                    <label class="col-sm-3 control-label">Nomor BAPP</label>
                                        <div class="col-sm-1">
                                            <a id="genbtn" href="javascript:void(0)" onclick="gen_bapp()" class="btn btn-block btn-info">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </a>
                                        </div>
	                                    <div class="col-sm-7">
                                            <input class="form-control" type="text" name="bapp_code" value="" readonly>
	                                        <input type="hidden" name="bapp_id" value="0">
	                                        <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                                            <input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
                                            <input type="hidden" name="user_brc" value="<?= $this->session->userdata('user_branch')?>">
                                            <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
	                                    </div>
	                                </div>
	                                <div class="form-group">                              
	                                    <label class="col-sm-3 control-label">Nomor Approval</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_appr()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
	                                    <div class="col-sm-7">
	                                        <input class="form-control" type="text" name="appr_code" readonly>
                                            <input type="hidden" name="appr_id">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="col-sm-3 control-label">Tanggal Pembuatan</label>
	                                    <div class="col-sm-8">
	                                    	<div class='input-group date dtp' id='dtp1'>     
				                                <span class="input-group-addon">
				                                    <span class="glyphicon glyphicon-calendar"></span>
				                                </span>
				                                <input id="tgl" type='text' class="form-control input-group-addon" name="bapp_date" value="<?= date('Y-m-d')?>" />
				                            </div>
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="col-sm-3 control-label">Awal - Akhir BAPP</label>
	                                    <div class="col-sm-4">
	                                    	<div class='input-group date dtp' id='dtp2'>     
				                                <span class="input-group-addon">
				                                    <span class="glyphicon glyphicon-calendar"></span>
				                                </span>
				                                <input id="tgl" type='text' class="form-control input-group-addon" name="bapp_startdate" placeholder="Awal" />
				                            </div>
	                                    </div>
                                        <div class="col-sm-4">
                                            <div class='input-group date dtp' id='dtp3'>     
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="tgl" type='text' class="form-control input-group-addon" name="bapp_enddate" placeholder="Akhir" />
                                            </div>
                                        </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="col-sm-3 control-label">Dokumen</label>
	                                    <div class="col-sm-8">
	                                        <textarea name="bapp_doc" class="form-control" rows="2" style="resize: vertical;"></textarea>
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="col-sm-3 control-label">Teks Lama</label>
	                                    <div class="col-sm-8">
	                                        <textarea name="bapp_oldtxt" class="form-control" rows="2" style="resize: vertical;"></textarea>
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="col-sm-3 control-label">Teks Baru</label>
	                                    <div class="col-sm-8">
	                                        <textarea name="bapp_newtxt" class="form-control" rows="2" style="resize: vertical;"></textarea>
	                                    </div>
	                                </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Client</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="client" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jenis</label>
                                        <div class="col-sm-8">
                                            <textarea name="appr_jenis" class="form-control" rows="2" style="resize: vertical;" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Ukuran</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="appr_size" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal Selesai</label>
                                        <div class="col-sm-8">
                                            <div class='input-group date dtp' id='dtp4'>     
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="tgl" type='text' class="form-control input-group-addon" name="bapp_finishdate" placeholder="Tanggal" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Awal - Akhir Periode</label>
                                        <div class="col-sm-4">
                                            <div class='input-group date dtp' id='dtp5'>     
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="tgl" type='text' class="form-control input-group-addon" name="bapp_startper" placeholder="Tanggal" readonly />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class='input-group date dtp' id='dtp6'>     
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="tgl" type='text' class="form-control input-group-addon" name="bapp_endper" placeholder="Tanggal" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Keterangan Tambahan</label>
                                        <div class="col-sm-8">
                                            <textarea name="bapp_info" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="savebapp()" class="btn btn-block btn-primary btn-default btnCh">Simpan</a>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <button type="button" onclick="aprbapp()" class="btn btn-block btn-primary btn-default btnApr" disabled>Approve</a>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <button type="button" onclick="disaprbapp()" class="btn btn-block btn-primary btn-default btnApr" disabled>Disapprove</a>
                                        </div>
                                    </div>
                            	</div>
                            	<div class="tab-pane fade" id="2">
                            		<div class="form-group">
                                    	<div class="col-sm-4 col-sm-offset-3 text-center">
                                        	<h2>Data Gambar</h2>
                                    	</div>
                                	</div>
                                	<div class="form-group">
	                                    <div class="col-sm-2 col-sm-offset-3">
	                                        <a href="javascript:void(0)" onclick="add_img()" class="btn btn-sm btn-block btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Upload</a>
	                                    </div>
	                                </div>                                    
                                    <div class="row">
                                        <div class="panel panel-default">
                                            <div id="foo" class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                            	</div>
                			</div>
                		</form>
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
    <div class="modal fade" id="modal_upload" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div id="actions" class="row">
                        <input type="hidden" name="imgcount">
                        <div class="col-sm-12 col-xs-12">
                        	<div class="row">
                        		<div class="col-sm-4 col-xs-4">
                        			<button class="btn btn-block btn-success fileinput-button">
                        				<i class="fa fa-plus"></i>
                        				<span>Tambah Gambar</span>
                        			</button>
                        		</div>
                        		<div class="col-sm-4 col-xs-4">
                        			<button class="btn btn-block btn-warning start">
                        				<i class="fa fa-upload"></i>
                        				<span>Upload Semua</span>
                        			</button>
                        		</div>
                        		<div class="col-sm-4 col-xs-4">
                        			<button class="btn btn-block btn-danger cancel">
                        				<i class="fa fa-ban"></i>
                        				<span>Batal Upload</span>
                        			</button>
                        		</div>
                        	</div>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                        	<span class="fileupload-process">
                        		<div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                      				<div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                  				</div>
                        	</span>
                        </div>
                    </div>
                    <div class="table table-striped" class="files" id="previews">
                    	<div id="template" class="file-row row">                    		
                    		<div class="col-lg-2 col-xs-2">
                    			<span class="preview"><img class="th" data-dz-thumbnail></span>
                    			<p class="name visible-md visible-lg"></p>
                    			<strong class="error text-danger" data-dz-errormessage></strong>
                    		</div>
                    		<div class="col-lg-8 col-xs-8 visible-lg">
                    			<p class="size" data-dz-size></p>
                    			<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    				<div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                    			</div>
                    		</div>
                    		<div class="col-lg-2 col-xs-2">
                    			<div class="btn-modal-upload">
                    				<button class="btn btn-block btn-primary start">
                    					<i class="fa fa-upload"></i>
                    					<span>Upload</span>
                    				</button>
                    			</div>
                    			<div class="btn-modal-delete">
                    				<button data-dz-remove class="btn btn-block btn-danger cancel">
                    					<i class="fa fa-ban"></i>
                    					<span>Batal</span>
                    				</button>
                    			</div>
                    			<p data-dz-remove class="delete">
                    				<i class="fa fa-check-square-o"></i>
                    				<span>Finish</span>
                    			</p>
                    		</div>
                    	</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button onclick="reload()" type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_bapp_edit" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_bapp_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>BAPP</th>
                                        <th>Approval</th>
                                        <th>Tanggal</th>
                                        <th>Klien</th>
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
    <!-- /Modal Search -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
    	$(document).ready(function()
    	{
            get_images();
            $('input').on('click',function(){                
                $(this).parent().parent().parent().removeClass('has-error');
                $(this).next().empty();
            });
    	});
        function print_bapp()
        {
            var ids = $('[name=bapp_id]').val();
            window.open ( "<?php echo site_url('administrator/Marketing/pageprint_bapp/')?>"+ids,'_blank');
        }
        function print_bappimg()
        {
            var ids = $('[name=bapp_id]').val();
            window.open ( "<?php echo site_url('administrator/Marketing/pageprint_bappimg/')?>"+ids,'_blank');
        }
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
                    "url": "<?php echo site_url('administrator/Searchdata/srch_apprforbapp')?>",
                    "type": "POST",
                    "data": function(data){
                        data.brch = $('[name="user_brc"]').val();
                    },
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
    	}
        function pick_apprgb(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_apprgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="appr_id"]').val(data.APPR_ID);
                    $('[name="appr_code"]').val(data.APPR_CODE);
                    pick_cust(data.CUST_ID);
                    // var jenis = data.APPR_INFO + ' ( ' + data.APPR_CONTRACT_START + ' - ' + data.APPR_CONTRACT_END + ' )';
                    // $('[name="appr_jenis"]').val(jenis);
                    var size = 'Lebar: ' + data.APPR_WIDTH + 'm, Panjang: ' + data.APPR_LENGTH + 'm, Sisi: ' + data.APPR_SIDE + ', ' + data.APPR_PLCSUM + 'mk';
                    $('[name="appr_size"]').val(size);
                    $('[name="bapp_startper"]').val(data.APPR_CONTRACT_START);
                    $('[name="bapp_endper"]').val(data.APPR_CONTRACT_END);
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
                    $('[name="client"]').val(data.CUST_NAME);
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
                            'class':'btn btn-sm btn-danger btn-responsive',
                            'onclick':'del_img('+data[i]["DETBAPP_ID"]+')',
                            'title':data[i]["DETBAPP_ID"]
                        }).css({'margin-top':'5px'}).append(
                            $('<span>').attr({
                                'class':'glyphicon glyphicon-remove'
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
    </script>
    <script>
        function gen_bapp()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/gen_bapp')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="bapp_id"]').val(data.id);
                    $('[name="bapp_code"]').val(data.kode);
                    get_images(data.id);
                    $('#genbtn').attr('disabled',true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Approval');
                }
            });
        }
        function savebapp()
        {
            validate();
            if ($('.form-group').hasClass('has-error') != 1)
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Marketing/simpan_bapp')?>",
                    type: "POST",
                    data: $('#form_bapp').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                        if(data.status)
                        {
                            alert('Data Berhasil Disimpan');                        
                        }                   
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error adding / update data');
                    }
                });
            }
            else 
            {
                alert('Ada Input yang Salah');
            }
        }
        function aprbapp()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/approve_bapp')?>",
                type: "POST",
                data: $('#form_bapp').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Marketing/mkt_trx_bapp')?>";
                        window.location = url;
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function disaprbapp()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/disapprove_bapp')?>",
                type: "POST",
                data: $('#form_bapp').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Marketing/mkt_trx_bapp')?>";
                        window.location = url;
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function del_img(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Marketing/bapp_delimg')?>/"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }
        function validate()
        {
            var date1 = $('[name="bapp_date"]').val();
            if (date1 == '')
            {
                $('[name="bapp_date"]').parent().parent().parent().addClass('has-error');
            }
            var date2 = $('[name="bapp_startdate"]').val();
            if (date2 == '')
            {
                $('[name="bapp_startdate"]').parent().parent().parent().addClass('has-error');
            }
            var date3 = $('[name="bapp_enddate"]').val();
            if (date3 == '')
            {
                $('[name="bapp_enddate"]').parent().parent().parent().addClass('has-error');
            }
            var date4 = $('[name="bapp_finishdate"]').val();
            if (date4 == '')
            {
                $('[name="bapp_finishdate"]').parent().parent().parent().addClass('has-error');
            }
            // var date5 = $('[name="bapp_startper"]').val();
            // if (date5 == '')
            // {
            //     $('[name="bapp_startper"]').parent().parent().parent().addClass('has-error');
            // }
            // var date6 = $('[name="bapp_endper"]').val();
            // if (date6 == '')
            // {
            //     $('[name="bapp_endper"]').parent().parent().parent().addClass('has-error');
            // }
            var bappid = $('[name="bapp_code"]').val();
            if (bappid == '')
            {
                $('[name="bapp_code"]').parent().parent().addClass('has-error');
            }
            var apprid = $('[name="appr_code"]').val();
            if (apprid == '')
            {
                $('[name="appr_code"]').parent().parent().addClass('has-error');
            }
        }
        function get_imgsum()
        {
            var id = $('[name="bapp_id"]').val();
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/get_imgsum/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    maks = 4 - data.sum;
                    $('[name="imgcount"]').val(data.sum);
                    return maks;
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Approval');
                }
            });
        }
        function add_img()
        {
            var id = $('[name="bapp_id"]').val();
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/get_imgsum/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    var maks = 4 - data.sum;
                    myDropzone.options.maxFiles = maks;                 
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Approval');
                }
            });
            $('#modal_upload').modal('show');
            $('.modal-title').text('Tambah Foto');
        }
        function edit_bapp()
        {
            $('#modal_bapp_edit').modal('show');
            $('.modal-title').text('Cari BAPP');            
            table = $('#dtb_bapp_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_bappbysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '0';
                        data.brch = $('[name="user_brc"]').val();
                        data.chk = '0';
                    },
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function open_bapp()
        {
            $('#modal_bapp_edit').modal('show');
            $('.modal-title').text('Cari BAPP');            
            table = $('#dtb_bapp_edit').DataTable({
                "info": false,
                "destroy": true,
                // "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_bappbysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_brc"]').val();
                        data.chk = '1';
                    },
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function check_bapp()
        {
            $('#modal_bapp_edit').modal('show');
            $('.modal-title').text('Cari BAPP');            
            table = $('#dtb_bapp_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_bappbysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_brc"]').val();
                        data.chk = '2';
                    },
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function apr_bapp()
        {
            $('#modal_bapp_edit').modal('show');
            $('.modal-title').text('Cari BAPP');            
            table = $('#dtb_bapp_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_bappbysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '2';
                        data.brch = $('[name="user_brc"]').val();
                        data.chk = '3';
                    },
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function pick_bappopen(id)
        {
            if($('[name="note_'+id+'"]').val() === '')
            {
                alert('Note Harus Diisi !!!');
            }
            else
            {
                $.ajax({
                    url : "<?php echo site_url('administrator/Marketing/open_bapp/')?>" + id,
                    type: "POST",
                    data: {notes : $('[name="note_'+id+'"]').val()},
                    dataType: "JSON",
                    success: function(data)
                    {   
                        if(data.status)
                        {
                            alert('Record BAPP Sukses Dibuka');
                            $('#modal_bapp_edit').modal('hide');
                        }
                        else
                        {
                            alert('Record BAPP masih digunakan di transaksi '+data.string);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error get data from ajax');
                    }
                });
            }
        }
        function pick_bappedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_bappgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bapp_id"]').val(data.BAPP_ID);
                    $('[name="bapp_code"]').val(data.BAPP_CODE);
                    $('[name="bapp_date"]').val(data.BAPP_DATE);
                    if (data.APPR_ID != null)
                    {
                        pick_apprgb(data.APPR_ID);
                    }
                    $('[name="bapp_startdate"]').val(data.BAPP_DATESTART);
                    $('[name="bapp_enddate"]').val(data.BAPP_DATEEND);
                    $('[name="bapp_doc"]').val(data.BAPP_DOC);
                    $('[name="bapp_oldtxt"]').val(data.BAPP_OLDTXT);
                    $('[name="bapp_newtxt"]').val(data.BAPP_NEWTXT);
                    $('[name="bapp_finishdate"]').val(data.BAPP_FINDATE);
                    $('[name="bapp_info"]').val(data.BAPP_INFO);
                    $('[name="appr_jenis"]').val(data.BAPP_TYPE);
                    reload();                    
                    $('#modal_bapp_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_bappchk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_bappgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bapp_id"]').val(data.BAPP_ID);
                    $('[name="bapp_code"]').val(data.BAPP_CODE);
                    $('[name="bapp_date"]').val(data.BAPP_DATE);
                    if (data.APPR_ID != null)
                    {
                        pick_apprgb(data.APPR_ID);
                    }
                    $('[name="bapp_startdate"]').val(data.BAPP_DATESTART);
                    $('[name="bapp_enddate"]').val(data.BAPP_DATEEND);
                    $('[name="bapp_doc"]').val(data.BAPP_DOC);
                    $('[name="bapp_oldtxt"]').val(data.BAPP_OLDTXT);
                    $('[name="bapp_newtxt"]').val(data.BAPP_NEWTXT);
                    $('[name="bapp_finishdate"]').val(data.BAPP_FINDATE);
                    $('[name="bapp_info"]').val(data.BAPP_INFO);
                    $('[name="appr_jenis"]').val(data.BAPP_TYPE);
                    reload();
                    $('.btnCh').css({'display':'none'});
                    $('#modal_bapp_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_bappapr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_bappgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bapp_id"]').val(data.BAPP_ID);
                    $('[name="bapp_code"]').val(data.BAPP_CODE);
                    $('[name="bapp_date"]').val(data.BAPP_DATE);
                    if (data.APPR_ID != null)
                    {
                        pick_apprgb(data.APPR_ID);
                    }
                    $('[name="bapp_startdate"]').val(data.BAPP_DATESTART);
                    $('[name="bapp_enddate"]').val(data.BAPP_DATEEND);
                    $('[name="bapp_doc"]').val(data.BAPP_DOC);
                    $('[name="bapp_oldtxt"]').val(data.BAPP_OLDTXT);
                    $('[name="bapp_newtxt"]').val(data.BAPP_NEWTXT);
                    $('[name="bapp_finishdate"]').val(data.BAPP_FINDATE);
                    $('[name="bapp_info"]').val(data.BAPP_INFO);
                    $('[name="appr_jenis"]').val(data.BAPP_TYPE);
                    reload();
                    $('.btnCh').css({'display':'none'});
                    $('.btnApr').prop('disabled',false);
                    $('#modal_bapp_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
    <script>
    	var Dropzone;
    	Dropzone.autoDiscover = false;
    	//Dapatkan HTML template dan menghapusnya dari dokumen
    	var previewNode = document.querySelector('#template');
    	previewNode.id = '';
    	var previewTemplate = previewNode.parentNode.innerHTML;
    	previewNode.parentNode.removeChild(previewNode);
    	var myDropzone = new Dropzone(document.body, {
    		url: '<?php echo base_url('administrator/Marketing/upload_bapp');?>',
    		thumbnailWidth: 80,
    		thumbnailHeight: 80,
    		parallelUploads: 1,
    		maxFilesize: 10,
            maxFiles: 4,
    		// uploadMultiple: true,
    		acceptedFiles: 'image/jpg, image/jpeg',
    		previewTemplate: previewTemplate,
    		autoQueue: false,
    		previewsContainer: '#previews',
    		clickable: '.fileinput-button',
    		dictFileTooBig: 'Ukuran File Terlalu Besar ({{filesize}}Mb). Max ukuran file {{maxFilesize}}Mb',
    	});
    	//myDropzone.emit('addedfile')
    	myDropzone.on('addedfile', function(file){
    		//menghubungkan tombol start
    		file.previewElement.querySelector('.start').onclick = function() { myDropzone.enqueueFile(file);};
    	});
    	//update total progress bar pada saat proses upload
    	myDropzone.on('addedfile', function(progress){
    		document.querySelector('#total-progress .progress-bar').style.width = progress + '%';
    	});
    	myDropzone.on('sending', function(file){
    		//menampilkan total progressbar
    		document.querySelector('#total-progress').style.opacity = '1';
    		//pada saat upload berlangsung, tombol start akan mati
    		file.previewElement.querySelector('.start').setAttribute('disabled', 'disabled');
    	});
    	myDropzone.on('sending', function(file,xhr,formData){  
    		var other_data = $('#form_bapp').serializeArray();
		    $.each(other_data,function(key,input){
		        formData.append(input.name,input.value);
		    });    		
    	});
    	//progress bar akan disembunyikan ketika proses upload selesai
    	myDropzone.on('queuecomplete', function(progress){
    		document.querySelector('#total-progress').style.opacity = '0';
    	})
    	//membuat fungsi upload semua gambar pada tombol start
    	document.querySelector('#actions .start').onclick = function() {
    		myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
    	};
    	//membuat fungsi pembatalan semua gambar pada saat upload
    	document.querySelector('#actions .cancel').onclick = function() {
    		myDropzone.removeAllFiles(true);
    	}
    </script>
</body>
</html>