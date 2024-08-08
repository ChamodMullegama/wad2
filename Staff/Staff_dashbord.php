<?php include './Staff_header.php'; ?>

<section>
    <style>
        .dashboard-links {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            background: linear-gradient(to bottom, #007bff, #0056b3);
            padding: 20px;
            box-sizing: border-box;
            width: 100%;
        }

        .dashboard-links p {
            text-align: center;
            font-size: 36px;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
        }

        .dashboard-button {
            width: 80%;
            max-width: 300px;
            margin: 10px 0;
            padding: 15px;
            border: none;
            border-radius: 25px;
            background-color: #ffffff;
            color: #007bff;
            font-size: 18px;
            text-align: center;
            transition: background-color 0.3s ease, color 0.3s ease;
            cursor: pointer;
        }

        .dashboard-button a {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .dashboard-button:hover {
            background-color: black;
            color: #ffffff;
        }
    </style>

    <div class="dashboard-links">
        <p>STAFF</p>
        <button class="dashboard-button"><a href="./table_booking.php">View Table Booking</a></button>
        <button class="dashboard-button"><a href="./view_customer_order.php">View Customer Orders</a></button>
        <button class="dashboard-button"><a href="./view_dishes.php">View Available Dishes</a></button>
        <button class="dashboard-button"><a href="./manage_customer_review.php">Customer Review</a></button>
    </div>
</section>

</body>
</html>
