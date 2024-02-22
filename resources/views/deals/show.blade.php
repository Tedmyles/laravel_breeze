<!-- resources/views/deals/show.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deal Details</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Deal Details -->
        <div class="mt-5">
            <h1>Deal Details</h1>

            <div class="card mt-3">
                <div class="card-body">
                    <p class="card-text"><strong>ID:</strong> {{ $deal->id }}</p>
                    <p class="card-text"><strong>Name:</strong> {{ $deal->name }}</p>
                    <p class="card-text"><strong>Amount:</strong> {{ $deal->amount }}</p>
                    <p class="card-text"><strong>Closing Date:</strong> {{ $deal->closing_date }}</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>