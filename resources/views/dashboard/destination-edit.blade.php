@extends('dashboard.partials.base')

@section('title','Edit Destination')

@section('styles')
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection

@section('main')
			<main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="full-container">
                    	<div class="masonry-item col-md-12">
                    		<div class="bgc-white p-20 bd">
                    			<h6 class="c-grey-900">@isset($description)Edit description about {{ $desination->name }} @endisset</h6>                    			
                    			<div class="mT-30" >
                    				<div class="gap-10 peers justify-content-center">        					
                    					<div class="peer ">
											<button id="edit" class="btn cur-p btn-primary btn-lg " onclick="edit()" type="button">
												Edit
											</button>
										</div>
										<div class="peer">
											<button id="save" class="btn cur-p btn-primary btn-lg" onclick="save()" type="button">Save</button>
										</div>
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    	<br />
                    	<br />
                    	<br />
                    	<br />
                    	<br />
                    	<div hidden="true" id="csrf">
                    		@csrf
                    	</div>
                    	

						<div class="click2edit container">
							@isset($destination->description)
								{!! $destination->description !!}
							@else
								<h3>This is some dummy text below to be filled with content about the specific destination</h3>
								<p>
									Ei eos suavitate forensibus mnesarchum. Eu est timeam vocibus, an nostro aliquam adipiscing quo. Zril equidem et quo, ad albucius scripserit sit. Vis constituto deseruisse an, interesset reprehendunt et mel, gloriatur concludaturque pro no. At ludus mediocritatem qui, no vituperata assueverit accommodare his. Eos simul tritani gubergren et, te vel ullum commodo docendi, ne sea regione laoreet iracundia. His menandri quaestio ea. Ea congue volutpat has, cu vim delenit offendit ullamcorper ius at agam.
								</p>
								<blockquote>
									<p>
									    <i class="icon-64 icon-quote-left left"></i> Eos simul tritani gubergren et, te vel ullum commodo docendi, ne sea regione laoreet iracundia. His menandri quaestio ea. Ea congue volutpat has, cu vim delenit offendit ullamcorper. Ius at agam malorum suscipiantur, sit aliquid percipitur ei.
									</p>
								</blockquote>
								<p>
									Vide duis comprehensam at sit, expetenda deseruisse ea qui. Ei eum similique dissentiet. Agam eloquentiam accommodare ei per, alia graecis consetetur id sit. Ius dicant nonumy ad, modus postea indoctum et mei. Vel legimus percipit te, vidit dicta eam ea. Vidit audire id has, usu ei vero commune. Nam duis adipisci gloriatur eu, te delicata complectitur ius, his ex clita voluptua delicata. At vel malis facilisi signiferumque, mei meis consectetuer ex, vis porro accumsan eu.
								</p>
							@endisset
						</div>
					</div>
				</div>
			</main>
			<p data-toggle="modal" data-target="#myModal"></p>
@endsection

@section('scripts')
	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js">		
	</script> 
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js">		
	</script> 	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js">
	</script>
	<script type="text/javascript">
		
			var edit = function() 
			{
			  $('.click2edit').summernote({focus: true});
			};

			var save = function() 
			{
			  var markup = $('.click2edit').summernote('code');
			  $('.click2edit').summernote('destroy');
			  
			  var str = $.param({
			      	description : markup,
			      	_token : $("input[name='_token']").val()
			      });
			  
			  $.ajax({
			      type: "POST",
			      url: "{{ url()->current() }}",
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
			    });
			
			};
		

		
	</script>
@endsection