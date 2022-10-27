<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function getCountries()
    {
        $countries = Country::all();
        return view('countries.list', [
            'countries' => $countries
        ]);
    }

    public function getCountry($id = null)
    {
        if ($id == null) {
            $country = null;
        } else {
            $country = Country::where('id', $id)->first();
        }
        return view('countries.new', [
            'country' => $country
        ]);
    }

    public function createCountry(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'iso_code' => 'required|max:2'
        ]);
        Country::create([
            'name' => $request->name,
            'iso_code' => $request->iso_code
        ]);
        return redirect()->route('get_countries');
    }

    public function updateCountry(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'iso_code' => 'required|max:2'
        ]);
        Country::where('id', $id)
            ->update([
                'name' => $request->name,
                'iso_code' => $request->iso_code
            ]);
        return redirect()->route('get_countries');
    }

    public function deleteCountry($id)
    {
        Country::destroy($id);
        return redirect()->route('get_countries');
    }
}
