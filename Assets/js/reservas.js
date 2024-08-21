function verInfo(idReserva) {
    $.ajax({
        url: 'detalles_reserva.php',
        method: 'GET',
        data: { id: idReserva },
        success: function(data) {
            $('#reservaDetails').html(data);
            $('#reservaModal').modal('show');
        }
    });
}