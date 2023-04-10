@extends('layouts.app')

@section('head')
<style>

</style>
@endsection

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header p-2">
                <h3 class="card-title text-bold">
                    Service Details
                </h3>
                <div class="card-tools mr-3">
                    <span class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#addNewItem">
                        <i class="fas fa-plus"></i> Add New
                    </span>
                    <a href="{{ route('user.service.index') }}" class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addNewItem" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Add New Item
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.service.store_details') }}" class="" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <div class="form-group row">
                        <label for="service_item" class="col-sm-2 col-form-label required">
                            Service item
                        </label>
                        <div class="col-sm-10">
                            {{-- option --}}
                            <select name="service_name_item" id="service_item" class="form-control">
                                <option value="" selected disabled>Select Service Item</option>
                                @foreach ($serviceItems as $item)
                                <option value="{{ $item }}" class="text-capitalize">
                                    {{ $item }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label required">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" placeholder="title" name="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="image" placeholder="Image" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label required">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description"
                                placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
@endsection