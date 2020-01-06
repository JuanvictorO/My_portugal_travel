/**
 *
 * HTML5 Image uploader with Jcrop
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2012, Script Tutorials
 * http://www.script-tutorials.com/
 */

// convert bytes into friendly format
function bytesToSize(bytes) {
    var sizes = ['Bytes', 'KB', 'MB'];
    if (bytes == 0) return 'n/a';
    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
    return (bytes / Math.pow(1024, i)).toFixed(1) + ' ' + sizes[i];
};

// check for selected crop region
function checkForm() {
    if (parseInt($('#h').val())) {
        return true; 
    }
    else{
     $('#selecionar-area').html('<div class="alert alert-warning text-left" role="alert"><strong>ERRO: </strong>Selecione a área da imagem antes de enviar</div>').show();
    return false;

    }
};

// update info by cropping (onChange and onSelect events handler)
function updateInfo(e) {
    $('#x1').val(e.x);
    $('#y1').val(e.y);
    $('#x2').val(e.x2);
    $('#y2').val(e.y2);
    $('#w').val(e.w);
    $('#h').val(e.h);
};

// clear info by cropping (onRelease event handler)
function clearInfo() {
    $('.info #w').val('');
    $('.info #h').val('');
};

function fileSelectHandlerDicasPrincipal() {
    // get selected file
    var oFile = $('#image_file')[0].files[0];

    $('#image_file').hide();

    /**
     * Ocultar todos os erros
     */
    
    $('.error').hide();


    // check for image type (jpg and png are allowed)
    var rFilter = /^(image\/jpeg|image\/png)$/i;
    if (!rFilter.test(oFile.type)) {
        $('.error').html('<strong>ERRO: </strong>Selecione um tipo válido de imagem: png ou jpg/jpeg').show();
        $('#image_file').show();
        return false;
    }

    /**
     * Verificar tamanho do arquivo na hora do UPLOAD
     * Tamanho máximo 3mb
     */
    if (oFile.size > 2000 * 1024) {
        $('.error').html('<strong>ERRO: </strong> O arquivo é grande demais o máximo permitido é: <strong>2 mb</strong>').show();
        $('#image_file').show();
        return false;
    }


    // preview element
    var oImage = document.getElementById('preview');

    // prepare HTML5 FileReader
    var oReader = new FileReader();

  
        oReader.onload = function(e) {

        // e.target.result contains the DataURL which we can use as a source of the image
        oImage.src = e.target.result;
        oImage.onload = function () { // onload event handler

            /**
             * Verificar tamanho máximo do arquivo 
             */
            if (oImage.naturalWidth > 740 || oImage.naturalHeight > 740) {
                 $('.error').html('As dimenções do arquivo devem ser <strong>700x700 (px)</strong> no máximo.<br>As dimenções fornecidas foram: <strong>'+oImage.naturalWidth+'x'+oImage.naturalHeight+' (px)</strong>').show();
                $('#preview').hide();
                 $('#image_file').show();
                return false;
            } 

            if (oImage.naturalWidth < 320 || oImage.naturalHeight < 240) {
                 $('.error').html('As dimenções do arquivo devem ser <strong>320x240 (px)</strong> no mínimo.<br>As dimenções fornecidas foram: <strong>'+oImage.naturalWidth+'x'+oImage.naturalHeight+' (px)</strong>').show();
                $('#preview').hide();
                 $('#image_file').show();
                return false;
            }         
                
            console.log(0);
              

            // display step 2
            $('.step2').fadeIn(500);
            $('.alert-erro').hide();

            // display some basic image info
            var sResultFileSize = bytesToSize(oFile.size);
            $('#filesize').val(sResultFileSize);
            $('#filetype').val(oFile.type);

    

            $('#filedim').val(oImage.naturalWidth + ' x ' + oImage.naturalHeight);

            // Create variables (in this scope) to hold the Jcrop API and image size
            var jcrop_api, boundx, boundy;

            // destroy Jcrop if it is existed
            if (typeof jcrop_api != 'undefined') 
                jcrop_api.destroy();

            // initialize Jcrop
            $('#preview').Jcrop({
                minSize: [10, 10], // min crop size
                aspectRatio : 26 / 9, // keep aspect ratio 1:1
                bgFade: true, // use fade effect
                bgOpacity: .5, // fade opacity
                onChange: updateInfo,
                onSelect: updateInfo,
                onRelease: clearInfo
            }, function(){

                // use the Jcrop API to get the real image size
                var bounds = this.getBounds();
                boundx = bounds[0];
                boundy = bounds[1];

                // Store the Jcrop API in the jcrop_api variable
                jcrop_api = this;
            });
        };
    };

    // read selected file as DataURL
    oReader.readAsDataURL(oFile);
}



