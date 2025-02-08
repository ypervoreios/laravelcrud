<x-layout>

<h2>User Page</h2>

    <ul>
        @foreach ($users as $user)
            <li>
                <x-card href="{{ Route('users.show', $user->id) }}" :highlight="$user['grade'] > 70">
                    <div class="card-body">
                        <h3>{{$user->name}}</h3>
                        <p>{{$user->school->name}}
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{$users->links()}}
</x-layout>