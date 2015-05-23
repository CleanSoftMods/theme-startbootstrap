@extends('theme.default::layouts.default')

@section('layout-content')

<div class="site-container">
    <section class="one-column">
        <main class="content">
            {!! Theme::breadcrumb()->render() !!}
            {!! Theme::partial('theme.msgs') !!}
            {!! Theme::partial('theme.heading') !!}
            {!! Theme::partial('theme.content') !!}
        </main>
    </section>
</div>

@stop
