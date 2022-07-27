@extends('admin.layouts.main')
@section('title', 'Data Instructors | Basicschool')
@section('content')
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Data Instructor</h1>
		<nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Users</li>
				<li class="breadcrumb-item active" aria-current="page">Instructor</li>
			</ol>
		</nav>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">What Instructor do ?</h5>
						<h6 class="card-subtitle text-muted">instructors are responsible for providing accurate and timely information
							about their program to prospective students, current students, and relevant members of the University community.
							Instructors must provide academic units and students with accurate course descriptions in a timely manner.
					</div>
					<div class="card-body">
						<div id="datatables-column-search-text-inputs_wrapper" class="dataTables_wrapper dt-bootstrap5">
							<div class="row">
								<div class="col-sm-12">
									<table id="datatables-column-search-text-inputs" class="table table-striped dataTable" style="width: 100%;"
										aria-describedby="datatables-column-search-text-inputs_info">
										<thead>
											<tr>
												<th class="sorting sorting_asc" tabindex="0" aria-controls="datatables-column-search-text-inputs"
													rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"
													style="width: 179px;">Name</th>
												<th class="sorting" tabindex="0" aria-controls="datatables-column-search-text-inputs" rowspan="1"
													colspan="1" aria-label="Position: activate to sort column ascending" style="width: 179px;">Position</th>
												<th class="sorting" tabindex="0" aria-controls="datatables-column-search-text-inputs" rowspan="1"
													colspan="1" aria-label="Office: activate to sort column ascending" style="width: 179px;">Office</th>
												<th class="sorting" tabindex="0" aria-controls="datatables-column-search-text-inputs" rowspan="1"
													colspan="1" aria-label="Age: activate to sort column ascending" style="width: 179px;">Age</th>
												<th class="sorting" tabindex="0" aria-controls="datatables-column-search-text-inputs" rowspan="1"
													colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 179px;">Start date
												</th>
												<th class="sorting" tabindex="0" aria-controls="datatables-column-search-text-inputs" rowspan="1"
													colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 179px;">Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr class="odd">
												<td class="sorting_1">Airi Satou</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>33</td>
												<td>2008/11/28</td>
												<td>$162,700</td>
											</tr>
											<tr class="even">
												<td class="sorting_1">Angelica Ramos</td>
												<td>Chief Executive Officer (CEO)</td>
												<td>London</td>
												<td>47</td>
												<td>2009/10/09</td>
												<td>$1,200,000</td>
											</tr>
											<tr class="odd">
												<td class="sorting_1">Ashton Cox</td>
												<td>Junior Technical Author</td>
												<td>San Francisco</td>
												<td>66</td>
												<td>2009/01/12</td>
												<td>$86,000</td>
											</tr>
											<tr class="even">
												<td class="sorting_1">Bradley Greer</td>
												<td>Software Engineer</td>
												<td>London</td>
												<td>41</td>
												<td>2012/10/13</td>
												<td>$132,000</td>
											</tr>
											<tr class="odd">
												<td class="sorting_1">Brenden Wagner</td>
												<td>Software Engineer</td>
												<td>San Francisco</td>
												<td>28</td>
												<td>2011/06/07</td>
												<td>$206,850</td>
											</tr>
											<tr class="even">
												<td class="sorting_1">Brielle Williamson</td>
												<td>Integration Specialist</td>
												<td>New York</td>
												<td>61</td>
												<td>2012/12/02</td>
												<td>$372,000</td>
											</tr>
											<tr class="odd">
												<td class="sorting_1">Bruno Nash</td>
												<td>Software Engineer</td>
												<td>London</td>
												<td>38</td>
												<td>2011/05/03</td>
												<td>$163,500</td>
											</tr>
											<tr class="even">
												<td class="sorting_1">Caesar Vance</td>
												<td>Pre-Sales Support</td>
												<td>New York</td>
												<td>21</td>
												<td>2011/12/12</td>
												<td>$106,450</td>
											</tr>
											<tr class="odd">
												<td class="sorting_1">Cara Stevens</td>
												<td>Sales Assistant</td>
												<td>New York</td>
												<td>46</td>
												<td>2011/12/06</td>
												<td>$145,600</td>
											</tr>
											<tr class="even">
												<td class="sorting_1">Cedric Kelly</td>
												<td>Senior Javascript Developer</td>
												<td>Edinburgh</td>
												<td>22</td>
												<td>2012/03/29</td>
												<td>$433,060</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Name">
												</th>
												<th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Position">
												</th>
												<th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Office">
												</th>
												<th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Age">
												</th>
												<th rowspan="1" colspan="1"><input type="text" class="form-control"
														placeholder="Search Start date"></th>
												<th rowspan="1" colspan="1"><input type="text" class="form-control"
														placeholder="Search Salary"></th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@push('custom-script')
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

	<script>
	 // DataTables with Column Search by Text Inputs
	 document.addEventListener("DOMContentLoaded", function() {
	  // Setup - add a text input to each footer cell
	  $('#datatables-column-search-text-inputs tfoot th').each(function() {
	   var title = $(this).text();
	   $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
	  });
	  // DataTables
	  var table = $('#datatables-column-search-text-inputs').DataTable([

	  ]);
	  // Apply the search
	  table.columns().every(function() {
	   var that = this;
	   $('input', this.footer()).on('keyup change clear', function() {
	    if (that.search() !== this.value) {
	     that
	      .search(this.value)
	      .draw();
	    }
	   });
	  });
	 });
	</script>
@endpush
