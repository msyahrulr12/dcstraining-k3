<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = $page * 12;
        $datas = (new Gallery())->getAll($perPage);

        return response()->json([
            'datas' => $datas,
            'next_page_url' => $datas->nextPageUrl(),
        ]);
    }
}
