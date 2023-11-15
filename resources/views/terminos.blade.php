@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Términos y Condiciones de Ventas como Intermediario</h1>
    <p>Bienvenido(a) a los Términos y Condiciones de Ventas como 
        Intermediario de la empresa Catalejo. Estos Términos se 
        aplican a todas las transacciones comerciales realizadas a
         través de nuestro servicio de intermediación entre compradores 
         y vendedores. Al utilizar nuestros servicios como intermediario, 
         usted acepta estar sujeto a estos Términos. Por favor, lea atentamente 
         los siguientes términos y condiciones antes de utilizar nuestros servicios.</p>

    <h2>Relación de Intermediación:</h2>
    <p>La empresa Catalejo actúa únicamente como intermediario entre compradores y 
    vendedores, facilitando la comunicación y la transacción comercial. No somos el 
    vendedor de los productos o servicios anunciados en nuestro sitio web o plataforma. 
    Por lo tanto, no asumimos ninguna responsabilidad por la calidad, disponibilidad, 
    entrega, garantía o cualquier otro aspecto relacionado con los productos o servicios 
    ofrecidos por los vendedores.</p>
    
    <!-- Botones -->
    <div class="mt-4" align=center>
        <a href="{{ route('home') }}" class="btn btn-primary">Regresar al Home</a>
        <a href="{{ route('anuncios.index')}}" class="btn btn-secondary">Anuncios</a>
        <a href="{{ route('locales.index')}}" class="btn btn-success">Locales</a>
    </div>
</div>
@endsection
