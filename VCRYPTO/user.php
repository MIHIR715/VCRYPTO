<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page - VCRPTO</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="smartcontract.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="top-nav">
        <div class="logo-container">
            <img src="s.png" alt="Logo">
        </div>
    </div>

    <div class="container">
        <div class="user-box welcome-box">
            <div class="dropdown">
                <div class="dropdown-toggle" onclick="toggleDropdown()">
                    <i class="fas fa-ellipsis-v"></i>
                    <div class="dropdown-menu" id="dropdownMenu">
                        <div class="dropdown-item"><i class="fas fa-user"></i> Account Details</div>
                        <div class="dropdown-item"><i class="fas fa-life-ring"></i> Support</div>
                        <div class="dropdown-item"><i class="fas fa-cog"></i> Settings</div>
                        <div class="dropdown-item"><i class="fas fa-lock"></i> Lock</div>
                    </div>
                </div>
            </div>
            <h2 id="welcome-message">Welcome, <span id="username"></span>!</h2>
            <h3> 
                <span id="account-address">0xe5e83...E5E30</span> 
                <i class="fas fa-copy copy-icon" onclick="copyAddress()"></i>
                <span class="copy-message">Copy to clipboard</span>
            </h3>
            <div class="user-details">
                <label>Tokens:</label>
                <span>[Number of Tokens]</span>
            </div>
            <div class="button-container">
                <button onclick="redeemTokens()" class="large-button" id="redeem-button">Redeem</button>
                <button onclick="navigate('send')" class="large-button" id="send-button">Send</button>
                <button onclick="navigate('balance')" class="large-button" id="balance-button">Balance</button>
            </div>
        </div>

        <div class="options-container custom-section">
            <div class="options-list">
                <div class="options-list">
                    <button onclick="navigate('tokens')" class="round-button">Tokens</button>
                    <button onclick="navigate('activity')" class="round-button">Activity</button>
                </div>
            </div>
        </div>

        <div class="payment-history custom-section">
            <h3>Payment History</h3>
            <!-- Payment history entries will be added dynamically -->
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.ethers.io/lib/ethers-5.0.umd.min.js"></script>

</body>
</html>