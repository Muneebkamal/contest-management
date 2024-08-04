<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $uniqueName = $this->generateUniqueName($data['name']);
        return User::create([
            'name' => $data['name'],
            'unique_name' => $uniqueName,
            'role' => "user",
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    private function generateUniqueName($name)
    {
        // Convert the name to lowercase and remove spaces
        $baseName = strtolower(preg_replace('/\s+/', '', $name));
        // Append 2 or 3 random digits
        $uniqueName = $baseName . random_int(10, 99); // 2 digits

        // Ensure the unique name is not already in use
        while (User::where('unique_name', $uniqueName)->exists()) {
            $uniqueName = $baseName . random_int(100, 999); // 3 digits
        }

        return $uniqueName;
    }
}
