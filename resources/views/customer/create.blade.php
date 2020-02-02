@extends('layouts.app')

@section('title', 'Product Index' )

{{-- @section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')
<div class="container-fluid">
    @if (session()->has('message'))
        <h1>{{ session()->get('message') }}</h1>
    @endif
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-success d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Create Customer</h4>
                        </div>
                    </div>
                <form action="{{ route('customer.store') }}" method="POST">
                    @csrf
                    <div class="card-body table-responsive">
                        <div class="m-2">
                            <label for="name" class="col-md-12 col-form-label text-md-center">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="m-2">
                            <label for="email" class="col-md-12 col-form-label text-md-center">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="m-2">
                            <label for="email" class="col-md-12 col-form-label text-md-center">{{ __('Contact Number') }}</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                            @error('phone')
                                <label for="error" class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="m-2">
                            <label for="email" class="col-md-12 col-form-label text-md-center">{{ __('Address') }}</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                            @error('address')
                                <label for="error" class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="mr-2 ml-2 mb-2 mt-5">
                            <select class="custom-select" id="inputGroupSelect01" name="up_line">
                                <option value="0">Select Down Line. If no Down Line, leave this!</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->user->id }}">{{ $customer->user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mr-2 ml-2 mb-2 mt-5">
                            <select class="custom-select" id="inputGroupSelect01" name="govt_id_type">
                                <option selected disabled>Government ID Type</option>
                                <option value="SSS">SSS</option>
                                <option value="Pag-ibig">Pag-ibig</option>
                                <option value="Philhealth">Philhealth</option>
                                <option value="Driver's License">Driver's License</option>
                            </select>
                        </div>

                        <div class="m-2">
                            <label for="email" class="col-md-12 col-form-label text-md-center">{{ __('Government ID Number') }}</label>
                            <input type="text" name="govt_id_number" class="form-control" value="{{ old('govt_id_number') }}">
                            @error('govt_id_number')
                                <label for="error" class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="mr-2 ml-2 mb-2 mt-5 d-flex justify-content-center">
                            <div>
                                <button type="submit" class="btn btn-success">
                                {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
</div>
@endsection


