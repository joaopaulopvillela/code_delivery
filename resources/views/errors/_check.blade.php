@if($errors->any())

    <ul class="nav">
        @foreach($errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
    </ul>


@endif