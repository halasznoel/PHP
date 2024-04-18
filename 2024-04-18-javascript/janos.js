window.onload = start;

function start(){
    document.getElementById('zold').onmouseover = zolddiv;
    document.getElementById('piros').onmouseover = pirosdiv;
    document.getElementById('kek').onmouseover = kekdiv;
    document.getElementById('barna').onmouseover = barnadiv;
}

function zolddiv(){
    document.body.bgColor="green";
}

function pirosdiv(){
    document.body.bgColor="red";
}

function kekdiv(){
    document.body.bgColor="blue";
}

function barnadiv(){
    document.body.bgColor="brown";
}