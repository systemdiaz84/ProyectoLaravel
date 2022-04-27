<h1>Página de Usuarios=> Nombre: {{$nombre}} Edad: {{ isset($edad) && !is_null($edad) ? $edad : ' No especifica' }}</h1>

@if (isset($edad)&& !is_null($edad))
    DNI: {{$edad}}
   
@else
    DNI: No especifica    
@endif

<h1>Hobbies</h1>

<ul>
@foreach ($hobbies as $item)
    <li>{{$item}}</li>
@endforeach
</ul>

@if(isset($numero) && !is_null($numero))

    <p>Tabla del número {{$numero}}</p>

    @for ($i = 0; $i < 12; $i++)
        {{$numero.' x '.$i.' = '.($i*$numero)}}<br/>
    @endfor

    <br/>

    <?php echo $i=0?>
    @while ($i<=12)
        {{$numero.' x '.$i.' = '.($i*$numero)}}<br/> 
        <?php $i++?>
    @endwhile

@endif