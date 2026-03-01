// Program to calculate factorial of a positive integer using a while loop

let n = 5; // Example value (you can change it)

let factorial = 1;
let i = 1;

// Check if number is valid
if (n < 0) {
  console.log("Factorial is not defined for negative numbers.");
} else {
  
  while (i <= n) {
    factorial = factorial * i;
    i++;
  }

  console.log("Factorial of " + n + " is: " + factorial);
}
