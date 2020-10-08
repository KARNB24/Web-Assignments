/* 
 * Karn Bhavsar
 * Student ID: 991578281
 * SYST10199 - Web Programming
 */


var u1 = document.getElementById("ftoc");
var u2 = document.getElementById("ctof");
var u3 = document.getElementById("ftom");
var u4 = document.getElementById("mtof");
var u5 = document.getElementById("itoc");
var u6 = document.getElementById("ctoi");
var u7 = document.getElementById("ptok");
var u8 = document.getElementById("ktop");
var r = document.getElementById("reset");

u1.onclick = function()
{
    var v = document.getElementById("input").value;
    
    var result = (v - 32) / 1.8;
    var round = Number(Math.round(result+'e2')+'e-2');
    
    document.getElementById("output").innerHTML = round + " ℃";
};

u2.onclick = function()
{
    var v = document.getElementById("input").value;
    var result = (v * 1.8) + 32;
    var round = Number(Math.round(result+'e2')+'e-2');
    document.getElementById("output").innerHTML = round + " ℉";
};

u3.onclick = function()
{
    var v = document.getElementById("input").value;
    var result = v / 3.2808;
    var round = Number(Math.round(result+'e2')+'e-2');
    document.getElementById("output").innerHTML = round + " m";
};

u4.onclick = function()
{
    var v = document.getElementById("input").value;
    var result = v * 3.2808;
    var round = Number(Math.round(result+'e2')+'e-2');
    document.getElementById("output").innerHTML = round + " ft";
};

u5.onclick = function()
{
    var v = document.getElementById("input").value;
    var result = v / 0.39370;
    var round = Number(Math.round(result+'e2')+'e-2');
    document.getElementById("output").innerHTML = round + " cm";
};

u6.onclick = function()
{
    var v = document.getElementById("input").value;
    var result = v * 0.39370;
    var round = Number(Math.round(result+'e2')+'e-2');
    document.getElementById("output").innerHTML = round + " in";
};

u7.onclick = function()
{
    var v = document.getElementById("input").value;
    var result = v / 2.2046;
    var round = Number(Math.round(result+'e2')+'e-2');
    document.getElementById("output").innerHTML = round + " kg";
};

u8.onclick = function()
{
    var v = document.getElementById("input").value;
    var result = v * 2.2046;
    var round = Number(Math.round(result+'e2')+'e-2');
    document.getElementById("output").innerHTML = round + " lb";
};

r.onclick = function()
{
    var p = document.getElementById("output");
     document.getElementById("input").focus();
    p.innerHTML = "";
};




