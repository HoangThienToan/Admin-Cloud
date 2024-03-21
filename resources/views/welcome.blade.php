@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
<p>Welcome to this beautiful admin panel.</p>
<div class="" id='main-data'></div>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
<script>
    console.log("Hi, Welcome to the Edu2word Admin manager!");
</script>

<script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer></script>

<script src="/js/app.js"></script>
@endpush


{{-- Add common CSS customizations --}}

@push('css')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="http://cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css">
@endpush