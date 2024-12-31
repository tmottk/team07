@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="error-item">{{ $error }}</li>
        @endforeach
    </ul>
@endif