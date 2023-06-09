@props(["blogs","currentCategory","categories"])
<section class="container text-center" id="blogs">
    <h1 class="display-5 fw-bold mb-4">Blogs</h1>
    <div class="">
        <div class="dropdown">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ isset($currentCategory) ? $currentCategory->name : "Filter by Category" }}
            </button>
            <ul class="dropdown-menu">
                @foreach($categories as $category)
                <li><a class="dropdown-item" href="/categories/{{$category->slug}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <form action="" class="my-3">
        <div class="input-group mb-3">
            <input type="text" value="{{request('search')}}" name="search" autocomplete="false" class="form-control" placeholder="Search Blogs..." />
            <button class="input-group-text bg-primary text-light" id="basic-addon2" type="submit">
                Search
            </button>
        </div>
    </form>









    
    <div class="row">
        @forelse($blogs as $blog)
        <div class="col-md-4 mb-4">
            <x-blog-card :blog="$blog" />
        </div>
        @empty
        <p class=" text-center">No Blog Found.</p>
        @endforelse
    </div>
</section>