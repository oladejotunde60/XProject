//console.log(document.getElementById("content"));
function sayHello()  {
    let test = document.getElementById("name").value;
    let yes = "<h2>Hello " + test + "!<h2>";
    console.log(yes);

    document.getElementById("content").innerHTML = yes;
    if (test === "buhari") {
        let hmm = document.querySelector("#title").textContent;
        hmm += "Back to Daura"
        document.querySelector("#title").textContent = hmm;
    }
     
    
    
}
function tunde() {
    alert("Out of Picture");
}

function ola() {
    alert("Inside Picture");
}
function tosin() {
    alert("Inside Picture");
}

function buttonOne () {
    console.log(document.getElementById("stuff").innerHTML = "You clicked button one" );
}

function buttonTwo () {
    console.log(document.getElementById("stuff").innerHTML = "You clicked button two" );
}

function closeMe() {
    x=document.getElementById("demo");
    x.style.display="none";
}

function openMe() {
    x=document.getElementById("demo");
    x.style.display="block";
}

function displayId(element){
    console.log(element.id);
}