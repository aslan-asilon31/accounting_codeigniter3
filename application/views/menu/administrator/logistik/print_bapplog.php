<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Project Match Terpadu" content="Match Terpadu">
    <meta name="Author" content="Kaisha Satrio">
    <title><?php echo $title;?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">   
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/sbadmin/metisMenu/metisMenu.min.css')?>" rel="stylesheet">
    <!-- sbadmin -->
    <link href="<?php echo base_url('assets/sbadmin/css/sb-admin-2.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.responsive.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.css')?>" rel="stylesheet">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/addons/select2-bootstrap.css')?>" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/addons/extra.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
    <style type="text/css">
        body {
          /*background: rgb(204,204,204);*/
          background: white;
          font-size: 16px;
        }
    </style>
    <style>
        body
        {
            background: white;
            font-size: 16px;
        }
        .hr-top
        {
            border: solid 2px black;
        }
        .hr-mid
        {
            border: solid 1px black;
        }
        h2
        {
            font-family: "arial black";
        }
        h3
        {
            font-family: "arial";
        }
        .tearea
        {
            min-height: 80px;
        }

        @media print
        {
            body
            {
                font-size: 11px;
            }
            h2
            {
                font-size: 17px;
            }
            h3
            {
                font-size: 15px;
            }
            h4
            {
                font-size: 13px;
            }
            .logo
            {
                width: 50%;
            }
            .tearea
            {
                min-height: 40px;
            }
        }
    </style> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <input type="hidden" name="bapp_id" value="<?php echo $id; ?>">
        <div class="row">
            <div class="col-sm-6 col-xs-6">
                <img src="https://www.matchadonline.com/logo_n_watermark/1506304293840_LOGOeCommerce.png" class="img-responsive logo">
            </div>
        </div><br>
        <div class="row">
            <hr class="hr-top">
            <div class="text-center">
                <h2><strong>Berita Acara Penyerahan Pekerjaan</strong></h2>
                <hr class="hr-mid">
                <h3><strong>No. : <span name="bapp_code"></span></strong></h3>
            </div>
        </div>
        <div class="row">
            <h4>1. Yang Mengerjakan</h4>
        </div>
        <div class="row">
            <label class="col-xs-2 col-xs-offset-1 control-label">Nama</label>
            <div class="col-xs-9 bapp-border">
                <span name="bapp_contractor">Kontraktor</span>
            </div>
        </div>
        <div class="row bapp-row">
            <label class="col-xs-2 col-xs-offset-1 control-label">Tanggal</label>
            <div class="col-xs-9 bapp-border">
                <span name="bapp_workdate">Tanggal</span>
            </div>
        </div>
        <div class="row">
            <h4>2. Deskripsi Pekerjaan</h4>
        </div>
        <div class="row">
            <label class="col-xs-2 col-xs-offset-1 control-label">Jenis Pekerjaan</label>
            <div class="col-xs-9 bapp-border">
                <span name="bapp_print">Jenis Pekerjaan</span>
            </div>
        </div>
        <div class="row">
            <label class="col-xs-2 col-xs-offset-1 control-label">Client</label>
            <div class="col-xs-9 bapp-border">
                <span name="bapp_client">Nama Client</span>
            </div>
        </div>
        <div class="row bapp-row">
            <label class="col-xs-2 col-xs-offset-1 control-label">Ukuran</label>
            <div class="col-xs-9 bapp-border">
                <span name="bapp_size">Ukuran Reklame</span>
            </div>
        </div>
        <div class="row bapp-row">
            <label class="col-xs-2 col-xs-offset-1 control-label">Lokasi</label>
            <div class="col-xs-9 bapp-border">                    
                <span name="bapp_loc">Lokasi Reklame</span>
            </div>
        </div>
        <div class="row">
            <h4>3. Pemeriksaan</h4>
        </div>
        <div class="row">
            <label class="col-xs-2 col-xs-offset-1 control-label">Hari/Tanggal</label>
            <div class="col-xs-7 bapp-border">
                <span name="bapp_date">KAMIS,21/04/2018</span>
            </div>
        </div>
        <div class="row bapp-row">
            <label class="col-xs-2 col-xs-offset-1 control-label">Jam</label>
            <div class="col-xs-5 bapp-border-empty">
            </div>
        </div>
        <div class="row bapp-row">
            <label class="col-xs-2 col-xs-offset-1 control-label">Pemasangan Vinyl</label>
            <div class="col-xs-1 bapp-border-empty">
            </div>
            <label class="col-xs-2 control-label">Baik</label>
            <div class="col-xs-1 bapp-border-empty">
            </div>
            <label class="col-xs-2 control-label">Jelek</label>
        </div>
        <div class="row bapp-row">
            <label class="col-xs-2 col-xs-offset-1 control-label">Penerangan</label>
            <div class="col-xs-1 bapp-border-empty">
            </div>
            <label class="col-xs-2 control-label">Menyala Lengkap</label>
            <div class="col-xs-1 bapp-border-empty">                    
            </div>
            <label class="col-xs-2 control-label">Redup</label>
            <div class="col-xs-1 bapp-border-empty">
            </div>
            <label class="col-xs-2 control-label">Kekencangan, Simetris</label>
        </div>
        <div class="row bapp-row">
            <label class="col-xs-2 col-xs-offset-1 control-label">Dokumentasi</label>
            <div class="col-xs-1 bapp-border-empty">
            </div>
            <label class="col-xs-2 control-label">Siang</label>
            <div class="col-xs-1 bapp-border-empty">
            </div>
            <label class="col-xs-2 control-label">Malam</label>
        </div>
        <div class="row">
            <h4>4. Catatan</h4>
        </div>
        <div class="row">
            <div class="col-xs-offset-3 col-xs-9 bapp-border tearea">
                <span name="bapp_note"></span>
            </div>
        </div>
        <div class="row bapp-row">
            <p>
                Demikian beria acara ini dibuat untuk dapat dipergunakan sebagaimana mestinya.
            </p>
        </div>
        <div class="row">
            <div class="col-xs-4 text-center">
                <span><strong>SUPPLIER</strong></span>
                <br><br><br><br><br><br>
                <strong>
                    <span name="bapp_contr" class="text-uppercase"></span><br>
                </strong>                
                <i>Kontraktor</i>
            </div>
            <div class="col-xs-offset-2 col-xs-6 text-center">
                <span><strong>PT. MULTI ARTISTIKACITHRA</strong></span>
                <br><br><br><br><br><br>
                <div class="col-xs-6">
                    <strong>
                        <span name="bapp_log" class="text-uppercase"></span>
                    </strong><br>
                    <i>Logistik</i>
                </div>
                <div class="col-xs-6">
                    <strong>
                        <span name="bapp_prod" class="text-uppercase"></span>
                    </strong><br>
                    <i>Produksi/WPI</i>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            var id = $('[name="bapp_id"]').val();
            pick_bapp(id);
        });
        function pick_bapp(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_bapploggb/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="bapp_id"]').val(data.BALG_ID);
                    $('[name="bapp_code"]').text(data.BALG_CODE);
                    $('[name="bapp_contractor"]').text(data.BALG_CONTRACTOR);
                    $('[name="bapp_print"]').text(data.BALG_PRINTTYPE);
                    $('[name="bapp_size"]').text(data.BALG_SIZE);
                    $('[name="bapp_date"]').text(moment(data.BALG_DATE).locale('id').format('dddd, DD-MMMM-YYYY'));
                    $('[name="bapp_workdate"]').text(moment(data.BALG_DATE).locale('id').format('dddd, DD-MMMM-YYYY'));
                    pick_cust(data.CUST_ID);
                    pick_loc(data.LOC_ID);
                    $('[name="bapp_contr"]').text(data.BALG_CONTRACTOR);
                    $('[name="bapp_log"]').text(data.BALG_LOGISTIC);
                    $('[name="bapp_prod"]').text(data.BALG_PROD);
                    $('#modal_bapp').modal('hide');
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
                url : "<?php echo site_url('administrator/Searchdata/pick_cust/')?>" + id,
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
    </script>
</body>