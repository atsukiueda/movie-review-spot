<div class="mb-5">
    <a href="/">HOME</a>
</div>
<div class="pt-4">
    @if (count($movies) > 0)
            <table class="table text-center">
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <th>タイトル</th>
                        </tr>
                            <tr>
                                <td>{!! link_to_route('movies.show', $movie->title, ['id' => $movie->id]) !!}</td>
                            </tr>
                            
                    @endforeach
                </tbody>
            </table>
    @endif
</div>