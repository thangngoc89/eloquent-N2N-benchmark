<html>
<body>

@foreach($categories as $category)
    <p>{{ $category->name }} has {{ $category->products->count() }} products</p>
@endforeach

</body>
</html>