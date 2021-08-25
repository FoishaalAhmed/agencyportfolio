<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Query;
use App\Models\Service;
use Illuminate\Http\Request;
use Validator;

class TeamController extends Controller
{

    public function index()
    {
        $services = Service::orderBy('position', 'asc')->get();
        return view('frontend.service', compact('services'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function query(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|',
        ]);

        $error_array = array();
        $success_output = '';

        if ($validation->fails()) {
            foreach ($validation->messages()->getMessages() as $field_name => $messages) {
                $error_array[] = $messages;
            }
        } else {

            $query = new Query();
            $query->storeQuery($request);
            $success_output = '<div class="alert alert-success"> Query Send Successfully! </div>';
        }

        $output = array(
            'error'   => $error_array,
            'success' => $success_output
        );

        echo json_encode($output);
    }


}
