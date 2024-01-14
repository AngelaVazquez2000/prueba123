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