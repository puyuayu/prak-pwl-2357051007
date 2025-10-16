@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <x-user-table :users="$users"/>
</div>
@endsection
