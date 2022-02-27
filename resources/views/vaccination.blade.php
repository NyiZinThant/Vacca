@extends('layouts.app')

@section('content')
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Form</h1>
            <p class="lead fw-normal text-white-50 mb-0">Stay home, Stay Safe</p>
        </div>
    </div>
</header>
    <div class="container" style="height: auto">
        <div class="row  justify-content-center align-items-center">
            <div class="col-12">
                <div class="bg-white p-3 pb-5 mt-4 mb-4">
                    <h4 class="text-center my-4 fw-bold">Vaccination Form</h4>
                    @if ($errors->any())
                        <div class="alert alert-warning">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('vaccine.submit') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" id="floatingName" placeholder="Name" name="name">
                            <label for="floatingName">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" id="floatingInput" placeholder="name@example.com" name="email">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" name="age" value="{{ old('age') }}"
                                class="@error('age') is-invalid @enderror form-control mb-3" min="15">
                            <label for="floatingNrc">Age</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="address"
                                class="@error('address') is-invalid @enderror form-control mb-3">{{ old('address') }}</textarea>
                            <label for="floatingNrc">Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('nrc') is-invalid @enderror"
                                value="{{ old('nrc') }}" id="floatingNrc" name="nrc" placeholder="name@example.com">
                            <label for="floatingNrc">Nrc Number</label>
                        </div>
                        <select name="vaccine_id" class="form-control @error('vaccine_id') is-invalid @enderror">
                            <option value="" selected disabled>Select Vaccine</option>
                            @foreach ($vaccines as $vaccine)
                                <option value="{{ $vaccine->id }}" {{ old('vaccine_id') ? 'selected' : '' }}>
                                    {{ $vaccine->name }}</option>
                            @endforeach
                        </select>
                        <div class="mt-2">
                            <input type="checkbox" name="rule" id="rule">
                            <label for="rule" class="d-inline">Agree the <small type="button"
                                    class="text-primary rule" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">Rules</small></label>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia odit similique
                                            magni ex adipisci consectetur necessitatibus aspernatur enim autem. Vero
                                            cupiditate assumenda quis iure libero exercitationem, culpa esse provident
                                            accusamus.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dolorum quis
                                            veritatis fugiat numquam. Ullam similique optio vitae sint. Rem consectetur
                                            deserunt pariatur maxime nesciunt doloremque ab nobis praesentium officia.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-secondary d-block mt-2" value="Submit" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
