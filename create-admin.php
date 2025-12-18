<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

echo "Creating admin user...\n";

// Default admin credentials (change these!)
$name = 'Admin';
$email = 'admin@example.com';
$password = 'password123';

// Check if user already exists
if (User::where('email', $email)->exists()) {
    echo "User with email {$email} already exists!\n";
    exit(1);
}

// Create admin user
$user = User::create([
    'name' => $name,
    'email' => $email,
    'password' => Hash::make($password),
    'email_verified_at' => now(),
]);

echo "Admin user created successfully!\n";
echo "Email: {$email}\n";
echo "Password: {$password}\n";
echo "\n⚠️  Please change the password after first login!\n";

