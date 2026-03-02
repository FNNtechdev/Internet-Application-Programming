// This Program is a University Grading System using switch statement

let marks = 58; 

let grade;

switch (true) {
  case (marks >= 70 && marks <= 100):
    grade = "A";
    break;

  case (marks >= 60 && marks < 70):
    grade = "B";
    break;

  case (marks >= 50 && marks < 60):
    grade = "C";
    break;

  case (marks >= 40 && marks < 50):
    grade = "D";
    break;

  case (marks >= 0 && marks < 40):
    grade = "F";
    break;

  default:
    grade = "Invalid Marks";
}

console.log("Marks: " + marks);
console.log("Grade: " + grade);