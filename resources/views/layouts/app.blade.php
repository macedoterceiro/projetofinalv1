<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <title>Galeria de Contatos</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            padding: 20px;
        }
        .navbar {
            margin-bottom: 20px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <form id="logout-form" action="{{ url('/logout') }}" method="POST">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <main role="main">
        @hasSection('content')
            @yield('content')
        @endif
    </div>
    <script src="{ asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>