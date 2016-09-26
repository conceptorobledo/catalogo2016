<?php
/** 
 	Template Name: Landing Page

 */
 	


get_header(); ?>

<div class="jumbotron">
  <h1 class="vert-offset-top-1">Hello, world!</h1>
    <div class="row">
        <div class="col-sm-6">
            <p>Hero</p>
        </div>
        <div class="col-sm-5">
            <div class="panel">
                <div class="panel-body">
                    <form class="form-horizontal" id="post_form" 
                          action="http://dev.financoop.cl/Rest/ingreso_catalogo" method="post">
                        <div class="form-group">
                            <label for="rut" class="col-sm-4 control-label">Rut:</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="rut" id="rut">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="telefono" class="col-sm-4 control-label">Telefono:</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" name="telefono" id="telefono">
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="correo" class="col-sm-4 control-label">Correo:</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" name="correo" id="correo" >
                            </div>
                          </div>
                        <input type="hidden" value="api_key" name="api_key">
                        <button type="submit" value="Submit" class="btn btn-success">
                            Enviar
                        </button>
                        
                        <script type='text/javascript'>
                                /* attach a submit handler to the form */
                                $("#post_form").submit(function(event) {

                                  /* stop form from submitting normally */
                                  event.preventDefault();

                                  /* get the action attribute from the <form action=""> element */
                                  var $form = $( this ), url = $form.attr( 'action' );

                                   //Send the data using post with element id name and name2*/
                                /*  var posting = $.post( url, {correo: $('#correo').val(),
                                                               telefono: $('#telefono').val(),
                                                               rut: $('#rut').val(),
                                                               api_key: 'api_key'
                                                                });
                                                                */
                                    var formElement = document.getElementById("post_form");

                                    var data = new FormData();
                                    data.append('rut', $('#rut').val());
                                    data.append('correo', $('#correo').val());
                                    data.append('telefono', $('#telefono').val());
                                    data.append('api_key', 'api_key');
                                    console.log(data);
                                    
                                    if (data){
                                        
                                         var settings = {
                                          "async": true,
                                          "crossDomain": true,
                                          "url": "http://dev.financoop.cl/rest/ingreso_catalogo",
                                          "method": "POST",
                                          "headers": {
                                            "cache-control": "no-cache"
                                          },
                                          "processData": false,
                                          "contentType": false,
                                          "mimeType": "multipart/form-data",
                                          "data": data
                                        };

                                        $.ajax(settings).done(function (response) {
                                          console.log(response);
                                        });
                                    }
                                        
                                     /*   $.ajax({
                                            url: url,
                                            type: 'POST',
                                            cache: false,
                                            //data : $(this).serialize(),
                                            data: data ,
                                            processData: false,
                                            contentType: false,
                                            error: function(data) { // je récupère la réponse du fichier PHP
                                                console.log('data');
                                            },
                                            success: function(error){
                                                console.log(error);
                                            }
                                    
                                            //return false; //
                                        }); 
                                    } */
                               

                                });
                                </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    
    <div class="row vert-offset-top-3">
        <div class="col-sm-4">
            Duis maximus libero non efficitur porttitor. Proin sed bibendum tortor. Donec blandit ipsum volutpat, hendrerit turpis a, dapibus leo. Quisque sem ligula, commodo nec enim vitae, ultricies pharetra augue. Fusce euismod, sem ut vulputate consectetur, diam sem euismod urna, eu bibendum nisl odio at ex. Phasellus bibendum ac tortor vel maximus. Donec in feugiat leo.
        </div>
        <div class="col-sm-4">
            Duis maximus libero non efficitur porttitor. Proin sed bibendum tortor. Donec blandit ipsum volutpat, hendrerit turpis a, dapibus leo. Quisque sem ligula, commodo nec enim vitae, ultricies pharetra augue. Fusce euismod, sem ut vulputate consectetur, diam sem euismod urna, eu bibendum nisl odio at ex. Phasellus bibendum ac tortor vel maximus. Donec in feugiat leo.
        </div>
        <div class="col-sm-4">
            Duis maximus libero non efficitur porttitor. Proin sed bibendum tortor. Donec blandit ipsum volutpat, hendrerit turpis a, dapibus leo. Quisque sem ligula, commodo nec enim vitae, ultricies pharetra augue. Fusce euismod, sem ut vulputate consectetur, diam sem euismod urna, eu bibendum nisl odio at ex. Phasellus bibendum ac tortor vel maximus. Donec in feugiat leo.
        </div>
        
        <div class="col-sm-12 vert-offset-top-5">
         Duis maximus libero non efficitur porttitor. Proin sed bibendum tortor. Donec blandit ipsum volutpat, hendrerit turpis a, dapibus leo. Quisque sem ligula, commodo nec enim vitae, ultricies pharetra augue. Fusce euismod, sem ut vulputate consectetur, diam sem euismod urna, eu bibendum nisl odio at ex. Phasellus bibendum ac tortor vel maximus. Donec in feugiat leo.
    
        </div>
    </div>

    
</div>

<?php
get_footer();