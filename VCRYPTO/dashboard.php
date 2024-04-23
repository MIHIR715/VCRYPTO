<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #222;
            color: #fff;
        }

        header {
            text-align: center;
            padding: 20px;
        }

        header img {
            max-width: 200px;
            height: auto;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            background-color: #444;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            width: calc(50% - 20px);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .card p {
            margin: 0;
            padding-bottom: 10px;
        }

        /* Admin card styles */
        .admin-card {
            width: 100%;
        }

        .admin-card h2 {
            font-size: 24px;
        }

        .admin-card p {
            font-size: 18px;
        }

        /* Total tokens and overall achievements card styles */
        .achievements-card {
            width: 100%;
        }

        .achievements-card h2 {
            font-size: 24px;
        }

        /* Navbar styles */
        .navbar {
            background-color: #333;
            padding: 10px 20px;
            border-radius: 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-bottom: 20px;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
            border-radius: 20px;
        }

        .navbar a:hover {
            background-color: #007bff;
            border-radius: 20px;
        }

        /* Send Token section styles */
        .send-token-section, .activity-history {
            display: none;
            background-color: #444;
            padding: 20px;
            border-radius: 20px;
            margin-top: 20px;
            width: 100%;
            transition: transform 0.3s ease;
        }

        .send-token-section input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #333;
            color: #fff;
        }

        .send-token-section input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .send-token-section input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Dropdown select styles */
        .dropdown-select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #333;
            color: #fff;
        }

        /* Animation for Send Token section */
        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Payment history section styles */
        .activity-history {
            background-color: #444;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .activity-history h2 {
            margin-bottom: 10px;
            font-size: 24px;
        }

        .payment-item {
            margin-bottom: 10px;
            border-radius: 10px;
            overflow: hidden;
        }

        .payment-content {
            padding: 15px;
        }

        /* Different color for each payment item */
        .payment-item:nth-child(odd) {
            background-color: #007bff;
        }

        .payment-item:nth-child(even) {
            background-color: #28a745;
        }

        /* Proper CSS for payment content */
        .payment-content p {
            margin: 0;
            padding: 5px 0;
            color: #fff;
        }

        /* Add new styles for admin token balance */
        #admin-token-balance {
            font-size: 18px;
        }

        /* CSS for send button */
        #send-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #send-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <img src="s.png" alt="Logo">
    </header>

    <div class="container">
        <!-- Admin card -->
        <div class="card admin-card">
            <h2>Hello Admin_name</h2>
            <!-- Assign admin account address -->
            <p>Admin Account Address: 0x1A2B3C4D5E6F7A8B9C</p>
            <!-- Display admin's token balance here -->
            <p>Total Tokens: <span id="admin-token-balance">100000</span></p>
            <!-- Display admin's achievements here -->
            <p>Overall Achievements: <span id="admin-achievements">0</span></p>
        </div>


    </div>

    <!-- Navbar -->
    <div class="navbar">
        <a href="#" id="activity-link">Activity</a>
        <a href="#" id="send-token-link">Send Token</a>
    </div>

    <!-- Send Token section -->
    <div class="send-token-section" id="send-token-section">
        <h2>Send Tokens</h2>
        <form method="post" action="" id="send-token-form">
            <input type="text" name="address" placeholder="User Address" required><br>
            <!-- Dropdown select for token calculation -->
            <select class="dropdown-select" id="token-calculation">
                <option value="1">College Level</option>
                <option value="1.25">District/Taluka Level</option>
                <option value="2">State Level</option>
                <option value="3">National Level Sports</option>
            </select><br>
            <!-- Removed achievement calculation dropdown -->
            <select class="dropdown-select" id="category-calculation">
                <option value="3">Sports</option>
                <option value="5">Hackathons</option>
                <option value="3">Committee Competitions</option>
                <option value="2.5">Extra Curricular</option>
                <option value="3">Projects</option>
                <option value="4">Research Papers</option>
                <option value="5">Copyrights</option>
                <option value="6">Patents</option>
                <option value="2">Cultural Performances</option>
            </select><br>
            <input type="submit" name="submit" value="Calculate">
        </form>
        <!-- Box to display calculated tokens -->
        <p id="token-result"></p>
        <!-- Send button -->
        <button id="send-button" style="display: none;">Send Tokens</button>
    </div>

    <!-- Activity history section -->
    <div class="activity-history" id="activity-history">
        <h2>Activity History</h2>
        <!-- Payment history will be dynamically inserted here -->
        <div id="payment-history"></div>
    </div>

    <script>
        // JavaScript for toggling Send Token section and Activity section
        document.addEventListener("DOMContentLoaded", function() {
            const sendTokenLink = document.getElementById("send-token-link");
            const activityLink = document.getElementById("activity-link");
            const sendTokenSection = document.getElementById("send-token-section");
            const activitySection = document.getElementById("activity-history");

            sendTokenLink.addEventListener("click", function(e) {
                e.preventDefault();
                sendTokenSection.style.display = "block";
                activitySection.style.display = "none";
                sendTokenSection.style.animation = "slideInDown 0.5s forwards";
            });

            activityLink.addEventListener("click", function(e) {
                e.preventDefault();
                activitySection.style.display = "block";
                sendTokenSection.style.display = "none";
            });

            // Submit event listener for Send Token form
            const sendTokenForm = document.getElementById("send-token-form");
            const tokenCalculationSelect = document.getElementById("token-calculation");
            const categoryCalculationSelect = document.getElementById("category-calculation");
            const tokenResultParagraph = document.getElementById("token-result");
            const sendButton = document.getElementById("send-button");

            sendTokenForm.addEventListener("submit", function(e) {
                e.preventDefault();
                const x = parseFloat(tokenCalculationSelect.value);
                const z = parseFloat(categoryCalculationSelect.value);
                const result = x * z;
                tokenResultParagraph.textContent = "Calculated Tokens: " + result.toFixed(2);

                // Show the send button
                sendButton.style.display = "block";

                // Update admin's token balance
                updateAdminTokenBalance(-result);

                // Increment admin's achievements by 1 for each transaction
                updateAdminAchievements(1);

                // Dummy code to add payment to activity history
                const address = sendTokenForm.querySelector('input[name="address"]').value;
                const now = new Date();
                const time = now.toLocaleString();
                const paymentDetails = `Admin_name sent tokens to ${address} at ${time}. Tokens: ${result.toFixed(2)}, Category: ${z}`;
                updateActivityHistory(paymentDetails);
            });

            // Send button click event listener
            sendButton.addEventListener("click", function() {
                // Add functionality to send tokens to the user
                // After sending, display a notification
                alert("Tokens sent successfully!");
            });

            // Function to update activity history with payment
            function updateActivityHistory(paymentDetails) {
                const paymentHistoryDiv = document.getElementById("payment-history");
                const paymentItem = document.createElement("div");
                paymentItem.classList.add("payment-item");
                paymentItem.innerHTML = `
                    <div class="payment-content">
                        <p>${paymentDetails}</p>
                    </div>
                `;
                paymentHistoryDiv.appendChild(paymentItem);
            }

            // Define a variable to store the admin's token balance
            let adminTokenBalance = 100000;

            // Function to update the admin's token balance in the UI
            function displayAdminTokenBalance() {
                document.getElementById("admin-token-balance").textContent = adminTokenBalance;
            }

            // Function to update admin's token balance
            function updateAdminTokenBalance(amount) {
                adminTokenBalance += amount;
                displayAdminTokenBalance();
            }

            // Function to update admin's achievements
            function updateAdminAchievements(achievementIncrement) {
                const adminAchievementsElement = document.getElementById("admin-achievements");
                let adminAchievements = parseInt(adminAchievementsElement.textContent);
                adminAchievements += achievementIncrement;
                adminAchievementsElement.textContent = adminAchievements;
            }
        });
    </script>
</body>
</html>
