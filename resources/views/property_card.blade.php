@extends('layouts.base')

@section('content')
    <div class="title m-b-md">
        <h1 class="c-title c-title--h1">PHP Senior Level Test</h1>
    </div>
    <div>
        <h2 class="c-title c-title--h2">Property</h2>
        <section class="c-properties-grid__wrapper">
            <div class="c-properties-grid">
                <div class="c-properties-grid__item">
                    <h3 class="c-properties-grid-item__title">{{$property->name}}</h3>
                    <p>{{$property->description}}</p>
                    <ul class="c-properties-grid-item__list">
                        <li>Price: {{$property->propertyFeature->price}} €</li>
                        <li>Location: {{$property->location->name}}</li>
                        <li>Rooms: {{$property->propertyFeature->bedrooms}}</li>
                        <li>Bathrooms: {{$property->propertyFeature->bathrooms}}</li>
                        <li>Built Area: {{$property->propertyFeature->built_area}} m2</li>
                        <li>Agent: {{$property->agent->name}}</li>
                        <li>Garden: {{($property->propertyFeature->garden)?'YES':'NO'}}</li>
                        <li>Garaje: {{($property->propertyFeature->garaje)?'YES':'NO'}}</li>
                        <li>Private pool: {{($property->propertyFeature->private_pool)?'YES':'NO'}}</li>
                        <li>Community pool: {{($property->propertyFeature->community_pool)?'YES':'NO'}}</li>
                        <li>Land Area: {{$property->propertyFeature->built_area}} m2</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('css')
    <style>

    </style>
@endpush

@push('js')
    <script>

    </script>
@endpush
