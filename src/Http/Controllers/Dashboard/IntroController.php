<?php
namespace Delgont\Anume\Http\Controllers\Dashboard;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

use Delgont\Cms\Models\Option\Option;

use Delgont\Cms\Services\Image\ImageUploadService;

class IntroController extends Controller
{
    private $ImageUploadService;

    public function __construct(ImageUploadService $ImageUploadService)
    {
        $this->ImageUploadService = $ImageUploadService;
    }

    public function index()
    {
        return view('anume::dashboard.intro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'aamsnm_intro' => 'required',
            'aamsnm_intro_media' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        ($request->has('aamsnm_intro') && !is_null($request->aamsnm_intro)) ? Option::updateOrCreate(['option_key' => 'aamsnm_intro'], ['option_value' => $request->aamsnm_intro]) : '';
        ($request->has('aamsnm_intro_media') && !is_null($request->aamsnm_intro_media)) ? Option::updateOrCreate(['option_key' => 'aamsnm_intro_media'], [
            'option_value' => $this->ImageUploadService->upload($request->aamsnm_intro_media)
        ]) : '';
        return back()->withInput();
    }

}