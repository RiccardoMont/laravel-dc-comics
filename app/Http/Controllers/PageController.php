<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index()
    {
    
        $comics = Comic::whereYear('sale_date', '>', '2019')->get();

        return view('guests.comics.index', compact('comics'));
    
    }

    public function anni10()
    {

        $year2010 = '2010-01-01';
        $year2019 = '2019-12-31';
        

        $comics = Comic::whereBetween('sale_date', [$year2010, $year2019])->get();

        return view('guests.comics.anni10', compact('comics'));

    }

    public function anni00()
    {

        $year2000 = '2000-01-01';
        $year2009 = '2009-12-31';
        

        $comics = Comic::whereBetween('sale_date', [$year2000, $year2009])->get();

        return view('guests.comics.anni00', compact('comics'));

    }



    public function anni1900()
    {
        $comics = Comic::whereYear('sale_date', '<=', '1999')->get();

        return view('guests.comics.anni1900', compact('comics'));
    }

}
