<div class="py-4" style="background-color: #15e8ff">
    <div class="container py-2">
        <div class="row text-white align-items-center">
            <div class="col-lg-4 col-12" style="color:#125259;">
                <h1>SIGN UP TO OUR NEWSLETTER</h1>
                <p>Get important messages straight it your inbox</p>
                <form action="{{ route('subscribe.news.letter') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" id="exampleInputPassword1"
                                style="background-color: #15e8ff; border:none;border-bottom: 3px solid #125259;"
                                placeholder="Email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">I accept all the Terms and
                                Conditions</label>
                        </div>
                    </div>
                    <button class="btn w-100 rounded-4 text-white" type="submit"
                        style="background: #125259">Submit</button>
                </form>
            </div>
            <div class="col-lg-1 col-0"></div>
            <div class="col-lg-7 col-12">
                <img src="{{ asset('images/section-7-image.png') }}" alt="" class="img-fluid w-100">
            </div>

        </div>
    </div>
</div>
