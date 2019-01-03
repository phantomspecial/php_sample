<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;

function tag($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
    public function index(Request $request) {
//        $data = [1,2,3,4,5];
//        $data = [
//            ['name' => 'Yamada', 'mail' => 'y@gmail.com'],
//            ['name' => 'Tanaka', 'mail' => 't@gmail.com'],
//            ['name' => 'Suzuki', 'mail' => 's@gmail.com']
//        ];
//        $data = ['message' => 'hello'];
        $validator = Validator::make($request->query(), [
           'id' => 'required',
           'pass' => 'required'
        ]);

        if ($validator->fails()) {
            $msg = 'Query Error';
        } else {
            $msg = 'Pass';
        }
        return view('hello.index', ['msg' => $msg] );
    }

    public function post(Request $request)
    {
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150'
        ];

        $messages = [
            'name.required' => '必須',
            'mail.email' => '形式',
            'age.numeric' => '数値',
            'age.min' => '0>',
            'age.max' => '<200'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        $validator->sometimes('age', 'min:0', function($input) {
            return !is_int($input->age);
        });

        $validator->sometimes('age', 'max:200', function($input) {
            return !is_int($input->age);
        });

        if ($validator->fails()) {
            return redirect('/hello')
                ->withErrors($validator)
                ->withInput();
        }

//        $validate_rule = [
//            'name' => 'required',
//            'mail' => 'email',
//            'age' => 'numeric|between:0,150'
//        ];
//        $this->validate($request, $validate_rule);
        return view('hello.index', ['msg' => 'correct']);
    }
}
