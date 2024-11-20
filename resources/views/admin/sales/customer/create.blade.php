@extends('admin.master_layout')
@section('title')
    <title>Create Customer</title>
@endsection
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create Suplier</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a
                            href="{{ route('admin.dashboard') }}">{{ __('admin.Dashboard') }}</a></div>
                    <div class="breadcrumb-item">Create Customer</div>
                </div>
            </div>

            <div class="section-body">
                <a href="{{ route('admin.customer') }}" class="btn btn-primary"><i class="fas fa-list"></i>
                    Customers</a>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Customer Name:<span class="text-danger">*</span></label>
                                            <input type="text" id="name" class="form-control" name="name"
                                                value="{{ old('name') }}">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Email:</label>
                                            <input type="text" id="email" class="form-control" name="email"
                                                value="{{ old('email') }}">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Phone:<span class="text-danger">*</span></label>
                                            <input type="text" id="phone" class="form-control" name="phone"
                                                value="{{ old('phone') }}">
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Address:</label>
                                            <input type="text" id="address" class="form-control" name="address"
                                                value="{{ old('address') }}">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Notes:</label>
                                            <textarea name="notes" id="notes" cols="30" rows="50" class="form-control">{{ old('notes') }}</textarea>
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Image:</label>
                                            <input type="file" id="image" class="form-control" name="image" onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                                            <div class="form-group mt-4">
                                                <img src="https://placehold.co/100x100"
                                                    class="rounded"
                                                    alt="Package Image"
                                                    style="width: 100px; height: 100px;"
                                                    id="blah1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <a onclick="formSubmit()"
                                                class="btn btn-primary float-right">{{ __('admin.Save') }}</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <script>
        function formSubmit() {
            let name = $('#name').val();
            let phone = $('#phone').val();
            let email = $('#email').val();
            let address = $('#address').val();
            let notes = $('#notes').val();
            let image = document.getElementById('image').files[0];







            if(name == '') {
                toastr.error('Please Enter Name');
            } else if (phone == '') {
                toastr.error('Please Enter Phone Number');
            } else if(address == ''){
                toastr.error('Please Enter Address');
            } else {
                let data = new FormData();
                data.append('name', name);
                data.append('phone', phone);
                data.append('email', email);
                data.append('address', address);
                data.append('notes', notes);
                data.append('image', image);


                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.customer.store') }}",
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == true) {
                            toastr.success(response.message);
                            setTimeout(function() {
                                window.location.href =  response.url;
                            }, 1000);
                        } else {
                            toastr.error(response.message);
                        }
                    }
                });
            }
        }
    </script>
@endsection
