@extends('admin.master_layout')
@section('title')
    <title>Create Suplier</title>
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
                    <div class="breadcrumb-item">Create Suplier</div>
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
                                        {{-- $table->string('name');
                                        $table->string('email')->nullable()->unique(); // Ensures unique email addresses
                                        $table->string('phone')->unique(); // Unique constraint for phone numbers
                                        $table->text('address')->nullable();

                                        $table->string('company_name')->nullable(); // To store the supplier's company name
                                        $table->string('website')->nullable(); // If the supplier has a website

                                        $table->string('contact_person')->nullable(); // Name of the main contact person
                                        $table->string('contact_person_phone')->nullable(); // Phone number of the contact person
                                        $table->string('contact_person_email')->nullable(); // Email of the contact person

                                        $table->boolean('is_active')->default(true); // To track if the supplier is active

                                        $table->date('contract_start_date')->nullable(); // Start date of the supplier contract
                                        $table->date('contract_end_date')->nullable(); // End date of the supplier contract

                                        $table->text('notes')->nullable(); // Any additional notes --}}

                                        <div class="form-group col-4">
                                            <label>Supplier Name:<span class="text-danger">*</span></label>
                                            <input type="text" id="name" class="form-control" name="name"
                                                value="{{ old('name') }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Company Name:</label>
                                            <input type="text" id="company_name" class="form-control" name="company_name"
                                                value="{{ old('company_name') }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Phone:<span class="text-danger">*</span></label>
                                            <input type="text" id="phone" class="form-control" name="phone"
                                                value="{{ old('phone') }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Email:</label>
                                            <input type="email" id="email" class="form-control" name="email"
                                                value="{{ old('email') }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Address:</label>
                                            <input type="text" id="address" class="form-control" name="address"
                                                value="{{ old('address') }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Website:</label>
                                            <input type="text" id="website" class="form-control" name="website"
                                                value="{{ old('website') }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Contact Person Name:</label>
                                            <input type="text" id="contact_person" class="form-control"
                                                name="contact_person" value="{{ old('contact_person') }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Contact Person Phone:</label>
                                            <input type="text" id="contact_person_phone" class="form-control"
                                                name="contact_person_phone" value="{{ old('contact_person_phone') }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Contact Person Email:</label>
                                            <input type="email" id="contact_person_email" class="form-control"
                                                name="contact_person_email" value="{{ old('contact_person_email') }}">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Contract Start Date:</label>
                                            <input type="date" id="contract_start_date" class="form-control"
                                                name="contract_start_date" value="{{ old('contract_start_date') }}">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Contract End Date:</label>
                                            <input type="date" id="contract_end_date" class="form-control"
                                                name="contract_end_date" value="{{ old('contract_end_date') }}">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Is Active?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="is_active"
                                                    id="active" value="1"
                                                    {{ old('is_active') == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="active">Active</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="is_active"
                                                    id="inactive" value="0"
                                                    {{ old('is_active') == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inactive">Inactive</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Notes:</label>
                                            <textarea name="notes" id="notes" cols="30" rows="50" class="form-control">{{ old('notes') }}</textarea>
                                        </div>



                                        {{-- <div class="form-group col-12">
                                            <label>{{ __('admin.Long Description') }} <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="long_description" id="" cols="30" rows="5" class="summernote">{{ old('long_description') }}</textarea>
                                        </div> --}}
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

    {{-- <script>
        $(document).on('blur', 'input[id="name"]', function(e) {
            let name = $(this).val();
            var url = "{{ route('admin.test_slug') }}";
            $.ajax({
                url,
                type: 'GET',
                dataType: "json",
                data: {
                    name
                },
                success: function(res) {
                    if (res.status) {
                        //   toastr.error('Name Already Exists');
                        $("input#slug").val('');
                        $('span#name_test').text('একই নাম পূর্বে ব্যবহার হয়েছে। সামান্য পরিবর্তন করন।');
                    } else {
                        $('span#name_test').text('');
                    }
                }

            });

        });


        // manage variation quantity start

        // Track selected color and size options
        let selectedColors = [];

        let selectedSizes = [];

        function updateVariationQuantityTable() {
            let variationQuantityTable = $('#variation_quantity_table');
            let tbody = $('#variation_quantity_body');

            // Clear existing rows
            tbody.empty();

            // Loop through each selected color and size
            let serialNumber = 1;
            selectedSizes.forEach(function(size, sizeIndex) {
                selectedColors.forEach(function(color, colorIndex) {

                    let sizeValue = selectedSizesvalue[sizeIndex];
                    let colorValue = selectedColorsvalue[colorIndex];

                    if (color && size && sizeValue && colorValue) {
                        // Create a new row
                        let newRow = $('<tr>');

                        // Add cells to the row
                        newRow.append($('<td>').text(serialNumber++));
                        newRow.append($('<td>').addClass('variation-name').text(size + '_' + color).append(
                            $('<input>').addClass('form-control').attr({
                                type: 'hidden',
                                name: 'product_size_var_id[]',
                                placeholder: 'Size id',
                                value: sizeValue
                            })
                        ).append(
                            $('<input>').addClass('form-control').attr({
                                type: 'hidden',
                                name: 'product_color_var_id[]',
                                placeholder: 'Size id',
                                value: colorValue
                            })
                        ));
                        var isRequired = true;
                        newRow.append($('<td>').append(
                            $('<input>').addClass('form-control').attr({
                                type: 'number',
                                name: 'stock_quantity[]',
                                placeholder: 'Quantity',
                                value: '',
                                required: isRequired,
                            })
                        ));

                        // Append the new row to the table body
                        tbody.append(newRow);
                    }
                });
            });


            // Show the variation quantity table if variations are added
            if (serialNumber > 1) {
                variationQuantityTable.show();
            } else {
                variationQuantityTable.hide();
            }
        }

        // Call this function on color and size change
        $(document).on('change', "select[name='color_id[]'], select[name='size_id[]']", function() {
            selectedColors = $("select[name='color_id[]']").find('option:selected').map(function() {
                return $(this).text();
            }).get();

            selectedColorsvalue = $("select[name='color_id[]']").find('option:selected').map(function() {
                return $(this).val();
            }).get();

            selectedSizes = $("select[name='size_id[]']").find('option:selected').map(function() {
                return $(this).text();
                // return $(this).val();
            }).get();

            selectedSizesvalue = $("select[name='size_id[]']").find('option:selected').map(function() {
                return $(this).val();
            }).get();

            updateVariationQuantityTable();
        });

        // Add more variation quantities
        $(document).on('click', 'a.add_moore_color, a.add_moore', function() {
            updateVariationQuantityTable();
        });

        // Handle color or size removal
        function handleOptionRemoval(optionType) {
            if (optionType === 'color') {
                selectedColors = $("select[name='color_id[]']").find('option:selected').map(function() {
                    return $(this).text();
                }).get();
            } else if (optionType === 'size') {
                selectedSizes = $("select[name='size_id[]']").find('option:selected').map(function() {
                    return $(this).text();
                }).get();
            }

            updateVariationQuantityTable();
        }

        // Initial call to updateVariationQuantityTable
        updateVariationQuantityTable();

        // manage variation quantity end

        $(document).on('click', 'a.add_moore_color', function() {

            let tblrow = $(this).closest("#color_row");

            let variable_product_image = tblrow.find('td input.variable_product_image').val();

            let type = $("select[name='prod_color']").val();

            if (type == 'sincolor') {
                toastr.error('For Single Product You Can\'t Add Moore');
                return;
            }
            let row = `<tr id="color_row">
                        <td>
                            <select name="color_id[]" class="form-control">
                                @foreach ($colors as $color)
                                  <option {{ $color->is_default == 1 ? 'selected' : '' }} value="{{ $color->id }}">{{ $color->name }}</option>
                                @endforeach
                            </select>
                        </td>


                        <td>

			<input class="variable_product_image form-control" type="file" name="var_images[]" placeholder="Price">

                        </td>

                        <td>
                            <a class="btn action-icon btn-primary add_moore_color" style="cursor: pointer;color: #ffffff;"> Add </a>
                            <a class="btn action-icon btn-danger remove" style="cursor: pointer;color: #ffffff;"> Delete </a>
                        </td>
                    </tr>`;
            $(document).find('.color_table tbody').append(row);

        });

        // $(document).on('change', "select[name='prod_color']", function() {
        //         let type=$("select[name='prod_color']").val();
        //         if(type == 'varcolor') {
        //             document.getElementById('variable_table_color').style.display = 'block';
        //         } else {
        //             document.getElementById('variable_table_color').style.display = 'none';
        //         }
        //     });

        $(document).on('change', "select[name='prod_color']", function() {
            let type = $("select[name='prod_color']").val();
            if (type == 'varcolor') {
                document.getElementById('variable_table_color').style.display = 'block';

                // Trigger 'change' event on select[name='type']
                $("select[name='type']").val('variable').trigger('change');
                $("select[name='color_id[]']").val($("select[name='color_id[]'] option:first").val()).trigger(
                    'change');

                var offer_price = $('input[name="offer_price"]').val();
                var price = $('input[name="price"]').val();

                if (offer_price != '') {
                    $('div#variable_table_two input.variable_sell_price').val(offer_price);
                } else {
                    $('div#variable_table_two input.variable_sell_price').val(price);
                }



                // Trigger 'change' event on select[name='size_id[]'] and select the first option
                $("select[name='size_id[]']").val($("select[name='size_id[]'] option:first").val()).trigger(
                    'change');


            } else {
                document.getElementById('variable_table_color').style.display = 'none';
            }
        });

        (function($) {
            "use strict";
            var specification = true;
            $(document).ready(function() {
                $("#name").on("focusout", function(e) {
                    $("#slug").val(convertToSlug($(this).val()));
                })

                $("#category").on("change", function() {
                    var categoryId = $("#category").val();
                    if (categoryId) {
                        $.ajax({
                            type: "get",
                            url: "{{ url('/admin/subcategory-by-category/') }}" + "/" +
                                categoryId,
                            success: function(response) {
                                $("#sub_category").html(response.subCategories);
                                var response =
                                    "<option value=''>{{ __('admin.Select Child Category') }}</option>";
                                $("#child_category").html(response);
                            },
                            error: function(err) {
                                console.log(err);

                            }
                        })
                    } else {
                        var response =
                            "<option value=''>{{ __('admin.Select Sub Category') }}</option>";
                        $("#sub_category").html(response);
                        var response =
                            "<option value=''>{{ __('admin.Select Child Category') }}</option>";
                        $("#child_category").html(response);
                    }


                })

                $("#sub_category").on("change", function() {
                    var SubCategoryId = $("#sub_category").val();
                    if (SubCategoryId) {
                        $.ajax({
                            type: "get",
                            url: "{{ url('/admin/childcategory-by-subcategory/') }}" + "/" +
                                SubCategoryId,
                            success: function(response) {
                                $("#child_category").html(response.childCategories);
                            },
                            error: function(err) {
                                console.log(err);

                            }
                        })
                    } else {
                        var response =
                            "<option value=''>{{ __('admin.Select Child Category') }}</option>";
                        $("#child_category").html(response);
                    }

                })

                $("#is_return").on('change', function() {
                    var returnId = $("#is_return").val();
                    if (returnId == 1) {
                        $("#policy_box").removeClass('d-none');
                    } else {
                        $("#policy_box").addClass('d-none');
                    }

                })

                $("#addNewSpecificationRow").on('click', function() {
                    var html = $("#hidden-specification-box").html();
                    $("#specification-box").append(html);
                })

                $(document).on('click', '.deleteSpeceficationBtn', function() {
                    $(this).closest('.delete-specification-row').remove();
                });


                $("#manageSpecificationBox").on("click", function() {
                    if (specification) {
                        specification = false;
                        $("#specification-box").addClass('d-none');
                    } else {
                        specification = true;
                        $("#specification-box").removeClass('d-none');
                    }


                })

            });
        })(jQuery);

        function convertToSlug(Text) {
            return Text
                .toLowerCase()
                .replace(/[^\w ]+/g, '')
                .replace(/ +/g, '-');
        }

        function previewThumnailImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview-img');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        };

        function previewProductImages(event) {
            var output = document.getElementById('preview-images');
            output.innerHTML = ''; // Clear previous previews

            for (var i = 0; i < event.target.files.length; i++) {
                (function(file) {
                    var reader = new FileReader();
                    reader.onload = function() {
                        var imgContainer = document.createElement('div');
                        imgContainer.className = 'preview-image-container';

                        var img = document.createElement('img');
                        img.src = reader.result;
                        img.className = 'preview-image';
                        img.style.width = '70px'; // Set the width
                        img.style.padding = '10px'; // Add padding

                        var closeButton = document.createElement('span');
                        closeButton.className = 'close-icon';
                        closeButton.innerHTML = '&times;'; // Unicode for 'times' (cross) symbol

                        closeButton.onclick = function() {
                            imgContainer.remove(); // Remove the image container when close button is clicked
                        };

                        imgContainer.appendChild(img);
                        imgContainer.appendChild(closeButton);
                        output.appendChild(imgContainer);
                    };

                    reader.readAsDataURL(file);
                })(event.target.files[i]);
            }
        }

        // add moore

        $(document).on('click', 'a.add_moore', function() {
            let tblrow = $(this).closest("tr");

            let variable_sell_price = tblrow.find('td input.variable_sell_price').val();
            let variable_dis_price = tblrow.find('td input.variable_dis_price').val();

            let type = $("select[name='type']").val();

            if (type == 'single') {
                toastr.error('For Single Product You Can\'t Add Moore');
                return;
            }
            let row = `<tr>
                        <td>
                            <select name="size_id[]" class="form-control">
                                @foreach ($sizes as $size)
                                <option value="{{ $size->id }}">{{ $size->title }}</option>
                                @endforeach
                            </select>
                        </td>


                        <td>
                        <input class="variable_sell_price form-control" type="number" value="${variable_sell_price}" name="sell_price[]" placeholder="Price">
                        </td>

                        <td>
                            <a class="btn action-icon btn-primary add_moore" style="cursor: pointer;color: #ffffff;"> Add </a>
                            <a class="btn action-icon btn-danger remove" style="cursor: pointer;color: #ffffff;"> Delete </a>
                        </td>
                    </tr>`;
            $(document).find('.size_table tbody').append(row);

        });

        $(document).on('change', "select[name='type']", function() {

            let type = $("select[name='type']").val();
            if (type == 'variable') {

                var offer_price = $('input[name="offer_price"]').val();
                var price = $('input[name="price"]').val();

                if (offer_price != '') {

                    $('div#variable_table_two input.variable_sell_price').val(offer_price);
                } else {

                    $('div#variable_table_two input.variable_sell_price').val(price);
                }

                document.getElementById('variable_table_two').style.display = 'block';
            } else {
                document.getElementById('variable_table_two').style.display = 'none';
            }
        });

        $(document).on('change', "select[name='typecolor']", function() {
            let type = $("select[name='typecolor']").val();
            if (type == 'variableColor') {
                document.getElementById('variable_table_three').style.display = 'block';
            } else {
                document.getElementById('variable_table_three').style.display = 'none';
            }
        });

        $(document).on('click', "a.remove", function(e) {
            var whichtr = $(this).closest("tr");
            whichtr.remove();
        });

        $(document).on('blur', "input[name='sell_price']", function() {
            let sell_price = $(this).val();
            $("input.variable_sell_price").val(sell_price);
        });

        $(document).on('blur', '.dicount_amount', function() {

            let discount_amount = $(this).val();
            let new_price = 0;
            var price = $("input[name='sell_price']").val();
            var discount_type = $("select[name='discount_type']").val();
            if (discount_type == 'percentage') {
                new_price = (price / 100) * discount_amount;
                new_price = price - new_price;
            } else {
                new_price = price - discount_amount;
            }
            $("input[name='after_discount']").val(new_price.toFixed(2));
            $(".variable_dis_price").val(new_price.toFixed(2));
            $(".variable_dis_price_extra").val(12);
            // $(".variable_dis_price_extra").val(new_price.toFixed(2));
        });
    </script> --}}


    <script>
        // form submit and validation when onclick formSubmit() this function call

        function formSubmit() {
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
                    url: "{{ route('admin.supplier.store') }}",
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
