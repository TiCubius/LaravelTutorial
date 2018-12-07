<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * GET - Affiche tout les articles
     *
     * @return View
     */
    public function index(): View
    {
        // Récupère tout les articles
        // $post = Post::all();

        // Récupère tout les articles AVEC l'utilisateur associé
        $posts = Post::with("user")->get();

        return view("posts.index", compact("posts"));
    }

    /**
     * GET - Affiche le formulaire de création d'un article
     *
     * @return View
     */
    public function create(): View
    {
        return view("posts.create");
    }

    /**
     * POST - Vérifie les données soumises et enregistre le nouvel article
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // On valide les données soumises
        $request->validate([
            "title"   => "required|max:255",
            "content" => "required",
        ]);

        // On récupère l'utilisateur courrant
        $user = Session::get("user");

        // Création d'un article
        Post::create([
            "title"   => $request->input("title"),
            "content" => $request->input("content"),
            "user_id" => $user->id
        ]);

        // On redirige l'utilisateur sur /
        return redirect("/");
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
}
