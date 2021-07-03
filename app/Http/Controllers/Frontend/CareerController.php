<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Career;
use Illuminate\Http\Request;
use Validator;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::latest()->get();
        return view('frontend.career', compact('careers'));
    }

    public function application(Request $request)
    {
        //dd($request);
            $validation = Validator::make($request->all(), [
                'name'    => 'required|string|max:255',
                'email'   => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string|',
                'cv'      => 'mimes:jpeg,jpg,png,gif,webp,pdf,doc,docx|max:5000|required',
            ]);

            $error_array = array();
            $success_output = '';

            if ($validation->fails()) {
                foreach ($validation->messages()->getMessages() as $field_name => $messages) {
                    $error_array[] = $messages;
                }
            } else {

                $applicationObject = new Application();
                $returnMessage = $applicationObject->storeApplication($request);
                $success_output = '<div class="alert alert-success"> '. $returnMessage .' </div>';
            }

            $output = array(
                'error'   => $error_array,
                'success' => $success_output
            );

            echo json_encode($output);
    }
}
