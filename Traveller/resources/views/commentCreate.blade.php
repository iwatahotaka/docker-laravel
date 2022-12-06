@extends('layouts/app')
    {{-- <link rel="stylesheet" href="{{ asset('/css/edit.css') }}"> --}}
@section('content')

<main>
    <div class="edit-allpage">
        {{-- コメントtopic --}}
        <section class="comment-topic">
            <div class="write-comment-create">
                <p class="write-comment">leave a comment</p>
        </section>

        {{-- コメントテキスト--}}
        <form action="{{ route("comments.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            {{-- サニタイジング防止 --}}
            <input type="hidden" name="post_id" value="{{ $post_id }}" >
            
            <section class="comment-box">
                <div class="comment-create-text">
                    <textarea name="text-comment" id="text-comment" cols="30" rows="10" placeholder="write here"></textarea>
                </div>
            </section>

            {{-- コメントボタン --}}
            <div class="comment-button">
                <img class="comment-icon" src="images/comment-icon.png" alt="">
                <form class="comment" action="{{'submit'}}" method="post">
                    <button type="submit">Comment Now</button></form>
                {{-- <input form="create-task"  ss="comment" type="submit" value="Comment"> --}}
            </div>
        </form>
    </div>

</main>
    
@endsection