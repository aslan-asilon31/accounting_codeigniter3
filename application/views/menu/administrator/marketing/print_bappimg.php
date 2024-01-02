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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/addons/select2-bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/extra.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
    <style type="text/css">
        body 
        {          
          background-color: white;
          font-size: 12px;
        }        
        page {          
          background: white;
          display: block;
          margin: 0 auto;
          margin-bottom: 0.5cm;
          box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        }
        page[size="A4"] {  
          width: 21cm;
          height: 29.7cm; 
        }
        page[size="A4"][layout="portrait"] {
          width: 29.7cm;
          height: 21cm;  
        }
        @media print 
        {
          .panel-default
          {
            border: none;
          }
          img
          {
            max-height: 330px;
          }
          h4
          {
            font-size: 1.3em;
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
    <input type="hidden" name="img_siang" value="<?php echo $img_siang;?>">
    <input type="hidden" name="img_malam" value="<?php echo $img_malam;?>">
    <div class="container-fluid">
        <div class="row">
            <hr style="border: solid 2px; color: black;">
            <div class="text-center">
                <h3 style="font-family: 'arial black'"><strong>Berita Acara Penyerahan Pekerjaan</strong></h3>
                <hr style="border: solid 1.5px; color: black;">                    
            </div>                
        </div>
        <div class="col-xs-12" id="images">
            
        </div>
    </div>
    <!-- </page> -->
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            get_images($('[name="img_siang"]').val());
        });

        function set_imgsiang(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/getimgbapp/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    var newSrc = "<?php echo base_url()?>"+data.DETBAPP_IMGPATH;
                    $('#img_siang').attr('src', newSrc);
                    $('[name="img_siang"]').val(data.DETBAPP_ID);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function set_imgmalam(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/getimgbapp/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    var newSrc = "<?php echo base_url()?>"+data.DETBAPP_IMGPATH;
                    $('#img_malam').attr('src', newSrc);
                    $('[name="img_malam"]').val(data.DETBAPP_ID);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
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
                        var des = (i>0)?'FOTO MALAM':'FOTO SIANG';
                        var cr = $('<div class=row><h4>'+des+'</h4>').append(
                                $('<div class="panel panel-default"><div class="panel-body"><div class="col-xs-12"><img src="<?php echo base_url()?>'+data[i]['DETBAPP_IMGPATH']+'" class="img-responsive img-thumbnail center-block" title="'+data[i]['DETBAPP_IMGNAME']+'"></div></div></div>')
                            ).appendTo('#images');
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