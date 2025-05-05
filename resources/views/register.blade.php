<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/staff-login.css') }}">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .registration-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .input-group label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        .input-group input {
            border-radius: 5px;
            padding: 12px;
            border: 1px solid #ced4da;
            margin-bottom: 15px;
            width: 100%;
        }

        .input-group input:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 5px;
            padding: 10px;
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        p.mt-3 {
            text-align: center;
        }

        .form-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #007bff;
            margin-bottom: 30px;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="registration-container">
        <h3 class="form-title">User Registration</h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif

        <form action="{{ url('/register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>

        <p class="mt-3">
            Already have an account? <a href="{{ url('/login') }}">Login here</a>.
        </p>
    </div>
</div>

<!-- Bootstrap 5 JS (Optional: If needed for additional interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
