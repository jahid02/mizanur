@extends('layouts.admin.master')
@section('title', 'Update Service')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Service Details</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="active">Service Details</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Service Details</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label class="col-md-2 control-label">Title</label>
                            <div class="col-md-10">
                                <input value="{{$service->title}}" name="title" type="text" id="title" class="form-control" placeholder="Service title">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-10">
                                <textarea name="description" class="form-control" rows="5" placeholder="Description">{{$service->description}}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Unit Price</label>
                            <div class="col-md-10">
                                <input value="{{$service->unit_price}}" name="unit_price" min="1" step="0.1" type="number" id="unit_price" class="form-control" placeholder="Unit price">
                                @error('unit_price')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input @if($service->status == 'active') checked   @endif type="radio" id="active" value="active" name="status">
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input @if($service->status == 'inactive') checked   @endif type="radio" id="inactive" value="inactive" name="status">
                                    <label for="inactive"> Inactive </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label class="col-md-2 control-label">Image</label>
                            <div style="width: 50%">
                                <img src="{{ asset($service->image) }}" class="img-fluid img-rounded" alt="">
                            </div>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{route('admin.service.index')}}">Back</a>
                        </div>
                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
    <!-- End Row -->

@endsection
