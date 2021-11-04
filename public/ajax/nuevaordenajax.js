function getIdMenu() {
   $(document).on('click', '#getHam', function () {
         //alert('Hamburguesas');
         $.ajax({
            type: 'GET',
            url: 'index.php?url=Dashboard/getMenuComplet',
            data: {
               menu_id: '1'
            },
            success: function (data) {
               // console.log(data);
               if (data != "") {
                  var validar = data.split("|");
                  if (validar[0] == 0) {
                     alert("ok");
                  }
               }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
               //console.log(XMLHttpRequest);
               var error;
               if (XMLHttpRequest.status === 404) error = "Pagina no existe " + XMLHttpRequest.status; // display some page not found error 
               if (XMLHttpRequest.status === 500) error = "Error del Servidor " + XMLHttpRequest.status; // display some server error 
               else error = XMLHttpRequest.responseText;
            }
         });
         return false;
   });

   $(document).on('click', '#getEns', function () {
      alert('Ensalada ok');
   });
   $(document).on('click', '#getCal', function () {
      alert('caldos ok');
   });
   $(document).on('click', '#getCor', function () {
      alert('Cortes ok');
   });
   $(document).on('click', '#getTac', function () {
      alert('Tacos ok');
   });
   $(document).on('click', '#getPos', function () {
      alert('postres ok');
   });
   $(document).on('click', '#getRef', function () {
      alert('Refrescos ok');
   });
   $(document).on('click', '#getBar', function () {
      alert('Bar ok');
   });
};