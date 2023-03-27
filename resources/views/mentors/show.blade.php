@extends('layouts.app')

@section('content')
<h1>{{ $mentor->name }}</h1>
<p>{{ $mentor->description }}</p>
<p>{{ $mentor->email }}</p>
<!-- <a href="#" data-toggle="modal" data-target="#requestModal">Apply to Mentor</a> -->
<!-- <button id="myBtn">Open Modal</button>
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyModalLabel">Apply for access to {{ $mentor->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('mentor.apply', $mentor->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="reason">Why do you want to study under {{ $mentor->name }}?</label>
                        <textarea class="form-control" id="reason" name="reason" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Apply</button>
                </form>
            </div>
        </div>
    </div>

</div>
<script>
    var modal = document.getElementById("myModal");

    var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script> -->
<img src="{{ asset('storage/' . ($mentor->avatar ?? 'img/gallery/user.jpg')) }}" alt="Avatar">
<img src="{{ asset('storage/' . ($mentor->cover ?? 'img/gallery/cover.jpg')) }}" alt="Cover Photo">
<h2>Apply to {{ $mentor->name }}</h2>

<form method="post" action="{{ route('applications.store') }}">
    @csrf

    <input type="hidden" name="mentor_id" value="{{ $mentor->id }}">

    <div class="form-group">
        <label for="reason">Why do you want to study with this mentor?</label>
        <textarea id="reason" name="reason" class="form-control">{{ old('reason') }}</textarea>

        @error('reason')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyModalLabel">Apply for access to {{ $mentor->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('mentor.apply', $mentor->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="reason">Why do you want to study under {{ $mentor->name }}?</label>
                        <textarea class="form-control" id="reason" name="reason" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div> -->
<!-- Button trigger modal -->
@endsection