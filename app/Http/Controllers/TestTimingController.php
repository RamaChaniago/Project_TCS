<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ToeflTestSetting;
use Illuminate\Http\Request;

class TestTimingController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'listening_time' => 'required|integer|min:5|max:120',
            'structure_time' => 'required|integer|min:5|max:120',
            'reading_time' => 'required|integer|min:5|max:120',
        ]);

        $settings = ToeflTestSetting::firstOrCreate([]);
        $settings->update([
            'listening_time' => $request->listening_time,
            'structure_time' => $request->structure_time,
            'reading_time' => $request->reading_time,
            'last_updated' => now(),
        ]);

        return redirect()->back()->with('success', 'Test timing updated successfully!');
    }
}