<x-layout>
  <h2>Currently Available Ninjas</h2>

  <ul>
    @foreach($ninjas as $ninja)
      <li>
        <x-card :highlight="$ninja['skill'] > 70" href="{{route('ninjas.show', $ninja->id)}}">
          <h3>{{ $ninja['name'] }}</h3>
        </x-card>
      </li>
    @endforeach
  </ul>
</x-layout>