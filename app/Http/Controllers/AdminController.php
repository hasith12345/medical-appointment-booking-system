<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request){
        $doctor = new doctor;
        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage',$imagename);
        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->phone = $request->number;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;
        $doctor->save();

        return redirect()->back()->with('message','Doctor Added Successfully');
    }

    public function showdoctor(){
        $data = doctor::all(); //get all data from doctor table
        return view('admin.showdoctor', compact('data')); //send data to view
    }

    public function deletedoctor($id){
        $data = doctor::find($id); //find doctor by id
        $data->delete();

        return redirect()->back();
    }

    public function updatedoctor($id){
        $data = doctor::find($id); //find doctor by id
        return view('admin.update_doctor', compact('data')); //send data to view
    }

    public function editdoctor(Request $request, $id){
        $doctor = doctor::find($id); //find doctor by id
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        
        $image = $request->file;

        if($image){

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->file->move('doctorimage',$imagename); //move image to doctorimage folder

            $doctor->image = $imagename;

        }


        $doctor->save();

        return redirect()->back()->with('message','Doctor  Details Updated Successfully');
    }
}
