@extends('admin.layout.master')
@section('main_section')
    <div class="card">
        <div class="card-header">
            <h4>Site Setting</h4>
        </div>
        <div class="card-body">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"
                @checked($setting->payment_active == 'true') value="1">
                <label class="form-check-label" for="flexSwitchCheckDefault">Close Buy Now Button</label>
            </div>
        </div>
    </div>
    <script>
        $('#flexSwitchCheckDefault').change(function(e) {
            e.preventDefault();
            var value = $(this).is(':checked');
            $.ajax({
                type: "GET",
                url: "{{ route('post.site.setting') }}",
                data: {
                    value: value
                },
                success: function(response) {
                    console.log(response);
                    // toastr.success("Setting updated");
                }
            });
        });
    </script>
@endsection
