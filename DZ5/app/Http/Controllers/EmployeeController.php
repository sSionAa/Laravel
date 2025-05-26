<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Post;
use App\Http\Controllers\View;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
//use Illuminate\Support\Facades\View;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        // $data = $request->input('address');
        //$data2 = serialize($data);
        // var_dump ($data2);
        return view('get-employee-data');
    }

    public function store(Request $request)
    {
        // $userComment = new Post();
        $id = $request->input('id');
        $name = $request->input('name');
        //$name->save();
        $email = $request->input('email');
        //$email->save();
        $workData = $request->input('workData');
        $uri = $request->path();
        $url = $request->url();
        //$workData->save();
        // $userComment->save();
        echo $id;
        echo '<br />';
        echo $name;
        echo '<br />';
        echo $email;
        echo '<br />';
        echo $workData;
        echo '<br />';
        echo $uri;
        echo '<br />';
        echo $url;
        //redirect('form.blade.php');//->route('/store_form')->with('success', 'Data submitted successfully!');
    }

    public function update(Request $request, $id)
    {
        // $employee = Employee::find($id);
        $input = $request->all();
        $name = $input['name'];
        $email = $input['email'];
        $workData = $input['workData'];
        // echo $name;
        // echo $email;
        // echo $workData;
        // return $employee;
        echo $id;
        echo '<br />';
        echo $name;
        echo '<br />';
        echo $email;
        echo '<br />';
        echo $workData;
    }

    public function jsonUpload(Request $request)
    {
        //  if ($request->isJson()) {
        //  $data = json_decode($request->json()->all(),true);
        $data = $request->input('address');
        //return response()->json(['received' => true, 'data' => $data], 200);
        //   }
        // return response('Not a JSON request', 400);
        // echo serialize($data);
        $data2 = serialize($data);
        var_dump($data2);
        //return view('get-employee-data', compact('data'));
        //redirect('form.blade.php')->route('form',$data);
    }

    public function saveApiData(Request $request)
    {
        $client = new Client(['verify' => 'C:\php-8.2.22\cacert.pem']);
        $res = $client->request('GET', 'https://api.aruljohn.com/ip/json', [
            'form_params' => [
                'client_id' => 'test_id',
                'secret' => 'test_secret',
            ]
        ]);
        echo ($res->getStatusCode());
        echo ('<br />');
        // 200
        var_dump($res->getHeader('content-type'));
        echo ('<br />');
        // 'application/json; charset=utf8'
        $data2 = $res->getBody();
        echo ($data2);
        echo ('<br />');
        // $textareaValue = $request->input('message');
        // {"type":"User"...'
        return view('textareaj', compact('data2'));


    }


}

