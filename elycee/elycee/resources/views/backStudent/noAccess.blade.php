@extends('backStudent.master')
@section('headExtra')
	<style type="text/css">
		.row{
			text-align: center;
		}
		footer{
			position: fixed;
		}
		.col-md-12 img{
			width: 30%;
		}
	</style>
@endsection
@section('content')
	<div class="row">
		<div class="col-md-12">
			<img alt="sens interdit" src="images/noaccess.gif">
			<h1>Vous n'avez pas accès à cette page.</h1>
		</div>
	</div>
	
@endsection