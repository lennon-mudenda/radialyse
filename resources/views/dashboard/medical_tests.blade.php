@extends('dashboard.partials.base')

@section('title','Medical Tests')

@section('styles')

@endsection

@section('main')
	<main class="main-content bgc-grey-100">
		<div id="mainContent">
			<div class="container-fluid">
				<h4 class="c-grey-900 mT-10 mB-30">Medical Tests</h4>
				<div class="row">
					<div class="col-md-12">
						<div class="bgc-white bd bdrs-3 p-20 mB-20">
							<div class="w-100 gap-10 peers mY-20">
								<div class="peer">
									<button type="button" class="btn cur-p btn-outline-primary" id="addCenter" onclick="getForm();" data-toggle="modal" data-target="#CenterModal">Add a Medical Test</button>
								</div>
							</div>
							<table id="dataTable" class="table table-striped table-bordered table-hover " cellspacing="0" width="100%">
								<thead class="thead-dark">
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Type</th>
								</tr>
								</thead>
								<tfoot>
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Type</th>
								</tr>
								</tfoot>
								<tbody >
									@foreach($tests as $test)
									<tr>
										<td>{{ $test->id }}</td>
										<td>{{ $test->name }}</td>
										<td>{{ $test->type->name }}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<div class="modal fade" id="CenterModal" tabindex="-1" role="dialog" aria-labelledby="centerModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="centerModalLabel">Enter Tests Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="center_modal_body">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js">
	</script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js">
	</script>

	<script>
        //let str = '';
        var g = 0;
        let getForm = function () {
            if (g == 1) return;
            $.ajax({
                type: "GET",
                url: "{{ url('/tests/create') }}",
                contentType: 'application/x-www-form-urlencoded',
                success: function(form)
                {
                    $("#center_modal_body").html(form);

                }
            });
            g = g + 1;
        }



        /*
        $.ajax({
            type: "POST",
            url: "{{ url('/centers/save') }}",
            data: str,
            contentType: 'application/x-www-form-urlencoded',
            dataType: "text",
            success: function(msg) {
                alert(msg);
                if (msg == 'OK') {
                    $("#myModal").text('description was updated successfully');
                    $("#myModal").modal();
                }
            }
        });*/
	</script>
@endsection