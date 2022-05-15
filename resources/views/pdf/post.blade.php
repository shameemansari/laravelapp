<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Post</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }
    </style>

</head>

<body>

    <table width="100%">
        <tr>
            <td valign="top"><img src="https://i.pravatar.cc/150?u=shameem@pravatar.com" alt="Jenifer" />
            </td>
            <td align="right">
                <h3>Laravel Practise</h3>
                <pre>
                    B-203, Kamdhenu Perfect CHS Ltd.
                    Vandarapada, Ambernath (west)
                    Thane. Pin : 421505
                    Ph No: 7350442484
                </pre>
            </td>
        </tr>

    </table>

    <table width="100%">
        <tr>
            <td><strong>From:</strong>
                <a href="{{ route('home') }}" target="_blank">Laravel</a>
            </td>
        </tr>

    </table>

    <br />

    <table width="100%">
        <thead style="background-color: lightgray;">
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Date</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td class="center">{{ $post->code }}</td>
                <td class="center">{{ $post->name }}</td>
                <td>{{ $post->email }}</td>
                <td align="center">{{ $post->status->value }}</td>
                <td align="right">{{ $post->created_at->format('jS F, Y') }}</td>
                <td align="right">{{ '$ '. $post->amount }}</td>
            </tr>
            @endforeach


        </tbody>

        <tfoot>
            <tr>
                <td colspan="5"></td>
                <td align="right">Total :</td>
                <td align="right" class="gray">$ {{ $count }}</td>
            </tr>
        </tfoot>
    </table>

</body>

</html>