

var mostrar_twitter =document.getElementById('mostrar_twitter'),
    cont =document.getElementById('cont'),
    contador=0;

    function active()

    {
        if (contador==0)
        {
            cont.classList.add('active');
            contador=1;
        }
        else{cont.classList.remove('active');
            contador=0;}
    
    }

    mostrar_twitter.addEventListener('click',active,true)


var mostrar_instagram =document.getElementById('mostrar_instagram'),
    cont2 = document.getElementById('cont2'),
    contador2=0;

    function actives()
    {
        if(contador2==0)
        {
            cont2.classList.add('active');
            contador2=1;
        }
        else{cont2.classList.remove('active');
        contador2=0;
    }
    }

    mostrar_instagram.addEventListener('click',actives,true)

    

var mostrar_tiktok =document.getElementById('mostrar_tiktok'),
    cont3=document.getElementById('cont3'),
    contador3=0;

    function activess(){
         if(contador3==0){
            cont3.classList.add('active');
            contador3=1;
         }
         else{cont3.classList.remove('active');
        contador3=0;
    }
    }

    mostrar_tiktok.addEventListener('click',activess,true)


