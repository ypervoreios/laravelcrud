<x-layout>

<h2>User Page</h2>

    <ul>
        @foreach ($users as $user)
            <li>
                <x-card href="{{ Route('users.show', $user->id) }}" :highlight="$user['grade'] > 70">
                    <h3>{{ $user->name}}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{$users->links()}}
</x-layout>