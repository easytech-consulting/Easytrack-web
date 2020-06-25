<!DOCTYPE html>
<!--
* easytrak - Application pour la gestion de stock
* @version 1.0.0
* @link https://github.com/estelle97/Easytrak
* Copyright 2020 easytech
* Licensed under MIT (https://easytrak.com/license)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Easytrak - Connexion</title>
    @notifyCss
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <meta name="msapplication-TileColor" content="#206bc4" />
    <meta name="theme-color" content="#206bc4" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="robots" content="noindex,nofollow,noarchive" />
    <link rel="icon" href="{{ asset('dashboard/favicon.png') }}" type="image/png" />
    <link rel="shortcut icon" href="{{ asset('dashboard/favicon.png') }}" type="image/png" />
    <!-- CSS files -->
    <link href="{{ asset('dashboard/dist/css/easytrak.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/dist/css/demo.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/dist/css/custom.css') }}" rel="stylesheet" />
    <style>
        body {
            display: none;
            background: #fff !important;
        }

    </style>
</head>

<body class="antialiased">
    <div class="flex-fill d-flex flex-column justify-content-center">
        <div class="container-tight py-6">
            <div class="text-center mb-4">
                <img src="{{ asset('dashboard/static/logo.svg') }}" height="36" alt="" />
            </div>
            <form class="card card-md auth-card" method="POST" action="{{ route('login') }}">
            @csrf
                <div class="card-body">
                    <h2 class="mb-2 text-center text-black">Connexion</h2>
                    <h4 class="mb-5 text-center text-muted">
                        Authentifier pour accéder à la plate-forme
                    </h4>
                    <div class="mb-4">
                        <div class="input-icon">
                            <span class="input-icon-addon ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M12 17c3.662 0 6.865 1.575 8.607 3.925l-1.842.871C17.347 20.116 14.847 19 12 19c-2.847 0-5.347 1.116-6.765 2.796l-1.841-.872C5.136 18.574 8.338 17 12 17zm0-15a5 5 0 0 1 5 5v3a5 5 0 0 1-4.783 4.995L12 15a5 5 0 0 1-5-5V7a5 5 0 0 1 4.783-4.995L12 2zm0 2a3 3 0 0 0-2.995 2.824L9 7v3a3 3 0 0 0 5.995.176L15 10V7a3 3 0 0 0-3-3z" />
                                </svg>
                            </span>
                            <input type="text" name="identity" class="auth-input form-control form-control-rounded py-2 px-5"
                                placeholder="Email ou Nom d'utilisateur" autocomplete="off" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-icon">
                            <span class="input-icon-addon ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M18 8h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h2V7a6 6 0 1 1 12 0v1zM5 10v10h14V10H5zm6 4h2v2h-2v-2zm-4 0h2v2H7v-2zm8 0h2v2h-2v-2zm1-6V7a4 4 0 1 0-8 0v1h8z" />
                                </svg>
                            </span>
                            <input type="password" name="password" class="auth-input form-control form-control-rounded py-2 px-5"
                                placeholder="Mot de passe" />
                            <span class="input-icon-addon mr-2">
                                <a href="#" class="link-secondary" title="Show password" data-toggle="tooltip"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="12" cy="12" r="2" />
                                        <path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2" />
                                        <path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2" />
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-gradient btn-block btn-pill btn-no-border">
                            Se connecter
                        </button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted">
                Mot de passe oublié ?
                <a href="{{ route('password.request') }}" tabindex="-1">Cliquez ici</a>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <script src="{{ asset('dashboard/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- easytrak Core -->
    <script src="{{ asset('dashboard/dist/js/easytrak.min.js') }}"></script>
    <script>
        document.body.style.display = "block";

    </script>
    @include('notify::messages')
    @notifyJs
</body>

</html>