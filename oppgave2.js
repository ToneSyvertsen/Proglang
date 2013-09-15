
function displayChoice()
{

document.getElementById("outputbox").innerHTML = "Du har valgt programmeringsspr&aring;ket   " 
+ document.getElementById("spraak").options[document.getElementById("spraak").selectedIndex].value;
}

 