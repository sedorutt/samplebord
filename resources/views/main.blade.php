<html>
<head>
    <title>This is SamplePage</title> 
</head>
    <body>
        <b>Sample Board</b>
        <form method="POST">
            @csrf
            <label>NAME</label>
            <input type="text" name="name"/>
            <label>Message</label>
            <input type="text" name="message"/>
            <input type="submit" value="OK" />
        </form>
        <hr>
        @foreach ($posts as $post)
            <p><b>{{$post["name"]}} </b>：{{$post["message"]}}</p>    
        @endforeach
    </body>
</html>