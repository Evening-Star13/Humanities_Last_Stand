<x-layout>
  <h2>Currently Warehoused Humans</h2>

  <ul>
    @foreach($ninjas as $ninja)
    <li>
      <x-card href="/ninjas/{{ $ninja['id'] }}" :highlight="$ninja['gender'] == 'Male'">
        <h3>{{ $ninja['first-name'] }}</h3>
      </x-card>
    </li>
    @endforeach
  </ul>
</x-layout>
