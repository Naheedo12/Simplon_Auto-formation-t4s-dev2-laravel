<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Créer une Réservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f3f7;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        form {
            background: #fff;
            width: 70%;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input,
        select {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            background: #27ae60;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
        }

        button:hover {
            background: #2ecc71;
        }
    </style>
</head>

<body>

    <h1>Créer une Réservation</h1>

    <form method="POST" action="{{ route('bookings.store') }}">
        @csrf
        <input type="number" name="service_id" placeholder="ID du service">
        <input type="date" name="date">
        <input type="time" name="time">
        <select name="status">
            <option value="waiting">En attente</option>
            <option value="confirmed">Confirmée</option>
            <option value="cancelled">Annulée</option>
        </select>
        <button type="submit">Créer</button>
    </form>

</body>

</html>
