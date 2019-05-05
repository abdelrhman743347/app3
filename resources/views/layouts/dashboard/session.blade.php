{{--@if (session('status'))--}}

{{--    <script>--}}
{{--        new Noty({--}}
{{--            type: 'success',--}}
{{--            layout: 'topRight',--}}
{{--            text: "{{ session('success') }}",--}}
{{--            timeout: 2000,--}}
{{--            killer: true--}}
{{--        }).show();--}}
{{--    </script>--}}

{{--@endif--}}


@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (session('fail'))
    <div class="alert alert-error">
        {{ session('fail') }}
    </div>
@endif
