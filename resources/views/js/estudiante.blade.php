{{-- <script> --}}
@section('document')

    $("#lim").on("click", function() {
        limpiar();
    });

    $("#bs_cedula").on("keyup", function() {
        cargar();
    });

    $("#bs_nombre").on("keyup", function() {
        cargar();
    });

    $("#bs_apellido").on("keyup", function() {
        cargar();
    });

    $("#bs_sex").on("change", function() {
        cargar();
    });

    {{-- formulario de estudiante --}}

    $("#cedula").on("keyup", function() {
        val_estudiante('no');
    });

    $("#nombre").on("keyup", function() {
        val_estudiante('no');
    });

    $("#apellido").on("keyup", function() {
        val_estudiante('no');
    });

    $("#sex").on("change", function() {
        val_estudiante('no');
    });

    $("#telefono").on("keyup", function() {
        val_estudiante('no');
    });

    $("#state").on("change", function() {
        let state = $("#state").val();
        combo("municipality", "state", state, "municipality", 0, "municipio", "municipalitys", 2);
        val_estudiante('no');
    });

    $("#municipality").on("change", function() {
        let municipality = $("#municipality").val();
        combo("parroquia", "municipality", municipality, "parroquia", 0, "parroquia", "parroquias", 2);
        val_estudiante('no');
    });

    $("#parroquia").on("change", function() {
        val_estudiante('no');
    });

    $("#direccion").on("keyup", function() {
        val_estudiante('no');
    });

    $("#fecha_nacimiento").on("change", function() {
        val_estudiante('no');
    });

    $("#lugar_nacimiento").on("keyup", function() {
        val_estudiante('no');
    });

    $("#descripcion").on("keyup", function() {
        val_estudiante('no');
    });

    {{-- formulario de salud --}}

    $("#tipoa").on("change", function() {
        combo_aler();
    });

    $("#tipod").on("change", function() {
        combo_dis();
    });

    {{-- formulario de representante --}}

    $("#state_r").on("change", function() {
        let state = $("#state_r").val();
        combo("municipality", "state", state, "municipality_r", 0, "municipio", "municipalitys", 2);
        {{-- val_representante(); --}}
    });

    $("#municipality_r").on("change", function() {
        let municipality = $("#municipality_r").val();
        combo("parroquia", "municipality", municipality, "parroquia_r", 0, "parroquia", "parroquias", 2);
        {{-- val_representante(); --}}
    });

@endsection

@section('url_registro') url = "{{ route('Estudiante.store') }}"; @endsection

@section('url_edicion') url = "{{ route('Estudiante.update') }}"; @endsection

@section('select') limpiar(); @endsection

@section('registro') limpiar(); @endsection

@section('edicion')

    $('#nombre2').val($('#nombre').val());
    $('#apellido2').val($('#apellido').val());
    $('#sex2').val($('#sex').val());
    $('#telefono2').val($('#telefono').val());
    $('#parentesco2').val($('#parentesco').val());
    $('#municipality2').val($('#municipality').val());
    $('#parroquia2').val($('#parroquia').val());
    $('#direccion2').val($('#direccion').val());
    $('#fecha_nacimiento2').val($('#fecha_nacimiento').val());
    $('#lugar_nacimiento2').val($('#lugar_nacimiento').val());
    $('#descripcion2').val($('#descripcion').val());
    $('#representante2').val($('#representante').val());
    $('#parentesco2').val($('#parentesco').val());


 @endsection

@section('delete') url: "{{url('Estudiante')}}"+"/"+id, @endsection

@section('cargar') url: "{{route('Estudiante.cargar')}}", @endsection

@section('rellenar_url') url: "{{route('Estudiante.mostrar')}}", @endsection

@section('rellenar')

    $("#cedula").val(valores.cedula);
    $("#nombre").val(valores.nombre);
    $("#nombre2").val(valores.nombre);
    $("#apellido").val(valores.apellido);
    $("#apellido2").val(valores.apellido);
    $("#sex").val(valores.sex);
    $("#sex2").val(valores.sex);
    $("#telefono").val(valores.telefono);
    $("#telefono2").val(valores.telefono);
    $("#state").val(valores.state);
    combo("municipality", "state", valores.state, "municipality", valores.municipality, "municipio", "municipalitys", 1);
    $("#municipality2").val(valores.municipality);
    combo("parroquia", "municipality", valores.municipality, "parroquia", valores.parroquia, "parroquia", "parroquias", 1);
    $("#parroquia2").val(valores.parroquia);
    $("#direccion").val(valores.direccion);
    $("#direccion2").val(valores.direccion);
    $("#fecha_nacimiento").val(valores.fecha_nacimiento);
    $("#fecha_nacimiento2").val(valores.fecha_nacimiento);
    $("#lugar_nacimiento").val(valores.lugar_nacimiento);
    $("#lugar_nacimiento2").val(valores.lugar_nacimiento);
    $("#descripcion2").val(valores.descripcion);
    $("#ocupacion_laboral").val(valores.ocupacion_laboral);
    $("#persona").val(valores.persona);

@endsection

@section('editar')

    $("#cedula").attr("readonly", "readonly");
    $("#nombre").removeAttr("readonly");
    $("#apellido").removeAttr("readonly");
    $("#sex").removeAttr("disabled");
    $("#telefono").removeAttr("readonly");
    $("#ocupacion_laboral").removeAttr("disabled");
    $("#state").removeAttr("disabled");
    $("#municipality").removeAttr("disabled");
    $("#parroquia").removeAttr("disabled");
    $("#direccion").removeAttr("readonly");

@endsection

@section('mostrar')

    $("#cedula").attr("readonly", "readonly");
    $("#nombre").attr("readonly", "readonly");
    $("#apellido").attr("readonly", "readonly");
    $("#sex").attr("disabled", "disabled");
    $("#telefono").attr("readonly", "readonly");
    $("#ocupacion_laboral").attr("disabled", "disabled");
    $("#state").attr("disabled", "disabled");
    $("#municipality").attr("disabled", "disabled");
    $("#parroquia").attr("disabled", "disabled");
    $("#direccion").attr("readonly", "readonly");

