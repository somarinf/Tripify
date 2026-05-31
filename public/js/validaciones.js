document.addEventListener('DOMContentLoaded', function () {
    const formularios = document.querySelectorAll('.formulario-validacion');

    formularios.forEach(function (formulario) {
    formulario.addEventListener('submit', function (e) {
        let errores = false;

        const campoNombre = formulario.querySelector('input[name="name"]');
        const valorNombre = campoNombre?.value.trim();
        if (!valorNombre) {
            mostrarError(campoNombre, 'Este campo no puede estar vacío');
            errores = true;
        } else {
            limpiarError(campoNombre);
      }

        const campoDestino = formulario.querySelector('input[name="destination"]');
        const valorDestino = campoDestino?.value.trim();
        if (campoDestino && !valorDestino) {
            mostrarError(campoDestino, 'El destino no puede estar vacío');
            errores = true;
        } else if (campoDestino) {
            limpiarError(campoDestino);
        }

        const campoTotal = formulario.querySelector('input[name="total_activity"]');

        if (!campoTotal) {
            console.warn('No se encontró el campo total_activity en el formulario');
        } else {
            const valorTotal = parseFloat(campoTotal.value.trim());

            if (isNaN(valorTotal) || valorTotal < 0) {
                mostrarError(campoTotal, 'El total debe ser un valor numérico válido');
                errores = true;
            } else {
                limpiarError(campoTotal);
            }
        }

        const campoInicio = formulario.querySelector('input[name="start_date"]');
        const campoFin = formulario.querySelector('input[name="end_date"]');
        const fechaInicio = new Date(campoInicio?.value);
        const fechaFin = new Date(campoFin?.value);

        if (!campoInicio?.value || !campoFin?.value) {
            if (!campoInicio?.value) mostrarError(campoInicio, 'La fecha de inicio es obligatoria');
            if (!campoFin?.value) mostrarError(campoFin, 'La fecha de fin es obligatoria');
            errores = true;
        } else if (fechaFin < fechaInicio) {
            mostrarError(campoFin, 'La fecha de fin no puede ser anterior a la de inicio');
            errores = true;
        } else {
            limpiarError(campoInicio);
            limpiarError(campoFin);
      }

        if (errores) {
            e.preventDefault();
        }
        });
    });

    function mostrarError(input, mensaje) {
        if (!input) return;
        input.classList.add('is-invalid');
        let errorDiv = input.parentNode.querySelector('.invalid-feedback');
        if (!errorDiv) {
            errorDiv = document.createElement('div');
            errorDiv.className = 'invalid-feedback';
            input.parentNode.appendChild(errorDiv);
        }
        errorDiv.textContent = mensaje;
        }

        function limpiarError(input) {
            if (!input) return;
            input.classList.remove('is-invalid');
            const errorDiv = input.parentNode.querySelector('.invalid-feedback');
        if (errorDiv) errorDiv.remove();
    }
    });
