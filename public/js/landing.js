document.addEventListener('DOMContentLoaded', () => {
    let c_login = document.getElementById('c_login');
    let c_register = document.getElementById('c_register');
    
    //default
    
    c_login.classList.add('active');
    formulario_registro.style.display = 'none';
    //para el login formulario 
    c_login.addEventListener('click', () => {
        document.getElementById('c_register').classList.remove('active');
        document.getElementById('c_login').classList.add('active');
        formulario_registro.style.display = 'none';
        formulario_login.style.display = 'flex';
       
    });

    //para el register formulario
    c_register.addEventListener('click', () => {
        document.getElementById('c_login').classList.remove('active');
        document.getElementById('c_register').classList.add('active');
        formulario_registro.style.display = 'flex';
        formulario_login.style.display = 'none';
    });
});