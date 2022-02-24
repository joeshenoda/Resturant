<footer id="footer" class="aside-primary text-white">
    <div class="p-3 fs--14">
        &copy; Our Resturant System



        <div class="d-inline-block float-end dropdown">


            <!-- LANGUAGE -->

            @if(app()->getLocale() == 'ar')
                <div >

                    <a  href="{{ route('locale', 'en') }}"  >
                        <img src="{{asset('images/flag/us.png')}}"  style="width: 16px;height: 11px">
                        <span class="pl-2 pr-2">ENGLISH</span>
                    </a>



                </div>
            @endif

            @if(app()->getLocale() == 'en')

                <div>

                    <a href="{{ route('locale', 'ar') }}">
                        <img src="{{asset('images/flag/ku.jpg')}}"  style="width: 16px;height: 11px">
                        <span class="pl-2 pr-2">عربي</span>
                    </a>


                </div>

            @endif



        </div>


    </div>
</footer>
