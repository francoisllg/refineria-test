<div class="c-properties-grid__item">
    <h3 class="c-properties-grid-item__title">{{$property->name}}</h3>
    <p>{{$property->description}}</p>
    <ul class="c-properties-grid-item__list">
        <li>Price: {{$property->propertyFeature->price}} €</li>
        <li>Location: {{$property->location->name}}</li>
        <li>Rooms: {{$property->propertyFeature->bedrooms}}</li>
        <li>Bathrooms: {{$property->propertyFeature->bathrooms}}</li>
        <li>Built Area: {{$property->propertyFeature->built_area}} m2</li>
        <a href="/properties/{{$property->id}}">See more</a>
    </ul>
</div>
