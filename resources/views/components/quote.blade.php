<div>

    @foreach ($quotes as $item)
        <blockquote>&ldquo; {{ $item['q'] }} &rdquo; &mdash; <footer> {{ $item['a'] }}</footer>
        </blockquote>
    @endforeach
    <!-- Well begun is half done. - Aristotle -->
</div>
<style>

</style>
