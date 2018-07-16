@extends('layout')

@section('content')
			<form class="form-horizontal" id="magform">
				{!! csrf_field() !!}
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name">
					</div>
				</div>
				<div class="form-group">
					<label for="price" class="col-sm-2 control-label">Price</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="price">
					</div>
				</div>
				<div class="form-group">
					<label for="cover" class="col-sm-2 control-label">Cover</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cover">
					</div>
				</div>
				<div class="form-group">
					<label for="colour" class="col-sm-2 control-label">Colour</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="colour">
					</div>
				</div>
				<div class="form-group">
					<label for="size" class="col-sm-2 control-label">Size</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="size">
					</div>
				</div>
				<div class="form-group">
					<label for="theme" class="col-sm-2 control-label">Theme</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="theme">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="button" class="btn btn-primary" id="magsave">Save</button>
					</div>
				</div>
			</form>
			<table class="table table-bordered" id="mags_table">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Price</th> 
					<th>Cover</th>
					<th>Colour</th>
					<th>Size</th>
					<th>Theme</th>
					<th>Delete?</th>
				</tr>
				<!-- Table data for new owners injected here by JS using AJAX data  -->
			</table>
@endsection