<?php
namespace Delgont\Anume\Http\Controllers\Dashboard;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

use Delgont\Cms\Models\Option\Option;

class ContactInfoController extends Controller
{
    public function index()
    {
        return view('anume::dashboard.contactinfo.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'aamsnm_email' => 'nullable|email',
            'aamsnm_address' => 'nullable',
            'aamsnm_phone' => 'nullable',
            'aamsnm_map' => 'nullable|url'
        ]);

        ($request->has('aamsnm_address') && !is_null($request->aamsnm_address)) ? Option::updateOrCreate(['option_key' => 'aamsnm_address'], ['option_value' => $request->aamsnm_address]) : '';
        ($request->has('aamsnm_email') && !is_null($request->aamsnm_email)) ? Option::updateOrCreate(['option_key' => 'aamsnm_email'], ['option_value' => $request->aamsnm_email]) : '';
        ($request->has('aamsnm_phone') && !is_null($request->aamsnm_phone)) ? Option::updateOrCreate(['option_key' => 'aamsnm_phone'], ['option_value' => $request->aamsnm_phone]) : '';
        ($request->has('aamsnm_map') && !is_null($request->aamsnm_map)) ? Option::updateOrCreate(['option_key' => 'aamsnm_map'], ['option_value' => $request->aamsnm_map]) : '';
        return back()->withInput();
    }

}