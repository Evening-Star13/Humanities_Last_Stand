<x-layout>
  <h2>Currently Warehoused Humans</h2>

  <ul>
    @foreach($ninjas as $ninja)
    <li>
      <x-card>
        <h3>{{ $ninja['name'] }}</h3>
      </x-card>
    </li>
    @endforeach
  </ul>
</x-layout>