function fileSelectHandler() {
    // get selected file
    var oFile = $('#image_file')[0].files[0];

    $('#image_file').hide();

    /**
     * Ocultar todos os erros
     */
    
    $('.error').hide();


    // check for image type (jpg and png are allowed)
    var rFilter = /^(image\/jpeg|image\/png)$/i;
    if (!rFilter.test(oFile.type)) {
        $('.error').html('<strong>ERRO: </strong>Selecione um tipo válido de imagem: png ou jpg/jpeg').show();
        $('#image_file').show();
        return false;
    }

    /**
     * Verificar tamanho do arquivo na hora do UPLOAD
     * Tamanho máximo 3mb
     */
    if (oFile.size > 2000 * 1024) {
        $('.error').html('<strong>ERRO: </strong> O arquivo é grande demais o máximo permitido é: <strong>2 mb</strong>').show();
        $('#image_file').show();
        return false;
    }


    // preview element
    var oImage = document.getElementById('preview');

    // prepare HTML5 FileReader
    var oReader = new FileReader();

  
        oReader.onload = function(e) {

        // e.target.result contains the DataURL which we can use as a source of the image
        oImage.src = e.target.result;
        oImage.onload = function () { // onload event handler

            /**
             * Verificar tamanho máximo do arquivo 
             */
            if (oImage.naturalWidth > 800 || oImage.naturalHeight > 800) {
                 $('.error').html('As dimenções do arquivo devem ser <strong>800x800 (px)</strong> no máximo.<br>As dimenções fornecidas foram: <strong>'+oImage.naturalWidth+'x'+oImage.naturalHeight+' (px)</strong>').show();
                $('#preview').hide();
                 $('#image_file').show();
                return false;
            } 

            if (oImage.naturalWidth < 320 || oImage.naturalHeight < 240) {
                 $('.error').html('As dimenções do arquivo devem ser <strong>320x240 (px)</strong> no mínimo.<br>As dimenções fornecidas foram: <strong>'+oImage.naturalWidth+'x'+oImage.naturalHeight+' (px)</strong>').show();
                $('#preview').hide();
                 $('#image_file').show();
                return false;
            }         

            // display step 2
            $('.step2').fadeIn(500);
            $('.alert-erro').hide();

            // display some basic image info
            var sResultFileSize = bytesToSize(oFile.size);
            $('#filesize').val(sResultFileSize);
            $('#filetype').val(oFile.type);

    

            $('#filedim').val(oImage.naturalWidth + ' x ' + oImage.naturalHeight);

            // Create variables (in this scope) to hold the Jcrop API and image size
            var jcrop_api, boundx, boundy;

            // destroy Jcrop if it is existed
            if (typeof jcrop_api != 'undefined') 
                jcrop_api.destroy();

            // initialize Jcrop
            $('#preview').Jcrop({
                minSize: [10, 10], // min crop size
                aspectRatio : 16 / 9, // keep aspect ratio 1:1
                bgFade: true, // use fade effect
                bgOpacity: .5, // fade opacity
                onChange: updateInfo,
                onSelect: updateInfo,
                onRelease: clearInfo
            }, function(){

                // use the Jcrop API to get the real image size
                var bounds = this.getBounds();
                boundx = bounds[0];
                boundy = bounds[1];

                // Store the Jcrop API in the jcrop_api variable
                jcrop_api = this;
            });
        };
    };

    // read selected file as DataURL
    oReader.readAsDataURL(oFile);
}

