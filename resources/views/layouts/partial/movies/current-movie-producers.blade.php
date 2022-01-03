@foreach($producers as $producer)
    @foreach($producer as $currentProducer)
        {{$currentProducer['first_name']}}  {{$currentProducer['last_name']}}<br>
    @endforeach
@endforeach

