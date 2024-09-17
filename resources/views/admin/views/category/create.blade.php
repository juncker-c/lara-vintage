@extends('admin/layout')
@section('head-title', 'administration | ajout d\'une catégorie')
@section('content')
    <h4>Ajout d'une catégorie</h4>
    <form action="" method="post" id="form_contact" novalidate="">
        @csrf
        <div class="row">
            <div class="six columns">
                <label for="name">Nom de la catégorie <span class="missingstar">✴</span></label>
                <input id="name" type="text" value="" name="name" class="u-full-width">
            </div>
        </div>
        <div>
            <input type="submit" value="envoyer" name="submit">
        </div>
    </form>
@endsection()
