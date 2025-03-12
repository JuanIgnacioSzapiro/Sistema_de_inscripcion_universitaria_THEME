jQuery(document).ready(function($) {
    $('.subtitulo-mostrado').click(function() {
        // Toggle clase activa
        $(this).toggleClass('active');
        // Mostrar/ocultar contenido asociado
        $(this).nextUntil('.subtitulo-mostrado').toggle();
    });
});