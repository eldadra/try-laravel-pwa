@extends('layouts.app')

@section('content')
    <h3>List of users</h3>

    <ul id="usersList">
        {{-- @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach --}}
    </ul>

    {{-- {{ $users->links() }} --}}
@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.querySelector('.container')

            const usersList = document.querySelector('#usersList');

            var users = {!! json_encode($users) !!}
            // console.log(users)

            users.forEach(user => {
                // console.log(user.name)
                const userElement = document.createElement('li')
                userElement.textContent = user.name
                usersList.appendChild(userElement)
            })

            // for pagination sill error
            // users.data.forEach(user => {
            //     // console.log(user.name)
            //     const userElement = document.createElement('li')
            //     userElement.textContent = user.name
            //     usersList.appendChild(userElement)
            // })
        })
    </script>
@endpush
