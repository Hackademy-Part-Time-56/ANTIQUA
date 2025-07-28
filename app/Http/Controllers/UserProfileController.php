<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string|max:1000',
            'specialization' => 'nullable|string|max:255',
            'birthdate' => 'nullable|date',
            'company_name' => 'nullable|string|max:255',
            'vat_number' => 'nullable|string|max:50',
            'business_address' => 'nullable|string|max:255',
            'business_type' => 'nullable|in:individual,company,professional',
            'phone_number' => 'nullable|string|max:30',
            'location' => 'nullable|string|max:255',
        ]);
        $user->fill($data);
        $user->save();
        return redirect()->route('user.profile', $user)->with('message', 'Profilo aggiornato!');
    }
}
