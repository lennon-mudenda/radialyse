@extends('authy.base')

@section('title','Admin | Signup')

@section('header','Sign Up')

@section('action',url('/admin/signup'))

@section('form')
	<div class="form-group">
		<label class="text-normal text-dark">Username</label>
		<input type="text" name="name" class="form-control" placeholder="John Doe" required="true">
	</div>
	<div class="form-group">
		<label class="text-normal text-dark">Email Address</label>
		<input type="email" name="email" class="form-control" placeholder="name@email.com" required="true">
	</div>
	<div class="form-group">
		<label class="text-normal text-dark">Password</label>
		<input type="password" name="password" class="form-control" placeholder="Password" required="true">
	</div>
	<div class="form-group">
		<label class="text-normal text-dark">Confirm Password</label>
		<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required="true">
	</div>
	<div class="form-group">
		<div class="peers ai-c jc-sb fxw-nw">
			<div class="peer">
				<div class="checkbox checkbox-circle checkbox-info peers ai-c">
					<input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer" >
					<label for="inputCall1" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Remember Me</span></label>
				</div>
			</div>
			<div class="peer">
				<button class="btn btn-primary">Sign Up</button>
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
			      url: "http://127.0.0.1:8000/admin/signup",
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