@foreach($data as $title)
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="{{asset($title->notes)}}" height="100%" width="100%">
    </iframe>
  </div>
@endforeach
    