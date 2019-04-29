<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $req = $client->get("https://newsapi.org/v2/top-headlines?country=br&apiKey=".env("NEW_KEY")."&pageSize=30");
        $response = $req->getBody()->getContents();

        $res = json_decode($response);
        $items = $res->articles;


        
        // Get current page form url e.x. &page=1
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
 
        // Create a new Laravel collection from the array data
        $itemCollection = collect($items);
 
        // Define how many items we want to be visible in each page
        $perPage = 5;
 
        // Slice the collection to get the items to display in current page
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
 
        // Create our paginator and pass it to the view
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
 
        // set url path for generted links
        $paginatedItems->setPath($request->url());
 
        return view('home', ['items' => $paginatedItems]);
 
    }
    public function news()
    {  
        return view('home');
    }


}
