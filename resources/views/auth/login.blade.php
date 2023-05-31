@extends('layouts.main')

@section("content")
<div class="shadow-sm border loginPage col-lg-5  mx-auto">
    <h4 class="text-center">Login</h4>
    <form class="mt-5">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control loginInput" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control passwordInput" id="exampleInputPassword1">
        </div>
        <div class="col-lg-12 text-center">
            <button type="submit" class="w-50 btn btn-primary mt-4">Login</button>
        </div>
    </form>
</div>

<script>
    const loginProcess = (e) =>{
        e.prevent.default()
        console.log("test")

        return false;
    }


</script>

@endsection