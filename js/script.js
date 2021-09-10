$(document).ready(function() {

    // AGREGAR CLASE ACTIVE A LA PRIMERA CLASE//
    $('.category-list .category-item[category="all"]').addClass('ct-item-active');

    //FILTRADO DE PROPIEDADES
    $('.category-item').click(function() {
        var ctProduct = $(this).attr('category');

        //AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
        $('.category-item').removeClass('ct-item-active');
        $(this).addClass('ct-item-active');

        // OCULTANDO PROPIEDADES
        $('.propiedades').hide();

        // MOSTRAR PRODUCTOS
        $('.propiedades[category="' + ctProduct + '"]').show();
    });

    // MOSTRAR TODOS LOS PRODUCTOS
    $('.category-item[category="all"]').click(function() {
        $('.propiedades').show();
    });
});