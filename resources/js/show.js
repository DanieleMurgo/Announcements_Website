$(document).ready(function() {
  // Nasconde tutte le colonne della tabella ad eccezione di quelle della descrizione
  $("#product-details th.more-info, #product-details td.more-info").hide();

  // Aggiunge un evento al clic della colonna Descrizione
  $("#product-details th.description").click(function() {
    // Nasconde tutte le colonne ad eccezione di quelle della descrizione
    $("#product-details th, #product-details td").not(".description").hide();
    $("#product-details th.description, #product-details td.description").show();
  });

  // Aggiunge un evento al clic della colonna Maggiori informazioni
  $("#product-details th.more-info").click(function() {
    // Nasconde tutte le colonne ad eccezione di quelle delle maggiori informazioni
    $("#product-details th, #product-details td").not(".more-info").hide();
    $("#product-details th.more-info, #product-details td.more-info").show();
  });
})