@endsection

@section('funciones')

    function estudiante() {
        $("#button_estudiante").attr("class", "btn btn-success");
        $("#button_salud").attr("class", "btn btn-secondary");
        $("#button_representante").attr("class", "btn btn-secondary");
        $('#salud').fadeOut();
        $('#representant').fadeOut();
        $('#estudiante').fadeIn();
        $("#anterior").attr("class", "btn btn-secondary");
        $("#anterior").attr("disabled", "disabled");
        $("#siguiente").attr("class", "btn btn-primary");
        $("#siguiente").removeAttr("disabled");
        $("#ventana").val('1');
        val_estudiante('si');
    }

    function salud() {
        $("#button_estudiante").attr("class", "btn btn-primary");
        $("#button_salud").attr("class", "btn btn-success");
        $("#button_representante").attr("class", "btn btn-primary");
        $('#representant').fadeOut();
        $('#estudiante').fadeOut();
        $('#salud').fadeIn();
        $("#anterior").attr("class", "btn btn-primary");
        $("#anterior").removeAttr("disabled");
        $("#siguiente").attr("class", "btn btn-primary");
        $("#siguiente").removeAttr("disabled");
        $("#ventana").val('2');
        val_estudiante('si');
    }

    function representantes() {
        $("#button_estudiante").attr("class", "btn btn-primary");
        $("#button_salud").attr("class", "btn btn-primary");
        $("#button_representante").attr("class", "btn btn-success");
        $('#salud').fadeOut();
        $('#estudiante').fadeOut();
        $('#representant').fadeIn();
        $("#anterior").attr("class", "btn btn-primary");
        $("#anterior").removeAttr("disabled");
        $("#siguiente").attr("class", "btn btn-secondary");
        $("#siguiente").attr("disabled", "disabled");
        $("#ventana").val('3');
        val_estudiante('si');
    }

    function ante() {
        var ventana = $('#ventana').val();

        if (ventana == 2) {

            estudiante();

        }else if(ventana == 3){

            salud();

        }

    }

    function sigui() {
        var ventana = $('#ventana').val();

        if (ventana == 1) {

            salud();

        }else if(ventana == 2){

            representantes();

        }

    }

    function clear() {
        clear_a();
        clear_d();
    }

    function clear_a() {
        $.ajax({
            type: "POST",
            url:"{{route('Estudiante.clear_a')}}",
            success: function(valores) {
                $('#list_a').html('');
                $('#clear_a').fadeOut();
                combo_aler();
            },
            error: function(xhr, textStatus, errorMessage) {
                error(xhr, textStatus, errorMessage);
            }
        });
        return false;
    }

    function clear_d() {
        $.ajax({
            type: "POST",
            url:"{{route('Estudiante.clear_d')}}",
            success: function(valores) {
                $('#list_d').html('');
                $('#clear_d').fadeOut();
                combo_dis();
            },
            error: function(xhr, textStatus, errorMessage) {
                error(xhr, textStatus, errorMessage);
            }
        });
        return false;
    }

    function quitar_a(id) {
        $.ajax({
            type: "POST",
            url:"{{route('Estudiante.quitar_a')}}",
            data: "id="+id,
            success: function(valores) {
                combo_aler();
            },
            error: function(xhr, textStatus, errorMessage) {
                error(xhr, textStatus, errorMessage);
            }
        });
        return false;
    }

    function quitar_d(id) {
        $.ajax({
            type: "POST",
            url:"{{route('Estudiante.quitar_d')}}",
            data: "id="+id,
            success: function(valores) {
                combo_dis();
            },
            error: function(xhr, textStatus, errorMessage) {
                error(xhr, textStatus, errorMessage);
            }
        });
        return false;
    }

    function alergia() {
        var alergia = $('#alergia').val();
        $.ajax({
            type: "POST",
            url:"{{route('Estudiante.alergias')}}",
            data: "alergia="+alergia,
            beforeSend: function() {
                $("#alergia").attr("readonly", "readonly");
            },
            success: function(valores) {
                $("#alergia").removeAttr("readonly");
                if(valores.num > 0){
                    $("#clear_a").fadeIn();
                    $("#list_a").html(valores.alergias);
                    $("#aler"+valores.id).slideDown();
                }else{
                    $("#clear_a").fadeOut();
                    $("#list_a").html("");
                }
                combo_aler();
            },
            error: function(xhr, textStatus, errorMessage) {
                $("#alergia").removeAttr("readonly");
                error(xhr, textStatus, errorMessage);
            }
        });
        return false;
    }

    function discapacidad() {
        var discapacidad = $('#discapacidad').val();
        $.ajax({
            type: "POST",
            url:"{{route('Estudiante.discapacidades')}}",
            data: "discapacidad="+discapacidad,
            beforeSend: function() {
                $("#discapacidad").attr("readonly", "readonly");
            },
            success: function(valores) {
                $("#discapacidad").removeAttr("readonly");
                if(valores.num > 0){
                    $("#clear_d").fadeIn();
                    $("#list_d").html(valores.discapacidades);
                    $("#dis"+valores.id).slideDown();
                }else{
                    $("#list_d").html("");
                }
                combo_dis();
            },
            error: function(xhr, textStatus, errorMessage) {
                $("#discapacidad").removeAttr("readonly");
                error(xhr, textStatus, errorMessage);
            }
        });
        return false;
    }

    function combobox(tabla,atributo,tipo) {
        if(tipo!=null){
            $.ajax({
                type: "POST",
                url:"{{route('Estudiante.combobox')}}",
                data: "tabla="+tabla+"&atributo="+atributo+"&tipo="+tipo,
                beforeSend: function() {
                    $("#alergia").attr("readonly", "readonly");
                    $("#discapacidad").attr("readonly", "readonly");
                    $("#tipoa").attr("disabled", "disabled");
                    $("#tipod").attr("disabled", "disabled");
                },
                success: function(valores) {
                    $("#alergia").removeAttr("readonly");
                    $("#discapacidad").removeAttr("readonly");
                    $("#tipoa").removeAttr("disabled");
                    $("#tipod").removeAttr("disabled");
                    if(tabla == "alergia"){
                        $("#alergia").html(valores.select);
                    }else{
                        $("#discapacidad").html(valores.select);
                    }
                },
                error: function(xhr, textStatus, errorMessage) {
                    $("#alergia").removeAttr("readonly");
                    $("#discapacidad").removeAttr("readonly");
                    $("#tipoa").removeAttr("disabled");
                    $("#tipod").removeAttr("disabled");
                    error(xhr, textStatus, errorMessage);
                }
            });
        }
        return false;
    }

    function combo_aler(){
        var tipo = $("#tipoa").val();
        combobox("alergia", "alergias",tipo);
    }

    function combo_dis(){
        var tipo = $("#tipod").val();
        combobox("discapacidad", "discapacidades",tipo);
    }

    function representante() {
        var cedula = $('#cedula_r').val();
        $.ajax({
            type: "POST",
            url:"{{route('Estudiante.representante')}}",
            data: "cedula="+cedula,
            beforeSend: function() {
                $("#cedula_r").attr("readonly", "readonly");
                $("#representante").val('');
                $("#nombre_r").val('');
                $("#apellido_r").val('');
                $("#sex_r").val('null');
                $("#telefono_r").val('');
                $("#ocupacion_laboral").val('null');
                $("#parentesco").val('null');
                $("#state_r").val('null');
                $("#municipality_r").html('<option value="null" disabled selected>Seleccione un municipio</option>');
                $("#parroquia_r").html('<option value="null" disabled selected>Seleccione un parroquia</option>');
                $("#direccion_r").val('');
            },
            success: function(valores) {
                if(valores.num_p > 0){
                    $("#repre").fadeOut();
                    $("#persona").val(valores.persona);
                    $("#nombre_r").val(valores.nombre);
                    $("#apellido_r").val(valores.apellido);
                    $("#sex_r").val(valores.sex);
                    $("#telefono_r").val(valores.telefono);
                    $("#state_r").val(valores.state);
                    combo("municipality","state",valores.state,"municipality_r",valores.municipality,"municipio","municipalitys",1);
                    combo("parroquia","municipality",valores.municipality,"parroquia_r",valores.parroquia,"parroquia","parroquia",1);
                    $("#direccion_r").val(valores.direccion);
                    $("#nombre_r").attr("readonly", "readonly");
                    $("#apellido_r").attr("readonly", "readonly");
                    $("#sex_r").attr("disabled", "disabled");
                    $("#telefono_r").attr("readonly", "readonly");
                    $("#state_r").attr("disabled", "disabled");
                    $("#municipality_r").attr("disabled", "disabled");
                    $("#parroquia_r").attr("disabled", "disabled");
                    $("#direccion_r").attr("readonly", "readonly");

                    if(valores.num_r > 0){
                        $("#representante").val(valores.id);
                        $("#ocupacion_laboral").val(valores.ocupacion_laboral);
                        $("#ocupacion_laboral").attr("disabled", "disabled");
                    }else{
                        $("#representante").val("");
                        $("#ocupacion_laboral").val("null");
                        $("#ocupacion_laboral").removeAttr("disabled");
                    }

                    $("#cance").fadeIn();
                }else{
                    $("#cance").fadeOut();
                    $("#cedula_r").removeAttr("readonly");
                    $("#cedula_r").removeAttr("readonly");
                    $("#nombre_r").removeAttr("readonly");
                    $("#apellido_r").removeAttr("readonly");
                    $("#sex_r").removeAttr("disabled");
                    $("#telefono_r").removeAttr("readonly");
                    $("#ocupacion_laboral").removeAttr("disabled");
                    $("#state_r").removeAttr("disabled");
                    $("#municipality_r").removeAttr("disabled");
                    $("#parroquia_r").removeAttr("disabled");
                    $("#direccion_r").removeAttr("readonly");
                    $("#persona").val("");
                    $("#representante").val("");
                    $("#repre").fadeIn();
                }
                $("#parentesco").removeAttr("readonly");
                $("#formu").slideDown();
            },
            error: function(xhr, textStatus, errorMessage) {
                $("#cedula_r").removeAttr("readonly");
                error(xhr, textStatus, errorMessage);
            }
        });
        return false;
    }

    function cancelar() {
        $("#cance").fadeOut();
        $("#repre").fadeIn();
        $("#formu").slideUp();
        $("#cedula_r").removeAttr("readonly");
        $("#representante").val('');
        $("#nombre_r").val('');
        $("#apellido_r").val('');
        $("#sex_r").val('null');
        $("#telefono_r").val('');
        $("#ocupacion_laboral").val('null');
        $("#parentesco").val('null');
        $("#state_r").val('null');
        $("#municipality_r").html('<option value="null" disabled selected>Seleccione un municipio</option>');
        $("#parroquia_r").html('<option value="null" disabled selected>Seleccione un parroquia</option>');
        $("#direccion_r").val('');
    }

    function limpiar() {
        clear();
        estudiante();
        $("#siguiente").attr("class", "btn btn-secondary");
        $("#siguiente").attr("disabled", "disabled");
        $("#button_salud").attr("class", "btn btn-secondary");
        $("#button_salud").attr("disabled", "disabled");
        $("#button_representante").attr("class", "btn btn-secondary");
        $("#button_representante").attr("disabled", "disabled");
        $('#municipality').html('<option value="null" disabled selected>Seleccione un municipio</option>');
        $('#municipality_r').html('<option value="null" disabled selected>Seleccione un municipio</option>');
        $('#parroquia_r').html('<option value="null" disabled selected>Seleccione un parroquia</option>');
        $('#alergia').html('<option value="null" disabled selected>Seleccione una alergia</option>');
        $('#discapacidad').html('<option value="null" disabled selected>Seleccione una discapacidad</option>');
        $('#list_a').html('');
        $('#list_d').html('');
        $('#formu').fadeOut();
        $('#cance').fadeOut();
        $('#repre').fadeIn();
        $("#cedula_r").removeAttr("readonly");
        $("#nombre_r").removeAttr("readonly");
        $("#apellido_r").removeAttr("readonly");
        $("#sex_r").removeAttr("disabled");
        $("#telefono_r").removeAttr("readonly");
        $("#ocupacion_laboral").removeAttr("disabled");
        $("#state_r").removeAttr("disabled");
        $("#municipality_r").removeAttr("disabled");
        $("#parroquia_r").removeAttr("disabled");
        $("#direccion_r").removeAttr("readonly");
        $("#tipoa").removeAttr("readonly");
        $("#tipod").removeAttr("readonly");
        $("#alergia").removeAttr("readonly");
        $("#discapacidad").removeAttr("readonly");
        $("#discapacidad").removeAttr("readonly");
        val_estudiante();

    }

    function validacion_estudiante(val){
        let boo = true;
        let message = ['validar'];
        let pro = $("#pro").val();
        let cedula = $("#cedula").val();
        let nombre = $("#nombre").val(); let nombre2 = $("#nombre2").val();
        let apellido = $("#apellido").val(); let apellido2 = $("#apellido2").val();
        let sex = $("#sex").val(); let sex2 = $("#sex2").val();
        let fecha_nacimiento = $("#fecha_nacimiento").val(); let fecha_nacimiento2 = $("#fecha_nacimiento2").val();
        let lugar_nacimiento = $("#lugar_nacimiento").val(); let lugar_nacimiento2 = $("#lugar_nacimiento2").val();
        let telefono = $("#telefono").val(); let telefono2 = $("#telefono2").val();
        let state = $("#state").val(); let state2 = $("#state2").val();
        let municipality = $("#municipality").val(); let municipality2 = $("#municipality2").val();
        let parroquia = $("#parroquia").val(); let parroquia2 = $("#parroquia2").val();
        let direccion = $("#direccion").val(); let direccion2 = $("#direccion2").val();
        let descripcion = $("#descripcion").val(); let descripcion2 = $("#descripcion2").val();
        let i = 0; let ced = 0; let nom = 0; let ape = 0; let se = 0; let tel = 0; let sta = 0; let mun = 0; let par = 0; let dir = 0; let des = 0; let fec = 0; let lug = 0;
        
        if(pro == 'Registro'){
            if(cedula == ""){
                i++; ced++;
                message.push('El campo cedula es obligatorio.');

            }else if(cedula.length > 8){
                i++; ced++;
                message.push('El campo cedula no debe contener más de 8 caracteres.');

            }else if(cedula.length < 7){
                i++; ced++;
                message.push('El campo cedula no debe contener menos de 7 caracteres.');

            }
        }

        if(nombre == ""){
            i++; nom++;
            $("#nombre").attr('class', 'form-control border border-danger');
            message.push('El campo nombre es obligatorio.');

        }else if(nombre.length > 255){
            i++; nom++;
            $("#nombre").attr('class', 'form-control border border-danger');
            message.push('El campo nombre no debe contener más de 255 caracteres.');

        }else if(nombre.length < 3){
            i++; nom++;
            $("#nombre").attr('class', 'form-control border border-danger');
            message.push('El campo nombre debe contener al menos 03 caracteres.');

        }

        if(apellido == ""){
            i++; ape++;
            $("#apellido").attr('class', 'form-control border border-danger');
            message.push('El campo apellido es obligatorio.');

        }else if(apellido.length > 255){
            i++; ape++;
            $("#apellido").attr('class', 'form-control border border-danger');
            message.push('El campo apellido no debe contener más de 255 caracteres.');

        }else if(apellido.length < 3){
            i++; ape++;
            $("#apellido").attr('class', 'form-control border border-danger');
            message.push('El campo apellido debe contener al menos 03 caracteres.');

        }

        if(sex == "" || sex == "null"){
            i++; se++;
            $("#sex").attr('class', 'form-control border border-danger');
            message.push('El campo sexo es obligatorio.');

        }

        if(fecha_nacimiento == "" || fecha_nacimiento == "null"){
            i++; fec++;
            $("#fecha_nacimiento").attr('class', 'form-control border border-danger');
            message.push('El campo fecha de nacimiento es obligatorio.');

        }

        if(lugar_nacimiento == "" || lugar_nacimiento == "null"){
            i++; lug++;
            $("#lugar_nacimiento").attr('class', 'form-control border border-danger');
            message.push('El campo lugar de nacimiento es obligatorio.');

        }

        if(telefono == ""){
            i++; tel++;
            $("#telefono").attr('class', 'form-control border border-danger');
            message.push('El campo telefono es obligatorio.');

        }else if(telefono.length != 11){
            i++; tel++;
            $("#telefono").attr('class', 'form-control border border-danger');
            message.push('El campo telefono no debe contener más de 11 caracteres.');

        }

        if(state == "" || state == "null"){
            i++; sta++;
            $("#state").attr('class', 'form-control border border-danger');
            message.push('El campo estado es obligatorio.');

        }

        if(municipality == "" || municipality == "null"){
            i++; mun++;
            $("#municipality").attr('class', 'form-control border border-danger');
            message.push('El campo municipio es obligatorio.');

        }

        if(parroquia == "" || parroquia == "null"){
            i++; par++;
            $("#parroquia").attr('class', 'form-control border border-danger');
            message.push('El campo parroquia es obligatorio.');

        }

        if(direccion == ""){
            i++; dir++;
            $("#direccion").attr('class', 'form-control border border-danger');
            message.push('El campo dirección es obligatorio.');

        }
        
        if(descripcion == ""){
            i++; des++;
            $("#descripcion").attr('class', 'form-control border border-danger');
            message.push('El campo descripción es obligatorio.');

        }
        

        if(i > 0 && val == "si"){
            let u = 0;
            if(pro == 'Registro'){

                if (ced > 0) {
                    u++;
                    $("#cedula").val('');
                    $("#cedula").attr('class', 'form-control border border-danger');
                    $("#cedula_e").html(message[u]);
                }

                if (nom > 0) {
                    u++;
                    $("#nombre").val('');
                    $("#nombre").attr('class', 'form-control border border-danger');
                    $("#nombre_e").html(message[u]);
                }

                if (ape > 0) {
                    u++;
                    $("#apellido").val('');
                    $("#apellido").attr('class', 'form-control border border-danger');
                    $("#apellido_e").html(message[u]);
                }

                if (se > 0) {
                    u++;
                    $("#sex").val('null');
                    $("#sex").attr('class', 'form-control border border-danger');
                    $("#sex_e").html(message[u]);
                }

                if (fec > 0) {
                    u++;
                    $("#fecha_nacimiento").val('null');
                    $("#fecha_nacimiento").attr('class', 'form-control border border-danger');
                    $("#fecha_nacimiento_e").html(message[u]);
                }

                if (lug > 0) {
                    u++;
                    $("#lugar_nacimiento").val('null');
                    $("#lugar_nacimiento").attr('class', 'form-control border border-danger');
                    $("#lugar_nacimiento_e").html(message[u]);
                }

                if (tel > 0) {
                    u++;
                    $("#telefono").val('');
                    $("#telefono").attr('class', 'form-control border border-danger');
                    $("#telefono_e").html(message[u]);
                }

                if (sta > 0) {
                    u++;
                    $("#state").val('null');
                    $('#municipality').html('<option value="null" disabled selected>Seleccione un municipio</option>');
                    $('#parroquia').html('<option value="null" disabled selected>Seleccione un parroquia</option>');
                    $("#state").attr('class', 'form-control border border-danger');
                    $("#state_e").html(message[u]);
                }

                if (mun > 0) {
                    u++;
                    $("#municipality").val('null');
                    $('#parroquia').html('<option value="null" disabled selected>Seleccione un parroquia</option>');
                    $("#municipality").attr('class', 'form-control border border-danger');
                    $("#municipality_e").html(message[u]);
                }

                if (par > 0) {
                    u++;
                    $("#parroquia").val('null');
                    $("#parroquia").attr('class', 'form-control border border-danger');
                    $("#parroquia_e").html(message[u]);
                }

                if (dir > 0) {
                    u++;
                    $("#direccion").val('');
                    $("#direccion").attr('class', 'form-control border border-danger');
                    $("#direccion_e").html(message[u]);
                }

                if (des > 0) {
                    u++;
                    $("#descripcion").val('');
                    $("#descripcion").attr('class', 'form-control border border-danger');
                    $("#descripcion_e").html(message[u]);
                }
            }else{

                if (nom > 0) {
                    u++;
                    $("#nombre").val(nombre2);
                    $("#nombre").attr('class', 'form-control border border-danger');
                    $("#nombre_e").html(message[u]);
                }

                if (ape > 0) {
                    u++;
                    $("#apellido").val(apellido2);
                    $("#apellido").attr('class', 'form-control border border-danger');
                    $("#apellido_e").html(message[u]);
                }

                if (se > 0) {
                    u++;
                    $("#sex").val(sex2);
                    $("#sex").attr('class', 'form-control border border-danger');
                    $("#sex_e").html(message[u]);
                }

                if (tel > 0) {
                    u++;
                    $("#telefono").val(telefono2);
                    $("#telefono").attr('class', 'form-control border border-danger');
                    $("#telefono_e").html(message[u]);
                }

                if (sta > 0 || mun > 0 || par > 0) {
                    $("#state").val(state2);
                    combo("municipality", "state", state2, "municipality", municipality2, "municipio", "municipalitys", 1);
                    combo("parroquia", "municipality", municipality2, "parroquia", parroquia2, "parroquia", "parroquias", 1);

                    if (sta > 0){
                        u++;
                        $("#state").attr('class', 'form-control border border-danger');
                        $("#state_e").html(message[u]);
                    }
                    
                    if (mun > 0){
                        u++;
                        $("#municipality").attr('class', 'form-control border border-danger');
                        $("#municipality_e").html(message[u]);
                    }
                    
                    if (par > 0){
                        u++;
                        $("#parroquia").attr('class', 'form-control border border-danger');
                        $("#parroquia_e").html(message[u]);
                    }
                }

                if (dir > 0) {
                    u++;
                    $("#direccion").val(direccion2);
                    $("#direccion").attr('class', 'form-control border border-danger');
                    $("#direccion_e").html(message[u]);
                }

                if (des > 0) {
                    u++;
                    $("#descripcion").val(descripcion2);
                    $("#descripcion").attr('class', 'form-control border border-danger');
                    $("#descripcion_e").html(message[u]);
                }

            }
            
        }

        if(i > 0){
            boo = false;
        }

        return boo;
    }

    function val_estudiante(val) {
        let ventana = $('#ventana').val();
        let boo = validacion_estudiante(val);
        
        if (boo == true) {
            if(ventana == 1){
                $("#button_estudiante").attr("class", "btn btn-success");
                $("#siguiente").attr("class", "btn btn-primary");
                $("#siguiente").removeAttr("disabled");
                $("#button_salud").attr("class", "btn btn-primary");
                $("#button_salud").removeAttr("disabled");
                $("#button_representante").attr("class", "btn btn-primary");
                $("#button_representante").removeAttr("disabled");
            }

        }else{
            $("#anterior").attr("class", "btn btn-secondary");
            $("#anterior").attr("disabled", "disabled");
            $("#siguiente").attr("class", "btn btn-secondary");
            $("#siguiente").attr("disabled", "disabled");
            $("#button_estudiante").attr("class", "btn btn-success");
            $("#button_salud").attr("class", "btn btn-secondary");
            $("#button_salud").attr("disabled", "disabled");
            $("#button_representante").attr("class", "btn btn-secondary");
            $("#button_representante").attr("disabled", "disabled");
            $('#salud').fadeOut();
            $('#representant').fadeOut();
            $('#estudiante').fadeIn();
            $("#ventana").val('1');
        }

    }

