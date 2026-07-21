<!-- Modal de selección de fechas para reservar -->
<style>
#bookingLoadingOverlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.85);
    z-index: 20000;
    text-align: center;
}
#bookingLoadingOverlay .booking-spinner {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
#bookingLoadingOverlay svg.spinner-container {
    animation: booking-rotate 2s linear infinite;
}
#bookingLoadingOverlay svg.spinner-container .path {
    stroke: #FF823A;
    stroke-linecap: round;
    animation: booking-dash 1.5s ease-in-out infinite;
}
#bookingLoadingOverlay .booking-spinner-text {
    margin-top: 15px;
    color: #FF823A;
    font-weight: bold;
    letter-spacing: 1px;
}
@keyframes booking-rotate {
    100% { transform: rotate(360deg); }
}
@keyframes booking-dash {
    0% { stroke-dasharray: 1, 150; stroke-dashoffset: 0; }
    50% { stroke-dasharray: 90, 150; stroke-dashoffset: -35; }
    100% { stroke-dasharray: 90, 150; stroke-dashoffset: -124; }
}
</style>

<!-- Overlay de carga (mismo estilo que el motor fnsbooking) -->
<div id="bookingLoadingOverlay">
    <div class="booking-spinner">
        <svg class="spinner-container" width="60" height="60" viewBox="0 0 44 44">
            <circle class="path" cx="22" cy="22" r="20" fill="none" stroke-width="4"></circle>
        </svg>
        <div class="booking-spinner-text">{{ __('messages.reserve_with_us') }}...</div>
    </div>
</div>

<div class="modal fade" id="bookingDatesModal" tabindex="-1" role="dialog" aria-labelledby="bookingDatesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingDatesModalLabel">{{ __('messages.reserve_with_us') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="bookingCheckIn">{{ __('messages.check_in_date') }}</label>
                    <input type="date" class="form-control" id="bookingCheckIn">
                </div>
                <div class="form-group">
                    <label for="bookingCheckOut">{{ __('messages.check_out_date') }}</label>
                    <input type="date" class="form-control" id="bookingCheckOut">
                </div>
                <div class="alert alert-danger d-none" id="bookingDatesError">{{ __('messages.booking_form_error') }}</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-block" id="bookingDatesSubmit" style="background-color: #FF823A; border-color: #FF823A;">
                    <i class="fa fa-calendar"></i>
                    {{ __('messages.reserve') }}
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var checkIn = document.getElementById('bookingCheckIn');
    var checkOut = document.getElementById('bookingCheckOut');
    var errorBox = document.getElementById('bookingDatesError');

    function toInputValue(date) {
        var m = ('0' + (date.getMonth() + 1)).slice(-2);
        var d = ('0' + date.getDate()).slice(-2);
        return date.getFullYear() + '-' + m + '-' + d;
    }

    var today = new Date();
    var tomorrow = new Date();
    tomorrow.setDate(today.getDate() + 1);

    checkIn.min = toInputValue(today);
    checkIn.value = toInputValue(today);
    checkOut.min = toInputValue(tomorrow);
    checkOut.value = toInputValue(tomorrow);

    checkIn.addEventListener('change', function () {
        if (!checkIn.value) return;
        var minOut = new Date(checkIn.value + 'T00:00:00');
        minOut.setDate(minOut.getDate() + 1);
        checkOut.min = toInputValue(minOut);
        if (!checkOut.value || checkOut.value < checkOut.min) {
            checkOut.value = checkOut.min;
        }
    });

    document.getElementById('bookingDatesSubmit').addEventListener('click', function () {
        if (!checkIn.value || !checkOut.value || checkOut.value <= checkIn.value) {
            errorBox.classList.remove('d-none');
            return;
        }
        errorBox.classList.add('d-none');

        // fnsbooking espera fechas en formato dd/mm/aaaa
        function toFnsFormat(value) {
            var parts = value.split('-');
            return parts[2] + '/' + parts[1] + '/' + parts[0];
        }

        // Misma lógica de "release" que usa el buscador del motor fnsbooking:
        // 500 por defecto; si la entrada es en menos de 5 días, horas restantes.
        var now = new Date();
        var entradaDate = new Date(checkIn.value + 'T00:00:00');
        var release = 500;
        var numDias = Math.round((entradaDate.getTime() - now.getTime()) / 86400000);
        if (numDias < 0) numDias = 0;
        if (numDias < 5) release = numDias * 24 + (24 - now.getHours());

        var url = 'https://reservas.fnsbooking.com/busqueda.php'
            + '?accion=D&release=' + release
            + '&datos=' + encodeURIComponent('--7402--7402------------')
            + '&idioma={{ app()->getLocale() }}'
            + '&fecha_entrada=&fecha_salida=&orden=&pfe=2326&currency=&oferta_id='
            + '&tipo_habitacion_id=&bookingonline=&ocupacion=&codigoexclusivo=&mejortarifa=&ciudad='
            + '&entrada=' + encodeURIComponent(toFnsFormat(checkIn.value))
            + '&salida=' + encodeURIComponent(toFnsFormat(checkOut.value));

        // Cerrar el modal y mostrar el spinner mientras carga el motor de reservas
        if (window.jQuery) {
            jQuery('#bookingDatesModal').modal('hide');
        }
        document.getElementById('bookingLoadingOverlay').style.display = 'block';

        window.location.href = url;
    });
});
</script>
