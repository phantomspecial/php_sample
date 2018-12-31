<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body { font-size: 16pt; color: #999; }
h1 { font-size:100pt; text-align:right; color: #eee; margin: -40px 0 -50px 0; }
</style>
EOF;
$body = '</head><body>';
$end = '</body></head>';

function tag($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
    public function index(Request $request, Response $response) {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/index') . $style . $body
            . tag('h1', 'Hello')
            . tag('h3', 'Req')
            . tag('pre', $request)
            . tag('h3', 'Req')
            . tag('pre', $response)
            . $end;

        $response->setContent($html);
        return $response;
    }

//    public function other() {
//        global $head, $style, $body, $end;
//
//        $html = $head . tag('title', 'Hello/other') . $style . $body
//            . tag('h1', 'Other') . tag('p', 'this is other')
//            . $end;
//
//        return $html;
//    }
}
