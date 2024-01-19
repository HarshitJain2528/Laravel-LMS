@include('student.layout.header')
<div class="site-section-cover overlay" style="background-image: url('../student/images/hero_bg.jpg');"> 
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 text-center">
                <h1><strong>Reviews</strong></h1>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading mb-4">
                    <h2>My Reviews</h2>
                </div>
                <!-- Review Form -->
                <div class="card-body" style="width:100%" >
                    <div class="list-group">
                        @foreach($reviews as $review)
                        <div class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <small><i class="fas fa-bell mr-2 text-warning"></i>{{$review->created_at}}</small>
                            </div>
                            <p class="mb-1">{{$review->review}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <form method="post" action="{{route('submitReviews')}}">
                    @csrf
                    <div class="form-group">
                        <label for="review">Write Your Review:</label>
                        <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Review</button>
                </form>
            </div>
        </div>
    </div>
</div>
<hr>
@include('student.layout.footer')
