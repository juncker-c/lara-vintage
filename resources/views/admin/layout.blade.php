@php use function Termwind\style; @endphp
@extends('base')
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/skeleton.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/skeleton_collapse.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
@endsection
@section('javascripts')
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"></script>
@endsection()
@section('body')
    <div class="row">
        <nav class="nav-show">
            <div class="container">
                <ul>
                    <li><a href="index.php?p=admin_item">Gestion des pages</a></li>
                    <li><a href="index.php?p=admin_user">Gestion des utilisateurs</a></li>
                    <li>
                        <a>Gestion du shop</a>
                        <ul>
                            <li><a href="index.php?p=admin_designer">Designer</a></li>
                            <li><a href="index.php?p=admin_manufacturer">Manufacturier</a></li>
                            <li><a href="index.php?p=admin_shape">Etat</a></li>
                            <li><a href="index.php?p=admin_delivery">Livraison</a></li>
                            <li><a href="{{ route('admin.category.index') }}">Catégorie</a></li>
                            <li><a href="index.php?p=admin_category_level_2">Sous-catégorie</a></li>
                            <li><a href="index.php?p=admin_ad">Fiche produit</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Mon compte</a>
                        <ul>
                            <li><a href="index.php?p=admin_password">Modifier mon mot-de-passe</a></li>
                            <li><a href="index.php?p=admin_unlog">Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container" id="content">
        @yield('content')
    </div>
@endsection
