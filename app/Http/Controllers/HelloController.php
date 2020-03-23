<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

    public function index(Request $request, Response $response) {
      $html = <<<E0F
      <html>
      <head>
      <title>Hello</title>
      <style>
      body {font-size:16pt; color:#999}
      h1 {font-size:30pt; text-align: right; color: #eee;
          margin: -15pt 0pt 0pt 0pt;}
      </style>
      </head>
      <body>
      <h1>Hello</h1>
      <h3>Request</h3>
      <pre>{$request}</pre>
      <h3>Response</h3>
      <pre>{$response}</pre>
      </body>
      </html>
      E0F;
      $response->setContent($html);
      return $response;
    }
}
