@extends('layouts.baca')
@section('content')
<style type="text/css">
	embed{
		width: 100%;
		height: 550px;
	}
</style>
<embed src="{{ asset('isibuku/'.$nama_file) }}"></embed>
@endsection