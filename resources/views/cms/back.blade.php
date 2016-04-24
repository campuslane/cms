@extends('layouts.main')

@section('title', $page->title)

@section('styles')
<style>
	
	.page-content {
		min-height:200px;
		border: 1px solid #eee;
		border-radius: 8px;
		padding:8px;
	}

</style>
@endsection

@section('content')

	<div class="page-content">
		
		<p>PAGE CONTENT AREA</p>

	</div>

@endsection

@section('scripts')

<script>
	$(function(){

		alert('jquery');


	});
</script>

@endsection