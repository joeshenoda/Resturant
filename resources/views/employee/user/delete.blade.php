@component('employee.components.page')

    @slot('title','')

    <div class="row gutters-sm">

        <div class="container">
            <div class="justify-content-center">
                <div id="vendorRegister">


    <form method="post" id="vendorRegisterForm" action="{{route('employee.user.remove')}}" aria-label="{{ __('Get') }} {{__('User')}}">
        @csrf
        {{method_field('DELETE')}}


        <div class="form-label-group mb-3">
            <select id="user_id"  name="user_id" class="form-control">
                @foreach(\App\Models\user::all() as $user_id)
                    <option value="{{$user_id->id}}" @if(isset($user)){{($user_id->id== $user->id)?'selected':''}} @endif>{{$user_id->name}}</option>

                @endforeach

            </select>
            <label for="user_id">{{__('user')}}</label>
        </div>



        <button id="submit" type="submit" class=" js-ajax btn btn-sm btn-success btn-pill px-2 py-1 fs--15 " style="float:left"><span> {{ __('Delete') }} {{__('user')}}</span> <span><i class="fa
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
