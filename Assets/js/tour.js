$(document).ready(function() {
    cargarTours();

    function cargarTours() {
        $.ajax({
            url: 'detalles_tour.php',
            method: 'GET',
            success: function(data) {
                $('#tours').html(data);
            }
        });
    }

    $(document).on('click', '.ver-mas', function() {
        var tourId = $(this).data('id');
        $.ajax({
            url: 'detalles_tour.php',
            method: 'GET',
            data: { id: tourId },
            success: function(data) {
                $('#tourDetails').html(data);
                $('#reservarBtn').attr('href', 'reservar.php?id=' + tourId);
                $('#tourModal').modal('show');
            }
        });
    });
});
