<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twetter - Application</title>
</head>
<body>
    <h1>Twetter - Application</h1>

    <form action="{{ route('tweet.create') }}" method="post">
        @csrf
        <label for="tweet-content">つぶやき</label>
        <span>140文字まで</span>
        <textarea name="tweet" id="tweet-content" type="text" placeholder="つぶやきを入力"></textarea>
        @error
            <p style="color: red;">{{ message }}</p>
        @enderror
        <button type="submit">投稿</button>
    </form>

    <div>
        @foreach($tweets as $tweet)
            <p>{{ $tweet->content }}</p>
        @endforeach
    </div>
</body>
</html>