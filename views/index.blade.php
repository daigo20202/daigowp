@extends('layout')

@section('content')
<div class="container">
  <ul>
    @while (have_posts())
    <?php the_post(); ?>
    <li>
      <a href="{{ the_permalink() }}">{{ the_title() }}</a>
    </li>
    @endwhile
  </ul>
</div>
@endsection