@endsection

{{-- funcion validacion --}}
@section('validacion')

    let boo2 = validacion_estudiante('si');
    let persona = $("#persona").val();
    let persona_r = $("#persona_r").val(); let persona_r2 = $("#persona_r2").val();
    let representante = $("#representante").val(); let representante2 = $("#representante2").val();
    let cedula_r = $("#cedula_r").val();
    let nombre_r = $("#nombre_r").val();
    let apellido_r = $("#apellido_r").val();
    let sex_r = $("#sex_r").val();
    let telefono_r = $("#telefono_r").val();
    let ocupacion_laboral = $("#ocupacion_laboral").val();
    let parentesco = $("#parentesco").val(); let parentesco2 = $("#parentesco2").val();
    let state_r = $("#state_r").val();
    let municipality_r = $("#municipality_r").val();
    let parroquia_r = $("#parroquia_r").val();
    let direccion_r = $("#direccion_r").val();
    let ced = 0; let nom = 0; let ape = 0; let se = 0; let tel = 0; let ocu = 0; let sta = 0; let mun = 0; let par = 0; let dir = 0; let pare = 0;
    
    if(boo2 == false){
        i++;
    }

    if(parentesco == "" || parentesco == "null"){
        i++; pare++;
        $("#parentesco").attr('class', 'form-control border border-danger');
        $("#parentesco_e").html('El campo parentesco es obligatorio.');

    }
    
    if(representante_r == ''){
        if(ocupacion_laboral == "" || ocupacion_laboral == "null"){
            i++; ocu++;
            $("#ocupacion_laboral").attr('class', 'form-control border border-danger');
            $("#ocupacion_laboral_e").html('El campo ocupación laboral es obligatorio.');
    
        }
        if(persona_r == ''){

            if(cedula_r == ""){
                i++; ced++;
                $("#cedula_r").attr('class', 'form-control border border-danger');
                $("#cedula_r_e").html('El campo cedula es obligatorio.');

            }else if(cedula_r.length > 8){
                i++; ced++;
                $("#cedula_r").attr('class', 'form-control border border-danger');
                $("#cedula_r_e").html('El campo cedula no debe contener más de 8 caracteres.');

            }else if(cedula_r.length < 7){
                i++; ced++;
                $("#cedula_r").attr('class', 'form-control border border-danger');
                $("#cedula_r_e").html('El campo cedula debe contener al menos 7 caracteres.');

            }
            

            if(nombre_r == ""){
                i++; nom++;
                $("#nombre_r").attr('class', 'form-control border border-danger');
                $("#nombre_r_e").html('El campo nombre es obligatorio.');

            }else if(nombre_r.length > 255){
                i++; nom++;
                $("#nombre_r").attr('class', 'form-control border border-danger');
                $("#nombre_r_e").html('El campo nombre no debe contener más de 255 caracteres.');

            }else if(nombre_r.length < 3){
                i++; nom++;
                $("#nombre_r").attr('class', 'form-control border border-danger');
                $("#nombre_r_e").html('El campo nombre debe contener al menos 03 caracteres.');

            }

            if(apellido_r == ""){
                i++; ape++;
                $("#apellido_r").attr('class', 'form-control border border-danger');
                $("#apellido_r_e").html('El campo apellido es obligatorio.');

            }else if(apellido_r.length > 255){
                i++; ape++;
                $("#apellido_r").attr('class', 'form-control border border-danger');
                $("#apellido_r_e").html('El campo apellido no debe contener más de 255 caracteres.');

            }else if(apellido_r.length < 3){
                i++; ape++;
                $("#apellido_r").attr('class', 'form-control border border-danger');
                $("#apellido_r_e").html('El campo apellido debe contener al menos 03 caracteres.');

            }

            if(sex_r == "" || sex_r == "null"){
                i++; se++;
                $("#sex_r").attr('class', 'form-control border border-danger');
                $("#sex_r_e").html('El campo sexo es obligatorio.');

            }

            if(telefono_r == ""){
                i++; tel++;
                $("#telefono_r").attr('class', 'form-control border border-danger');
                $("#telefono_r_e").html('El campo telefono es obligatorio.');

            }else if(telefono_r.length != 11){
                i++; tel++;
                $("#telefono_r").attr('class', 'form-control border border-danger');
                $("#telefono_r_e").html('El campo telefono no debe contener más de 11 caracteres.');

            }

            if(state_r == "" || state_r == "null"){
                i++; sta++;
                $("#state_r").attr('class', 'form-control border border-danger');
                $("#state_r_e").html('El campo estado es obligatorio.');

            }

            if(municipality_r == "" || municipality_r == "null"){
                i++; mun++;
                $("#municipality_r").attr('class', 'form-control border border-danger');
                $("#municipality_r_e").html('El campo municipio es obligatorio.');

            }

            if(parroquia_r == "" || parroquia_r == "null"){
                i++; par++;
                $("#parroquia").attr('class', 'form-control border border-danger');
                $("#parroquia_e").html('El campo parroquia es obligatorio.');

            }

            if(direccion_r == ""){
                i++; dir++;
                $("#direccion_r").attr('class', 'form-control border border-danger');
                $("#direccion_r_e").html('El campo dirección es obligatorio.');

            }
        }
    }
    if(i > 0){

        if (boo == false) {
            val_estudiante('no');
        }

        if (pare > 0) {
            $("#parentesco").val('null');
        }

        if(representante_r == ''){
            if (ocu > 0) {
                $("#ocupacion_laboral").val('null');
            }
            if(persona_r == ''){

                if (ced > 0) {
                    $("#cedula_r").val('');
                }
    
                if (nom > 0) {
                    $("#nombre_r").val('');
                }
    
                if (ape > 0) {
                    $("#apellido_r").val('');
                }
    
                if (se > 0) {
                    $("#sex_r").val('null');
                }
    
                if (tel > 0) {
                    $("#telefono_r").val('');
                }
    
                if (sta > 0) {
                    $("#state_r").val('null');
                    $('#municipality_r').html('<option value="null" disabled selected>Seleccione un municipio</option>');
                    $('#parroquia_r').html('<option value="null" disabled selected>Seleccione un parroquia</option>');
                }
    
                if (mun > 0) {
                    $("#municipality_r").val('null');
                    $('#parroquia_r').html('<option value="null" disabled selected>Seleccione un parroquia</option>');
                }
    
                if (par > 0) {
                    $("#parroquia_r").val('null');
                }
    
                if (dir > 0) {
                    $("#direccion_r").val('');
                }
            
            }
        }
        boo = false;
        $("body").overhang({
            type: "error",
            message: message
        });
    }
