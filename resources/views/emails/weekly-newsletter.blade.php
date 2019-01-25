<h3>Kitlab Blog Cmss - Weekly Newsletter Email</h3>
<ol>
@foreach($blogs as $blog)
    <li>
        <a href="{{ url('post/'.$blog->slug) }}" target="_blank">
        {{ $blog->title }}
        </a>
    </li>
@endforeach
</ol> 