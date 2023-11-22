<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
</head>
<body>
    <?php
    $value = $user->verification_token;
    $segments = explode('/', $value);
    $service = $segments[0]; // "jobseeker"
    $token = $segments[1]; // "b5TgVnBsoHhV4b0yLC3vW64bdQRmjBf83cNwmrqL"
    ?>
    <h1>Email Verification</h1>
    <p>Please click the following link to verify your email address:</p>
    <a href="{{ route('verification.verify', ['service' => $service, 'token' => $token]) }}">Verify Email</a>
</body>
</html>
