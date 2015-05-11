@extends('theme.default::layouts.default')

@section('layout-content')

<section class="two-column-left">
    <div class="container">
        {!! Theme::breadcrumb()->render() !!}
    </div>

    <aside class="sidebar sidebar-left">
        {!! Theme::partial('theme.sidebar-left') !!}
    </aside>

    <main class="content">
        {!! Theme::partial('theme.msgs') !!}
        {!! Theme::partial('theme.heading') !!}
        {!! Theme::partial('theme.content') !!}
    </main>
</section>
@stop
