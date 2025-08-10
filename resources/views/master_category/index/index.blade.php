@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group mb-2">
                <a href="{{url('master_category/form/new')}}" class="btn btn-secondary">+ Master Category Baru</a>
            </div>
            <div class="card">
                <div class="card-header">Daftar Category Items</div>

                <div class="card-body">
                    @include('master_category.index.filter')
                    @include('master_category.index.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@include('master_category.index.js')
@endsection
