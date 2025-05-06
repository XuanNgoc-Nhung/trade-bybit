@extends('admin.layouts.app')

@section('title', 'Trang quản lý')

@section('content')
<div id="app">
    <user-management></user-management>
</div>
@endsection

@push('scripts')
<script src="{{ mix('js/app.js') }}"></script>
@endpush 