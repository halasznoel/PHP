//Amikor minden betöltődött az oldalon, akkor hajtsa végre a start függvényt
window.onload = start;

number = 0;


function start(){
    //Ha rákattintok egy adott id-jű elemre, akkor melyik függvény hajtódjon végre
    document.getElementById('gomb1').onclick = gomb1click;
    document.getElementById('gomb2').onclick = gomb2click;
    document.getElementById('piroshatter').onclick = piroshatterclick;
    document.getElementById('zoldhatter').onclick = zoldhatterclick;
    document.getElementById('changebackgroundbutton').onclick = hattervaltoztatas;
    document.getElementById('divecske').onmouseover = divecske;
    document.getElementById('divecske').onmouseout = divrollejotteger;
    document.getElementById('budi').onmousemove = mozog;
    window.onmousemove = mozog;
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

function divecske(){
    document.getElementById('divecske').style.backgroundColor="green";
}

function divrollejotteger(){
    document.getElementById('divecske').style.backgroundColor="red";
}

function mozog(){
    number++;
    if(number >= 100)
        document.getElementById('divecske').innerHTML = "<p>Ne csináld már, unom!</p>";
    else
        document.getElementById('divecske').innerHTML = "<p>" + number + "</p>";
}

/*Események:
    onload: betöltődött
    onclick: rákattintottunk
    onmouseover: rajta van az egér
    onmouseout: lejött róla az egér
    onmousemove: mozgatjuk rajta az egeret
*/