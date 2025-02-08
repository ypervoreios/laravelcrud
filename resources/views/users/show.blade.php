<x-layout>

    <h2>{{$user->name}}'s Profile</h2>
<div class="bg-gray-200 p-4 rounded">
    <p><strong>Email:</strong> {{$user->email}}</p>
    <p><strong>grade:</strong> {{$user->grade}}</p>
    <p><strong>Bio:</strong> {{$user->bio}}</p>
    <p><strong>School:</strong> {{$user->school->name}}</p>
</div>
<div class="border-2 border-dashed bg-white rounded p-4 my-4">
    <h3>School information</h3>
    <p><strong>Name:</strong> {{$user->school->name}}</p>
    <p><strong>Location:</strong> {{$user->school->location}}</p>
    <p><strong>About School:</strong> {{$user->school->description}}</p>
</div>
</x-layout>