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
    <link href="<?php echo base_url('assets/datatables/css/responsive.dataTables.css')?>" rel="stylesheet">
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
            font-size: 14px;
            font-family: 'times new roman';
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Data Master Chart of Account</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_master_coa" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No. Akun</th>
                            <th>Nama Akun</th>
                            <th>No. Akun Induk</th>
                            <th>Nama Akun Induk</th>
                            <th>Jenis Akun</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="tb_content"></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            tabledata();
        });
        function tabledata()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/get_mastercoa')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data.length; i++)
                    {
                        var sts;
                        if(data[i]["PARTP_STS"] == '1'){sts = 'Harta/Assets'};
                        if(data[i]["PARTP_STS"] == '2'){sts = 'Biaya/Cost'};
                        if(data[i]["PARTP_STS"] == '3'){sts = 'Utang/Liability'};
                        if(data[i]["PARTP_STS"] == '4'){sts = 'Pendapatan'};
                        if(data[i]["PARTP_STS"] == '5'){sts = 'Modal'};
                        var tr = $('<tr>').append(
                            $('<td>'+data[i]["COA_ACC"]+'</td>'),
                            $('<td>'+data[i]["COA_ACCNAME"]+'</td>'),
                            $('<td>'+data[i]["PAR_ACC"]+'</td>'),
                            $('<td>'+data[i]["PAR_ACCNAME"]+'</td>'),
                            $('<td>'+data[i]["PARTP_NAME"]+'</td>'),
                            $('<td>'+sts+'</td>')
                            ).appendTo('#tb_content')                        
                    }
                    dtable();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function dtable()
        {
            $('#dtb_master_coa').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                columnDefs:
                [
                    {className: 'text-center', targets: '_all'},
                    {orderable: false, targets: '_all'}
                ],
                dom: 'Bfrtip',
                buttons: 
                {
                    dom: 
                    {
                        button: 
                        {
                            tag: 'button',
                            className: 'btn btn-sm btn-info'
                        }
                    },
                    buttons: ['excelHtml5','print']
                }
            });
        }
    </script>
</body>
</html>