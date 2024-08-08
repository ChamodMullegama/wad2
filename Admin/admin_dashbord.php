<?php include './admin_header.php'; ?>

<section>
    <style>
        .dashboard-links {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
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

        .dashboard-stats {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            width: 100%;
            margin-bottom: 40px;
        }

        .dashboard-stat {
            width: 45%;
            max-width: 200px;
            margin: 10px 0;
            padding: 15px;
            border: none;
            border-radius: 25px;
            background-color: #ffffff;
            color: #007bff;
            font-size: 18px;
            text-align: center;
            transition: background-color 0.3s ease, color 0.3s ease;
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
        <p>ADMIN PANEL</p>

        <div class="dashboard-stats">
            <div class="dashboard-stat">Total Customers: 100</div>
            <div class="dashboard-stat">Total Orders: 200</div>
            <div class="dashboard-stat">Total Reviews: 50</div>
            <div class="dashboard-stat">Total Food Items: 75</div>
            <div class="dashboard-stat">Total Staff: 20</div>
        </div>

        <button class="dashboard-button"><a href="./manage_customer.php">Manage Customer</a></button>
        <button class="dashboard-button"><a href="./manage_users.php">Manage Staff</a></button>
        <button class="dashboard-button"><a href="./manage_product.php">Manage Dishes</a></button>
        <button class="dashboard-button"><a href="./manage_order.php">Manage Order</a></button>
        <button class="dashboard-button"><a href="./manage_services.php">Manage Services</a></button>
        <button class="dashboard-button"><a href="./manage_gallery.php">Manage Gallery</a></button>
    </div>
</section>

</body>
</html>
