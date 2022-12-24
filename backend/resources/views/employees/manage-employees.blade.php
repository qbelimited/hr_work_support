@extends('layouts.dash')

@section('content')
    @include('includes.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        @include('includes.dashnav')
        @include('includes.employee_onboard_modal')
        
        <div class="container-fluid py-4">
            <div class="row">
                @include('includes.employee_onboard_modal')
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
 
                <div class="col-xl-12 col-sm-12 mb-xl-1 mb-4">
                <!-- <button type="button" class="btn btn-block btn-light mb-3" >Form</button>     -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-form">ADD EMPLOYEE</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-form1">UPLOAD EMPLOYEE DATA</button>
                   

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Middlename</th>
                                <th>Lastname</th>
                                <th>Department</th>
                                <th>Work phone</th>
                                <th>Work Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($employees as $employee)
                            <tr>
                               
                                <td>{{$employee->fname}}</td>
                                <td>{{$employee->mname}}</td>
                                <td>{{$employee->lname}}</td>
                                <td>{{$employee->department}}</td>
                                <td>{{$employee->work_phone}}</td>
                                <td>{{$employee->work_email}}</td>
                               
                            </tr>
                             @endforeach 
                           
                            
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="modal fade" id="modal-form1" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h5 class="">UPLOAD EMPLOYEE DATA</h5>
                                </div >
                                <div class="card-body">
                                    <form enctype="multipart/form-data">
                                    <label>Upload Excel File</label>
                                    <!-- <input type="file" accept=".xls,.xlsx" id="emp_file" required/> -->
                                    <input type='file' id="emp_file" name='file' accept=".xls,.xlsx,.csv" class="form-control">
                                    <button type="submit" id="upload_employee" class="btn btn-primary col-md-offset-3">UPLOAD EMPLOYEE EXCEL</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                
              
            @include('includes.footer')
        </div>
    </main>
    @include('includes.uiset')
    @include('includes.scripts')
    <script  src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

        //submit employee data
        $("#sumbit_employee").on("click", function(e){
            e.preventDefault();

            //get the form data
            let first_name = $("#first_name").val();
            let middle_name = $("#middle_name").val();
            let last_name = $("#last_name").val();
            let birthdate = $("#birthdate").val();
            let gender = $("#gender").val();
            let address = $("#address").val();
            let department = $("#department").val();
            let jobtitle = $("#jobtitle").val();
            let employee_id = $("#employee_id").val();
            let bank_acc = $("#bank_acc").val();
            let country = $("#country").val();
            let city = $("#city").val();
            let mobile_phone = $("#mobile_phone").val();
            let work_phone = $("#work_phone").val();
            work_mail
            
            
            if (first_name == "") {
                swal("Field Required", "Firstname is required", "error");
            } else if (middle_name == "") {
                swal("Field Required", "Middlename is required", "error");
            } else if (last_name == "") {
                swal("Field Required", "Lastname is required", "error");
            } else if (birthdate == "") {
                swal("Field Required", "Birthdate is required", "error");
            } else if (gender == "") {
                swal("Field Required", "Gender is required", "error");
            } else if (address == "") {
                swal("Field Required", "Address is required", "error");
            } else {

                    let formdata = new FormData();
                    // console.log("save action1");

                    formdata.append("fname", first_name);
                    formdata.append("mname", middle_name);
                    formdata.append("lname", last_name);
                    formdata.append("birthdate", birthdate);
                    formdata.append("gender", gender);
                    formdata.append("address", address);
                    formdata.append("department", department);
                    formdata.append("jobtitle", jobtitle);
                    formdata.append("employee_id", employee_id);
                    formdata.append("bank_acc_no", bank_acc);
                    formdata.append("country",country);
                    formdata.append("city",city);
                    formdata.append("mobile_phone",mobile_phone);
                    formdata.append("work_phone",work_phone);
                    formdata.append("work_email",document.getElementById("work_mail").value);
                    formdata.append("private_email",document.getElementById("private_mail").value);
                    formdata.append("supervisor",document.getElementById("supervisor").value);
                    formdata.append("indirect_supervisor",document.getElementById("indirect_supervisor").value);
                    formdata.append("status",document.getElementById("status").value);
                    
                    
                    // formdata.append("attachment", document.getElementById('attachment').files[0]);
                    console.log(formdata);

                    Swal.fire({
                        title: 'Do you want to add Employee?',
                        text: "",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, add Employee!'
                    }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    type: "post",
                                    url: "add-employee",
                                    datatype: "application/json",
                                    data: formdata,
                                    processData: false,
                                    contentType: false,
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    success: function (data, textStatus, jQxhr) {
                                        console.log(data.responseCode);
                                            // Swal.fire(
                                            // 'Saved!',
                                            // data.responseMessage,
                                            // 'success'
                                            // )
                                            Swal.fire({
                                                icon: 'success',
                                                title: data.responseMessage,
                                                text: ''
                                            }).then((result) => {
                                                if(result.isConfirmed){
                                                    location.reload();
                                                }
                                            })
                                    },
                                    error: function(data, textStatus, jQxhr) {
                                        console.log(data);
                                        Swal.fire(
                                            'Error!',
                                            data.responseJSON.message,
                                            'error'
                                            )

                                            
                                    }
                                }); 
                                
                            }
                            
                            
                    });
            }
            // alert("submit form");
                       
        });

        //submit employee data through excel sheet
        $("#upload_employee").on("click", function(e){
            e.preventDefault();
            let uploaddata = new FormData();                
                    
            // let attachment = $('#emp_files').prop('files')[0];
            // alert(attachment);
            // var files = $('#emp_file')[0].files;
            var files = document.getElementById('emp_file').files[0];
            console.log(files);
            uploaddata.append("attachment", files);
            console.log(uploaddata);
            // return;
            // die();
            Swal.fire({
                        title: 'Do you want to upload?',
                        text: "",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, upload!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                                type: "post",
                                url: "upload-employee",
                                datatype: "application/json",
                                data: uploaddata,
                                processData: false,
                                contentType: false,
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                    success: function (data, textStatus, jQxhr) {
                                        console.log(data);
                                        // console.log("testing");
                                            // Swal.fire(
                                            // 'Saved!',
                                            // data.responseMessage,
                                            // 'success'
                                            // )
                                            Swal.fire({
                                                icon: 'success',
                                                title: data.responseMessage,
                                                text: ''
                                            }).then((result) => {
                                                if(result.isConfirmed){
                                                    location.reload();
                                                }
                                            })
                                    },
                                    error: function(data, textStatus, jQxhr) {
                                        console.log(data);
                                        Swal.fire(
                                            'Error!',
                                            data.responseJSON.message,
                                            'error'
                                            )

                                            
                                    }
                            }); 
                                
                }
                            
                            
            });
            // alert("submit form");
                       
        });
    </script>
    
@endsection
