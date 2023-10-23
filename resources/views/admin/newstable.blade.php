<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>News Page</h2>
    @if (count($news) > 0)
    <table>
        <thead>
            <tr>
                <th>S/N</th>
                <th>Title</th>
                <th>Content</th>
                <th>Picture</th>
                <th>Author</th>
                <th>Profile</th>
            </tr>
        </thead>
        @php
            $sn =1;
        @endphp
        <tbody>
            @foreach ($news as $new)
            <tr>
                <td>{{ $sn++ }}</td>
                <td>{{ $new->title }}</td>
                <td>{{ $new->body }}</td>
                <td> <img src="{{ $new->picture}}" alt="" width="300px"></td>
                <td>{{ $new->author}}</td>
                <td>
                    <form action="{{ route('news.delete') }}" method="post" style="display: inline-block;">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="id" value="{{ $new->id }}">

                        <input type="submit" value="Delete">
                    </form>
                    <a href="{{ url('admin/news/edit', $new->id) }}" style="display: inline-block;"> Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No news available</p>
    @endif

</body>
</html>
