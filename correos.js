const nodemailer = require('nodemailer');

document.getElementById('registroForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const nombre = document.getElementById('nombre').value;
    const correo = document.getElementById('correo').value;

    const usuario = {
        nombre: nombre,
        correo: correo
    };

    enviarCorreoRegistro(usuario);
});

async function enviarCorreoRegistro(usuario) {
    try {
        const transporter = nodemailer.createTransport({
            host: 'localhost',
            port: 1025, // Puerto de MailDev
            secure: false
        });

        const mailOptions = {
            from: 'bavidb826@gmail.com', // Reemplaza con tu dirección de correo
            to: usuario.correo,
            subject: 'Bienvenido a nuestro sitio web',
            text: `Hola ${usuario.nombre}, \n\n¡Gracias por registrarte en nuestro sitio web! Esperamos que disfrutes de nuestros servicios. \n\nSaludos, \nEl equipo de nuestro sitio web`
        };

        const info = await transporter.sendMail(mailOptions);
        console.log('Correo enviado:', info.response);
        alert('¡Registro exitoso! Se ha enviado un correo de bienvenida a tu dirección de correo electrónico.');
    } catch (error) {
        console.error('Error al enviar el correo:', error);
        alert('Ocurrió un error al enviar el correo. Por favor, inténtalo nuevamente.');
    }
}