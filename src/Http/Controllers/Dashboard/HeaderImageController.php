<?php

namespace Delgont\Anume\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Delgont\Cms\Models\Option\Option;
use Delgont\Cms\Services\Image\ImageUploadService;


use App\Http\Controllers\Controller;

class HeaderImageController extends Controller
{
    private $ImageUploadService;

    public function __construct(ImageUploadService $ImageUploadService)
    {
        $this->ImageUploadService = $ImageUploadService;
    }
    public function index()
    {
        return view('anume::dashboard.headerimage');
    }

    public function store(Request $request)
    {
        $request->validate([
            'aamsnm_header_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time().'-'.date('Y').'.'.$request->aamsnm_header_image->extension();

        Option::updateOrCreate(['option_key' => 'aamsnm_header_image'], [
            'option_value' => $this->ImageUploadService->upload($request->aamsnm_header_image)
        ]);

        return back()->withInput();
    }

}