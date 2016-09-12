@extends('layouts.back')

@section('title', trans('pages.delete', ['model'=>'staff']))

@section('page-heading', trans('pages.delete', ['model'=>'staff']))

@section('page-sub-heading')
    @if (!empty($model))
        {{ $model['name'] }}
    @endif
@stop

@section('breadcrumbs', Breadcrumbs::render('delete_staff', $model))

@section('content')

    <div class="row">
        <div class="col-lg-6">
            <form role="form" method="post" action="{{ route('back.staff.doDelete') }}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $model['id'] }}">
                <div class="jumbotron">
                    <h1>{{ $model['name'] }}</h1>
                    <h3>{{ $model['email'] }}</h3>
                    <p>Is about to be deleted.</p>
                    <p>This action is irreversible! Are you sure to continue?</p>
                    <p>
                        <button type="submit" class="btn btn-danger">@lang('contents.btn-delete')</button>
                        <button type="button" class="btn btn-link">@lang('contents.btn-back')</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
@stop

@section('foot')
    <script type="text/javascript">
        $('.btn-link').click(function() {window.location.href = '{{ route('back.staff.index') }}'});
    </script>
@stop