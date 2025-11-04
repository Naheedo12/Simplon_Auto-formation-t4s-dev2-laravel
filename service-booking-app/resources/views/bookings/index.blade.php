<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des Réservations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        .card {
            background: #fff;
            padding: 15px;
            margin: 10px auto;
            border-radius: 10px;
            width: 70%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        button,
        a.btn {
            background: #2c3e50;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            text-decoration: none;
        }

        button:hover,
        a.btn:hover {
            background: #34495e;
        }

        .actions a {
            margin-right: 10px;
            color: #2980b9;
            text-decoration: none;
        }

        .actions a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <h1>Liste des Réservations</h1>

    @foreach ($bookings as $booking)
        <div class="card">
            <p><strong>Service :</strong> {{ $booking->service_id }}</p>
            <p><strong>Date :</strong> {{ $booking->date }}</p>
            <p><strong>Heure :</strong> {{ $booking->time }}</p>
            <p><strong>Status :</strong> {{ $booking->status }}</p>
            <div class="actions">
                <a href="{{ route('bookings.show', $booking->id) }}">Voir</a>
                <a href="{{ route('bookings.edit', $booking->id) }}">Modifier</a>
            </div>
        </div>
    @endforeach

    <a href="{{ route('bookings.create') }}" class="btn">+ Nouvelle Réservation</a>

</body>

</html>
