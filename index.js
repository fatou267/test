$(document).ready(function() {
    // Affichage du contenu de la première section au chargement de la page
    $('.accordion-item:first-of-type .accordion-content').show();
    
    // Au clic sur un header
    $('.accordion-header').click(function() {
        // Fermeture des contenus des autres sections
        $('.accordion-content').not($(this).next()).slideUp(300);
        // Ouverture/fermeture du contenu de la section cliquée
        $(this).next('.accordion-content').slideToggle(300);
    });
    
    // Gestion de l'affichage responsive
    $(window).resize(function() {
        if ($(window).width() < 768) {
        $('.accordion-content .row').each(function() {
            $(this).children('.col-md-6').removeClass('col-md-6');
        });
        } else {
        $('.accordion-content .row').each(function() {
            $(this).children().addClass('col-md-6');
        });
    }
  });
});