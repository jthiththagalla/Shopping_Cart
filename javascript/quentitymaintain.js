/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function incrementValue()
{
    var value = document.getElementById("quentity").innerHTML;
    value++;
    document.getElementById("quentity").innerHTML= value;
    if(value > 10){
        alert("Max value is 10");
        document.getElementById("quentity").innerHTML= 10;
    }
}

function decrementValue()
{
    var value = document.getElementById("quentity").innerHTML;
    value--;
    document.getElementById("quentity").innerHTML= value;
    if(value < 0){
        alert("Minimum value is 0");
        document.getElementById("quentity").innerHTML= 0;
    }
}
