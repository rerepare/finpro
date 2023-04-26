@extends('layouts.app')

@section('content')
<div class="container" id = "app">

</div>
<script>
    let year = {!! json_encode($year) !!};
    let testing = {!! json_encode($testing) !!};
</script>
<script src="/js/index.js"></script>
@endsection
