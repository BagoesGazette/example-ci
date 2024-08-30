<!DOCTYPE html>
<html>
<head>
    <title>DataTable AJAX Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>

    <div class="container-fluid mt-5">
        <div class="row">
			<div class="col-lg-10 offset-lg-1">
                <div class="row mb-3">
                    <div class="col-md-2 offset-md-2">
                        <select name="mesin" id="mesin" class="custom-select">
                            <option value="">Select Mesin ID</option>
                            <?php foreach($mesin as $m) : ?>
                                <option value="<?= $m->mesin ?>"><?= $m->mesin ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="month" id="month" class="custom-select">
                            <option value="">Select Month</option>
                            <?php foreach($month as $key => $m) : ?>
                                <option value="<?= $key ?>"><?= $m ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="site" id="site" class="custom-select">
                            <option value="">Select Site</option>
                            <?php foreach($site as $row) : ?>
                                <option value="<?= $row->site_code ?>"><?= $row->site_code ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="operator" id="operator" class="custom-select">
                            <option value="">Select Operator</option>
                            <?php foreach($operator as $row) : ?>
                                <option value="<?= $row->submitted_by ?>"><?= $row->submitted_by ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="activity" id="activity" class="custom-select">
                            <option value="">Select Activity</option>
                            <?php foreach($activity as $row) : ?>
                                <option value="<?= $row->activity ?>"><?= $row->activity ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
				<div class="table-responsive">
                    <table id="data_table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Submitted By</th>
                                <th>Submitted When</th>
                                <th>Site Code</th>
                                <th>Activity</th>
                                <th>UOM</th>
                                <th>Block</th>
                                <th>Task</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Mesin ID</th>
                                <th>Fuel</th>
                                <th>Check By</th>
                                <th>When Check</th>
                                <th>Verified By</th>
                                <th>When Verified</th>
                                <th>Duty</th>
                                <th>Reason</th>
                            </tr>
                        </thead>
                    </table>
				</div>
			</div>
		</div>
    </div>

    <script type="text/javascript">
    	$(document).ready(function() {
            var table = $('#data_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '<?= base_url('index.php/welcome/fetch_data');?>',
                    type: 'GET',
                    data: function (d) {
                        d.mesin = $('#mesin').val();
                        d.month = $('#month').val();
                        d.site = $('#site').val();
                        d.operator = $('#operator').val();
                        d.activity = $('#activity').val();
                    }
                },
                columns: [
                    { "data": "action" },
                    { "data": "submitted_by" },
                    { "data": "submitted_when" },
                    { "data": "site_code" },
                    { "data": "activity"},
                    { "data": "uom"},
                    { "data": "block"},
                    { "data": "task"},
                    { "data": "start"},
                    { "data": "end"},
                    { "data": "mesin"},
                    { "data": "fuel"},
                    { "data": "check_by"},
                    { "data": "when_check"},
                    { "data": "verified_by"},
                    { "data": "verified_when"},
                    { "data": "duty"},
                    { "data": "reason"}
                ],
                responsive: true,
            });

            $('#mesin, #month, #site, #operator, #activity').on('change', function() {
                table.draw();
            });
        });

    </script>
</body>
</html>
