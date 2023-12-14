<header>
    <h1>シンプルなWebアプリケーション</h1>
</header>
<main>
    <form action="/posts" method="post">
        @csrf
        <p><textarea name="article" rows=3 cols=50 placeholder="入力してください"></textarea></p>
        <p><input type="submit" name="post" value="ポストする"></p>
    </form>
    <div>
        <!-- 先頭で取得した投稿の一覧を表示する -->
        @foreach ($posts as $post)
            <hr>
            <p>{{ $post->postedAt }}</p>
            <p>{{ $post->article }}</p>
        @endforeach
    </div>
</main>
<footer>
    <p>simple web application</p>
</footer>