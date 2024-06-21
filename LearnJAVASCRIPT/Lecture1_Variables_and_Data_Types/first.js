//Data types in JS 
// String,number,boolean,undefined,symbol,bigint,Null
// primitive 7 datatypes

//non-primitive data types ->objects->(Arrays,functions)
//objects->collection of values


// console.log('Welcome to learn javascript');
// console.log('Welcome to learn html');
// console.log('welcomne to learn CSS ');
// console.log('welcome to learn Python')
// console.log('learning all these languages will have you to make a better website for web development');

name= "lamborgini"; // variables
colour = "red";
model = 2024;
x = null;
y =  undefined;
let z = BigInt("123");
let b = Symbol('Hello');

isfollow = true;

console.log(b);
console.log(name);
console.log(colour); //  calling the variable to output the data
console.log(model);
console.log(z);
console.log(x);
console.log(y);
console.log(isfollow);

// let 
let actorName = "Johnny Depp"; // let Variable cannot be re-declared but can be updated.A block scope variable.
let age = 34;
age = 56;
age = 71;
let movieName = "Pirates of the caribbean";


console.log(actorName);
console.log(age);
console.log(movieName);


//var 
var gameName = "cricket"; // var Variable can be re-declared and updated.A global scope variable.
var gameName = "football";
var gameName = "hockey";
console.log(gameName);


// in 2015 the javascript is updated with a new update call ES6 ECMAScript 6.So the use of var variable is move to decline and the introduction of new features in javascript which include let and cons variable are provided to the users of javascript.



// cons
const companyName = "Microsoft"; // const Variable  cannot be re-declared or updated.A block scope variable. 
const comnpanyName  = "Amazone";
console.log(companyName);



//let

{
    let a = 5;
    console.log(a);
}

{
    let a = 10;
    console.log(a);
}

//object->const
// const->object->key can be updated 

const student = {
    FullName : "Micheal jackson",
    Age : 24,
    marks : 87,
    ispass : true

};

student["Age"]= student["Age"] + 1;
console.log(student["Age"]);


student["FullName"] = "Ronaldo";
console.log(student["FullName"]);

student["marks"] = student["marks"] - 10;


console.log(student);
console.log(student["marks"]);


// Q1. Create a const object called "product" to store information shown in the picture.


const product = {
    title : "Parker Jotter Standard CT Ball Pen (Black).",
    rating : 5 ,
    offer : "5%" ,
    Price : 270
}

console.log(product);


// Q2 .Create a const object called "profile" to store informations shown in the picture.


const profile= { 
    fullName : "Elon musk",
    profession : "CEO at Twitter",
    post : 195,
    followers : "569k",
    following : 4,
    isfollow : true,
    Message : true

    
}

profile["fullName"] = "Ronaldo";
profile["profession"] = "Captain of Portugal";

console.log(profile);
console.log(typeof profile["fullName"]);
console.log(typeof profile["post"]);