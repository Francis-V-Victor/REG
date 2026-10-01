<?php
require_once __DIR__ . '/includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tent Hiring System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 80px auto;
            padding: 0 20px;
            text-align: center;
        }
        h1 { font-size: 28px; margin-bottom: 6px; }
        .subtitle { color: #6b7280; margin-bottom: 50px; }
        .options {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .card {
            flex: 1;
            min-width: 240px;
            max-width: 280px;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 30px 20px;
            text-decoration: none;
            color: inherit;
            transition: box-shadow 0.15s, transform 0.15s;
        }
        .card:hover {
            box-shadow: 0 4px 14px rgba(0,0,0,0.08);
            transform: translateY(-2px);
        }
        .icon { font-size: 34px; margin-bottom: 12px; }
        .card h2 { font-size: 18px; margin: 0 0 8px; }
        .card p { font-size: 13px; color: #6b7280; margin: 0; }
    </style>
</head>
<body>

<h1>Tent Hiring System</h1>
<p class="subtitle">Choose where you'd like to go</p>

<div class="options">
    <a class="card" href="portal/index.php">
        <div class="icon">🏕️</div>
        <h2>Browse &amp; Book Tents</h2>
        <p>For customers &mdash; view available tents and submit a booking.</p>
    </a>

    <a class="card" href="admin/bookings.php">
        <div class="icon">🛠️</div>
        <h2>Admin Dashboard</h2>
        <p>Manage tents, view bookings, and update statuses.</p>
    </a>
</div>

</body>
</html>