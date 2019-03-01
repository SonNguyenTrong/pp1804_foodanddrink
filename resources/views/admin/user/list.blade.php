@extends('admin.master')
@section('content')
<h1 class="page-header">{{trans('messages.list')}}</h1>
<div class="col-lg-12 user-create">
    <a href="{{ action('UserController@create') }}" >
    <button type="button" class="btn btn-success create" >{{trans('messages.create')}}</button>
    </a>
    <div class="col-lg-8 col-lg-offset-4 search">
        <form class="card card-sm">
            <div class="card-body row no-gutters align-items-center">
                <!--end of col-->
                <div class="col">
                    <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                </div>
                <!--end of col-->
                <div class="col-auto">
                    <button class="btn btn-lg btn-success " type="submit">Search</button>
                </div>
                <!--end of col-->
            </div>
        </form>
    </div>
    <!--end of col-->
</div>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
    <thead>
        <tr>
            <th>{{trans('messages.user')}}</th>
            <th>{{trans('messages.email')}}</th>
            <th>{{trans('messages.action')}}</th>
        </tr>
    </thead>
    </thead>
    <tbody>
        @foreach($listUser as $user)
        <tr class="gradeA even" role="row">
            <td class="sorting_1">{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ action('UserController@edit' , ['id' => $user->id]) }}" >
                <button type="button" class="btn btn-success">{{trans('messages.edit')}}</button>
                </a>
                <a href="">
                <button onclick="return confirm_delete()" type="submit" class="btn btn-danger">{{trans('messages.delete')}}</button>
                </a>
                <form method="POST" action = {{ route('users.destroy', [$user->id]) }}>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script type="text/javascript">
    function confirm_delete() {
        return confirm('{{ trans('messages.confirm') }}');
    }
</script>
{{ $listUser->links() }}
@endsection