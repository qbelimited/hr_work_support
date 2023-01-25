<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    //handles leave applications

    //get all leaves under a manager
    public function getAllLeaves(){
        
    }

    //apply for leave
    public function applyLeave(Request $request){
        //validate incoming data
         $validator = $request->validate([
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        //if the validator fails output the error message else create user
        if($validator->fails()){
            return $validator->messages();
        }else{

            //add the employee who applied
            $request['employee_id'] = Auth::user()->id;

            // create leave
            $leave = Leave::create($request->all());

            //return response
            if($leave){
                return response()->json(['responseCode' => 200, 'responseMessage' => 'Leave Applied Successfully']);
            }else{
                return response()->json(['responseCode' => 401, 'responseMessage' => 'Applying for leave failed, contact system administrator']);
            }
        }
    }

    //edit leave
    public function updateEmployee(Request $request){

         //validate incoming data
         $validator = $request->validate([
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $employee = Employee::find($request->id)->update($request->all());

        //return response
        if($employee){
            return response()->json(['responseCode' => 200, 'responseMessage' => 'Employee Updated']);
        }else{
            return response()->json(['responseCode' => 200, 'responseMessage' => 'Updating employee failed, contact system administrator']);
        }
    }

    //approve employee
    public function approveEmployee(Request $request){
        
        //get the leave
        $leave = Leave::find($request->id);

        //set the leave approval status to true {1}
        $leave->approval_status = 1;
        $result = $leave->save();

        //return response
        if($leave){
            return response()->json(['responseCode' => 200, 'responseMessage' => 'Leave Approved Successfully']);
        }else{
            return response()->json(['responseCode' => 401, 'responseMessage' => 'Approved leave failed, contact system administrator']);
        }
    }
}
