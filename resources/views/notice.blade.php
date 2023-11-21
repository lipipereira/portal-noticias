<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Notícia</th>
        </tr>
    </thead>

    <tbody>
        @foreach($notices as $notice)
            <tr>
                <td>{{ $notice->title }}</td>
                <td>{{ $notice->notice }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
