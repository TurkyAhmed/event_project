<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Reservation Reminder</h1>
    <p>Hello {{ $reservation->name }},</p>
    <p>This is a reminder for your upcoming reservation on {{ $reservation->date }}.</p>
    <p>Please make sure to arrive on time.</p>
    <p>Thank you!</p>

</body>
</html>
