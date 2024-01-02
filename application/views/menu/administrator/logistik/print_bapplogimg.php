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
        @media print 
        {
          .panel-default
          {
            border: none;
          }
        }
    </style>
</head>
<body>
    <div class="container" id="images">                
        <div class="row">
            <hr style="border: solid 2px; color: black;">
            <div class="text-center">
                <h3 style="font-family: 'arial black'"><strong>Berita Acara Penyerahan Pekerjaan</strong></h3>
                <hr style="border: solid 1.5px; color: black;">                    
            </div>                
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            get_images('<?php echo $ids; ?>');
        });

        function get_images(id)
        {
            
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/temp_gallery/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    for (var i = 0; i < data.length; i++)
                    {
                        var cr = $('<div class=row>').append(
                                $('<div class="panel panel-default"><div class="panel-body"><div class="col-xs-12"><img src="<?php echo base_url()?>'+data[i]['DETBALG_IMGPATH']+'" class="img-responsive img-thumbnail" title="'+data[i]['DETBALG_IMGNAME']+'"></div></div></div>')
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