<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "firstname" => "required|min:1|max:255",
            "lastname"  => "required|min:1|max:255",
            "email"     => "required|min:1|max:255|email|unique:users",
            "password"  => "required|min:8|confirmed",
        ]);

        // Le role par défaut est "user"
        $role = Role::where("name", "=", "user")->first();

        // Création d'un utilisateur
        User::create([
            "firstname" => $request->input("firstname"),
            "lastname"  => $request->input("lastname"),
            "email"     => $request->input("email"),
            "password"  => Hash::make($request->input("password")),

            "role_id" => $role->id,
        ]);

        echo "L'utilisateur {$request->email} a été créé";
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * GET - Affiche le formulaire de connexion
     * @return View
     */
    public function login(): View
    {
        return view("users.login");
    }

    /**
     * POST - Vérifie les données soumises
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function doLogin(Request $request): RedirectResponse
    {
        $email = $request->input("email");
        $password = $request->input("password");

        // On cherche l'utilisateur
        $user = User::where("email", "=", $email)->first();
        if($user) {
            // On a trouvé un utilisateur
            if (Hash::check($password, $user->password)) {
                // Bon mot de passe

                // On ajoute l'instance de User dans la session
                Session::put("user", $user);

                // On redirige l'utilisateur
                return redirect("/");
            }
        }

        // Aucun utilisateur trouvé avec ces paramètres
        return back()->withErrors("Invalid email or password");
    }
}
