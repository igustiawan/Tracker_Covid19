<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Corona, COVID-19, Coronavirus, Corona Virus Tracker" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Corona Virus (COVID-19) Tracker</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   
</head>


<body>

    <div id="content-page">
        <div class="content">
            <div class="row ">
                <div class=" col-lg-12">
                    <div class="page-header-title" style="margin-top:1px;">
                        <h4 class="page-title" style="text-align:center;">KASUS COVID19 INDONESIA</h4>
                    </div>
                </div>

            </div>
            <div class="page-content-wrapper ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card text-center">
                                <div class="card-heading">
                                    <h4 class="card-title text-muted mb-0">Total Positif</h4>
                                </div>
                                <div class="card-body p-t-10">
                                    <h2 class="m-t-0 m-b-15"><i
                                            class="mdi mdi-account-plus text-success m-r-10"></i><b><?php echo ($TOTAL_POSITIF);?></b>
                                    </h2>
                                    <p class="text-muted m-b-0 m-t-20"><b>Reported as of Today</b></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card text-center">
                                <div class="card-heading">
                                    <h4 class="card-title text-muted mb-0">Total Sembuh</h4>
                                </div>
                                <div class="card-body p-t-10">
                                    <h2 class="m-t-0 m-b-15"><i
                                            class="mdi mdi-account-star text-success m-r-10"></i><b><?php echo number_format($TOTAL_SEMBUH);?></b>
                                    </h2>
                                    <p class="text-muted m-b-0 m-t-20"><b>Reported as of Today</b></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card text-center">
                                <div class="card-heading">
                                    <h4 class="card-title text-muted mb-0">Total Meninggal</h4>
                                </div>
                                <div class="card-body p-t-10">
                                    <h2 class="m-t-0 m-b-15"><i
                                            class="mdi mdi-account-remove text-success m-r-10"></i><b><?php echo number_format($TOTAL_MENINGGAL);?></b>
                                    </h2>
                                    <p class="text-muted m-b-0 m-t-20"><b>Reported as of Today</b></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <div id="regions_div"> </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="m-b-30 m-t-0">Statistics</h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table id="datatable"
                                                    class="table table-striped table-bordered dt-responsive nowrap"
                                                    cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Provinsi</th>
                                                            <th>Kasus Positif</th>
                                                            <th>Kasus Sembuh</th>
                                                            <th>Kasus Meninggal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        $dataprov = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'), true);
                                                        foreach($dataprov as $result){ ?>
                                                        <tr>
                                                            <td><?php echo $result['attributes']['Provinsi'];?></td>
                                                            <td><?php echo $result['attributes']['Kasus_Posi'];?></td>
                                                            <td><?php echo $result['attributes']['Kasus_Semb'];?></td>
                                                            <td><?php echo $result['attributes']['Kasus_Meni'];?></td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class=" col-lg-12">
                                    <div class="page-title footerchange">Copyright © 2020 Igustiawan
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>


    </div>
    </div>

    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Required datatable js-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
    </script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Responsive examples -->
    <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('table').DataTable({
                order: [],
                paging: true,
                "pageLength": 25,
            });
        });
    </script>
</body>

</html>