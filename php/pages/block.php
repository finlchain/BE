<!DOCTYPE html>
<html>
<head>	
	<?php include './include/head.tpl.html'; ?>
</head>
<body>

<!-- Wrapper-->
<div class="wrapper">

		<!-- TOP BAR -->
		<?php include './include/topbar.tpl.html'; ?>
		<!-- END TOP BAR -->		
		
		<!-- LEFT SIDEBAR -->
		<?php include './include/left_sidebar_block.tpl.html'; ?>		
		<!-- END LEFT SIDEBAR -->

    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe page-header-icon pe-7s-box2"></i>
                        </div>
                        <div class="header-title">
                            <h3 style="padding: 12px">FINL CHAIN BLOCK LIST</h3>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            FINL CHAIN BLOCK LIST
                        </div>
                        <div class="panel-body">
                            <table id="blockDataTable" class="table table-striped table-hover table-responsive-sm">
                                <thead>
                                <tr>
                                    <th>Block Num</th>
                                    <th>Block ID</th>
                                    <th>Block Generation Time</th>
                                    <th>Tx Count</th>
									<th>Group</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- FOOT -->
<?php include './include/foot.tpl.html';?>
<!-- END FOOT -->

<!-- Vendor scripts -->
<script src="/vendor/pacejs/pace.min.js"></script>
<script src="/vendor/jquery/dist/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/datatables/datatables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- App scripts -->
<script src="/scripts/luna.js"></script>
<script src="/scripts/blockClient.js"></script>
<script src="/scripts/search.js"></script>

</body>

</html>