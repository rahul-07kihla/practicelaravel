<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginationController extends Controller
{
    //
    public function index()
    {
        $page = Input::get('page', 1);  
        $paginate = 2;  
        
        $data = DB::select(DB::raw('CALL hardik("hari")'));  
        
        $offSet = ($page * $paginate) - $paginate;  
        $itemsForCurrentPage = array_slice($data, $offSet, $paginate, true);  
        $data = new \Illuminate\Pagination\LengthAwarePaginator($itemsForCurrentPage, count($data), $paginate, $page);  
        
        return view('test',compact('data'));
    }
}
