@extends('layouts.app')

@section('content')
    <h3>List of posts</h3>

    <ul id="postsList"></ul>
@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.querySelector('.container')

            const postsList = document.querySelector('#postsList');

            var posts = {!! json_encode($posts) !!}
            // console.log(posts)
            posts.forEach(post => {
                // console.log(post.title)
                const postElement = document.createElement('li')
                postElement.textContent = post.title
                postsList.appendChild(postElement)
            })
        })
    </script>
@endpush
