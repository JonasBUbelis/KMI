<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="width: 22rem;">
        <h1 class="card-title text-center mb-4">BMI Calculator</h1>
        <form action="{{ route('calculate') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="height" class="form-label">Height (cm)</label>
                <input type="number" class="form-control" id="height" name="height" required>
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Weight (kg)</label>
                <input type="number" class="form-control" id="weight" name="weight" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Calculate BMI</button>
        </form>
    </div>
</div>

</body>
</html>
