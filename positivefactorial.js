// This program calculates factorial of N using a for loop
let n = 8; 

let factorial = 1;

if (n < 0) {
  console.log("Factorial is not defined for negative numbers.");
} else {
  
  for (let i = 1; i <= n; i++) {
    factorial = factorial * i;
  }

  console.log("Factorial of " + n + " is: " + factorial);
}