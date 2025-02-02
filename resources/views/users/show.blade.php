<x-layout>

    <h2>{{$user->name}}'s Profile</h2>
<div class="bg-gray-200 p-4 rounded">
    <p><strong>Email:</strong> {{$user->email}}</p>
    <p><strong>grade:</strong> {{$user->grade}}</p>
    <p><strong>Bio:</strong> {{$user->bio}}</p>
</div>
</x-layout>