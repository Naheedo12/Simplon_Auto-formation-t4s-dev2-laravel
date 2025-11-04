<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Détails de la Réservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f9fb;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        .card {
            background: #fff;
            width: 70%;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        p {
            margin: 10px 0;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #2980b9;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <h1>Détails de la Réservation</h1>

    <div class="card">
        <p><strong>Service ID :</strong> {{ $booking->service_id }}</p>
        <p><strong>Date :</strong> {{ $booking->date }}</p>
        <p><strong>Heure :</strong> {{ $booking->time }}</p>
        <p><strong>Status :</strong> {{ $booking->status }}</p>
        <a href="{{ route('bookings.index') }}">⬅ Retour</a>
    </div>

</body>

</html>
