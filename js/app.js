window.addEventListener('load', ()=> {
    const form = document.querySelector('#Formulario')
    const Usuario = document.getElementById('Usuario')
    const Email = document.getElementById('E-mail')
    const Pass = document.getElementById('Pass')
    const PassConfirma = document.getElementById('PassConfirma')

    form.addEventListener('submit', (e) => {
        e.preventDefault()
        validaCampos()
    })
    
    const validaCampos = ()=> {
        //capturar los valores ingresados por el usuario
        const UsuarioValor = Usuario.value.trim()
        const EmailValor = Email.value.trim()
        const PassValor = Pass.value.trim()
        const PassConfirmaValor = PassConfirma.value.trim();
     
        //validando campo usuario
        //(!usuarioValor) ? console.log('CAMPO VACIO') : console.log(usuarioValor)
        if(!UsuarioValor){
            //console.log('CAMPO VACIO')
            validaFalla(Usuario, 'Campo vacío')
        }else{
            validaOk(Usuario)
        }
    window.addEventListener('load', ()=> {
    const form = document.querySelector('#formulario')
    const usuario = document.getElementById('usuario')
    const email = document.getElementById('email')
    const pass = document.getElementById('pass')
    const passConfirma = document.getElementById('passConfirma')

    form.addEventListener('submit', (e) => {
        e.preventDefault()
        validaCampos()
    })
    
    const validaCampos = ()=> {
        //capturar los valores ingresados por el usuario
        const usuarioValor = usuario.value.trim()
        const emailValor = email.value.trim()
        const passValor = pass.value.trim()
        const passConfirmaValor = passConfirma.value.trim();
     
        //validando campo usuario
        //(!usuarioValor) ? console.log('CAMPO VACIO') : console.log(usuarioValor)
        if(!usuarioValor){
            //console.log('CAMPO VACIO')
            validaFalla(usuario, 'Campo vacío')
        }else{
            validaOk(usuario)
        }

        //validando campo email
        if(!emailValor){
            validaFalla(email, 'Campo vacío')            
        }else if(!validaEmail(emailValor)) {
            validaFalla(email, 'El e-mail no es válido')
        }else {
            validaOk(email)
        }
         //validando campo password
         const er = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,18}$/          
         if(!passValor) {
             validaFalla(pass, 'Campo vacío')
         } else if (passValor.length < 8) {             
             validaFalla(pass, 'Debe tener 8 caracteres cómo mínimo.')
         } else if (!passValor.match(er)) {
             validaFalla(pass, 'Debe tener al menos una may., una min. y un núm.')
         } else {
             validaOk(pass)
         }

         //validando campo password Confirmación
         if(!passConfirmaValor){
             validaFalla(passConfirma, 'Confirme su password')
         } else if(passValor !== passConfirmaValor) {
             validaFalla(passConfirma, 'La password no coincide')
         } else {
             validaOk(passConfirma)
         }


    }

    const validaFalla = (input, msje) => {
        const formControl = input.parentElement
        const aviso = formControl.querySelector('p')
        aviso.innerText = msje

        formControl.className = 'form-control falla'
    }
    const validaOk = (input, msje) => {
        const formControl = input.parentElement
        formControl.className = 'form-control ok'
    }

    const validaEmail = (email) => {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);        
    }

})
        //validando campo email
        if(!EmailValor){
            validaFalla(Email, 'Campo vacío')            
        }else if(!validaEmail(EmailValor)) {
            validaFalla(Email, 'El e-mail no es válido')
        }else {
            validaOk(Email)
        }
         //validando campo password
         const er = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,18}$/          
         if(!PassValor) {
             validaFalla(Pass, 'Campo vacío')
         } else if (PassValor.length < 8) {             
             validaFalla(Pass, 'Debe tener 8 caracteres cómo mínimo.')
         } else if (!PassValor.match(er)) {
             validaFalla(Pass, 'Debe tener al menos una may., una min. y un núm.')
         } else {
             validaOk(Pass)
         }

         //validando campo password Confirmación
         if(!PassConfirmaValor){
             validaFalla(PassConfirma, 'Confirme su password')
         } else if(PassValor !== PassConfirmaValor) {
             validaFalla(PassConfirma, 'La password no coincide')
         } else {
             validaOk(PassConfirma)
         }


    }

    const validaFalla = (input, msje) => {
        const formControl = input.parentElement
        const aviso = formControl.querySelector('p')
        aviso.innerText = msje

        formControl.className = 'Form-control falla'
    }
    const validaOk = (input, msje) => {
        const formControl = input.parentElement
        formControl.className = 'Form-control ok'
    }

    const validaEmail = (Email) => {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(Email);        
    }

})
