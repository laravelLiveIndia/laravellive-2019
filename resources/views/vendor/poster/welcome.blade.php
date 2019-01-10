@extends('multiauth::layouts.app') 

@section('content')
<div class="container">
    <div class="col-6 offset-3 mt-4">
        <div class="card">
            <div class="card-body">
                @include('poster::includes.flash')
                <h3>Publish Posts at Once</h3>
                <form method="post" action="{{ route('poster.send') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="content">Content of Post</label>
                        <textarea id="content" class="form-control" rows="5" placeholder="Write something to post" name="content"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" accept="image/x-png,image/gif,image/jpeg" name="image" class="custom-file-input"
                                id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose
                                image if any</label>
                        </div>
                    </div>
                    <div class="form-group">
                        Send Via :
                    </div>
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" value="twitter" id="twitter" name="via[]">
                        <label class="form-check-label" for="twitter">Twitter</label>
                    </div>
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" value="facebook" id="facebook" name="via[]">
                        <label class="form-check-label" for="facebook">Facebook</label>
                    </div>
                    
                    {{-- <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" value="flock" id="flock" name="via[]">
                        <label class="form-check-label" for="facebook">Flock</label>
                    </div> --}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        <a href={{ route('poster.show') }} class="btn btn-sm btn-info float-right">Show All</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
