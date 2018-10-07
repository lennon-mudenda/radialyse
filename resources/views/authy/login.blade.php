@extends('authy.base')

@section('title','Admin | Login')

@section('header','Login')

@section('action',url('/admin/login'))

@section('form')
	
	<div class="form-group">
		<label class="text-normal text-dark">Username</label>
		<input type="email" name="email" class="form-control" placeholder="johnny@example.com" required="true">
	</div>
	<div class="form-group">
		<label class="text-normal text-dark">Password</label>
		<input type="password" name="password" class="form-control" placeholder="Password" required="true">
	</div>
	<div class="form-group">
		<div class="peers ai-c jc-sb fxw-nw">
			<div class="peer">
				<div class="checkbox checkbox-circle checkbox-info peers ai-c">
					<input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
					<label for="inputCall1" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Remember Me</span></label>
				</div>
			</div>
			<div class="peer">
				<button class="btn btn-primary">Login</button>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script src="https://code.jquery.com/jquery-3.3.1.min.js">
		jQuery(document).ready(function ($) {
			"use strict";

			$('#authy').submit(function() {
				$.ajax({
			      type: "POST",
			      url: "http://127.0.0.1:8000/admin/login",
			      data: str,
			      contentType: 'application/x-www-form-urlencoded',
			      dataType: "text",
			      success: function(msg) {
			        //alert(msg);
			        $('#errors').html = msg;

			      }
			    });
			    return false;
			});
		});
	</script>
@endsection