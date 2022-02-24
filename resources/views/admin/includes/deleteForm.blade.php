<div class="text-center d-none" id="deleteForm">
    <div class="card d-inline-block ">
        <div class="card-body">
            <div class="text-center">
                <h5><span>انت على وشك حذف </span> "<span>{{$title}}</span>" <span>هل انت متأكد ؟؟</span></h5>
                <div class="text-center">
                    <form action="{{$link}}" method="post" class="d-inline pull-left">
                        @csrf
                        {{method_field('delete')}}
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-check-circle"></i> <span>نعم</span></button>
                        <button type="button" id="cancelDeleteBtn" class="btn btn-success"><i class="fa fa-times-circle"></i> <span>لا</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        $('#deleteBtn').click(function () {
            $('#deleteForm').removeClass('d-none')
        });

        $('#cancelDeleteBtn').click(function () {
            $('#deleteForm').addClass('d-none')
        });
    </script>
@endpush