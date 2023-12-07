<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ApiResponses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    use ApiResponses;

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'telepon' => 'nullable|string',
                'pekerjaan' => 'nullable|string',
                'nik' => 'nullable|string',
                'tanggal_lahir' => 'nullable|string',
                'alamat' => 'nullable|string',
                'domisili' => 'nullable|string',
                'kode_pos' => 'nullable|string',
                'kota' => 'nullable|string',
                'kecamatan' => 'nullable|string',
                'kelurahan' => 'nullable|string',
                'desa' => 'nullable|string',
            ]);

            // Buat pengguna
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'telepon' => $request->telepon,
                'pekerjaan' => $request->pekerjaan,
                'nik' => $request->nik,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'domisili' => $request->domisili,
                'kode_pos' => $request->kode_pos,
                'kota' => $request->kota,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'desa' => $request->desa,
            ]);

            $user->assignRole("pemohon");
            
            $user->sendEmailVerificationNotification();

            return $this->sendSuccessResponse(
                [
                    'email' => $user->email,
                    'name' => $user->name,
                ],
                'Registration successful. Please check your email for verification.',
                201
            );
        } catch (ValidationException $validationException) {
            return $this->sendValidationErrorResponse($validationException);
        } catch (\Exception $e) {
            // Tangani kesalahan umum
            return $this->sendErrorResponse('Registration failed. Please try again.', 500);
        }
    }


    public function login(Request $request)
{
    try {
        $request->validate([
            'identity' => 'required|string',
            'password' => 'required|string',
            'remember_me' => 'boolean',
        ]);

        $credentials = [
            filter_var($request->input('identity'), FILTER_VALIDATE_EMAIL) ? 'email' : 'telepon' => $request->input('identity'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials, $request->input('remember_me', false))) {
            $user = Auth::user();
            $role = $user->getRoleNames();
            $token = $user->createToken('auth-token')->plainTextToken;
            $addedMessage = "";

            if (!$user->hasVerifiedEmail()) {
                $addedMessage = " Please verify your email to access all features.";
            }

            if ($request->input('remember_me', false)) {
                $addedMessage .= " You will be remembered.";
            }

            return $this->sendSuccessResponse(
                [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'email_verified' => $user->hasVerifiedEmail(),
                    'role' => $role,
                    'token' => $token,
                ],
                "Login successful." . $addedMessage,
                200
            );
        } else {
            throw ValidationException::withMessages([
                'message' => ['Invalid credentials.'],
            ]);
        }
    } catch (ValidationException $validationException) {
        return $this->sendValidationErrorResponse($validationException);
    } catch (\Exception $e) {
        // Handle common errors
        return $this->sendErrorResponse('Login failed. Please try again.', 500);
    }
}

    public function getUserProfile(Request $request)
    {
        try {
            $user = Auth::user();

            if (!$user) {
                throw new \Exception('User not found.', 404);
            }

            $role = $user->getRoleNames();

            return $this->sendSuccessResponse(
                [
                    auth()->user(),
                ],
                'User profile retrieved successfully.',
                200
            );
        } catch (\Exception $e) {
            return $this->sendErrorResponse($e->getMessage(), $e->getCode());
        }
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();

            return $this->sendSuccessResponse(
                [],
                'Logged out successfully.',
                200
            );
        } catch (\Exception $e) {
            // Tangani kesalahan
            return $this->sendErrorResponse($e->getMessage(), $e->getCode());
        }
    }
}
