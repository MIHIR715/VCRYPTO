// Function to toggle dropdown menu
function toggleDropdown() {
    var dropdownMenu = document.getElementById("dropdownMenu");
    dropdownMenu.classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropdown-toggle')) {
        var dropdowns = document.getElementsByClassName("dropdown-menu");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

// Function to generate a random wallet address
function generateRandomAddress() {
    const characters = '0123456789abcdef';
    let address = '0x';
    for (let i = 0; i < 40; i++) {
        address += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return address.toUpperCase();
}

// Function to copy the wallet address to clipboard
function copyAddress() {
    const address = document.getElementById("account-address").textContent;
    navigator.clipboard.writeText(address);
    const copyMessage = document.querySelector(".copy-message");
    copyMessage.textContent = "Address copied!";
    setTimeout(function() {
        copyMessage.textContent = "Copy to clipboard";
    }, 2000); // Reset message after 2 seconds
}

// Function to generate a random welcome message
function generateWelcomeMessage(username) {
    const messages = [
        Welcome Back, ${username}!,
        Hi ${username}, Welcome !,
        Hello ${username}, Good To See You Again!
    ];
    const randomIndex = Math.floor(Math.random() * messages.length);
    return messages[randomIndex];
}

// Retrieve the username from local storage
var username = localStorage.getItem("username");
// Display the username on the user page
document.getElementById("username").textContent = username;

// Generate and display the welcome message
document.getElementById("welcome-message").textContent = generateWelcomeMessage(username);

// Generate and display the wallet address
document.getElementById("account-address").textContent = generateRandomAddress();