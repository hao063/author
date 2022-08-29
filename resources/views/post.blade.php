


@can('view',  App\Models\Post::find(2))
no
@endcan

{{-- @cannot('update', $post)
    &lt;!-- The Current User Cannot Update The Post --&gt;
@elsecannot('create', AppPost::class)
    &lt;!-- The Current User Cannot Create A New Post --&gt;
@endcannot

@can('update', $post)
&lt;!-- The Current User Can Update The Post --&gt;
@elsecan('create', AppPost::class)
    &lt;!-- The Current User Can Create New Post --&gt;
@endcan --}}