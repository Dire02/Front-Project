// copied from <https://www.javascripttutorial.net/javascript-dom/javascript-toggle-password-visibility/>

const togglePassword = document.querySelector('#IcoPassID');
const password = document.querySelector('#password');


togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('fa-eye-slash');
});