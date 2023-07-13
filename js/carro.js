const btncard = document.querySelector('.container-card-icon')
const containercardproducts = document.querySelector('.container-card-products')

btncard.addEventListener('click', () =>{
    containercardproducts.classList.toggle('hidden-card')
})
/* ################################# */

const cartInfo = document.querySelector('.card-product')
const rowProduct = document.querySelector('.rows-product')

// Lista de rodo los contenedores de productos

const producsList = document.querySelector('.silencioso')

//variable de arreglo de productos

let allproducts = []

const valorTotal = document.querySelector('.total-pagar');

const countProducts = document.querySelector('#contador-productos');

producsList.addEventListener('click', e =>{
    if(e.target.classList.contains('boton-detalle')){
        const product = e.target.parentElement

        const infoProduct = {
            quantity: 1,
            title: product.querySelector('h1').textContent,
            precio: product.querySelector('p').textContent
        }

        const exist =allproducts.some(product => product.title === infoProduct.title)
         if(exist){
            const products = allproducts.map(product =>{
                if(product.title === infoProduct.title){
                    product.quantity++;
                    return product
                }else{
                    return product
                }
            })
            allproducts = [...products]
         }else{
            allproducts = [...allproducts,infoProduct]
         }

        

        showHTML();
    }

    
});

rowProduct.addEventListener('click', (e) =>{
    if(e.target.classList.contains('close')){
        const product = e.target.parentElement
        const title = product.querySelector('p').textContent

        allproducts = allproducts.filter(
            product =>product.title !== title
        );
        
        
        showHTML()
    }
});

//Funcion para mostrar HTML

const showHTML = () =>{


    if(!allproducts.length){
        containercardproducts.innerHTML=`
            <p class = "card-aviso">El carrito esta vacio</p>
        `
        
    }

    //Limpiar HTML

    rowProduct.innerHTML='';

    let total = 0;
    let totalProducts = 0;

    allproducts.forEach(product =>{
        const containerProduct = document.createElement('div')
        containerProduct.classList.add('card-product')

        containerProduct.innerHTML = `
        
        
        <div class="info-card-product">
            <span class="cantidad-producto-carrito">${product.quantity}</span>
            <p class="titulo-producto-carrito">${product.title}</p>
            <span class="precio-producto-carrito">${product.precio}</span>
        </div>
            <img class="close" src="/JODIENDA//css/iconos/cruzar.png" alt="">
       
        
        
        
        `;

        rowProduct.append(containerProduct);
        
        total = total + parseInt(product.quantity * product.precio.slice(1));

        totalProducts = totalProducts + product.quantity;
    });

    valorTotal.innerText = `$${total}`;
    countProducts.innerText  = totalProducts;
};