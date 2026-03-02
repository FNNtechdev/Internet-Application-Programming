// This program calculates the factorial of 4 using a for loop

let number = 4;
let factorial = 1;

for (let i = 1; i <= number; i++) {
  factorial = factorial * i;
}

console.log("Factorial of " + number + " is: " + factorial);