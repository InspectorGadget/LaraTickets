@extends ('layouts.user')

@section('title', 'New Ticket')

@section('content')
    <div class="grid">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-group">
                    <label for="select">Category:</label>
                    <select class="form-control" name="category" id="select" required>
                        <option value="">Please select</option>
                        @foreach (\App\Category::all() as $category)
                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    <br>

                    <label for="title">Title:</label>
                    <input id="title" name="title" class="form-control" placeholder="Title of your Ticket" required>

                    <br>

                    <label for="textarea">Message:</label>
                    <textarea id="textarea" name="message" class="form-control" rows="3" placeholder="Message.." required></textarea>

                    <hr />

                    <button type="submit" class="btn btn-success">Create Ticket &check;</button>
                </form>
            </div>
        </div>
    </div>
@stop
