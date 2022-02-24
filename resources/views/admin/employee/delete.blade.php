@component('admin.components.page')

    @slot('title','')

    <div class="row gutters-sm">

        <div class="container">
            <div class="justify-content-center">
                <div id="vendorRegister">


    <form method="post" id="vendorRegisterForm" action="{{route('admin.employee.remove')}}" aria-label="{{ __('Get') }} {{__('Employee')}}">
        @csrf
        {{method_field('DELETE')}}


        <div class="form-label-group mb-3">
            <select id="employee _id"  name="employee _id" class="form-control">
                @foreach(\App\Models\employee ::all() as $employee_id)
                    <option value="{{$employee_id->id}}" @if(isset($employee )){{($employee_id->id== $employee->id)?'selected':''}} @endif>{{$employee_id->name}}</option>

                @endforeach

            </select>
            <label for="employee _id">{{__('Employee')}}</label>
        </div>



        <button id="submit" type="submit" class=" js-ajax btn btn-sm btn-success btn-pill px-2 py-1 fs--15 " style="float:left"><span> {{ __('Delete') }} {{__('Employee')}}</span> <span><i class="fa
                                   fa-send"></i></span></button>


    </form>

    </div>
</div>
        </div>
    </div>











    <!--
        <div class="bg-white shadow-xs p-2 mb-4 rounded">
            <div class="clearfix bg-light p-2 rounded d-flex align-items-center">
                                <span class="btn row-pill btn-sm bg-gradient-warning b-0 py-1 mb-0 float-start">
                                    <i class="fi fi-round-info-full"></i>
                                    Note
                                </span>
                <span class="d-block px-2 text-muted text-truncate">
                                    This is a basic demo! Please see main <a href="../../html_frontend/documentation/" target="smarty" class="link-muted">full documentation here</a>.
                                </span>
            </div>
        </div>

    -->








@endcomponent
