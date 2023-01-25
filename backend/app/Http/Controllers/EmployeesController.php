<?php

namespace App\Http\Controllers;

use App\Models\Codesc;
use App\Models\Country;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Validator;

class EmployeesController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    //this function returns the view for managing employees
    public function manageEmployees()
    {
        //get all for form parameters for adding an employee
        $departments = Codesc::where('code_type_id',4)->get();
        $countries = Codesc::where('code_type_id',1)->get();
        $genders = Codesc::where('code_type_id',5)->get();
        $jobtitles = Codesc::where('code_type_id',3)->get();
        $cities = Codesc::where('code_type_id',2)->get();
        $employees = Employee::all();

        return view('employees.manage-employees',compact('departments','countries','genders','jobtitles','cities','employees'));
    }

    public function addEmployee(Request $request){

        //validate incoming data
         $validator = $request->validate([
            'bank_acc_no' => 'required|unique:employees',
            'mobile_phone' => 'unique:employees',
            'work_phone' => 'unique:employees',
            'work_email' => 'email|unique:employees',
            'private_email' => 'email|unique:employees',
        ]);

        //if the data validates successfully
        // if($validator->fails()){
            // $errorMessage = $validator->messages();
            // return response()->json(['responseCode' => 400, 'responseMessage' => $errorMessage]);
        // }else{

            // create employee
            $employee = Employee::create($request->all());

            //return response
            if($employee){
                return response()->json(['responseCode' => 200, 'responseMessage' => 'Employee Added']);
            }else{
                return response()->json(['responseCode' => 200, 'responseMessage' => 'Adding employee failed, contact system administrator', 'data' => $employee]);
            }
        // }
    }

    // import employee data
    public function importData(Request $request){

        // return $request->attachment;
        //validate the file
       $this->validate($request, [
           'attachment' => 'required|file|mimes:xls,xlsx,csv'
       ]);

       //if there is a file in the request then proceed
       if ($request->hasFile('attachment')) {
                $file = $request->attachment;
                $filename = 'employee'.'.'.$file->getClientOriginalExtension();
                $path = $file->storeAs('employee-data', $filename);


                try{
           $spreadsheet = IOFactory::load($file->getRealPath());
           $sheet        = $spreadsheet->getActiveSheet();
           $row_limit    = $sheet->getHighestDataRow();
           $column_limit = $sheet->getHighestDataColumn();
           $row_range    = range( 2, $row_limit );
           $column_range = range( 'F', $column_limit );
           $startcount = 2;
           $data = array();
           foreach ( $row_range as $row ) {
               $data[] = [
                   'fname' =>$sheet->getCell( 'A' . $row )->getValue(),
                    'mname' =>$sheet->getCell( 'B' . $row )->getValue(),
                    'lname' =>$sheet->getCell( 'C' . $row )->getValue(),
                    'birthdate' =>$sheet->getCell( 'D' . $row )->getValue(),
                    'gender' =>$sheet->getCell( 'E' . $row )->getValue(),
                    'address' =>$sheet->getCell( 'F' . $row )->getValue(),
                    'department' =>$sheet->getCell( 'G' . $row )->getValue(),
                    'jobtitle' =>$sheet->getCell( 'H' . $row )->getValue(),
                    'employee_id' =>$sheet->getCell( 'I' . $row )->getValue(),
                    'bank_acc_no' =>$sheet->getCell( 'J' . $row )->getValue(),
                    'country' =>$sheet->getCell( 'K' . $row )->getValue(),
                    'city' =>$sheet->getCell( 'L' . $row )->getValue(),
                    'mobile_phone' =>$sheet->getCell( 'M' . $row )->getValue(),
                    'work_phone' =>$sheet->getCell( 'N' . $row )->getValue(),
                    'work_email' =>$sheet->getCell( 'O' . $row )->getValue(),
                    'private_email' =>$sheet->getCell( 'P' . $row )->getValue(),
                    'supervisor' =>$sheet->getCell( 'Q' . $row )->getValue(),
                    'indirect_supervisor' =>$sheet->getCell( 'R' . $row )->getValue(),
                    'status' =>$sheet->getCell( 'S' . $row )->getValue(),
               ];
               
               $startcount++;
           }
          return $saved =  DB::table('employees')->insert($data);
       } catch (Exception $e) {
           $error_code = $e->errorInfo[1];
           return back()->withErrors('There was a problem uploading the data!');
       }
       return back()->withSuccess('Great! Data has been successfully uploaded.');
                

        }



        //    $test = IOFactory::load($the_file->getRealPath());
        //    dd($test);

    }

    //edit employee data
    public function updateEmployee(Request $request){

         //validate incoming data
         $validator = $request->validate([
            'bank_acc_no' => [
                    'required',
                    Rule::unique('employees')->ignore($request->id),
            ],
            'mobile_phone' => [
                    'required',
                    Rule::unique('employees')->ignore($request->id),
            ],
            'work_phone' => [
                    'required',
                    Rule::unique('employees')->ignore($request->id),
            ],
            'work_email' => [
                    'required',
                    Rule::unique('employees')->ignore($request->id),
            ],
            'private_email' => [
                    'required',
                    Rule::unique('employees')->ignore($request->id),
            ],
        ]);

        $employee = Employee::find($request->id)->update($request->all());

        //return response
        if($employee){
            return response()->json(['responseCode' => 200, 'responseMessage' => 'Employee Updated']);
        }else{
            return response()->json(['responseCode' => 200, 'responseMessage' => 'Updating employee failed, contact system administrator']);
        }
    }

    //deactivating employee
    public function deactivateEmployee(Request $request){

        //find employee object and set status to deactivated
        $employee = Employee::find($request->id);
        $employee->status = 0;

        $result = $employee->save();

        //return response
        if($result){
            return response()->json(['responseCode' => 200, 'responseMessage' => 'Employee Deactivated']);
        }else{
            return response()->json(['responseCode' => 200, 'responseMessage' => 'Deactivating employee failed, contact system administrator']);
        }
    }

}
