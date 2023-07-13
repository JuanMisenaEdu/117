let lisetElements = document.querySelectorAll('.lista_button--click');
lisetElements.forEach(lisetElement => {
    lisetElement.addEventListener('click', () =>{
        
        lisetElement.classList.toggle('flecha');

        let height = 0;
        let menu = lisetElement.nextElementSibling;
        if(menu.clientHeight == "0"){
            height = menu.scrollHeight;
        }

        menu.style.height = `${height}px`;
    })
});