<?php
namespace Lio\Http\Controllers;

use Auth;
use Input;

class PastesController extends Controller
{
    public function getShow($hash)
    {
        return redirect('http://paste.techeasesol.com/'.$hash);
    }

    public function getCreate()
    {
        return redirect('http://paste.techeasesol.com/');
    }

    public function getFork($hash)
    {
        return redirect('http://paste.techeasesol.com/fork/'.$hash);
    }

    public function getRaw($hash)
    {
        return redirect('http://paste.techeasesol.com/'.$hash.'/raw');
    }
}
