<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PhotoCollectResource;
use App\Models\PhotoCollect;
use Illuminate\Http\Request;

class ApiPhotoCollectController extends Controller
{
    public function index()
    {
        $query = PhotoCollect::latest()->get();
        return new PhotoCollectResource(true, 'List Koleksi Foto', $query);
    }
}
