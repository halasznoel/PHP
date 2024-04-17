//Amikor minden betöltődött az oldalon, akkor hajtsa végre a start függvényt
window.onload = start;

function start(){
    //Ha rákattintok egy adott id-jű elemre, akkor melyik függvény hajtódjon végre
    document.getElementById('gomb1').onclick = gomb1click;
    document.getElementById('gomb2').onclick = gomb2click;
    document.getElementById('piroshatter').onclick = piroshatterclick;
    document.getElementById('zoldhatter').onclick = zoldhatterclick;
    document.getElementById('changebackgroundbutton').onclick = hattervaltoztatas;
}

function gomb1click(){
    alert('felkötöm magam');
}

function gomb2click(){
    alert('nem tudom meddig bírom még');
}

function piroshatterclick(){
    document.body.bgColor="red";
}

function zoldhatterclick(){
    document.body.bgColor="green";
}
function hattervaltoztatas(){
    document.body.bgColor=document.getElementById('color').value;
}

/*Események:
    onload: betöltődött
    onclick: rákattintottunk
*/