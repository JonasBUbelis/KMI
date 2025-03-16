<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="width: 24rem;">
        <h1 class="card-title text-center mb-4">Your BMI</h1>

        @if(isset($bmi))
            @php
                $bmi_category = '';
                if ($bmi < 16) {
                    $bmi_category = 'Severe Thinness';
                } elseif ($bmi < 17) {
                    $bmi_category = 'Moderate Thinness';
                } elseif ($bmi < 18.5) {
                    $bmi_category = 'Mild Thinness';
                } elseif ($bmi < 25) {
                    $bmi_category = 'Normal';
                } elseif ($bmi < 30) {
                    $bmi_category = 'Overweight';
                } elseif ($bmi < 35) {
                    $bmi_category = 'Obese Class I';
                } elseif ($bmi < 40) {
                    $bmi_category = 'Obese Class II';
                } else {
                    $bmi_category = 'Obese Class III';
                }
            @endphp

            <p class="text-center display-5">{{ number_format($bmi, 2) }}</p>
            <p class="text-center fs-4 text-muted">{{ $bmi_category }}</p>
        @endif

        <table class="table table-bordered mt-4">
            <thead class="table-light">
            <tr>
                <th>Classification</th>
                <th>BMI range</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <td>Severe Thinness</td>
                <td> < 16</td>
            </tr>
            <tr class="text-center">
                <td>Moderate Thinness</td>
                <td>16 - 17</td>
            </tr>
            <tr class="text-center">
                <td>Mild Thinness</td>
                <td>17 - 18.5</td>
            </tr>
            <tr class="text-center">
                <td class="fw-bold">Normal</td>
                <td>18.5 - 25</td>
            </tr>
            <tr class="text-center">
                <td>Overweight</td>
                <td>25 - 30</td>
            </tr>
            <tr class="text-center">
                <td>Obese Class I</td>
                <td>30 - 35</td>
            </tr>
            <tr class="text-center">
                <td>Obese Class II</td>
                <td>35 - 40</td>
            </tr>
            <tr class="text-center">
                <td>Obese Class III</td>
                <td> > 40</td>
            </tr>
            </tbody>
        </table>

        <a href="/" class="btn btn-primary w-100 mt-3">Go back</a>
    </div>
</div>

</body>
</html>
