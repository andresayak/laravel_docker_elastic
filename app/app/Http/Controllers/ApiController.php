<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\AddDocumentRequest;
use App\Http\Requests\SearchRequest;

class ApiController extends Controller
{
    
    public function search(SearchRequest $request)
    {
        $client = resolve('ElasticsearchClientBuilder');
         
        $q = strtolower($request->input('query'));
        $params = [
            'index' => config('elasticsearch.index'),
            'body' => [
                'query' => [
                    'regexp' => [
                        'value' =>  '.*'.$q.'.*',
                    ],
                ]
            ],
            'size'  =>  10
        ];

        $response = $client->search($params);
        $list = [];
        foreach($response['hits']['hits'] AS $item){
            $list[] = $item['_source'];
        }
        return [
            "query" => $request->input('query'),
            "suggestions" => $list
        ];
    }
    
    public function addDocument(AddDocumentRequest $request)
    {
        $client = resolve('ElasticsearchClientBuilder');
        
        $params = [
            'index' => config('elasticsearch.index'),
            'id'    => uniqid(),
            'body'  => [
                'value' =>  $request->input('name'), 
                'data'  =>  $request->input('login'), 
                'src'   =>  'img/_src/710.png'
            ]
        ];

        $client->index($params);
        return [
            'status'    =>  true
        ];
    }
}
