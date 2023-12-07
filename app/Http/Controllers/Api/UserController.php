<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use ApiResponses;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->get();
        return $this->sendSuccessResponse($users, 'get user successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->authorize('create', User::class); // Authorize admin to create users

        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
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
            'roles' => 'required|array',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'telepon' => $request->input('telepon'),
            'pekerjaan' => $request->input('pekerjaan'),
            'nik' => $request->input('nik'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat' => $request->input('alamat'),
            'domisili' => $request->input('domisili'),
            'kode_pos' => $request->input('kode_pos'),
            'kota' => $request->input('kota'),
            'kecamatan' => $request->input('kecamatan'),
            'kelurahan' => $request->input('kelurahan'),
            'desa' => $request->input('desa'),
        ]);

        $user->assignRole($request->input('roles'));

        return $this->sendSuccessResponse($user, 'User created successfully', 201);
    }

    public function show(User $user)
    {
        if (!$user) {
            return $this->sendErrorResponse('User not found', 404);
        }

        return $this->sendSuccessResponse($user, 'Get user successfully', 200);
    }

    public function update(Request $request, User $user)
    {
        if (Auth::user()->hasRole('admin')) {
            $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email,' . $user->id,
                'password' => 'nullable|string|min:6',
                'roles' => 'required|array',
            ]);

            $user->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->filled('password') ? bcrypt($request->input('password')) : $user->password,
            ]);

            $user->syncRoles($request->input('roles'));

            return $this->sendSuccessResponse($user, 'User updated successfully', 200);
        } else {
            // If the user doesn't have the 'admin' role, return unauthorized response
            return response()->json(['message' => 'This action is unauthorized.'], 403);
        }
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $this->sendSuccessResponse($user, 'User deleted successfully', 200);
    }
}
