{{-- <script> --}}
    @section('document')

    $("#bs_parentescos").on("keyup", function() {
        cargar();
    });

@endsection

@section('url_registro') url = "{{ route('Parentesco.store') }}"; @endsection

@section('url_edicion') url = `{{url('Parentesco')}}/${id}`; @endsection

@section('registro') $('#parentescos').val(''); @endsection

@section('edicion') $('#parentescos2').val($('#parentescos').val()); @endsection

@section('delete') url: `{{url('Parentesco')}}/${id}`, @endsection

@section('cargar') url: "{{route('Parentesco.cargar')}}", @endsection

@section('rellenar_url') url: "{{route('Parentesco.mostrar')}}", @endsection

@section('rellenar')

    $("#parentescos").val(valores.parentescos);
    $("#parentescos2").val(valores.parentescos);

@endsection

@section('editar') $("#parentescos").removeAttr("readonly"); @endsection

@section('mostrar') $("#parentescos").attr("readonly", "readonly"); @endsection

@section('validacion')

    let parentescos = $("#parentescos").val();
    let parentescos2 = $("#parentescos2").val();

    if(parentescos == ""){
        i++;
        $("#parentescos").attr('class', 'form-control border border-danger');
        $("#parentescos_e").html('El campo parentesco es obligatorio.');

    }else if(parentescos.length > 255){
        i++;
        $("#parentescos").attr('class', 'form-control border border-danger');
        $("#parentescos_e").html('El campo parentesco no debe contener más de 255 caracteres.');

    }else if(parentescos.length < 3){
        i++;
        $("#parentescos").attr('class', 'form-control border border-danger');
        $("#parentescos_e").html('El campo parentesco debe contener al menos 03 caracteres.');

    }else if(parentescos == parentescos2 && pro == 'Edicion'){
        i++;
        message = 'No ha hecho ningun cambio.';
    }



    if(i > 0){

        if(pro == 'Registro'){
            $("#parentescos").val('');
        }else{
            $("#parentescos").val(parentescos2);
        }
        boo = false;
        $("body").overhang({
            type: "error",
            message: message
        });
    }
@endsection

@section('reiniciar')
    $("#parentescos_e").html('');
    $("#parentescos").attr('class', 'form-control');
@endsection

@section('error')
    $("#parentescos_e").html(xhr.responseJSON.errors.parentescos);
    $("#parentescos").attr('class', 'form-control border border-danger');
    if (pro == "Registro") {
        $("#parentescos").val('');
    }else{
        $("#parentescos").val($("#parentescos2").val());
    }
@endsection
