// This program to calculate factorial of N using a do-while loop
let n = 5; 

let factorial = 1;
let i = 1;

if (n < 0) {
  console.log("Factorial is not defined for negative numbers.");
} else {

  do {
    factorial = factorial * i;
    i++;
  } while (i <= n);

  console.log("Factorial of " + n + " is: " + factorial);
}