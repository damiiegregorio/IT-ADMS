@extends('layouts.app')

@section('content')
	<h1>Files</h1>

	@if(count($files)>0)
		@foreach($files as $file)
			<div class="well">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<img style='width:100%' src='storage/uploads/{{ $file->name }}'>
					</div>
					<div class="col-md-8 col-sm-8">
						<h3><a href="post/{{ $file->id }}">{{ $file->name }}</a></h3>
						<small>Written on {{ $file->created_at }} by {{ $file->user->name }}</small> 

						<h5>{{ $file->body }}</h5>
					</div>
				</div>
				
				
			</div>
		@endforeach
		{{ $files->links() }}
	@else
		<p>No post found.</p>
	
	@endif
@endsection