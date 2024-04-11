const { ethers } = require('ethers');

// Provider URL (e.g., Infura)
const providerUrl = 'YOUR_PROVIDER_URL';

// Private key of the account that deployed the contracts
const privateKey = 'YOUR_PRIVATE_KEY';

// ABI and address of the StudentRewardSystem contract
const studentRewardSystemAbi = [
    // ABI of StudentRewardSystem contract
];
const studentRewardSystemAddress = 'CONTRACT_ADDRESS'; // Replace with the actual address

// ABI and address of the CustomToken contract
const customTokenAbi = [
    // ABI of CustomToken contract
];
const customTokenAddress = 'CONTRACT_ADDRESS'; // Replace with the actual address

// Connect to the Ethereum network
const provider = new ethers.providers.JsonRpcProvider(providerUrl);

// Wallet for the account associated with the private key
const wallet = new ethers.Wallet(privateKey, provider);

// Connect to the StudentRewardSystem contract
const studentRewardSystemContract = new ethers.Contract(studentRewardSystemAddress, studentRewardSystemAbi, wallet);

// Connect to the CustomToken contract
const customTokenContract = new ethers.Contract(customTokenAddress, customTokenAbi, wallet);

// Function to reward a student
async function rewardStudent(studentAddress, achievement, tokens) {
    try {
        // Call the rewardStudent function of the StudentRewardSystem contract
        const tx = await studentRewardSystemContract.rewardStudent(studentAddress, achievement, tokens);
        await tx.wait();
        console.log('Student rewarded successfully!');
    } catch (error) {
        console.error('Error rewarding student:', error);
    }
}

// Function to get the balance of tokens for a specific achievement for a student
async function getBalance(studentAddress, achievement) {
    try {
        // Call the getBalance function of the StudentRewardSystem contract
        const balance = await studentRewardSystemContract.getBalance(studentAddress, achievement);
        console.log(`Balance for achievement "${achievement}" for student ${studentAddress}: ${balance}`);
    } catch (error) {
        console.error('Error getting balance:', error);
    }
}

// Example usage
const studentAddress = 'STUDENT_ADDRESS';
const achievement = 'ACHIEVEMENT_NAME';
const tokens = 100;

rewardStudent(studentAddress, achievement, tokens);
getBalance(studentAddress, achievement);
