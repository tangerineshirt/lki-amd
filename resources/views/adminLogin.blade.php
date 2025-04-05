<x-navbar>
    <form action="{{route('admin')}}" method="POST" class="form-layout">
        @csrf

        <h2>Log in to Admin</h2>

        <label for="name">Username:</label>
        <input 
        type="text"
        name='name'
        value="{{old('name')}}"
        required
        >

        <label for="password">Password:</label>
        <input 
        type="password"
        name="password"
        required
        >

        <button type="submit" class="login">Log in</button>

        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </form>
</x-navbar>