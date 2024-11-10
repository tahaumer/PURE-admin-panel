@extends('main')
@php
    $page = 'Dashboard';
    $meta_title = 'Dashboard - Admin Panel';
    $meta_description = 'Dashboard - Admin Panel';
@endphp

@push('style')
@endpush

@section('content')
@if(session('alert'))
   <x-alert/>
@endif

@include('inc.head')
<div>
    Welcome Admin
    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection

@push('script')
@endpush
