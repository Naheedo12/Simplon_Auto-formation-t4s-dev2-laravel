<!DOCTYPE html>
<html>
<head>
    <title>Créer un utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

<h2>Créer un nouvel utilisateur</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form method="POST" action="/register/submit">
    @csrf

    <div class="mb-3">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
        @error('name')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
        @error('email')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" class="form-control">
        @error('password')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password_confirmation">Confirmer mot de passe :</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Créer</button>
</form>

</body>
</html>
