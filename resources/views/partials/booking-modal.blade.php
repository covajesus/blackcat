<!-- Modal de selección de fechas para reservar -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.css">
<style>
#bookingDatesModal input.form-control[readonly] {
    background-color: #fff;
    cursor: pointer;
}
#bookingDatesModal input.form-control:focus {
    border-color: #000;
    box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.15);
    outline: none;
}
/* Calendario flatpickr en negro, a juego con el template */
.flatpickr-calendar {
    z-index: 20050 !important;
}
.flatpickr-day.selected,
.flatpickr-day.selected:hover,
.flatpickr-day.selected:focus,
.flatpickr-day.startRange,
.flatpickr-day.endRange {
    background: #000;
    border-color: #000;
    color: #fff;
}
.flatpickr-day.today {
    border-color: #000;
}
.flatpickr-day.today:hover,
.flatpickr-day.today:focus {
    background: #000;
    border-color: #000;
    color: #fff;
}
.flatpickr-day:hover {
    background: #efefef;
    border-color: #efefef;
}
.flatpickr-months .flatpickr-prev-month:hover svg,
.flatpickr-months .flatpickr-next-month:hover svg {
    fill: #FF823A;
}
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
                    <input type="text" class="form-control" id="bookingCheckIn" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="bookingCheckOut">{{ __('messages.check_out_date') }}</label>
                    <input type="text" class="form-control" id="bookingCheckOut" autocomplete="off">
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

<script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.js"></script>
@if (app()->getLocale() !== 'en')
<script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/l10n/{{ app()->getLocale() }}.js"></script>
@endif
<script>
document.addEventListener('DOMContentLoaded', function () {
    var checkIn = document.getElementById('bookingCheckIn');
    var checkOut = document.getElementById('bookingCheckOut');
    var errorBox = document.getElementById('bookingDatesError');

    var today = new Date();
    today.setHours(0, 0, 0, 0);
    var tomorrow = new Date(today);
    tomorrow.setDate(today.getDate() + 1);

    var fpOptions = {
        dateFormat: 'Y-m-d',      // valor interno que usa el script
        altInput: true,           // campo visible con formato dd/mm/aaaa
        altFormat: 'd/m/Y',
        disableMobile: true,      // usar siempre flatpickr, nunca el calendario nativo
        locale: @if (app()->getLocale() !== 'en') '{{ app()->getLocale() }}' @else 'default' @endif
    };

    var checkOutPicker = flatpickr(checkOut, Object.assign({}, fpOptions, {
        minDate: tomorrow,
        defaultDate: tomorrow
    }));

    flatpickr(checkIn, Object.assign({}, fpOptions, {
        minDate: today,
        defaultDate: today,
        onChange: function (selectedDates) {
            if (!selectedDates.length) return;
            var minOut = new Date(selectedDates[0]);
            minOut.setDate(minOut.getDate() + 1);
            checkOutPicker.set('minDate', minOut);
            if (!checkOutPicker.selectedDates.length || checkOutPicker.selectedDates[0] < minOut) {
                checkOutPicker.setDate(minOut, true);
            }
        }
    }));

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
