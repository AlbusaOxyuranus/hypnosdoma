<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> Error! {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>