@endsection
{{-- funcion reiniciar --}}
@section('reiniciar')
    $("#cedula_e").html('');
    $("#nombre_e").html('');
    $("#apellido_e").html('');
    $("#sex_e").html('');
    $("#telefono_e").html('');
    $("#fecha_nacimiento_e").html('');
    $("#lugar_nacimiento_e").html('');
    $("#state_e").html('');
    $("#municipality_e").html('');
    $("#parroquia_e").html('');
    $("#direccion_e").html('');
    $("#descripcion_e").html('');
    $("#cedula_r_e").html('');
    $("#nombre_r_e").html('');
    $("#apellido_r_e").html('');
    $("#sex_r_e").html('');
    $("#telefono_r_e").html('');
    $("#ocupacion_laboral_e").html('');
    $("#state_r_e").html('');
    $("#municipality_r_e").html('');
    $("#parroquia_r_e").html('');
    $("#direccion_r_e").html('');
    $("#parentesco_e").html('');

    $("#cedula").attr('class', 'form-control');
    $("#nombre").attr('class', 'form-control');
    $("#apellido").attr('class', 'form-control');
    $("#sex").attr('class', 'form-control');
    $("#telefono").attr('class', 'form-control');
    $("#fecha_nacimiento").attr('class', 'form-control');
    $("#lugar_nacimiento").attr('class', 'form-control');
    $("#state").attr('class', 'form-control');
    $("#municipality").attr('class', 'form-control');
    $("#parroquia").attr('class', 'form-control');
    $("#direccion").attr('class', 'form-control');
    $("#descripcion").attr('class', 'form-control');
    $("#cedula_r").attr('class', 'form-control');
    $("#nombre_r").attr('class', 'form-control');
    $("#apellido_r").attr('class', 'form-control');
    $("#sex_r").attr('class', 'form-control');
    $("#telefono_r").attr('class', 'form-control');
    $("#ocupacion_laboral").attr('class', 'form-control');
    $("#state_r").attr('class', 'form-control');
    $("#municipality_r").attr('class', 'form-control');
    $("#parroquia_r").attr('class', 'form-control');
    $("#direccion_r").attr('class', 'form-control');
    $("#parentesco_r").attr('class', 'form-control');
