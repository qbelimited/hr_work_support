<div class="col-md-12 col-xl-12">
    
    <!-- <div class="modal fade" id="modal-form1" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
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
                  <input type="file" accept=".xls,.xlsx" id="emp_file" required/>
                  <button type="submit" id="upload_employee" class="btn btn-primary col-md-offset-3">UPLOAD EMPLOYEE EXCEL</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->


    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">ADD NEW EMPLOYEE</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Firstname</label>
                        <input type="text" id="first_name" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Middlename</label>
                        <input type="text" id="middle_name" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Lastname</label>
                        <input type="text" id="last_name" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">birthdate</label>
                        <input type="date" id="birthdate" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">Select Gender</label>
                        
                        <select class="form-control" id="gender" required>
                          <option value=""></option>
                          <option value=""></option>
                          @foreach($genders as $gender)
                          <option value="{{$gender->id}}">{{$gender->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">Select Department</label>
                        <select class="form-control" id="department" required>
                          <option value=""></option>
                          @foreach($departments as $department)
                          <option value="{{$department->id}}">{{$department->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">Select JobTitle</label>
                        <select class="form-control" id="jobtitle" required>
                          <option value=""></option>
                          @foreach($jobtitles as $jobtitle)
                          <option value="{{$jobtitle->id}}">{{$jobtitle->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Employee ID</label>
                        <input type="text" id="employee_id" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Bank Account</label>
                        <input type="text" id="bank_acc" class="form-control" >
                      </div>
                    </div>
                  </div>
                  <div class="row">

                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                          <label for="exampleFormControlSelect1" class="ms-0">Select Country</label>
                          <select class="form-control" id="country" required>
                            <option value=""></option>
                            @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                          <div class="input-group input-group-static mb-4">
                          <label for="exampleFormControlSelect1" class="ms-0">Select City</label>
                          <select class="form-control" id="city" required>
                            <option value=""></option>
                            @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                    
                  </div>
                  
                  <div class="row">

                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Mobile Phone</label>
                        <input type="text" id="mobile_phone" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Work Phone</label>
                        <input type="text" id="work_phone" class="form-control" >
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">

                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Work Email</label>
                        <input type="text" id="work_mail" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Private Email</label>
                        <input type="text" id="private_mail" class="form-control" >
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                          <label for="exampleFormControlSelect1" class="ms-0">Supervisor</label>
                          <select class="form-control" id="supervisor" >
                            <option value=""></option>
                            @foreach($employees as $employee)
                            <option value="{{$employee->id}}">{{$employee->first_name}} {{$employee->middle_name}} {{$employee->last_name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                          <div class="input-group input-group-static mb-4">
                          <label for="exampleFormControlSelect1" class="ms-0">Indirect Supervisor</label>
                          <select class="form-control" id="indirect_supervisor" >
                            <option value=""></option>
                            @foreach($employees as $employee)
                            <option value="{{$employee->id}}">{{$employee->first_name}} {{$employee->middle_name}} {{$employee->last_name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" id="status" required>
                          <option value=""></option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <button type="submit" id="sumbit_employee" class="btn btn-primary col-md-offset-3">ADD EMPLOYEE</button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="modal-edit-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">EDIT EMPLOYEE</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Firstname</label>
                        <input type="text" id="first_name" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Middlename</label>
                        <input type="text" id="middle_name" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Lastname</label>
                        <input type="text" id="last_name" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">birthdate</label>
                        <input type="date" id="birthdate" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">Select Gender</label>
                        
                        <select class="form-control" id="gender" required>
                          <option value=""></option>
                          <option value=""></option>
                          @foreach($genders as $gender)
                          <option value="{{$gender->id}}">{{$gender->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">Select Department</label>
                        <select class="form-control" id="department" required>
                          <option value=""></option>
                          @foreach($departments as $department)
                          <option value="{{$department->id}}">{{$department->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">Select JobTitle</label>
                        <select class="form-control" id="jobtitle" required>
                          <option value=""></option>
                          @foreach($jobtitles as $jobtitle)
                          <option value="{{$jobtitle->id}}">{{$jobtitle->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Employee ID</label>
                        <input type="text" id="employee_id" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Bank Account</label>
                        <input type="text" id="bank_acc" class="form-control" >
                      </div>
                    </div>
                  </div>
                  <div class="row">

                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                          <label for="exampleFormControlSelect1" class="ms-0">Select Country</label>
                          <select class="form-control" id="country" required>
                            <option value=""></option>
                            @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                          <div class="input-group input-group-static mb-4">
                          <label for="exampleFormControlSelect1" class="ms-0">Select City</label>
                          <select class="form-control" id="city" required>
                            <option value=""></option>
                            @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                    
                  </div>
                  
                  <div class="row">

                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Mobile Phone</label>
                        <input type="text" id="mobile_phone" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Work Phone</label>
                        <input type="text" id="work_phone" class="form-control" >
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">

                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Work Email</label>
                        <input type="text" id="work_mail" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Private Email</label>
                        <input type="text" id="private_mail" class="form-control" >
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                          <label for="exampleFormControlSelect1" class="ms-0">Supervisor</label>
                          <select class="form-control" id="supervisor" >
                            <option value="">test</option>
                            @foreach($employees as $employee)
                            <option value="{{$employee->id}}">{{$employee->first_name}} {{$employee->middle_name}} {{$employee->last_name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                          <div class="input-group input-group-static mb-4">
                          <label for="exampleFormControlSelect1" class="ms-0">Indirect Supervisor</label>
                          <select class="form-control" id="indirect_supervisor" >
                            <!-- <option value=""></option> -->
                            @foreach($employees as $employee)
                            <option value="{{$employee->id}}">{{$employee->first_name}} {{$employee->middle_name}} {{$employee->last_name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" id="status" required>
                          <option value=""></option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <button type="submit" id="sumbit_employee" class="btn btn-primary col-md-offset-3">ADD EMPLOYEE</button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>