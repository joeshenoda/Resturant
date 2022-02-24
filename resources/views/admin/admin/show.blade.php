@component('admin.components.page')
    @slot('title',__('Admin').' : '. $admin->name)

    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th> {{__('Name')}}</th>
                            <td>{{$admin->name}}</td>
                        </tr>
                        <tr>
                            <th>{{__('Email')}}</th>
                            <td>{{$admin->email}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <a href="{{route('admin.admin.edit', $admin)}}" class="btn btn-primary btn-sm"><span><i class="fa fa-edit"></i></span> <span>{{__('Edit')}}</span></a>
                    <form action="{{route('admin.admin.destroy', $admin)}}" class="d-inline" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> <span>{{__('Delete')}}</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endcomponent
