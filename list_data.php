<!DOCTYPE html>  
 <html>  
      <head>
          <!-- Global site tag (gtag.js) - Google Analytics -->
          <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113778234-2"></script>
          <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-113778234-2');
          </script>

          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">

           <title>NFQ academy 2018 | Užsakymų sąrašas</title>

          <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>

          <script type="text/javascript" src="DataTables/datatables.min.js"></script>

      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h2 align="center">Užsakymų sąrašas</h2>
                <h3 align="center"><a href="index.php">Pagrindinis puslapis</a></h3><br />
                <table id="data-table" class="table table-bordered">  
                     <thead>  
                          <tr>  
                              <th>Produktas</th>
                              <th>Užsakovo vardas</th>
                              <th>Telefono numeris</th>
                              <th>Elektroninis paštas</th>
                              <th>Miestas</th>
                              <th>Užsakymo data</th>
                          </tr>
                     </thead>  
                </table>  
           </div>  
      </body>  
 </html>
<script>
$(document).ready(function(){
      $('#data-table').DataTable({
           "ajax"     :     "order_data.json",
           "columns"     :     [
               {     "data"     :     "product"     },
               {     "data"     :     "name"},
               {     "data"     :     "phone"},
               {     "data"     :     "email"},
               {     "data"     :     "city"},
               {     "data"     :     "date"}
               ],

          language: {
              "sEmptyTable":      "Lentelėje nėra duomenų",
              "sInfo":            "Rodomi įrašai nuo _START_ iki _END_ iš _TOTAL_ įrašų",
              "sInfoEmpty":       "Rodomi įrašai nuo 0 iki 0 iš 0",
              "sInfoFiltered":    "(atrinkta iš _MAX_ įrašų)",
              "sInfoPostFix":     "",
              "sInfoThousands":   " ",
              "sLengthMenu":      "Rodyti _MENU_ įrašus",
              "sLoadingRecords":  "Įkeliama...",
              "sProcessing":      "Apdorojama...",
              "sSearch":          "Ieškoti:",
              "sThousands":       " ",
              "sUrl":             "",
              "sZeroRecords":     "Įrašų nerasta",

              "oPaginate": {
                  "sFirst": "Pirmas",
                  "sPrevious": "Ankstesnis",
                  "sNext": "Tolimesnis",
                  "sLast": "Paskutinis"
              }
          }

      });
 });
 </script>  