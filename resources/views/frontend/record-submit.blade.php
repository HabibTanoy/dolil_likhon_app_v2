@extends('custom-layouts.master') @section('title', '') @push('css') @endpush @section('content')
    <div class="container">
        <div class="card card-primary col-12 glassMorphismBg">
            <div class="card-body">
                <div class="card-text form-bg">
                    <form method="POST" action="{{ route('record-store') }}" class="needs-validation application-form" novalidate enctype="multipart/form-data">
                        @csrf
                        <div class="row form-row">
                            <div class="form-group col-12 col-md-6">
                                <label for="name" class="control-label">Name <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus />
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @else
                                    <div class="invalid-feedback">
                                        Name is required
                                    </div>
                                    @enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="daag_number" class="control-label">Daag Number <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" id="daag_number" name="daag_number" value="{{ old('daag_number') }}" required />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @else
                                    <div class="invalid-feedback">
                                        Daag Number is required
                                    </div>
                                    @enderror
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <label for="mouja" class="control-label">Mouja <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" id="father_name" name="mouja" value="{{ old('mouja') }}" required />
                                @error('mouja')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @else
                                    <div class="invalid-feedback">
                                        Mouja is required
                                    </div>
                                    @enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="khotian" class="control-label">Khotian <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" id="khotian" name="khotian" value="{{ old('khotian') }}" required />
                                @error('khotian')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @else
                                    <div class="invalid-feedback">
                                        Khotian is required
                                    </div>
                                    @enderror
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <label for="buyer_name" class="control-label">Buyer Name <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" id="buyer_name" name="buyer_name" value="{{ old('buyer_name') }}" required />
                                @error('buyer_name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @else
                                    <div class="invalid-feedback">
                                        Buyer name is required
                                    </div>
                                    @enderror
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <label for="seller_name" class="control-label">Seller Name <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" id="seller_name" name="seller_name" value="{{ old('seller_name') }}" required />
                                @error('seller_name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @else
                                    <div class="invalid-feedback">
                                        Seller name is required
                                    </div>
                                    @enderror
                            </div>

                            <div class="form-group col-12">
                                <label for="google_file_upload" class="control-label">Upload Document <small class="text-danger">*</small> <small>(Only Docs or Pdf Allow)</small></label>
                                <input type="file" class="form-control file-input" id="google_file_upload" name="google_file_upload" value="{{ old('google_file_upload') }}" accept="image/*" required />
                                @error('google_file_upload')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @else
                                    <div class="invalid-feedback">
                                        Document is Required
                                    </div>
                                    @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary shadow btn-lg">Submit Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection @section('modal') @endsection @push('js') @endpush
