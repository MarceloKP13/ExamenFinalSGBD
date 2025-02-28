document.querySelector('.menu-toggle').addEventListener('click', () => {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
});

let resultado = document.getElementById('resultado');
let operacionActual = '';

function agregarNumero(numero) {
    operacionActual += numero;
    resultado.value = operacionActual;
}

function agregarOperacion(operacion) {
    operacionActual += ' ' + operacion + ' ';
    resultado.value = operacionActual;
}

function agregarPunto() {
    if (!operacionActual.includes('.')) {
        operacionActual += '.';
        resultado.value = operacionActual;
    }
}

function calcular() {
    try {
        let valor = eval(operacionActual);
        resultado.value = valor;
        operacionActual = valor.toString();
    } catch (error) {
        resultado.value = 'Error';
    }
}

function limpiar() {
    operacionActual = '';
    resultado.value = '';
}
