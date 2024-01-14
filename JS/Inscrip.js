var Menu1 =document.getElementById('Menu1'),
contenido1 =document.getElementById('contenido1'),
contador=0;

function actives(){

    if(contador==0)
    {
        contenido1.classList.add('active');
        contador=1;
    }
    else{
        contenido1.classList.remove('active');
        contador=0;
    }
}

Menu1.addEventListener('click',actives,true);

var Menu2 =document.getElementById('Menu2'),
contenido2 = document.getElementById('contenido2'),
contadore=0;

function active(){

    if(contadore==0)
    {
        contenido2.classList.add('active');
        contadore=1;
    }
    else{
        contenido2.classList.remove('active');
        contadore=0;
    }
}

Menu2.addEventListener('click',active,true);

var Menu3 =document.getElementById('Menu3'),
contenido3 = document.getElementById('contenido3'),
conta=0;

function activs(){

    if(conta==0)
    {
        contenido3.classList.add('active');
        conta=1;
    }
    else{
        contenido3.classList.remove('active');
        conta=0;
    }
}

Menu3.addEventListener('click',activs,true);

var Menu4 =document.getElementById('Menu4'),
contenido4 = document.getElementById('contenido4'),
cont=0;

function activ(){

    if(cont==0)
    {
        contenido4.classList.add('active');
        cont=1;
    }
    else{
        contenido4.classList.remove('active');
        cont=0;
    }
}

Menu4.addEventListener('click',activ,true);

var Menu5 =document.getElementById('Menu5'),
contenido5 = document.getElementById('contenido5'),
cont=0;

function actv(){

    if(cont==0)
    {
        contenido5.classList.add('active');
        cont=1;
    }
    else{
        contenido5.classList.remove('active');
        cont=0;
    }
}

Menu5.addEventListener('click',actv,true);