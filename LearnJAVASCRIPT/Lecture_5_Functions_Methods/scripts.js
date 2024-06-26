// fucntions ->Block of code that performs a specific task,can be invoked whenever needed


function firstfunction(){
    console.log("Welcome to learn function in javascript");
    console.log("Welcome to learn javascript");
}

firstfunction();

function myfunction(msg){ // paramter input
    console.log(msg);
}


// nan mean not a number

myfunction("Hello javascript ");


function sum(x,y){
    // local variables -> scope
    s = x + y ;
    return s;
}

let value = sum(13,8);
console.log(value);


// sum function

function add(x,y){
    return x + y;
}

let a = add(5,1);
console.log(a);


// multipication function 


function multiply(a,b){
    return a*b;
}

let m = multiply(5,9);
console.log(m);

//Arrow function ->compact way of writing a function
//Modern Javascript
// arrow function for adding

const arrowsum = (a,b)=>{
    return a+b;

};
console.log(arrowsum(8,10));


// arrow function for multipication

const arrowmulti = (a,b)=>{
    return a*b;
}

console.log(arrowmulti(4,8));

// arrow print function


const arrowprint = (msg)=>{
    return msg;
}

console.log(arrowprint("Hello know you get it how to write a arrow function"));


//Q1 Create a fucntion using the "function" keywords that takes a string as an argument and returns the number of vowels in the string;

// function countvowels(str){
//     count = 0;
//     for(const s of str ){
//         if(s==="a"|| s=="A" || s==="e" || s==="E" || s==="i" || s==="I" || s==="o" || s==="O" || s==="U" || s==="u"){
//         count++
//         }
//     }
//         console.log(`THe number of total values of vowels ${count}`)
    

// }

// countvowels("Hello welcome to learn javascript");




function countvowels(str){
     count = 0;
    for(const s of str){
        if(s==="a" || s==="A" || s==="e" || s==="E" || s==="i" || s==="I" || s==="o" || s==="O" || s==="u" || s==="U"){
        
        count++;
    }
}
    console.log(`The number count of vowels of the string is ${count}`);
}

countvowels("Hello welcome to LEARN JAVASCRIPT");


//Q2 Create the same function for arrow function

const arrowvowels =(str)=>{
    count = 0;
    for(const s of str){
        if(s==="a" || s==="A" || s==="e" || s==="E" || s==="i" || s==="I" || s==="o" || s==="O" || s==="u" || s==="U"){
        
        count++;
    }
}
    console.log(`The number count of vowels of the string is ${count}`);

}


arrowvowels("Hello welcome to LEARN JAVASCRIPT");

//Function — a set of instructions that perform a task. Method — a set of instructions that are associated with an object.
//for each loop is a method but it is a function also 

//arr.forEach(callBackFunction)
// Callbackfunction : Here, it is a function to execute for each element in the arrray
// A callback is a function passed as an argument to another function

let arr = [1,4,5,6,3,5,3,9];

// arr.forEach(function myvalue(value){
//     console.log(value);
// });

//foreach arrrow function
arr.forEach((value)=>{ // iterate each item in the array to value in the code of forEach function paramter->include(value,index,)
    console.log(value);
});


let cities = ["karachi","Islamabad","lahore","peshawar"];

cities.forEach( (str,count,cities)=>{
    console.log(str.toUpperCase(),count,cities);
});



let text = ["            hello to learn coding"];

text.forEach((val,idex,text)=>{
    console.log(val.trim(),idex,text);
});


// higher order function are those that uses other function as there parameter,or return and where you see a call back fucntion it becames higher order function

//Q1 For a given array of a numbers,print the square of each value using the forEach loop.

 let numbers = [4,5,2,7,8,9];

numbers.forEach((numbers)=>{
    console.log(numbers * numbers);
});



const x =((numbers)=>{
    console.log(numbers*numbers);
});

numbers.forEach(x);

//Methods in javacript

// map function => Creates a new array with the results of some opeartions.The value its callback returns are used to form a new array 


// arr.map(callbackfunc(value,index,array))


let n = [ 8,3,5,6,7,2];


n.map((n)=>{
    console.log(n);
});

let q =n.map((n)=>{   
    return n * n;

});

console.log(q);

// forEach is used for normally calculate simple values
// where as map is used for


//Creates a new array of element that give true for a condition/filter. 

let no = [1,5,7,3,2];
let newar = no.filter((val)=>{
    return val%2 == 0;
});

console.log(newar);


// reduce perform some operations and reduce the array to a single value.It returns that single value

let output = no.reduce((res,cur)=>{
    return res + cur;
});

console.log(output);


let largernum = no.reduce((pre,cur)=>{
    return pre > cur ? pre : cur ;
});

console.log(largernum);



//Q1 We are given array of marks of students.Filter out of the marks of students that scored 90+.

let marks = [54,67,42,94,98,91,82,76,77];

let re = marks.filter((nu)=>{
    return nu > 90;
});
console.log(re);

//Q2 Take a number n as a input from user.Create an array of numbers from 1 to n.
//a)Use the reduce method to calculate sum of all numbers in the array
//b)use the reduce  method to calculate product of all numbers in the array.




let i = prompt("Enter your number");

let ar = [];

for(let n=1;n<=i;n++){  
    ar[n-1] = n;    
}


console.log(ar)




let plus = ar.reduce((r,c)=>{
    return r + c;
})

console.log(`The sum of the number = ${plus}`);


let multi = ar.reduce((g,k)=>{
    return g * k
})


console.log(`The factorial of the number = ${multi}`);