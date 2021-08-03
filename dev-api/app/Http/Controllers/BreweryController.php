<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BreweryController extends Controller
{
    /**
     * GET BREWERIES
     * 
     * Get all brewery items of extern API brewaries and return response data in local endpoint
     *
     */
    public function index()
    {
        $response = Http::get('https://api.openbrewerydb.org/breweries');
        # code...
        return $response->json();
    }

    /**
     * GET BREWERY
     * 
     * Get one brewery of extern API brewaries by ID and return response data in local endpoint
     *
     */
    public function show($id)
    {
        $response = Http::get('https://api.openbrewerydb.org/breweries/'.$id);
        # code...
        return $response->json();
    }

    /**
     * GET BREWERIES FILTER BY NAME AND TYPE
     * 
     * Get breweries of extern API brewaries filter by name or type and return response data in local endpoint
     *
     */
    public function filter(Request $request)
    {
        $name = $request->get('name');
        $type = $request->get('type');
        
        $response = Http::get('https://api.openbrewerydb.org/breweries?by_name='.$name.'&by_type='.$type);
        # code...
        return $response->json();
    }
}
