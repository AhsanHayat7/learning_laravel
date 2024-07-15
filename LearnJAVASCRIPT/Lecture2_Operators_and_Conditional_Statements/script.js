

let name = " beginner";
name = "advanced";
console.log(name);
const language = "JavaScript";

//language = "HTMl"; for commenting we use this -> //
console.log(language);

// and for multi line commnets i used /*  -> */

/*let name = " beginner";
name = "advanced";
console.log(name);
const language = "JavaScript";*/




//Airthmetic operators


let a = 4;
let b = 2;
//let c = a + b; we can direclty print the c in the equation in the console.
console.log("a + b = ", a + b);
console.log("a - b = " , a - b);
console.log("a * b = ", a * b);
console.log("a / b = " ,a / b);
console.log("a % b = ", a % b );
console.log("a ** b = ", a ** b);


//Unary operators


// a++ , a-- <--(post , the vlaue to be change after the line), a=a+1, a=a-1, or you can use --a, ++a, <--(pre, the value to be change in the line.) both are valid to use.

console.log("a = ", a, " & b = ",b);
a = a+1;
b--;
console.log("a = ", a );
console.log("b = ",b);


//post
// Addition
console.log("a ++ = ", a++);
// the value is updated in the next line,
console.log(a);

//pre
console.log("++a = ", ++a);
// the value is the current line.


console.log(a);// the a is 7
console.log(b); // the b is 1

//post
//substraction

console.log("b -- = ", b--);
// the value is updated in the next line,
console.log(b);

//pre
console.log("--b = ", --b);
// the value is the current line.



//Assignment Operators

// =
// += -> x = x+1,-> x + =1 
// -= -> x = x-1, -> x - =1 
// *= -> x = x*x, -> x * =1 
// %= -> x = x % x, -> x % =1 
// **= -> x = x ** x, -> x ** =1 

let x = 10;
let y = 7;

x+=4;
console.log("x = ",x);

x-=2;
console.log("x = ",x);

x/=6;
console.log("x =",x);

x*=2;
console.log("x = ",x);

x**=2;
console.log("x = ",x);


// comparison operators


let c = 6;
let d = "6";// auto convert the string to the number in javascript. 

console.log("c == d ", c == d);
console.log("c == d ", c != d);
console.log("c == d ", c === d); // check datatype also

console.log("c !== d ", c !== d);

console.log("c > d ", c > d);

console.log("c < d ", c < d);

console.log("c >= d ", c >= d);

console.log("c <= d ", c <= d);


// Logical Operator


//&& And both condtions must be true
// || OR only one conditions must be true
// ! Not it will the reverse the conditions

let k = 8;
let f = 7;

let cond1 = k>f;
let cond2 = k===f;

console.log("cond1 && cond2 = ", cond1 && cond2);


let cond3 = k >f;
let cond4 = f> k;
console.log("cond1 || cond2 = ",  cond3 || cond4 );



console.log("!(k>f) ", !(f<k));


//conditional statements

let Age = 16;
if(Age>18){
    console.log("you can vote");
}


if(Age<18){
    console.log("You cannot vote");
}



let mode = "dark";
let color;

if(mode==="dark"){
    color = "black";
}


if(mode==="light"){
    color = "white";
}

console.log(color);


let animal = "goat";
let price;

if(animal==="goat"){
    price = "Rs 95000";
}

if(animal=="sheep"){
    price = "Rs 105000";
}

console.log(price);



// if else statements


let pizza = "fagitapizza";
let amount;

if(pizza==="fagitapizza"){
    amount = "Rs 999";
}else{amount = "Rs 1999";}

console.log(amount);




// check whether a number is even or odd



let number = 10;
if(number%2 === 0){
    console.log("Even number");
}else{
    console.log("odd number");
}



// if elseif and else statements
// we used blocks in js
let marks = 82;

if(marks <= 100 && marks >= 90){
    console.log("You have cleared the exam with A grade congragulations");
}else if(marks <= 80 && marks >= 70 ){
    console.log("You have cleared the exam with B grade congragulations");
}else if(marks <= 69 && marks >=60){
    console.log("You have cleared the exam with C grade congragulations");   
}else if( marks <= 59 && marks >=45){
    console.log("You have cleared the exam with D grade congragulations");
}
else{
    console.log("Sorry you do not passed the exam Better luck next time");
}


//Q1. Write a code which can grades to students according to their scores.

let per = 82;
let grade;
if(per <= 100 && per >= 90){
        grade = "A";
}else if(per <= 89 && per >= 70 ){
        grade = "B";
}else if(per <= 69 && per >=60){
        grade = "C";   
}else if( per <= 59 && per >=45){
    grade = "D";
}
else{
    grade ="F";
}

console.log("According to your score the your grade is :" , grade);
//Ternary Operators , two ways to do this 

let result = marks > 40 ? "You are passed" : "You are failed";

console.log(result);


marks > 80 ? console.log("You score A grade") : console.log(" You not score A grade");



// alert pop up

alert('Hello!');

prompt("lala");

let lala =  prompt("Hello");

console.log(lala);


//Q2. Get user to input a number using prompt("Enter a number:").Check if the number is a multiple of 5 or not.

let num = prompt("Enter number!");
console.log(num);
 
if(num % 5 === 0){
    console.log(num ," Is the multiple of 5");
}else{
    console.log(num, "Is not a multiple of 5")
}



