<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier une Réservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f7;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #34495e;
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
            background: #2980b9;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
        }

        button:hover {
            background: #3498db;
        }
    </style>
</head>

<body>

    <h1>Modifier la Réservation</h1>

    <form method="POST" action="{{ route('bookings.update', $booking->id) }}">
        @csrf
        @method('PUT')
        <input type="number" name="service_id" value="{{ $booking->service_id }}">
        <input type="date" name="date" value="{{ $booking->date }}">
        <input type="time" name="time" value="{{ $booking->time }}">
        <select name="status">
            <option value="waiting" @selected($booking->status === 'waiting')>En attente</option>
            <option value="confirmed" @selected($booking->status === 'confirmed')>Confirmée</option>
            <option value="cancelled" @selected($booking->status === 'cancelled')>Annulée</option>
        </select>
        <button type="submit">Mettre à jour</button>
    </form>

</body>

</html>
