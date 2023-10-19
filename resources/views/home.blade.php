<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head.meta')
        @include('head.title')
        @include('head.css')
        @include('head.font')
        @include('head.favicon')
        @include('head.js')
    </head>
    <body id="page-top" class="index">
        @include('home.header')
        @include('home.welcome')
        @include('home.about')
        @include('home.experience')
        @include('home.skills.language')
        @include('home.skills.framework')
        @include('home.skills.platform')
        @include('home.skills.tool')
        @include('home.portfolio')
        @include('home.contact')
        @include('home.footer')
        @include('home.portfolio_modals')
    </body>
</html>