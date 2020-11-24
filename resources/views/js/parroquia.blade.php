@section('document')

    $("#bs_state").on("change", function() {
        cargar();
    });

    $("#bs_municipality").on("keyup", function() {
        cargar();
    });

    $("#bs_parroquias").on("keyup", function() {
        cargar();
    });

@endsection

@section('url_registro') url = "{{ route('Parroquia.store') }}"; @endsection

@section('url_edicion') url = `{{url('Parroquia')}}/${id}`; @endsection

@section('select')

    $('#municipality').html('<option value="null" disabled selected>Seleccione un municipio</option>');

@endsection

@section('registro')

    $('#state').val('null');
    $('#municipality').html('<option value="null" disabled selected>Seleccione un municipio</option>');
    $('#parroquias').val('');

@endsection

@section('edicion')

    $('#state2').val($('#state').val());
    $('#municipality2').val($('#municipality').val());
    $('#parroquias2').val($('#parroquias').val());

 @endsection

@section('delete') url: `{{url('Parroquia')}}/${id}`, @endsection

@section('cargar') url: "{{route('Parroquia.cargar')}}", @endsection

@section('rellenar_url') url: "{{route('Parroquia.mostrar')}}", @endsection

@section('rellenar')

    $("#state").val(valores.state);
    $("#state2").val(valores.state);
    combo("municipality", "state", $('#state2').val(), "municipality", $('#municipality2').val(), "municipio", "parroquias", 1);
    $("#municipality2").val(valores.municipality);
    $("#parroquias").val(valores.parroquias);
    $("#parroquias2").val(valores.parroquias);

@endsection

@section('editar')

    $("#state").removeAttr("disabled");
    $("#municipality").removeAttr("disabled");
    $("#parroquias").removeAttr("readonly");

@endsection

@section('mostrar')

    $("#state").attr("disabled", "disabled");
    $("#municipality").attr("disabled", "disabled");
    $("#parroquias").attr("readonly", "readonly");

@endsection

@section('validacion')

    let state = $("#state").val(); let state2 = $("#state2").val();
    let municipality = $("#municipality").val(); let municipality2 = $("#municipality2").val();
    let parroquias = $("#parroquias").val(); let parroquias2 = $("#parroquias2").val();
    let sta = 0; let mun = 0; let par = 0;

    if(state == "" || state == "null"){
        i++; sta++;
        $("#state").attr('class', 'form-control border border-danger');
        $("#state_e").html('El campo estado es obligatorio.');

    }

    if(municipality == "" || municipality == "null"){
        i++; mun++;
        $("#municipality").attr('class', 'form-control border border-danger');
        $("#municipality_e").html('El campo municipio es obligatorio.');

    }

    if(parroquias == ""){
        i++; par++;
        $("#parroquias").attr('class', 'form-control border border-danger');
        $("#parroquias_e").html('El campo parroquia es obligatorio.');

    }else if(parroquias.length > 255){
        i++; par++;
        $("#parroquias").attr('class', 'form-control border border-danger');
        $("#parroquias_e").html('El campo parroquia no debe contener más de 255 caracteres.');

    }else if(parroquias.length < 3){
        i++; par++;
        $("#parroquias").attr('class', 'form-control border border-danger');
        $("#parroquias_e").html('El campo parroquia debe contener al menos 03 caracteres.');

    }

    if(municipality == municipality2 && parroquias == parroquias2 && pro == 'Edicion'){
        i++; mun++; sta++; par++;
        message = 'No ha hecho ningun cambio.';

    }


    if(i > 0){

        if(pro == 'Registro'){

            if (sta > 0) {
                $("#state").val('null');
                $('#municipality').html('<option value="null" disabled selected>Seleccione un municipio</option>');
            }

            if (mun > 0) {
                $("#municipality").val('null');
            }

            if (par > 0) {
                $("#parroquias").val('');
            }

        }else{

            if (sta > 0 || mun > 0) {
                $("#state").val(state2);
                combo("municipality", "state", state2, "municipality", municipality2, "municipio", "parroquias", 1);
            }

            if (par > 0) {
                $("#parroquias").val(parroquias2);
            }

        }
        boo = false;
        $("body").overhang({
            type: "error",
            message: message
        });
    }
@endsection

@section('reiniciar')
    $("#parroquias_e").html('');
    $("#state_e").html('');
    $("#municipality_e").html('');
    $("#parroquias").attr('class', 'form-control');
    $("#state").attr('class', 'form-control');
    $("#municipality").attr('class', 'form-control');
@endsection

@section('error')
    let sta = 0; let mun = 0; let par = 0;
    if (xhr.responseJSON.errors.parroquias){
        $("#parroquias_e").html(xhr.responseJSON.errors.parroquias);
        $("#parroquias").attr('class', 'form-control border border-danger');
        par++;
    }

    if (xhr.responseJSON.errors.municipality){
        $("#municipality_e").html(xhr.responseJSON.errors.municipality);
        $("#municipality").attr('class', 'form-control border border-danger');
        mun++;
    }


    if (xhr.responseJSON.errors.state){
        $("#state_e").html(xhr.responseJSON.errors.state);
        $("#state").attr('class', 'form-control border border-danger');
        sta++;
    }



    if (pro == "Registro") {

        if (sta > 0) {
            $("#state").val('null');
            $('#municipality').html('<option value="null" disabled selected>Seleccione un municipio</option>');
        }

        if (mun > 0) {
            $("#municipality").val('null');
        }

        if (par > 0) {
            $("#parroquias").val('');
        }

    }else{

        if (sta > 0 || mun > 0) {
            $("#state").val($("#state2").val());
            combo("municipality", "state", $("#state2").val(), "municipality", $("#municipality2").val(), "municipio", "parroquias", 1);
        }

        if (par > 0) {
            $("#parroquias").val($("#parroquias2").val());
        }

    }
@endsection