@endsection
{{-- error en el registro o edicion --}}
@section('error')
    let ced = 0; let nom = 0; let ape = 0; let se = 0; let tel = 0; let sta = 0; let mun = 0; let par = 0; let dir = 0; let des = 0; let fec = 0; let lug = 0;
    let ced_r = 0; let nom_r = 0; let ape_r = 0; let se_r = 0; let tel_r = 0; let ocu = 0; let sta_r = 0; let mun_r = 0; let par_r = 0; let dir_r = 0; let pare = 0;

    if (xhr.responseJSON.errors.cedula){
        $("#cedula_e").html(xhr.responseJSON.errors.cedula);
        $("#cedula").attr('class', 'form-control border border-danger');
        ced++;
    }

    if (xhr.responseJSON.errors.nombre){
        $("#nombre_e").html(xhr.responseJSON.errors.nombre);
        $("#nombre").attr('class', 'form-control border border-danger');
        nom++;
    }

    if (xhr.responseJSON.errors.apellido){
        $("#apellido_e").html(xhr.responseJSON.errors.apellido);
        $("#apellido").attr('class', 'form-control border border-danger');
        ape++;
    }

    if (xhr.responseJSON.errors.sex){
        $("#sex_e").html(xhr.responseJSON.errors.sex);
        $("#sex").attr('class', 'form-control border border-danger');
        se++;
    }

    if (xhr.responseJSON.errors.telefono){
        $("#telefono_e").html(xhr.responseJSON.errors.telefono);
        $("#telefono").attr('class', 'form-control border border-danger');
        tel++;
    }

    if (xhr.responseJSON.errors.fecha_nacimiento){
        $("#fecha_nacimiento_e").html(xhr.responseJSON.errors.fecha_nacimiento);
        $("#fecha_nacimiento").attr('class', 'form-control border border-danger');
        fec++;
    }

    if (xhr.responseJSON.errors.lugar_nacimiento){
        $("#lugar_nacimiento_e").html(xhr.responseJSON.errors.lugar_nacimiento);
        $("#lugar_nacimiento").attr('class', 'form-control border border-danger');
        lug++;
    }

    if (xhr.responseJSON.errors.state){
        $("#state_e").html(xhr.responseJSON.errors.state);
        $("#state").attr('class', 'form-control border border-danger');
        sta++;
    }

    if (xhr.responseJSON.errors.municipality){
        $("#municipality_e").html(xhr.responseJSON.errors.municipality);
        $("#municipality").attr('class', 'form-control border border-danger');
        mun++;
    }

    if (xhr.responseJSON.errors.parroquia){
        $("#parroquia_e").html(xhr.responseJSON.errors.parroquia);
        $("#parroquia").attr('class', 'form-control border border-danger');
        par++;
    }

    if (xhr.responseJSON.errors.direccion){
        $("#direccion_e").html(xhr.responseJSON.errors.direccion);
        $("#direccion").attr('class', 'form-control border border-danger');
        dir++;
    }

    if (xhr.responseJSON.errors.descripcion){
        $("#descripcion_e").html(xhr.responseJSON.errors.descripcion);
        $("#descripcion").attr('class', 'form-control border border-danger');
        des++;
    }

    if (xhr.responseJSON.errors.cedula_r){
        $("#cedula_r_e").html(xhr.responseJSON.errors.cedula_r);
        $("#cedula_r").attr('class', 'form-control border border-danger');
        ced_r++;
    }

    if (xhr.responseJSON.errors.nombre_r){
        $("#nombre_r_e").html(xhr.responseJSON.errors.nombre_r);
        $("#nombre_r").attr('class', 'form-control border border-danger');
        nom_r++;
    }

    if (xhr.responseJSON.errors.apellido_r){
        $("#apellido_r_e").html(xhr.responseJSON.errors.apellido_r);
        $("#apellido_r").attr('class', 'form-control border border-danger');
        ape_r++;
    }

    if (xhr.responseJSON.errors.sex_r){
        $("#sex_r_e").html(xhr.responseJSON.errors.sex_r);
        $("#sex_r").attr('class', 'form-control border border-danger');
        se_r++;
    }

    if (xhr.responseJSON.errors.telefono_r){
        $("#telefono_r_e").html(xhr.responseJSON.errors.telefono_r);
        $("#telefono_r").attr('class', 'form-control border border-danger');
        tel_r++;
    }

    if (xhr.responseJSON.errors.ocupacion_laboral){
        $("#ocupacion_laboral_e").html(xhr.responseJSON.errors.ocupacion_laboral);
        $("#ocupacion_laboral").attr('class', 'form-control border border-danger');
        ocu++;
    }

    if (xhr.responseJSON.errors.state_r){
        $("#state_r_e").html(xhr.responseJSON.errors.state_r);
        $("#state_r").attr('class', 'form-control border border-danger');
        sta_r++;
    }

    if (xhr.responseJSON.errors.municipality_r){
        $("#municipality_r_e").html(xhr.responseJSON.errors.municipality_r);
        $("#municipality_r").attr('class', 'form-control border border-danger');
        mun_r++;
    }

    if (xhr.responseJSON.errors.parroquia_r){
        $("#parroquia_r_e").html(xhr.responseJSON.errors.parroquia_r);
        $("#parroquia_r").attr('class', 'form-control border border-danger');
        par_r++;
    }

    if (xhr.responseJSON.errors.direccion_r){
        $("#direccion_r_e").html(xhr.responseJSON.errors.direccion_r);
        $("#direccion_r").attr('class', 'form-control border border-danger');
        dir_r++;
    }

    if (xhr.responseJSON.errors.parentesco){
        $("#parentesco_e").html(xhr.responseJSON.errors.parentesco);
        $("#parentesco").attr('class', 'form-control border border-danger');
        pare++;
    }

    if(pro == 'Registro'){

        if (ced > 0) {
            $("#cedula").val('');
        }

        if (nom > 0) {
            $("#nombre").val('');
        }

        if (ape > 0) {
            $("#apellido").val('');
        }

        if (se > 0) {
            $("#sex").val('null');
        }

        if (tel > 0) {
            $("#telefono").val('');
        }

        if (fec > 0) {
            $("#fecha_nacimiento").val('');
        }

        if (lug > 0) {
            $("#lugar_nacimiento").val('');
        }

        if (sta > 0) {
            $("#state").val('null');
            $('#municipality').html('<option value="null" disabled selected>Seleccione un municipio</option>');
            $('#parroquia').html('<option value="null" disabled selected>Seleccione un parroquia</option>');
        }

        if (mun > 0) {
            $("#municipality").val('null');
            $('#parroquia').html('<option value="null" disabled selected>Seleccione un parroquia</option>');
        }

        if (par > 0) {
            $("#parroquia").val('null');
        }

        if (dir > 0) {
            $("#direccion").val('');
        }

        if (des > 0) {
            $("#descripcion").val('');
        }

        if (ced_r > 0) {
            $("#cedula_r").val('');
        }

        if (nom_r > 0) {
            $("#nombre_r").val('');
        }

        if (ape_r > 0) {
            $("#apellido_r").val('');
        }

        if (se_r > 0) {
            $("#sex_r").val('null');
        }

        if (tel_r > 0) {
            $("#telefono_r").val('');
        }

        if (sta_r > 0) {
            $("#state_r").val('null');
            $('#municipality_r').html('<option value="null" disabled selected>Seleccione un municipio</option>');
            $('#parroquia_r').html('<option value="null" disabled selected>Seleccione un parroquia</option>');
        }

        if (mun_r > 0) {
            $("#municipality_r").val('null');
            $('#parroquia_r').html('<option value="null" disabled selected>Seleccione un parroquia</option>');
        }

        if (par_r > 0) {
            $("#parroquia_r").val('null');
        }

        if (dir_r > 0) {
            $("#direccion_r").val('');
        }

        if (pare > 0) {
            $("#parentesco").val('null');
        }
        if (ocu > 0) {
            $("#ocupacion_laboral").val('null');
        }
    }else{

        if (nom > 0) {
            $("#nombre").val($("#nombre2").val());
        }

        if (ape > 0) {
            $("#apellido").val($("#apellido2").val());
        }

        if (se > 0) {
            $("#sex").val($("#sex2").val());
        }

        if (tel > 0) {
            $("#telefono").val($("#telefono2").val());
        }

        if (fec > 0) {
            $("#fecha_nacimiento").val($("#fecha_nacimiento2").val());
        }

        if (lug > 0) {
            $("#lugar_nacimiento").val($("#lugar_nacimiento2").val());
        }

        if (sta > 0 || mun > 00 || par > 0) {
            $("#state").val($("#state2").val());
            combo("municipality", "state", $("#state2").val(), "municipality", $("#municipality2").val(), "municipio", "municipalitys", 1);
            combo("parroquia", "municipality", $("#municipality2").val(), "parroquia", $("#parroquia2").val(), "parroquia", "parroquias", 1);
        }

        if (dir > 0) {
            $("#direccion").val($("#direccion2").val());
        }

        if (des > 0) {
            $("#descripcion").val($("#descripcion").val());
        }

        if (pare > 0) {
            $("#parentesco").val($("#parentesco2").val());
        }
    }
@endsection
{{-- </script> --}}
