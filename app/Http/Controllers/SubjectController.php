<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\SubjectResource;
use App\Models\Subject;
use App\Http\Requests\SubjectRequest;
class SubjectController extends Controller
{
  
    public function index(){

	return response(["message"=>"all the data" , "data"=>   SubjectResource::collection(Subject::all())] , 200);
   }

    public function store(SubjectRequest $request){

	   // return "test 1";
	    Subject::create($request->all());
	   
	    return response(["message"=>"succefully created" ] , 200 );
    }
    public function show(Subject  $subject){
	
	    // return "test 1";
	    return response(["message"=>"object information " , "data"=> $subject] , 200);
    }
    public function update(SubjectRequest $request , $id){

	    // return "dede";
	  
	  // return $request;
	
	    Subject::where('id' , $id)->update($request->all());
	   
	   // return "test 2";

	    return response(["message"=>"Object updated" ] , 200);

    }

    public function delete(Subject $subject){

	    $subject->delete();

	    return response(["message"=>"Successfully deleted" ] , 200);
    
    
    }

}
