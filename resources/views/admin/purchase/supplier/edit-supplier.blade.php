@extends('admin.master_layout')
@section('title')
    <title>Edit Suplier</title>
@endsection
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Suplier</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a
                            href="{{ route('admin.dashboard') }}">{{ __('admin.Dashboard') }}</a></div>
                    <div class="breadcrumb-item">Edit Suplier</div>
                </div>
            </div>

            <div class="section-body">
                <a href="{{ route('admin.supplier') }}" class="btn btn-primary"><i class="fas fa-list"></i>
                    Suppliers</a>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                      
                                        <div class="form-group col-4">
                                            <label>Supplier Name:<span class="text-danger">*</span></label>
                                            <input type="text" id="name" class="form-control" name="name"
                                                value="{{ $supplier->name }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Company Name:</label>
                                            <input type="text" id="company_name" class="form-control" name="company_name"
                                                value="{{ $supplier->company_name }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Phone:<span class="text-danger">*</span></label>
                                            <input type="text" id="phone" class="form-control" name="phone"
                                                value="{{ $supplier->phone }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Email:</label>
                                            <input type="email" id="email" class="form-control" name="email"
                                                value="{{ $supplier->email }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Address:</label>
                                            <input type="text" id="address" class="form-control" name="address"
                                                value="{{ $supplier->address }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Website:</label>
                                            <input type="text" id="website" class="form-control" name="website"
                                                value="{{ $supplier->website }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Contact Person Name:</label>
                                            <input type="text" id="contact_person" class="form-control"
                                                name="contact_person" value="{{ $supplier->contact_person }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Contact Person Phone:</label>
                                            <input type="text" id="contact_person_phone" class="form-control"
                                                name="contact_person_phone" value="{{ $supplier->contact_person_phone }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Contact Person Email:</label>
                                            <input type="email" id="contact_person_email" class="form-control"
                                                name="contact_person_email" value="{{ $supplier->contact_person_email }}">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Contract Start Date:</label>
                                            <input type="date" id="contract_start_date" class="form-control"
                                                name="contract_start_date" value="{{ $supplier->contract_start_date }}">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Contract End Date:</label>
                                            <input type="date" id="contract_end_date" class="form-control"
                                                name="contract_end_date" value="{{ $supplier->contract_end_date }}">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Is Active?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="is_active"
                                                    id="active" value="1"
                                                    {{ $supplier->is_active == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="active">Active</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="is_active"
                                                    id="inactive" value="0"
                                                    {{ $supplier->is_active == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inactive">Inactive</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Notes:</label>
                                            <textarea name="notes" id="notes" cols="30" rows="50" class="form-control">{{ $supplier->notes }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <a onclick="update()"
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
        function update() {
            let supplierName = $('#name').val();
            let companyName = $('#company_name').val();
            let phone = $('#phone').val();
            let email = $('#email').val();
            let address = $('#address').val();
            let website = $('#website').val();

            let contactPerson = $('#contact_person').val();
            let contactPersonEmail = $('#contact_person_email').val();
            let contactPersonPhone = $('#contact_person_phone').val();

            let contractStartDate = $('#contract_start_date').val();
            let contractEndDate = $('#contract_end_date').val();
            let isActive = $('input[name="is_active"]:checked').val();
            let notes = $('#notes').val();
         
            

            if(supplierName == '') {
                toastr.error('Please Enter Supplier Name');
            } else if (phone == '') {
                toastr.error('Please Enter Phone Number');
            } else {
                let data = new FormData();
                data.append('name', supplierName);
                data.append('company_name', companyName);
                data.append('phone', phone);
                data.append('email', email);
                data.append('address', address);
                data.append('website', website);
                data.append('contact_person', contactPerson);
                data.append('contact_person_email', contactPersonEmail);
                data.append('contact_person_phone', contactPersonPhone);
                data.append('contract_start_date', contractStartDate);
                data.append('contract_end_date', contractEndDate);
                data.append('is_active', isActive);
                data.append('notes', notes);



                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.supplier.update', $supplier->id) }}",
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == true) {
                            // use debugger to debug the code
                           
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
