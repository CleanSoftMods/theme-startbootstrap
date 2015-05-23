@extends('theme.default::layouts.default')

@section('layout-content')

<div class="site-container">
    <section class="two-column-right">
        <div class="container">
            {!! Theme::breadcrumb()->render() !!}
        </div>

        <main class="content">
            {!! Theme::partial('theme.msgs') !!}
            {!! Theme::partial('theme.heading') !!}
            {!! Theme::partial('theme.content') !!}
        </main>

        <aside class="sidebar sidebar-right">
            {!! Theme::partial('theme.sidebar-right') !!}
        </aside>
    </section>
</div>


@stop
